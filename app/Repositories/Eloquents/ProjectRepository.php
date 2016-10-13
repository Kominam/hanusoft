<?php
// app/Repositories/Eloquents/ProductRepository.php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\ProjectRepositoryInterface;
use App\Project;
use App\Skill;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use App\Invitation;
use Auth;
use App\Notifications\InvitetoProject;
use Notifications;

class ProjectRepository implements ProjectRepositoryInterface
{

    public function all()
    {
        return Project::all();
    }

    public function find($id)
    {
        return Project::find($id);
    }

    public function findRelated($id, $type_id) {
      return Project::where('id','!=',$id)->where('type_id','=', $type_id)->take(4)->get();
    }

    public function defineRequiredSkill($skills, $project) {
    		$project->skills()->attach($skills);
    		$project->save();
    }

    public function removeRequiredSkill($skills, $project) {
    		$project->skills()->detach($skills);
    		$project->save();
    }

    public function removeAllSkill() {
    		$project->skills()->detach();
    		$project->save();
    }

    public function assignMember($users, $project) {
    		$project->users()->attach($users);
    		$project->save();
    }
    public function unassignMember($users, $project) {
    		$project->users()->detach($users);
    		$project->save();
    }
    public function removeAllRelatedMemer() {
    		$project->users()->detach();
    		$project->save();
    }

    public function create(Request $request){
    	/* $messages = [
               'name.required'=>'Enter the name for this project',
               'name.unique'=>'This name is already existing',
               'description.required'=>'Enter the description for this project',
               'link_preview.url'=>'This link is not correct',
               'link_preview.unique'=>'This link is used for another project',
        ];
        $validator = Validator:: make($request->all(),[
              'name'=>'required|unique:projects,name',
              'description'=>'required',
              'link_preview'=>'url|unique:projects,link_preview',
        ], $messages);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }*/
    	 $project= new Project;
       $project->name = $request->name;
       $project->description = $request->description;
       if ($request->has('link_preview')) {
        $project->link_preview = $request->link_preview;
       }

    	$project->type_id= $request->project_cate_id;
      $project->save();
    	//Define skill
    	if ($request->has('skills')) {
        $this->defineRequiredSkill($request->skills, $project);
      }

    	//Invite for member (if avaialble)
    	if ($request->has('inviters')) {
              $new_invitation = Invitation::create(['leadership_id' => Auth::user()->id, 'project_id' => $project->id]);
              $new_invitation->save();
              foreach ($request->inviters as $inviter_id) {
                $inviter = User::find($inviter_id);
                $inviter->invitations()->attach($new_invitation->id);
                $inviter->save();
                $inviter->notify(new InvitetoProject(Auth::user()->name,$project->name, Auth::user()->id, $project->id));
              }
        }
      return redirect()->route('dashboard');
    }

    public function update(Request $request, $id){
    	$project = Project::find($id);
    	$messages = [
               'name.required'=>'Enter the name for this project',
               'name.unique'=>'This name is already existing',
               'description.required'=>'Enter the description for this project',
               'link_preview.required'=>'Enter the URL demo for this project',
               'link_preview.url'=>'This link is not correct',
               'link_preview.unique'=>'This link is used for another project'
        ];
        $validator = Validator:: make($request->all(),[
              'name'=>'required|unique:projects,name,'.$id,
              'description'=>'required',
              'link_preview'=>'required|url|unique:projects,link_preview,'.$id,
        ], $messages);
        if ($validator->fails()) {
            return redirect('/')->withErrors($validator)->withInput();
        }
    	$project->name = $request->name;
    	$project->description = $request->description;
    	$project->link_preview = $request->link_preview;
    	$project->type_id = $request->type_id;
    	$project->save();

    }

    public function delete($id) {
    	return Project::destroy($id);
    }
    public function countAll(){
      return Project::count();
    }

    public function invite(Request $request) {
        $invited_id = $request->invited_id;
        $new_invitation = Invitation::create(['leadership_id' => $request->invitor_id, 'project_id' => $request->project_id]);
        $new_invitation->save();
        $inviter = User::find($invited_id);
        $inviter->invitations()->attach($new_invitation->id);
        $inviter->save();
    }

    public function acceptInvite(Request $request) {
      $response = $request->response;
      //change the respon of invitation_user
      if ($response=='accept') {
        //assgin member to project
        $project = Project::find($request->project_id);
        $this->assignMember(Auth::user()->id,$project );
        /*$notification = Notifications::where('type','=','App\Notifications\InvitetoProject')->where('data["project_id"]', '=',$request->project_id)->first();
        $notification->markAsRead();*/
        /*$spec_noti = DB::table('notifications')->where('type','=','App\Notifications\InvitetoProject')->where('notifiable_id', Auth::user()->id)->where('data["project_id"]', '=',$request->project_id)->first();
        $spec_noti->markAsRead();*/
        return 'Assign Ok';
      }
      else if ($response=='decline') {
        //delte invitation
        $member= User::find(Auth::user()->id);
        $invitation = Invitation::where('project_id','=', $request->project_id)->first();
        $member->invitations()->detach($invitation->id);
        return 'decline ok';
      }
    }
}
