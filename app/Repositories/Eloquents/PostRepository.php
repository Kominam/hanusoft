<?php
// app/Repositories/Eloquents/ProductRepository.php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\PostRepositoryInterface;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;

class PostRepository implements PostRepositoryInterface
{

    public function all()
    {

        return Post::paginate(5);
    }

    public function find($id)
    {
        return Post::find($id);
    }

    
    public function create(Request $request){
    	 $messages = [
               'tittle.required'=>'Enter the tittle for this post',
               'tittle.unique'=>'This tittle is already existing',
               'content.required'=>'Enter the content for this project',
               'img_cover.required'=>'Enter the URL demo for this project'
        ];
        $validator = Validator:: make($request->all(),[
              'tittle'=>'required|unique:posts,tittle',
              'content'=>'required',
              'img_cover'=>'required|file|image|mimes:jpeg,jpg',
        ], $messages);
        if ($validator->fails()) {
            return redirect('/')->withErrors($validator)->withInput();
        }
    	$post= Post::create(['tittle' => $request->tittle, 
    								'content' => $request->content, 
    								'img_cover' => $request->img_cover
                    ]);
    	//Define author for this project
    	$post->user_id= $request->user_id;
    	
    	$post->save();
    }

    public function update(Request $request, $id){
     $messages = [
               'tittle.required'=>'Enter the tittle for this post',
               'tittle.unique'=>'This tittle is already existing',
               'content.required'=>'Enter the content for this project',
               'img_cover.required'=>'Enter the URL demo for this project'
        ];
        $validator = Validator:: make($request->all(),[
              'tittle'=>'required|unique:posts,tittle,'.$id,
              'content'=>'required',
              'img_cover'=>'required|file|image|mimes:jpeg,jpg',
        ], $messages);
        if ($validator->fails()) {
            return redirect('/')->withErrors($validator)->withInput();
        }
        $post =Post::find($id);
        $post->tittle = $request->tittle;
        $post->content = $request->content;
        $post->img_cover = $request->img_cover;
        //Save
       $post->save();
    }

    public function delete($id) {
    	return Post::destroy($id);
    }


}