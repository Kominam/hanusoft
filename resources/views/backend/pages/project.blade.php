

@extends('backend.pages.master')
@section('external_css')
<link href="{{url('backend/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<link href="{{url('backend/css/tasks.css')}}" rel="stylesheet">
<link href="{{url('backend/assets/xchart/xcharts.css')}}" rel="stylesheet" />
@endsection
@section('content')
<script src="{{ url('backend/js/update-todo_item.js') }}"></script>
<script src="{{ url('backend/js/delete-task.js') }}"></script>
<script src="{{ url('backend/js/mark_task_as_done.js') }}"></script>
<span id="project_id" style="display: none">{{$project->id}}</span>
<span id="project_name" style="display: none">{{$project->name}}</span>
<section class="wrapper site-min-height">
   <div class="row">
   @can('subcribe-project', $project)
   <div class="col-md-6">
      <section class="panel tasks-widget">
         <header class="panel-heading">
            Todo list
            <!-- <div class="option pull-right" style="display: inline; height: 10px">
              <select style="display: inline;">
                <option value="">Done</option>
                <option>Over DueDate</option>
                <option>Pending</option>
              </select>
                      </div> -->
         </header>
         <div class="panel-body">
            <div class="task-content" id="task_list">
               <ul class="task-list">
                  @foreach ($project->todo_items as $todo_item)
                  <li id="displayTask{{$todo_item->id}}">
                     <div class="task-checkbox">
                       @foreach ($todo_item->users as $todo_stt)
                          @if ($loop->first)
                              @if ($todo_stt->pivot->status=='Done')
                                <input type="checkbox" class="list-child" value=""  / checked="checked" disabled>
                              @else
                               <input type="checkbox" class="list-child" value=""  / disabled>
                             @endif
                          @endif
                        @endforeach
                             
                        
                     </div>
                     <div class="task-title">
                        <span class="task-title-sp">
                        # {{$todo_item->id}}
                        @foreach ($todo_item->users as $mem)
                          <h5>{{$mem->name}}</h5>
                        @endforeach
                        {{$todo_item->content}}</span>
                        <span class="badge badge-sm label-success">{{$todo_item->displayDueDate()}}</span>
                        @foreach ($todo_item->users as $todo_stt)
                          @if ($loop->first)
                              @if ($todo_stt->pivot->status=='Done')
                                <span class="badge badge-sm label-success">Done</span>
                              @elseif ($todo_stt->pivot->status=='On queue')
                                <span class="badge badge-sm label-primary">              On queue</span>
                             @elseif ($todo_stt->pivot->status=='Over DueDate')
                                  <span class="badge badge-sm label-danger">             Over DueDate</span>
                             @endif
                          @endif
                        @endforeach
                        <div class="pull-right hidden-phone">
                           @can('mark-task-done', $todo_item)
                            @foreach ($todo_item->users as $todo_stt)
                          @if ($loop->first)
                              @if ($todo_stt->pivot->status=='On queue'|| $todo_stt->pivot->status=='Over DueDate' )
                                 <a class="btn btn-success btn-xs" id="btn_mark_todo_as_done{{$todo_item->id}}"><i class="icon-ok"></i></a>
                              <script type="text/javascript">
                                markAsDone({{$todo_item->id}});
                              </script>
                             
                             @endif
                          @endif
                        @endforeach
                             
                           @endcan
                           @can('manage-project', $project)
                                <a class="btn btn-primary btn-xs" data-toggle="modal" href="#todo{{$todo_item->id}}"><i class="icon-pencil"></i></a>
                                <div class="modal fade" id="todo{{$todo_item->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                              <h4 class="modal-title">Edit Todo Item #{{$todo_item->id}}</h4>
                                          </div>
                                          <div class="modal-body">
                                              <form action="#" method="POST" accept-charset="utf-8">
                                          <input type="hidden" name="_token" value="{{csrf_token()}}">
                                          <div class="form-group">
                                             <input type="text" class="form-control" id="todo_content_update{{$todo_item->id}}" placeholder="Content of task" value="{{$todo_item->content}}">
                                          </div>
                                          <div class="form-group">
                                             <input type="date" class="form-control" id="todo_due_date_update{{$todo_item->id}}" placeholder="YYYY-MM-DD" value="{{$todo_item->due_date}}">
                                          </div>
                                            @foreach ($project->users as $cam)
                                          <div class="checkbox">
                                             <label>
                                             @foreach ($todo_item->users as $cur_user)
                                               @if($cam->id == $cur_user->id)
                                                <input type="checkbox" class="new_assign" name="new_assign[]" id="bsds" value={{$cam->id}} checked>
                                              @else
                                                 <input type="checkbox" class="new_assign" name="new_assign[]" id="bsds" value={{$cam->id}}>
                                                @endif
                                             @endforeach
                                            
                                             {{$cam->name}}
                                             </label>
                                          </div>
                                          @endforeach
                                       </form>
                                          </div>
                                          <div class="modal-footer">
                                             <a class="btn btn-success" href="#updatetask{{$todo_item->id}}">Save changes</a>
                                              
                                               <script type="text/javascript">
                                                  updateTodo_item({{$todo_item->id}});
                                               </script>
                                              <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                                <a class="btn btn-danger btn-xs" data-toggle="modal" href="#deletetodo{{$todo_item->id}}"><i class="icon-trash "></i></a>
                                 <div class="modal fade" id="deletetodo{{$todo_item->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                              <h4 class="modal-title">Delete Todo Item #{{$todo_item->id}}</h4>
                                          </div>
                                          <div class="modal-body">
                                              Are you sure to delete this task?
                                          </div>
                                          <div class="modal-footer">
                                             <a class="btn btn-danger" href="#deletetask{{$todo_item->id}}">Yes, I sure</a>
                                              
                                               <script type="text/javascript">
                                                  deleteTask({{$todo_item->id}});
                                               </script>
                                              <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                           @endcan
                        </div>
                     </div>
                  </li>
                  @endforeach
               </ul>
            </div>
            @can('manage-project', $project)
            <div class=" add-task-row">
               <a class="btn btn-success btn-sm pull-left" href="#addnewtask" data-toggle="modal">Add New Tasks</a>
               <div class="modal fade" id="addnewtask" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                           <h4 class="modal-title">Add new task</h4>
                        </div>
                        <div class="modal-body">
                           <form action="#" method="POST" accept-charset="utf-8">
                              <input type="hidden" name="_token" value="{{csrf_token()}}">
                              <div class="form-group">
                                 <input type="text" class="form-control" id="todo_content" placeholder="Content of task" name="todo_content" value="">
                              </div>
                              <div class="form-group">
                                 <input type="date" class="form-control" id="todo_due_date" placeholder="YYYY-MM-DD" name="todo_due_date" value="">
                              </div>
                              @foreach ($project->users as $cam)
                              <div class="checkbox">
                                 <label>
                                 <input type="checkbox" class="assgined" name="assingned_members[]" id="optionsRadios2" value={{$cam->id}}>
                                 {{$cam->name}}
                                 </label>
                              </div>
                              @endforeach
                           </form>
                        </div>
                        <div class="modal-footer">
                           <a class="btn btn-success" href="#addtask">Submit</a>
                           <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            @endcan
            <a class="btn btn-default btn-sm pull-right" href="#">See All Tasks</a>
         </div>
      </section>
      <section class="panel">
         <div class="panel-heading">
            Members
         </div>
         <div class="panel-body">
            @foreach ($project->users()->get()->chunk(6) as $chunk)
            <div class="row">
               @foreach ($chunk as $member)
               <div class="col-md-2" style="text-align: center;">
                  <img src="{{url($member->url_avt)}}" height="55px" width="55px" style="border-radius: 50%;">
                  @if (Auth::user()->name== $member->name)
                  <strong>You</strong>
                  @else
                  <strong>{{$member->name}}</strong>
                  @endif
               </div>
               @endforeach
            </div>
            @endforeach
            @can('manage-project', $project)
            <div class=" invite-new-member">
               <a class="btn btn-success btn-sm pull-left" href="#invite" data-toggle="modal">+ Invite</a>
               <div class="modal fade" id="invite" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                           <h4 class="modal-title">Invite New members</h4>
                        </div>
                        <div class="modal-body">
                           <h5>Available members you can invite are shown on below</h5>
                           <form action="#" method="POST" accept-charset="utf-8">
                              <input type="hidden" name="_token" value="{{csrf_token()}}">
                              @foreach ($can_invite_mem as $cim)
                              <div class="checkbox">
                                 <label>
                                 <input type="checkbox" class="inviter" name="inviters[]" id="optionsRadios1" value={{$cim->id}}>
                                 {{$cim->name}}
                                 </label>
                              </div>
                              @endforeach
                           </form>
                        </div>
                        <div class="modal-footer">
                           <a class="btn btn-success" href="#invitethem">Invite them</a>
                           <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            @endcan
      </section>
      </div>
      <div class="col-md-6">
         <section class="panel">
            <div class="panel-body">
               <div class="text-center mbot30">
                  <h3 class="timeline-title">Timeline</h3>
                  <p class="t-info">This is a project timeline</p>
                  <table >
                    <tr>
                      <td><div style="height: 15px; width: 15px; background: #A8D76F; border-radius: 50%"></div></td>
                      <td>Done</td>

                    </tr>
                    <tr>
                      <td><div style="height: 15px; width: 15px; background: #EF6F66; border-radius: 50%"></div></td>
                      <td>Over Date</td>

                    </tr>
                    <tr>
                      <td><div style="height: 15px; width: 15px; background: #56C9F5; border-radius: 50%"></div></td>
                      <td>Pending</td>

                    </tr>
                  </table>
               </div>
               <div class="timeline" id="timeline{{$project->id}}">
                  @if ($project->states->count()>0)
                  <?php $count=0; ?>
                  @foreach ($project->states as $state)
                  <article class="timeline-item {{($count%2==0) ? '' : 'alt'}}" id="state{{$state->id}}">
                     <div class="timeline-desk">
                        <div class="panel">
                           <div class="panel-body">
                              <span class="arrow{{($count%2==0) ? '' : '-alt'}}"></span>
                              @if($state->status =="on_queue")
                                <span class="timeline-icon blue"></span>
                              @elseif($state->status =="done")
                                <span class="timeline-icon light-green"></span>
                              @else
                                <span class="timeline-icon red"></span>
                              @endif
                              <span class="timeline-date">08:25 am</span>
                               @if($state->status =="on_queue")
                                 <h1 class="blue">
                              @elseif($state->status =="done")
                                <h1 class="light-green">
                              @else
                                <h1 class="red"> 
                              @endif
                              {{$state->displayDueDate()}}<span>
                                 @can('manage-project', $project)
                                 <a class="btn btn-default btn-sm pull-right" href="#delete{{$state->id}}" data-toggle="modal"><i class="icon-trash"></i></a>
                                 @endcan
                                 </span>
                              </h1>
                              <p>{{$state->content}}</p>
                           </div>
                        </div>
                     </div>
                  </article>
                  <?php $count++; ?>
                  <div class="modal fade" id="delete{{$state->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title">Warning</h4>
                           </div>
                           <div class="modal-body">
                              Are you sure to delete this state ??
                              <p>{{$state->content}}</p>
                           </div>
                           <div class="modal-footer">
                              <a class="btn btn-danger" href="#deletestate{{$state->id}}">Yes, delete this</a>
                              <script type="text/javascript">
                                 $(document).ready(function() {
                                      $.ajaxSetup({
                                         headers: {
                                           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                         }
                                       });
                                     $('a[href="#deletestate{{$state->id}}"]').click(function(){
                                         $.ajax({
                                             url:'/my/state/delete/'+ "{{$state->id}}",
                                             type: "get",
                                             success: function(data) {  
                                               $('#state{{$state->id}}').remove();
                                               swal({
                                                  title: "Success!",
                                                  text: "Delete successful!",
                                                  type: "success",
                                                  timer: 1500,
                                                  confirmButtonText: "OK"
                                                });
                                                   }
                                           });
                                 });
                                 });
                              </script>
                              <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  @endforeach
                  @endif
               </div>
               <div class="clearfix">&nbsp;</div>
               @can('manage-project', $project)
               <a class="btn btn-success btn-sm pull-left" href="#newstate" data-toggle="modal">+ State</a>
               <div class="modal fade" id="newstate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                           <h4 class="modal-title">Add New State</h4>
                        </div>
                        <div class="modal-body">
                           <form action="#" method="POST">
                              <div class="form-group">
                                 <input type="text" class="form-control" id="state_content" placeholder="Content " name="content" value=""> 
                              </div>
                              <div class="form-group">
                                 <input type="date" class="form-control" id="state_due_date" placeholder="Due Date " name="due_date" value="">
                              </div>
                              <div class="form-group">
                                 Status :
                                 <select id="state_status">
                                    <option value="on_queue">On queue</option>
                                    <option value="done">Done</option>
                                    <option value="over_date">Over DueDate</option>
                                 </select>
                              </div>
                           </form>
                        </div>
                        <div class="modal-footer">
                           <a class="btn btn-success" href="#addstate">Add this state</a>
                           <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        </div>
                     </div>
                  </div>
               </div>
               @endcan
            </div>
         </section>
      </div>
   </div>
   <section class="panel">
      <header class="panel-heading">
         xCharts Basic Example
      </header>
      <div class="panel-body">
         <figure class="demo-xchart" id="chart"></figure>
      </div>
   </section>
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
   @endcan
   @cannot('subcribe-project', $project)
   Sorry you do not have permission to view detail of this projects
   @endcannot
