<?php
// app/Repositories/Contracts/ProductRepositoryInterface.php

namespace App\Repositories\Contracts;
use Illuminate\Http\Request;

use App\Http\Requests;

interface CommentRepositoryInterface
{
    public function create(Request $request);
    public function delete($id);
}