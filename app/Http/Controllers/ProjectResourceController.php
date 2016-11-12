<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\Contracts\ProjectRepositoryInterface;

use App\ProjectResource;

use File;

use Validator;

class ProjectResourceController extends Controller
{
    protected $projectRepository;

    public function __construct(ProjectRepositoryInterface $projectRepository)
    {
        $this->projectRepository= $projectRepository;
    }

    public function validatorAdd(Request $request) {
    	$messages = [
               'resource_name.required'=>'Enter the name for this resource',
               'resource_file.required' => 'Choose the file to upload',
               'resource_file.size' => 'Max size for upload is 5MB'
        ];
        $validator = Validator:: make($request->all(),[
              'resource_name'=>'required',
              'resource_file'=>'required|size:5120',
        ], $messages);
        return $validator;
    }

     public function addResource(Request $request, $slug) {
     /*	if ($this->validatorAdd($request)) {
     		return back()->withErrors()->withInput()->with('statusAddResource','error');
     	} else {*/
     	   $project= $this->projectRepository->findBySlug($slug);
	       $new_resource = new ProjectResource();
	       $new_resource->name = $request->resource_name;
	       $new_resource->description = 'null';
	       $destinationPath = 'upload/project_resource';
	       $fileName = time().$request->file('resource_file')->getClientOriginalName().'.' . $request->file('resource_file')->getClientOriginalExtension();
	       $request->file('resource_file')->move($destinationPath, $fileName); 
	       $new_resource->url= $fileName;
	       $new_resource->project_id = $project->id;
	       $new_resource->save();
     	/*}*/
       
    }

    public function deleteResource($resource_id) {
       $resource = ProjectResource::findOrFail($resource_id);
       File::delete('upload/project_resource/'.$resource->url);
       $resource->delete();
    }
}
