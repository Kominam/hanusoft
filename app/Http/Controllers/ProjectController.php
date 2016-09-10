<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProjectController extends Controller
{
    //Add
    public function showAddForm() {
    	//return form to add new group
    }
    public function add(Request $request) {
    	$project = new Project;
    	// get attrubute from request






    	$project->save();
    	// return to list page
    }

   	//EDIT

   	public function showEditForm($id) {
   		$project = Project:: find($id);
   		return view ('', compact('project','id'));
   	}

   	public function edit(Request $request, $id) {
   		$project = Project:: find($id);
   		// set new value for attribute of this project



   		$project->save();
   		// return to list page
   	}

   	public function delete($id) {
   		$project= Project:: find($id);
   		$project->delete();
   		//return to list
   	}

}
