<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use Auth;

use Notification;

use App\Notifications\TestNoti;

use App\Repositories\Contracts\MemberRepositoryInterface;

use Redirect;

class MemberController extends Controller
{
    protected $memberRepository;

    public function __construct(MemberRepositoryInterface $memberRepository)
    {
        $this->memberRepository= $memberRepository;
    }
     public function index()
    {
        $members = $this->memberRepository->all();

        return view('frontend.pages.members',['members' =>$members]);
    }
    public function show($id) {
        $member = $this->memberRepository->find($id);
        return view('frontend.pages.member_detail',['member' =>$member]);
    }
    public function profile() {
        $member = $this->memberRepository->find(Auth::user()->id);
        return view('backend.pages.profile',['member' =>$member]);
    }
    public function recent_activity() {
        $member = $this->memberRepository->find(Auth::user()->id);
        return view('backend.pages.profile-activity',['member' =>$member]);
    }
    public function showEditProfile() {
       $member = $this->memberRepository->find(Auth::user()->id);
       return view('backend.pages.profile-edit',['member' =>$member]);
    }
    public function editProfile(Request $request) {
         $validator = $this->memberRepository->validatorUpdate($request);
         if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
         } else {
             $this->memberRepository->update($request);
             return redirect()->route("profile.show");
         }   
    }
    public function changePwd(Request $request) {
         $validator = $this->memberRepository->validatorChangePwd($request);
         if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
         } else if (!$this->memberRepository->checkCurrentPassword($request->currentPassword, Auth::user())) {
            return back()->with('wrong_current_pass', 'This current password is not mactch.');
         }
          else {
             $this->memberRepository->changePwd($request);
             return redirect()->route('profile.show')->with('change_profile','OK');
         }
    }
}