</section>
@endsection
@section('external_script')
<script src="{{url('backend/js/project_operator.js')}}" type="text/javascript"></script>
<script src="{{url('backend/js/tasks.js')}}" type="text/javascript"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script>
   jQuery(document).ready(function() {
   TaskList.initTaskWidget();
   });
   
   $(function() {
   $( "#sortable" ).sortable();
   $( "#sortable" ).disableSelection();
   });
   
</script>
<script src="{{url('backend/assets/xchart/d3.v3.min.js')}}"></script>
<script src="{{url('backend/assets/xchart/xcharts.min.js')}}"></script>
<script>
   (function () {
   var data = [{"xScale":"ordinal","comp":[],"main":[{"className":".main.l1","data":[{"y":15,"x":"2012-11-19T00:00:00"},{"y":11,"x":"2012-11-20T00:00:00"},{"y":8,"x":"2012-11-21T00:00:00"},{"y":10,"x":"2012-11-22T00:00:00"},{"y":1,"x":"2012-11-23T00:00:00"},{"y":6,"x":"2012-11-24T00:00:00"},{"y":8,"x":"2012-11-25T00:00:00"}]},{"className":".main.l2","data":[{"y":29,"x":"2012-11-19T00:00:00"},{"y":33,"x":"2012-11-20T00:00:00"},{"y":13,"x":"2012-11-21T00:00:00"},{"y":16,"x":"2012-11-22T00:00:00"},{"y":7,"x":"2012-11-23T00:00:00"},{"y":18,"x":"2012-11-24T00:00:00"},{"y":8,"x":"2012-11-25T00:00:00"}]}],"type":"line-dotted","yScale":"linear"},{"xScale":"ordinal","comp":[],"main":[{"className":".main.l1","data":[{"y":12,"x":"2012-11-19T00:00:00"},{"y":18,"x":"2012-11-20T00:00:00"},{"y":8,"x":"2012-11-21T00:00:00"},{"y":7,"x":"2012-11-22T00:00:00"},{"y":6,"x":"2012-11-23T00:00:00"},{"y":12,"x":"2012-11-24T00:00:00"},{"y":8,"x":"2012-11-25T00:00:00"}]},{"className":".main.l2","data":[{"y":29,"x":"2012-11-19T00:00:00"},{"y":33,"x":"2012-11-20T00:00:00"},{"y":13,"x":"2012-11-21T00:00:00"},{"y":16,"x":"2012-11-22T00:00:00"},{"y":7,"x":"2012-11-23T00:00:00"},{"y":18,"x":"2012-11-24T00:00:00"},{"y":8,"x":"2012-11-25T00:00:00"}]}],"type":"cumulative","yScale":"linear"},{"xScale":"ordinal","comp":[],"main":[{"className":".main.l1","data":[{"y":12,"x":"2012-11-19T00:00:00"},{"y":18,"x":"2012-11-20T00:00:00"},{"y":8,"x":"2012-11-21T00:00:00"},{"y":7,"x":"2012-11-22T00:00:00"},{"y":6,"x":"2012-11-23T00:00:00"},{"y":12,"x":"2012-11-24T00:00:00"},{"y":8,"x":"2012-11-25T00:00:00"}]},{"className":".main.l2","data":[{"y":29,"x":"2012-11-19T00:00:00"},{"y":33,"x":"2012-11-20T00:00:00"},{"y":13,"x":"2012-11-21T00:00:00"},{"y":16,"x":"2012-11-22T00:00:00"},{"y":7,"x":"2012-11-23T00:00:00"},{"y":18,"x":"2012-11-24T00:00:00"},{"y":8,"x":"2012-11-25T00:00:00"}]}],"type":"bar","yScale":"linear"}];
   var order = [0, 1, 0, 2],
   i = 0,
   xFormat = d3.time.format('%A'),
   chart = new xChart('line-dotted', data[order[i]], '#chart', {
   axisPaddingTop: 5,
   dataFormatX: function (x) {
   return new Date(x);
   },
   tickFormatX: function (x) {
   return xFormat(x);
   },
   timing: 1250
   }),
   rotateTimer,
   toggles = d3.selectAll('.multi button'),
   t = 3500;
   
   function updateChart(i) {
   var d = data[i];
   chart.setData(d);
   toggles.classed('toggled', function () {
   return (d3.select(this).attr('data-type') === d.type);
   });
   return d;
   }
   
   toggles.on('click', function (d, i) {
   clearTimeout(rotateTimer);
   updateChart(i);
   });
   
   function rotateChart() {
   i += 1;
   i = (i >= order.length) ? 0 : i;
   var d = updateChart(order[i]);
   rotateTimer = setTimeout(rotateChart, t);
   }
   rotateTimer = setTimeout(rotateChart, t);
   }());
   
</script>
<script src="{{url('backend/js/jquery-1.8.3.min.js')}}"></script>
<script class="include" type="text/javascript" src="{{url('backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
@endsection

