<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Subcriber;

class SubcriberController extends Controller
{
    public function addNewSubcriber(Request $request) {
    	$new_subcriber = Subcriber::create(['email'=>$request->email]);
    	$new_subcriber->save();
    	return response()->json($new_subcriber);
    }
}
