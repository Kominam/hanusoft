<?php
// app/Repositories/Eloquents/ProductRepository.php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\ProjectRepositoryInterface;
use App\Project;
use App\Skill;
use App\User;
use App\ProjectResource;
use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use App\Invitation;
use Auth;
use App\Notifications\InvitetoProject;
use Notifications;
use DB;
use File;
use Khill\Lavacharts\Lavacharts;
use Lava;

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

    public function findBySlug($slug) {
      return Project::findBySlugOrFail($slug);
    }

    public function findRelated($id, $type_id) {
      return Project::where('id','!=',$id)->where('type_id','=', $type_id)->get();
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

    public function validatorNew(Request $request) {
        $messages = [
               'name.required'=>'Enter the name for this project',
               'name.unique'=>'This name is already existing',
               'description.required'=>'Enter the description for this project',
               'link_preview.url'=>'This link is not correct',
               'link_preview.unique'=>'This link is used for another project',
               'skills.required' => 'Choose at lease one nesccesay skill',
               'project_cate_id.required' => 'Choose type of this project'
        ];
        $validator = Validator:: make($request->all(),[
              'name'=>'required|unique:projects,name',
              'description'=>'required',
              'link_preview'=>'url|unique:projects,link_preview',
              'skills' => 'required',
              'project_cate_id' => 'required'
        ], $messages);
        return $validator;
    }
    public function validatorUpdate(Request $request) {
        $messages = [
               'name.required'=>'Enter the name for this project',
               'name.unique'=>'This name is already existing',
               'description.required'=>'Enter the description for this project',
               'link_preview.url'=>'This link is not correct',
               'link_preview.unique'=>'This link is used for another project',
               'skills.required' => 'Choose at lease one nesccesay skill',
               'type_id.required' => 'Choose type of this project'
        ];
        $validator = Validator:: make($request->all(),[
              'name'=>'required|unique:projects,name,'.$id,
              'description'=>'required',
              'link_preview'=>'url|unique:projects,link_preview,'.$id,
              'skills' => 'required',
              'type_id' => 'required'
        ], $messages);
        return $validator;
    }

    public function create(Request $request){
    	 $project= new Project;
       $project->name = $request->name;
       $project->description = $request->description;
       $project->start_date = $request->start_date;
       $project->plan_end_date = $request->plan_end_date;
       $project->link_github = $request->link_github;
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
                $inviter->notify(new InvitetoProject(Auth::user()->name,$project->name,$project->slug, Auth::user()->id, $project->id));
              }
        }
      //Attach the leadership who have create project
      $this->assignMember(Auth::user()->id,$project);
      $project->save();
      //Return 
      return $project;
    }

    public function update(Request $request, $id){
    	$project = Project::find($id);
    	$project->name = $request->name;
    	$project->description = $request->description;
    	$project->link_preview = $request->link_preview;
    	$project->type_id = $request->type_id;
    	$project->save();
      return $project;

    }

    public function delete($id) {
    	return Project::destroy($id);
    }
    public function countAll(){
      return Project::count();
    }

    public function invite(Request $request) {
      $new_invitation = Invitation::firstOrCreate(['leadership_id' => Auth::user()->id, 'project_id' => $request->project_id]);
      $new_invitation->save();
      $project=Project::find($request->project_id);
      foreach ($request->inviters as $inviter_id) {
        $inviter = User::find($inviter_id);
        $inviter->invitations()->attach($new_invitation->id);
        $inviter->save();
        $inviter->notify(new InvitetoProject(Auth::user()->name,$request->project_name,$project->slug, Auth::user()->id, $request->project_id));
      }
    }

    public function handleInvitation(Request $request) {
      //response = 0 -> on queue
      //response =1 -> accpet
      //reposnse =2 -> decline
      $response = $request->response;
      $user = Auth::user();
      $invitation = Invitation::where('project_id','=', $request->project_id)->first();
      $project = Project::find($request->project_id);
      //change the respon of invitation_user
      if ($response=='accept') {
        //Change response to 1
        $user->invitations()->updateExistingPivot($invitation->id,['response'=>1]);
        //assgin member to project
        $this->assignMember(Auth::user()->id,$project );
        //Mark as read
        $notification = $user->notifications()->where('id',$request->noti_id)->first();
        if ($notification)
        {
            $notification->markAsRead();
        }
        return 'Assign Ok';
        } else if ($response=='decline') {
        //Change response in invitation_user 
        $user->invitations()->updateExistingPivot($invitation->id,['response'=>2]);
        //Mark as read
        $notification = $user->notifications()->where('id',$request->noti_id)->first();
        if ($notification)
        {
            $notification->markAsRead();
        }
        return 'decline ok';
        } else if ($response=='hide') {
        //Mark as read
        $notification = $user->notifications()->where('id',$request->noti_id)->first();
        if ($notification)
        {
            $notification->markAsRead();
        }
      }
    }

    public function canInvinteMember($id) {
      $project = Project:: find($id);
      $temp = $project->users;
      $mem_in_project= $temp->pluck('id')->all();
      $invitation = DB::table('invitations')->where('project_id','=', $id)->pluck('project_id')->all();
      $total1 = array_merge($mem_in_project,$invitation);
      $on_handle_mem_for_this_project = DB::table('invitation_user')->whereIn('invitation_id', $invitation)->pluck('user_id')->all();
      $total= array_merge( $total1, $on_handle_mem_for_this_project);
      $can_invite_mem = User::whereNotIn('id', $total)->get();
      return $can_invite_mem;
    }

    public function chart($slug) {
    $project = $this->findBySlug($slug);
    $taskchart = Lava::DataTable();

    $taskchart->addStringColumn('Member')
             ->addNumberColumn(' Done')
             ->addNumberColumn('Not Yet');
    foreach ($project->users as $member) {
    $total_task = $member->todo_items->where('project_id','=', $project->id)->count();
    $task_done =  $member->todo_items()->wherePivot('status','Done')->where('project_id','=', $project->id)->count();
    $task_not_done = $total_task-$task_done;
     $taskchart->addRow([$member->name,$task_done, $task_not_done]);
    }
    Lava::ColumnChart('TaskChart', $taskchart, [
        'title' => 'Member Task',
        'titleTextStyle' => [
            'color'    => '#eb6b2c',
            'fontSize' => 14
        ]
    ]);
    }

    public function CompleteChart($slug) {
       $project = $this->findBySlug($slug);
       $reasons = Lava::DataTable();

       $total = $project->todo_items()->count();
       $completed=0;
       $todo_items = $project->todo_items->pluck('id')->all();
        if($total!=0) {
            $completed = DB::table('todo_item_user')->whereIn('todo_item_id', $todo_items)->where('status','Done')->count();
        }
        $not_completed = $total-$completed;
      $reasons->addStringColumn('Reasons')
        ->addNumberColumn('Percent')
        ->addRow(['Completed', $completed])
        ->addRow(['Non-completed', $not_completed]);

      Lava::DonutChart('IMDB', $reasons, [
          'title' => 'Progress'
    ]);
    }
}
