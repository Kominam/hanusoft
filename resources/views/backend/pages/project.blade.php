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
   <script src="{{ url('backend/js/update_state.js') }}"></script>
   <script src="{{ url('backend/js/delete-state.js') }}"></script>
   <script src="{{ url('backend/js/mark_task_as_done.js') }}"></script>
   <span id="project_id" style="display: none">{{$project->id}}</span>
   <span id="project_name" style="display: none">{{$project->name}}</span>
   <section class="wrapper site-min-height">
      @can('subcribe-project', $project)
      @include('backend.blocks.basic_and_resource', ['project' => $project])
      <div class="row">
         <div class="col-md-6">
         @include('backend.blocks.task_block', ['project' => $project])
         @include('backend.blocks.member_block', ['project' => $project, 'can_invite_mem'=> $can_invite_mem])
         </div>
          @include('backend.blocks.timeline_block', ['project' => $project])
      </div>
      <section class="panel">
         <header class="panel-heading">
            Member's Task Chart
         </header>
         <div class="panel-body">
          
            <div class="row">
               <div class="col-md-8">
                 <div id="perf_div"></div>
                  {!!Lava::render('ColumnChart', 'TaskChart', 'perf_div')!!}
               </div>
               <div class="col-md-4">
                <div id="chart-div"></div>
                  {!!Lava::render('DonutChart', 'IMDB', 'chart-div')!!}
               </div>
            </div>
         </div>
      </section>
      @include('backend.blocks.danger_zone', ['project' => $project])
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
<script src="{{url('backend/js/jquery-1.8.3.min.js')}}"></script>
<script class="include" type="text/javascript" src="{{url('backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
@endsection