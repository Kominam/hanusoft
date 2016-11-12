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
         @include('backend.blocks.member_block', ['project' => $project])
         </div>
          @include('backend.blocks.timeline_block', ['project' => $project])
      </div>
      <section class="panel">
         <header class="panel-heading">
            xCharts Basic Example
         </header>
         <div class="panel-body">
            <figure class="demo-xchart" id="chart"></figure>
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