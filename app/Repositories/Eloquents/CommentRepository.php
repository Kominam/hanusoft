<?php
// app/Repositories/Eloquents/ProductRepository.php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\CommentRepositoryInterface;
use App\Post;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;

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
            return redirect('/')->withErrors($validator)->withInput();
        }
    	$comment= Comment::create(['name' => $request->name, 
    								'content' => $request->content, 
    								'email' => $request->email
                    ]);
    	//Define author for this project
      $comment->post_id = $request->post_id;
    	
    	$comment->save();
    }

   
    public function delete($id) {
    	return Comment::destroy($id);
    }


}