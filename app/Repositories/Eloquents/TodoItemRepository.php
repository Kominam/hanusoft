<?php
// app/Repositories/Eloquents/ProductRepository.php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\TodoItemRepositoryInterface;
use App\Project;
use App\TodoItem;
use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use Event;
use Auth;
use App\Notifications\AssignNewTask;
use App\Notifications\UpdateTask;
use App\Notifications\DeleteTask;
use App\Notifications\MarkTaskDone;
use Notifications;
use App\User;

class TodoItemRepository implements TodoItemRepositoryInterface
{
    public function find($id) {
      return TodoItem::find($id);
    }
    public function create(Request $request){
      $project = Project::find($request->project_id);
    	$todo_item = new TodoItem ;
      $todo_item->content = $request->content;
      $todo_item->due_date = $request->due_date;
      $todo_item->project_id = $request->project_id;
      $todo_item->save();
      $todo_id = $todo_item->id;
      foreach ($request->assigned_members as $assigned_member_id) {
        $assigned_member = User::find($assigned_member_id);
        $assigned_member->todo_items()->attach($todo_id,['status'=>'On queue']);
        //notfiy
        $assigned_member->notify(new AssignNewTask($project->id, $project->name,$project->slug, $todo_item->content, $todo_item->due_date, $todo_item->status, Auth::user()->id, Auth::user()->name));
      }
      return $todo_item;
    }

    public function update(Request $request) {
      $todo_item = TodoItem::find($request->id);
      $project = $todo_item->project;
      $todo_item->content = $request->content;
      $todo_item->due_date = $request->due_date;
      $todo_item->project_id = $request->project_id;
      $todo_item->save();
      /*$initial_collection = collect([]);
      foreach ($todo_item->users as $intial_mem) {
        $initial_collection->push($intial_mem->id);
      }
      $diff = $initial_collection->diff($request->new_assigned_members);
      foreach ($diff->all() as $elem) {
        if ($initial_collection->contains($elem)) {
          $todo_item->users()->detach($elem);
        } else {
           $todo_item->users()->attach($elem);
        }
      }*/
       foreach ($todo_item->users as $belonged_member) {
            $belonged_member->notify(new UpdateTask($project->id, $project->name,$project->slug, $todo_item->id, $todo_item->content, $todo_item->due_date, $todo_item->status, Auth::user()->id, Auth::user()->name));
          }
      return $todo_item;
    }

   
    public function delete($id) {
      $todo_item = TodoItem::find($id);
      if ($todo_item) {
          $project = $todo_item->project;
          foreach ($todo_item->users as $belonged_member) {
            $belonged_member->notify(new DeleteTask($project->id, $project->name,$project->slug, $todo_item->id, $todo_item->content, $todo_item->due_date, $todo_item->status, Auth::user()->id, Auth::user()->name));
          }
      }
      return TodoItem::destroy($id);
    }

    public function markAsDone($id) {
      $todo_item = TodoItem::find($id);
      $project = $todo_item->project;
      foreach ($todo_item->users as $belonged_member) {
           $todo_item->users()->updateExistingPivot($belonged_member->id,['status'=>'Done']);
      }
      $todo_item->save();
      //send notfication to your partner
     foreach ($todo_item->users as $belonged_member) {
      if ($belonged_member->id != Auth::user()->id) {
         $belonged_member->notify(new MarkTaskDone($project->id, $project->name,$project->slug, $todo_item->id, $todo_item->content, $todo_item->due_date,Auth::user()->id, Auth::user()->name));
        }
      }
      //send notfication to leadership of this project
      foreach ($project->users as $mem_in_project) {
         if ($mem_in_project->position->name == 'Leadership') {
         $mem_in_project->notify(new MarkTaskDone($project->id, $project->name,$project->slug, $todo_item->id, $todo_item->content, $todo_item->due_date,Auth::user()->id, Auth::user()->name));
        }
      } 
    }


}