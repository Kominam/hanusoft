<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Group;

class GroupController extends Controller
{
    //
    //
     //Add
    public function showAddForm() {
    	//return form to add new group
    }
    public function add(Request $request) {
      //missing validator 
    	$group = new Group;
    	// get attrubute from request include name and description
      $group->name = $request->name;
      $group->description = $request->description;
      $group->lang_code_id = $request->lang_code_id;
      //save
    	$group->save();
    	// return to list page
    }

   	//EDIT

   	public function showEditForm($id) {
   		$group = Group:: find($id);
   		return view ('', compact('group','id'));
   	}

   	public function edit(Request $request, $id) {
   		$group= Group:: find($id);
   		// set new value for attribute of this project
      $group->name = $request->name;
      $group->description = $request->description;
      $group->lang_code_id = $request->lang_code_id;
      //save
   		$group->save();
   		// return to list page
   	}

   	public function delete($id) {
   		$group= Group:: find($id);
   		$group->delete();
   		//return to list
   	}
}
