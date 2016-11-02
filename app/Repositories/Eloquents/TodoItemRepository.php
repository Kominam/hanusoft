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
        $assigned_member->notify(new AssignNewTask($project->id, $project->name, $todo_item->content, $todo_item->due_date, $todo_item->status, Auth::user()->id, Auth::user()->name));
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
      /*foreach ($assigned_members as $assigned_member) {
        $assigned_member->todo_items()->attach($todo_item->id,['status' => 'On queue']);
        notfiy
        $mem_in_project->notify(new AddNewState($project->id, $project->name, $state->content, $state->due_date, $state->status, Auth::user()->id, Auth::user()->name));
      }*/
       foreach ($todo_item->users as $belonged_member) {
            $belonged_member->notify(new UpdateTask($project->id, $project->name, $todo_item->id, $todo_item->content, $todo_item->due_date, $todo_item->status, Auth::user()->id, Auth::user()->name));
          }
      return $todo_item;
    }

   
    public function delete($id) {
      $todo_item = TodoItem::find($id);
      if ($todo_item) {
          $project = $todo_item->project;
          foreach ($todo_item->users as $belonged_member) {
            $belonged_member->notify(new DeleteTask($project->id, $project->name, $todo_item->id, $todo_item->content, $todo_item->due_date, $todo_item->status, Auth::user()->id, Auth::user()->name));
          }
      }
      return TodoItem::destroy($id);
    }


}