<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Repositories\Contracts\CommentRepositoryInterface;
use Event;
use App\Events\CommentWasSent;


class CommentController extends Controller
{
    protected $commentRepository;

    public function __construct(CommentRepositoryInterface $commentRepository)
    {
        $this->commentRepository= $commentRepository;
    }
    public function create(Request $request) {
    	$new_comment = $this->commentRepository->create($request);
    	return response()->json($new_comment);
    }
}
