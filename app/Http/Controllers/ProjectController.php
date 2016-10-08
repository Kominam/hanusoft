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

    public function show($id) {
       $project = $this->projectRepository->find($id);

       $related_projects = $this->projectRepository->findRelated($id,$project->type_id);
       $num_project = $this->projectRepository->countAll();
       if ($project->id===1) {
          $next_project_id = $project->id +1;
          $previous_project_id = "#";
       } else if($project->id===$num_project){
           $next_project_id ="#";
           $previous_project_id =$project->id -1;
       } else {
          $next_project_id = $project->id +1;
           $previous_project_id =$project->id -1;
       }
       

      return view('frontend.pages.single_project' ,['project' => $project, 'related_projects'=>$related_projects, 'next_project' =>$next_project_id, 'prev_project'=> $previous_project_id]);
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
