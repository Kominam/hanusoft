<?php

namespace App\Repositories\Contracts;
use Illuminate\Http\Request;

use App\Http\Requests;

interface TodoItemRepositoryInterface
{
	public function find($id);
    public function create(Request $request);
    public function update(Request $request, $id);
    public function delete($id);
}