<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{
    //Add
    public function showAddForm() {
    	//return form to add new group
    }
    public function add(Request $request) {
    	$post = new Post;
    	// get attrubute from request




    	$post->save();
    	// return to list page
    }

   	//EDIT

   	public function showEditForm($id) {
   		$post = Post:: find($id);
   		return view ('', compact('post','id'));
   	}

   	public function edit(Request $request, $id) {
   		$post= Post:: find($id);
   		// set new value for attribute of this project



   		$post->save();
   		// return to list page
   	}

   	public function delete($id) {
   		$post= Post:: find($id);
   		$post->delete();
   		//return to list
   	}
}
