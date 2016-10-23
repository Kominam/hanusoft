<?php
// app/Repositories/Eloquents/ProductRepository.php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\MemberRepositoryInterface;
use App\Project;
use App\Skill;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use Auth;
use Image;

class MemberRepository implements MemberRepositoryInterface
{

    public function all()
    {
        return User::all();
    }

    public function find($id)
    {
        return User::find($id);
    }

    public function defineSkill($skills, $user) {
    		$user->skills()->attach($skills);
    		$user->save();
    }

    public function removeSkill($skills, $user) {
    		$user->skills()->detach($skills);
    		$user->save();
    }

    public function removeAllSkill() {
    		$user->skills()->detach();
    		$user->save();
    }

    public function assignToProjects($users, $project) {
        $user->projects()->attach($project);
    	$user->save();
    }
    public function unassignToProjects($users, $project) {
    	$user->projects()->detach($project);
        $user->save();
    }

 

    public function update(Request $request, $id){
    	//Do update
    }
    public function changePwd(Request $request) {
        $member = User:: find(Auth::user()->id);
        $member->password = bcrypt($request->n_pwd);
        if ($request->file('AvtImgFile')->isValid()) {
            $avtImg = $request->file('AvtImgFile');
            $filename  =  time().$avtImg->getClientOriginalName().'.' . $avtImg->getClientOriginalExtension();
            $path = public_path('frontend/img/team/' . $filename);
            Image::make($avtImg->getRealPath())->resize(585, 585)->save($path);
            $member->url_avt = $filename;
            $member->save();
        }
        $member->save();
    }

}