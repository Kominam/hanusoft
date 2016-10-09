<?php
// app/Repositories/Eloquents/ProductRepository.php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\ReplyCommentRepositoryInterface;
use App\ReplyComment;
use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use Event;
use App\Events\SomeOneReplyComment;

class ReplyCommentRepository implements ReplyCommentRepositoryInterface
{
    public function create(Request $request){
    	 $messages = [
               'name.required'=>'Enter the name for this post',
               'content.required'=>'Enter the content ',
               'email.required'=>'Enter the email demo '
        ];
        $validator = Validator:: make($request->all(),[
              'name'=>'required',
              'email'=>'required',
              'content'=>'required',
        ], $messages);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $reply_comment = new ReplyComment;
        $reply_comment->name = $request->name;
        $reply_comment->content = $request->content;

    	//Define author for this project
        $reply_comment->comment_id = $request->comment_id;
    	
    	  $reply_comment->save();

        Event::fire(new SomeOneReplyComment($reply_comment));

        return $reply_comment;
    }

   
    public function delete($id) {
    	return ReplyComment::destroy($id);
    }


}