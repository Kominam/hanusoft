<?php
// app/Repositories/Eloquents/ProductRepository.php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\CommentRepositoryInterface;
use App\Post;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use Event;
use App\Events\CommentWasSent;

class CommentRepository implements CommentRepositoryInterface
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
      $comment= new Comment;
      $comment->name = $request->name;
      $comment->email = $request->email;
      $comment->content = $request->content;
    	//Define author for this project
      $comment->post_id = $request->post_id;
    	
    	$comment->save();

      Event::fire(new CommentWasSent($comment));

      return $comment;
    }

   
    public function delete($id) {
    	return Comment::destroy($id);
    }


}