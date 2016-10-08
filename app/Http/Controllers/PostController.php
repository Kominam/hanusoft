<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

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
      return view('frontend.pages.post_detail',['post'=>$post]);
    }
    //Add
    public function showAddForm() {
    	//return form to add new group
    }
    public function add(Request $request) {
         $this->postRepository->create($request);
    }
    

   	//EDIT

   	public function showEditForm($id) {
   		$post = Post:: find($id);
   		return view ('', compact('post','id'));
   	}

   	public function edit(Request $request, $id) {
   		  $this->postRepository->update($request, $id);
   	}

   	public function delete($id) {
   		$this->postRepository->delete($id);
   	}

     public function filterByCategory($id) {
        $posts = $this->postRepository->filterByCategory($id);
        return view('frontend.pages.posts', ['posts' => $posts]);
     }
}
