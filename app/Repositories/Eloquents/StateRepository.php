<?php
// app/Repositories/Eloquents/ProductRepository.php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\StateRepositoryInterface;
use App\State;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use Event;
use Auth;
use App\Notifications\AddNewState;
use Notifications;

class StateRepository implements StateRepositoryInterface
{
    public function find($id) {
      return State::find($id);
    }
    public function create(Request $request){
    	$state = new State;
      $state->content = $request->content;
      $state->due_date = $request->due_date;
      $state->status = $request->status;
      $state->project_id = $request->project_id;
      $state->save();
      $project=Project::find($request->project_id);
      foreach ($project->users as $mem_in_project) {
        $mem_in_project->notify(new AddNewState($project->id, $project->name, $state->content, $state->due_date, $state->status, Auth::user()->id, Auth::user()->name));
      }
      return $state;
    }

    public function update(Request $request) {
      $state = State::find($id);
      $state->content = $request->content;
      $state->due_date = $request->due_date;
      $state->status = $request->status;
      $state->project_id = $request->project_id;
      $state->save();
      return $state;
    }

   
    public function delete($id) {
      return State::destroy($id);
    }


}