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

    public function show($slugString) {
      $post = $this->postRepository->find($slugString);
      $arr_cmt_id = $this->postRepository->getArrCommentID($slugString);
      return view('frontend.pages.post_detail',['post'=>$post, 'arr_cmt_id' =>$arr_cmt_id]);
    }
    //Add New Post
    public function showAddForm() {
    	return view('backend.pages.write-post');
    }
    public function add(Request $request) {
         $validator = $this->postRepository->validatorNew($request);
         if ($validator->fails()) {
            return back()->withErrors($validator)->withInput()->with('statusCreate','error');
         } else {
             $this->postRepository->create($request);
             return redirect()->route('post.your-post')->with('statusCreate','success');
         }  
    }
   	//EDIT

   	public function showEditForm($slug) {
   		$post = Post::findBySlugOrFail($slug);
   		return view ('backend.pages.edit-post', compact('post','slug'));
   	}

   	public function edit(Request $request, $slug) {
       $validator = $this->postRepository->validatorNew($request);
         if ($validator->fails()) {
            return back()->withErrors($validator)->withInput()->with('statusEdit','error');
         } else {
            $this->postRepository->update($request, $slug);
            return redirect()->route('post.your-post')->with('statusEdit','success');
         }
   	}

   	public function delete($id) {
   		$this->postRepository->delete($id);
      return redirect()->route('post.your-post')->with('statusDelete','success');
   	}

     public function filterByCategory($slugCategory) {
        $posts = $this->postRepository->filterByCategory($slugCategory);
        return view('frontend.pages.posts', ['posts' => $posts]);
     }

     public function showYourPost() {
      $posts_of_cur_user = Auth::user()->posts()->paginate(5);
      return view('backend.pages.your-post', ['posts_of_cur_user' => $posts_of_cur_user]);
     }

     public function search(Request $request) {
      $results = $this->postRepository->search($request);
      return view('frontend.pages.search_post_result',['results'=>$results]);
     }    
}
