@extends('backend.pages.master')
@section('external_css')
   <link href="{{url('backend/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
@endsection
@section('external_script')
    <script src="{{url('backend/js/jquery-1.8.3.min.js')}}"></script>
    <script class="include" type="text/javascript" src="{{url('backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
   
@endsection
@section('content')
    <section class="wrapper">
              <!-- page start-->
              <section class="panel">
                  <header class="panel-heading">
                      All Task Notification
                  </header>
                  <div class="panel-body">
                      @foreach ($all_task_noti as $task)
                       <div class="classic-search">
                         <h4><a href="{{ route('project.show', $task->data['project_id']) }}">{{ $task->data['project_name'] }}</a></h4>
                          @if ($task->type=='App\Notifications\AssignNewTask')
                            By: <a href="#"> {{ $task->data['leadership_name'] }}</a><br>
                            <strong><span class="label label-info"><i class="icon-bolt"></i></span>You are assinged new task: </strong> 
                             {{$task->data['todo_content']}}
                             {{$task->data['todo_due_date']}}
                          @elseif($task->type=='App\Notifications\UpdateTask')
                            By: <a href="#"> {{ $task->data['leadership_name'] }}</a><br>
                           <span class="label label-primary"><i class="icon-refresh"></i></span> Your task was change to
                              {{$task->data['todo_content']}}
                             {{$task->data['todo_due_date']}}
                          @elseif($task->type=='App\Notifications\DeleteTask')
                            By: <a href="#"> {{ $task->data['leadership_name'] }}</a><br>
                          <span class="label label-danger"><i class="icon-trash"></i></span> The task # {{$task->data['todo_id']}}:  {{$task->data['todo_content']}} was deleted.
                           @elseif($task->type=='App\Notifications\MarkTaskDone')
                           <span class="label label-success"><i class="icon-check"></i></span> The task # {{$task->data['todo_id']}}:  {{$task->data['todo_content']}} was marked as done by {{$task->data['marker_name']}}.
                          @endif
                          <br>
                         Time:{{$task->created_at->diffForHumans()}}
                         <br>
                         @if (is_null($task->read_at))
                            <a class="btn btn-info" href="{{ route('markRead', $task->id) }}">
                                 <i class="icon-eye-close"></i>
                            </a>   
                         @endif
                      </div>
                      <hr>
                     @endforeach 
                    
                      <div class="text-center">
                          <ul class="pagination">
                             @if ($all_task_noti->currentPage()!==1)
                                <li><a href="{{$all_task_noti->previousPageUrl()}}">«</a></li>
                             @endif
                             @for ($i=1; $i< $all_task_noti->lastPage()+1;$i++)
                                <li class="{{ ($all_task_noti->currentPage()==$i) ? 'active' : '' }}"><a href="{!! $all_task_noti->url($i)!!}">{{$i}}</a></li>   
                            @endfor
                            @if ($all_task_noti->currentPage()!== $all_task_noti->lastPage())
                                <li><a href="{{$all_task_noti->nextPageUrl()}}">»</a></li>
                            @endif
                          </ul>
                      </div>
                  </div>
              </section>

              <!-- page end-->
          </section>
@endsection

