<?php
// app/Repositories/Eloquents/ProductRepository.php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\ReplyCommentRepositoryInterface;
use App\ReplyComment;
use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;

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
            return redirect('/')->withErrors($validator)->withInput();
        }
    	$reply_comment= ReplyComment::create(['name' => $request->name, 
    								'content' => $request->content, 
    								'email' => $request->email
                    ]);
    	//Define author for this project
      $comment->comment_id = $request->comment_id;
    	
    	$comment->save();
    }

   
    public function delete($id) {
    	return ReplyComment::destroy($id);
    }


}