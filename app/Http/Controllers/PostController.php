<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

use Auth;

use App\Repositories\Contracts\PostRepositoryInterface;

class PostController extends Controller
{
    protected $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository= $postRepository;
    }
     public function index()
    {
      $posts = $this->postRepository->all();

       return view('frontend.pages.posts', ['posts' => $posts]);
    }

    public function show($id) {
      $post = $this->postRepository->find($id);
      $arr_cmt_id = $this->postRepository->getArrCommentID($id);
      return view('frontend.pages.post_detail',['post'=>$post, 'arr_cmt_id' =>$arr_cmt_id]);
    }
    //Add New Post
    public function showAddForm() {
    	return view('backend.pages.write-post');
    }
    public function add(Request $request) {
         $validator = $this->postRepository->validatorNew($request);
         if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
         } else {
             $this->postRepository->create($request);
             return redirect()->route('your-post');
         }
    }
   	//EDIT

   	public function showEditForm($id) {
   		$post = Post:: find($id);
   		return view ('backend.pages.edit-post', compact('post','id'));
   	}

   	public function edit(Request $request, $id) {
       $validator = $this->postRepository->validatorNew($request);
         if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
         } else {
            $this->postRepository->update($request, $id);
            return redirect()->route('your-post');
         }
   	}

   	public function delete($id) {
   		$this->postRepository->delete($id);
      return redirect()->route('your-post');
   	}

     public function filterByCategory($id) {
        $posts = $this->postRepository->filterByCategory($id);
        return view('frontend.pages.posts', ['posts' => $posts]);
     }

     public function showYourPost() {
      $posts_of_cur_user = Auth::user()->posts()->paginate(5);
      return view('backend.pages.your-post', ['posts_of_cur_user' => $posts_of_cur_user]);
     }
}
