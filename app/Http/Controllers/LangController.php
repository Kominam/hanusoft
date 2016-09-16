<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Language;

class LangController extends Controller
{
    //
    //Add
    public function showAddForm() {
    	//return form to add new group
    }
    public function add(Request $request) {
      $lang = new Language();
    	// get attrubute from request
      $lang->name = $request->name;
 
    	$lang->save();
    	// return to list page
    }

   	//EDIT

   	public function showEditForm($id) {
   		$lang = Language:: find($id);
   		return view ('', compact('lang','id'));
   	}

   	public function edit(Request $request, $id) {
   		$lang = Language:: find($id);
   		// set new value for attribute of this project
      $lang->name = $request->name;
 
    	$lang->save();
   		// return to list page
   	}

   	public function delete($id) {
   		$lang= Language:: find($id);
   		$lang->delete();
   		//return to list
   	}

}
