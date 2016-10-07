<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Repositories\Contracts\ProjectRepositoryInterface;

class ProjectController extends Controller
{
    protected $projectRepository;

    public function __construct(ProjectRepositoryInterface $projectRepository)
    {
        $this->projectRepository= $projectRepository;
    }

    public function index()
    {
        $projects = $this->projectRepository->all();

        return view('frontend.pages.projects' ,['projects' => $projects]);
    }
    //Add
    public function showAddForm() {
    	//return form to add new group
    }
    public function add(Request $request) {
    	 $this->projectRepository->create($request);
    }

   	//EDIT

   	public function showEditForm($id) {
   		$project = Project:: find($id);
   		return view ('', compact('project','id'));
   	}

   	public function edit(Request $request, $id) {
   	  $this->projectRepository->update($request, $id);
   	}


    //Delete
   	public function delete($id) {
   		$this->projectRepository->delete($id);
   	}

}
