<?php
// app/Repositories/Eloquents/ProductRepository.php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\PostRepositoryInterface;
use App\Post;
use App\User;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use Auth;

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

    public function validatorNew(Request $request) {
        $messages = [
               'post_type_id.required'=>'Choose category for this post',
               'tittle.required'=>'Enter the tittle for this post',
               'tittle.unique'=>'This tittle is already existing',
               'content.required'=>'Enter the content for this post'
        ];
        $validator = Validator:: make($request->all(),[
              'post_type_id' => 'required',
              'tittle'=>'required|unique:posts,tittle',
              'content'=>'required'
        ], $messages);
        return $validator;
    }

    public function validatorUpdate(Request $request) {
        $messages = [
               'post_type_id.required'=>'Choose category for this post',
               'tittle.required'=>'Enter the tittle for this post',
               'tittle.unique'=>'This tittle is already existing',
               'content.required'=>'Enter the content for this post',
        ];
        $validator = Validator:: make($request->all(),[
              'post_type_id' => 'required',
              'tittle'=>'required|unique:posts,tittle,'.$id,
              'content'=>'required',
        ], $messages);
        return $validator;
    }


    public function create(Request $request){
            $post = new Post;
            $post->tittle = $request->tittle;
            $post->content = $request->content;
            $post->type_id = $request->post_type_id;
            $post->user_id= Auth::user()->id;
            $post->save();
    }

    public function update(Request $request, $id){
        $post =Post::find($id);
        $post->tittle = $request->tittle;
        $post->content = $request->content;
        $post->type_id= $request->post_type_id;
        //Save
        $post->save();
    }

    public function delete($id) {
    	return Post::destroy($id);
    }

    public function filterByCategory($id){
      return Post::where('type_id', '=', $id)->paginate(5);
    }

    public function getArrCommentID($id)  {
      $arr_cmt_id = Comment::where('post_id','=',$id)->pluck('id')->toArray();
      return $arr_cmt_id;
    }


}
