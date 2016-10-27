      @extends('backend.pages.master')
      @section('external_css')
      <link href="{{url('backend/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
      <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
      <link href="{{url('backend/css/tasks.css')}}" rel="stylesheet">
      <link href="{{url('backend/assets/xchart/xcharts.css')}}" rel="stylesheet" />
      @endsection
      @section('content')
      <section class="wrapper site-min-height">
      <div class="row">
      @can('subcribe-project', $project->id)
      can do it
      @endcan
      @cannot('subcribe-project', $project->id)
      Not can do it
      @endcannot
      <div class="col-md-6">
      <section class="panel tasks-widget">
      <header class="panel-heading">
      Todo list
      </header>
      <div class="panel-body">
      
      <div class="task-content">
      
      <ul class="task-list">
      <li>
      <div class="task-checkbox">
      <input type="checkbox" class="list-child" value=""  />
      </div>
      <div class="task-title">
      <span class="task-title-sp">Flatlab is Modern Dashboard</span>
      <span class="badge badge-sm label-success">2 Days</span>
      <div class="pull-right hidden-phone">
      <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
      <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
      <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
      </div>
      </div>
      </li>
      <li>
      <div class="task-checkbox">
      <input type="checkbox" class="list-child" value=""  />
      </div>
      <div class="task-title">
      <span class="task-title-sp">Fully Responsive & Bootstrap 3.0.2 Compatible</span>
      <span class="badge badge-sm label-danger">Done</span>
      <div class="pull-right hidden-phone">
      <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
      <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
      <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
      </div>
      </div>
      </li>
      <li>
      <div class="task-checkbox">
      <input type="checkbox" class="list-child" value=""  />
      </div>
      <div class="task-title">
      <span class="task-title-sp">Daily Standup Meeting</span>
      <span class="badge badge-sm label-warning">Company</span>
      <div class="pull-right hidden-phone">
      <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
      <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
      <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
      </div>
      </div>
      </li>
      <li>
      <div class="task-checkbox">
      <input type="checkbox" class="list-child" value=""  />
      </div>
      <div class="task-title">
      <span class="task-title-sp">Write well documentation for this theme</span>
      <span class="badge badge-sm label-primary">3 Days</span>
      <div class="pull-right hidden-phone">
      <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
      <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
      <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
      </div>
      </div>
      </li>
      <li>
      <div class="task-checkbox">
      <input type="checkbox" class="list-child" value=""  />
      </div>
      <div class="task-title">
      <span class="task-title-sp">We have a plan to include more features in future update</span>
      <span class="badge badge-sm label-info">Tomorrow</span>
      <div class="pull-right hidden-phone">
      <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
      <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
      <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
      </div>
      </div>
      </li>
      <li>
      <div class="task-checkbox">
      <input type="checkbox" class="list-child" value=""  />
      </div>
      <div class="task-title">
      <span class="task-title-sp">Don't be hesitate to purchase this Dashbord</span>
      <span class="badge badge-sm label-inverse">Now</span>
      <div class="pull-right">
      <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
      <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
      <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
      </div>
      </div>
      </li>
      <li>
      <div class="task-checkbox">
      <input type="checkbox" class="list-child" value=""  />
      </div>
      <div class="task-title">
      <span class="task-title-sp">Code compile and upload</span>
      <span class="badge badge-sm label-success">2 Days</span>
      <div class="pull-right hidden-phone">
      <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
      <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
      <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
      </div>
      </div>
      </li>
      <li>
      <div class="task-checkbox">
      <input type="checkbox" class="list-child" value=""  />
      </div>
      <div class="task-title">
      <span class="task-title-sp">Tell your friends to buy this dashboad</span>
      <span class="badge badge-sm label-danger">Now</span>
      <div class="pull-right hidden-phone">
      <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
      <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
      <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
      </div>
      </div>
      </li>
      
      </ul>
      </div>
      
      <div class=" add-task-row">
      <a class="btn btn-success btn-sm pull-left" href="#">Add New Tasks</a>
      <a class="btn btn-default btn-sm pull-right" href="#">See All Tasks</a>
      </div>
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
      <img src="{{url('frontend/img/team/'.$member->url_avt)}}" height="55px" width="55px" style="border-radius: 50%;">
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
      <script type="text/javascript">
      $(document).ready(function() {
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        $('a[href="#invitethem"]').click(function(){
        var inviter_list = [];
        $('input:checkbox:checked.inviter').map(function(){
          inviter_list.push($(this).val());
          });
        var project_id="{{$project->id}}";
        var project_name = "{{$project->name}}";
        console.log(inviter_list);
         $.ajax({
            url:'/member/invite-members',
            type: "post",
            data: { '_token': $('input[name=_token]').val(), 'project_id': project_id, 'project_name': project_name, 'inviters' : inviter_list},
            success: function(data) {  
                location.href = location.href 
            }
        });
      });
    });

      </script>
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
      </div>
      <div class="timeline" id="timeline{{$project->id}}">
      @if ($project->states->count()>0)
               @foreach ($project->states as $state)
                  <article class="timeline-item">
                        <div class="timeline-desk">
                        <div class="panel">
                        <div class="panel-body">
                        <span class="arrow"></span>
                        <span class="timeline-icon red"></span>
                        <span class="timeline-date">08:25 am</span>
                        <h1 class="red">{{$state->due_date}}</h1>
                        <p>{{$state->content}}</p>
                        </div>
                        </div>
                        </div>
                  </article>
            @endforeach
      @endif
      </div>
      <div class="clearfix">&nbsp;</div>
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
        <script type="text/javascript">
      $(document).ready(function() {
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        $('a[href="#addstate"]').click(function(){
            var project_id= "{{$project->id}}";
            var content = $('#state_content').val();
            var due_date = $('#state_due_date').val();
            var status = $('#state_status').val();
            $.ajax({
            url:'/member/add-state',
            type: "post",
            data: { '_token': $('input[name=_token]').val(), 'project_id': project_id, 'content': content, 'due_date' : due_date, 'status': status},
            success: function(data) {  
                console.log(data);
                alert("add state ok"); 
            }
        });
      });
    });

      </script>
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
      
      </section>
      @endsection
      @section('external_script')
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