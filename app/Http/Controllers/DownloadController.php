<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
     public function downloadResourceProject($fileName) {
        return response()->download('upload/project_resource/'.$fileName);
    }
}
