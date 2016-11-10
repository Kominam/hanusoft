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
    //For front-end
    public function show($slug) {
       $project = $this->projectRepository->findBySlug($slug);
       $related_projects = $this->projectRepository->findRelated($project->id,$project->type_id);
       $num_project = $this->projectRepository->countAll();
       if ($project->id===1) {
          $next_project_id = $project->id +1;
          $next_project= $this->projectRepository->find($next_project_id);
          $next_project_slug = $next_project->slug;
          $previous_project_slug = "#";
       } else if($project->id===$num_project){
           $next_project_slug ="#";
           $previous_project_id =$project->id -1;
           $previous_project = $this->projectRepository->find($previous_project_id);
           $previous_project_slug = $previous_project->slug;
       } else {
            $next_project_id = $project->id +1;
            $next_project= $this->projectRepository->find($next_project_id);
            $next_project_slug = $next_project->slug;
            $previous_project_id =$project->id -1;
            $previous_project = $this->projectRepository->find($previous_project_id);
            $previous_project_slug = $previous_project->slug;
       }
      return view('frontend.pages.single_project' ,['project' => $project, 'related_projects'=>$related_projects, 'next_project' =>$next_project_slug, 'prev_project'=> $previous_project_slug]);
    }
    //For back-end
    public function showForBackEnd($slug) {
      $project = $this->projectRepository->findBySlug($slug);
      $can_invite_mem= $this->projectRepository->canInvinteMember($project->id);
      return view('backend.pages.project', ['project' => $project, 'can_invite_mem'=> $can_invite_mem]);
    }
    //Add
    public function showAddForm() {
    	return view('backend.pages.create-project');
    }
    public function add(Request $request) {
        $validator = $this->projectRepository->validatorNew($request);
         if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
         } else {
             $new_project = $this->projectRepository->create($request);
             return redirect()->route('project.show', $new_project->slug);
         }  
    	
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
      return redirect()->route('dashboard');
   	}

    public function invite(Request $request) {
      $this->projectRepository->invite($request);
    }

    public function handleInvitation(Request $request) {
      $this->projectRepository->handleInvitation($request);
    }

}
