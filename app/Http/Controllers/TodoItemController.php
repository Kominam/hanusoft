<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Repositories\Contracts\TodoItemRepositoryInterface;

class TodoItemController extends Controller
{
    protected $todoItemRepository;

    public function __construct(TodoItemRepositoryInterface $todoItemRepository)
    {
        $this->todoItemRepository= $todoItemRepository;
    }
    public function create(Request $request) {
    	$new_todo_item = $this->todoItemRepository->create($request);
    	return response()->json($new_todo_item);
    }
     public function update(Request $request) {
    	$updated = $this->todoItemRepository->update($request);
    	return response()->json($updated);
    }
    public function delete($id) {
        $this->todoItemRepository->delete($id);
    }
}

