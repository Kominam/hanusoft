<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Repositories\Contracts\ReplyCommentRepositoryInterface;

class ReplyCommentController extends Controller
{
    //
    protected $replyCommentRepository;

    public function __construct(ReplyCommentRepositoryInterface $replyCommentRepository)
    {
        $this->replyCommentRepository= $replyCommentRepository;
    }
    public function create(Request $request) {
    	$new_reply_comment = $this->replyCommentRepository->create($request);
    	return response()->json($new_reply_comment);
    }
}
