<div class="row">
      <div class="col-md-6">
         <section class="panel">
            <div class="panel-heading">
               Basic Information
            </div>
            <div class="panel-body">
               <p>Name: {{$project->name}}</p>
               <p>Start Date: {{$project->displayStartDate()}}</p>
               <p>Planning End-Date: {{$project->displayPlanEndDate()}}</p>
            </div>
         </section>
      </div>
      <div class="col-md-6">
      <section class="panel">
      <div class="panel-heading">
         Resource
      </div>
      <div class="panel-body">
         Below is resource for this project
         @foreach ($project->project_resources as $resource)
           <p>{{$resource->name}} <a href="{{ route('resource.download',$resource->url) }}"> <span class="label label-primary"><i class="icon-download-alt"></i></span></a>
          @can('manage-project', $project)
           <span class="label label-danger">
           <a href="{{ route('resource.destroy', $resource->id) }}"><i class="icon-trash"></i></a>
           </span>
           @endcan
           </p>
         @endforeach
         <br>
         @can('manage-project', $project)
             <a class="btn btn-success btn-sm pull-left" href="#addnewresource" data-toggle="modal">Add New Resources</a>
                   <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="addnewresource" class="modal fade">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                  <h4 class="modal-title">Add New Resource</h4>
                              </div>
                              <div class="modal-body">
                                  <form role="form" method="POST" action="{{ route('resource.store', $project->slug) }}" enctype="multipart/form-data">
                                      <div class="form-group">
                                          <label for="NewNameResource">Name</label>
                                          <input type="hidden" name="_token" value="{{csrf_token()}}">
                                          <input type="text" class="form-control" id="" name="resource_name">
                                      </div>
                                      <div class="form-group">
                                          <label for="FileResource">File</label>
                                          <input type="file" class="form-control" name="resource_file">
                                      </div>
                                      <button type="submit" class="btn btn-default">Submit</button>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
         @endcan
      </div>
      </section>
      </div>
   </div>