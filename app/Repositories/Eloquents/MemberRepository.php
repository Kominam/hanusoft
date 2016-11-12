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
use Redirect;
use Hash;
use File;

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

    public function findBySlug($slug) {
        return User::findBySlugOrFail($slug);
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

    public function validatorUpdate(Request $request) {
         $messages = [
               'name.required'=>'Enter your name',
               'name.unique'=>'This name is already existing',
        ];
        $validator = Validator:: make($request->all(),[
              'name'=>'required|unique:users,name,'.Auth::user()->id,
        ], $messages);
        return $validator;
    }

    public function update(Request $request){
    	$user = Auth::user();
        $user->name = $request->name;
        $user->address = $request->address;
        $user->gender = $request->gender;
        $user->position_id = $request->position_id;
        $user->phone = $request->phone;
        $user->grade_id  = $request->grade_id;
        $user->url_fb = $request->url_fb;
        $user->url_gmail = $request->url_gmail;
        $user->url_github = $request->url_github;
        $user->birthday = $request->birthday;
        $user->bio = $request->bio;
        $user->save();
    }
   
    public function validatorChangePwd(Request $request) {
          $messages = [
               'newPass.required'=>'Enter your new password',
               'newPass_confirmation.required'=>'Re-enter your new password',
               'newPass_confirmation.same' => 'New password and confirmed new password is not correct',
               'AvtImgFile.mimes' =>'We donot support this image mime'
        ];
        $validator = Validator:: make($request->all(),[
              'newPass'=>'required',
              'newPass_confirmation' => 'required|same:newPass',
              'AvtImgFile' => 'nullable|mimes:jpeg,png,jpg,gif,svg'
        ], $messages);
        return $validator;
    }
    public function checkCurrentPassword($currentPassword, $member) {
        return (Hash::check($currentPassword, $member->password));
    }
    public function changePwd(Request $request) {
        $member = Auth::user();
        $member->password = bcrypt($request->newPass);
        $member->save();
        if ($request->hasFile('AvtImgFile')) {
            if ($request->file('AvtImgFile')->isValid()) {
                if ($member->url_avt !='frontend/img/team/user_default.png') {
                    File::delete($member->url_avt);
                }
                $avtImg = $request->file('AvtImgFile');
                $filename  =  time().$avtImg->getClientOriginalName().'.' . $avtImg->getClientOriginalExtension();
                $path = public_path('frontend/img/team/' . $filename);
                Image::make($avtImg->getRealPath())->resize(585, 585)->save($path);
                $member->url_avt = 'frontend/img/team/'.$filename;
                $member->save();
            }
        }
        $member->save();
    }

}