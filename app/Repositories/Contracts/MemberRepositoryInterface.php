<?php
// app/Repositories/Contracts/ProductRepositoryInterface.php

namespace App\Repositories\Contracts;
use Illuminate\Http\Request;

use App\Http\Requests;

interface MemberRepositoryInterface
{
    public function all();
    public function update(Request $request, $id);
    public function find($id);
    public function changePwd(Request $request);
}