 @can('manage-project', $project)
   <section class="panel">
      <header class="panel-heading">
         <div class="alert alert-danger">
            Danger Zone
         </div>
      </header>
      <div class="panel-body">
         <div class="row">
            <div class="col-md-8">
               <p>Delete this project</p>
               <p>Once you delete a repository, there is no going back. Please be certain</p>
            </div>
            <div class="col-md-4 pull-right">
               <a class="btn btn-danger" data-toggle="modal" href="#deleteProject">
               Delete this project
               </a>
               <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="deleteProject" class="modal fade">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                           <h4 class="modal-title">Form Tittle</h4>
                        </div>
                        <div class="modal-body">
                           <p>This action CANNOT be undone. This will permanently delete the {{$project->name}}, tasks, timelines, and remove all collaborator associations.</p>
                           <p>Please type in the name of the project to confirm.</p>
                           <form class="form-horizontal" role="form" method="" action="post">
                              <div class="form-group">
                                 <div class="col-lg-12">
                                    <input type="hidden" name="_token" value="{{ csrf_token()}}">
                                    <input type="text" class="form-control" id="delete_project_name" placeholder="Name of this project" name="project_name">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <div class="col-lg-10" id="link-delete">
                                 </div>
                              </div>
                           </form>
                           <script type="text/javascript">
                              $(document).ready(function() {
                                 $('#delete_project_name').keyup(function() {
                                    if ($(this).val()=="{{$project->name}}") {
                                      $('#link-delete').append('<a href="http://hanusoft.dev/my/project/delete/'+{{$project->id}} +'" class="btn btn-danger">Delete this project</a>');
                                    }
                                 });
                              });
                           </script>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   @endcan