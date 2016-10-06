<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

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

        dd($members);
    }
}
