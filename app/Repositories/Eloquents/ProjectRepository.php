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
    	 $messages = [
               'name.required'=>'Enter the name for this project',
               'name.unique'=>'This name is already existing',
               'description.required'=>'Enter the description for this project',
               'link_preview.required'=>'Enter the URL demo for this project',
               'link_preview.url'=>'This link is not correct',
               'link_preview.unique'=>'This link is used for another project',
        ];
        $validator = Validator:: make($request->all(),[
              'name'=>'required|unique:projects,name',
              'description'=>'required',
              'link_preview'=>'required|url|unique:projects,link_preview',
        ], $messages);
        if ($validator->fails()) {
            return redirect('/')->withErrors($validator)->withInput();
        }
    	$project= Project::create(['name' => $request->name, 
    								'description' => $request->description, 
    								'link_preview' => $request->link_preview]);
    	//Define type for this project
    	$project->type_id= $request->type_id;
    	//Define skill
    	defineRequiredSkill($request->skills, $project);
    	//Assign for member (if avaialble)
    	if ($request->has('member')) {
           assignMember($request->members, $project);
        }
    	$project->save();
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


}