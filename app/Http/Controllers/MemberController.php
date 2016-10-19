<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use Auth;

use App\Repositories\Contracts\MemberRepositoryInterface;

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
        $id = Auth::user()->id;
        return view('backend.pages.profile-edit', ['id'=>$id]);
    }
    public function editProfile(Request $request, $id) {
        $this->memberRepository->update($request, $id);
    }
}
