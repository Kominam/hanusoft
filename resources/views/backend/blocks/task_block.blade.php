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
                           {{$todo_item->content}}
                        </span>
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
                           <a class="btn btn-primary btn-xs" data-toggle="modal" href="#updatetodo{{$todo_item->id}}"><i class="icon-pencil"></i></a>
                           <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="updatetodo{{$todo_item->id}}" class="modal fade">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                  <h4 class="modal-title">Edit This Task</h4>
                              </div>
                              <div class="modal-body">
                                  <form role="form" id="updateTaskForm{{$todo_item->id}}" method="PUT" action="#">
                                      <div class="form-group">
                                          <label for="UpdateTaskContent{{$todo_item->id}}">Content</label>
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                          <input type="text" class="form-control" id="update_task_content{{$todo_item->id}}" value="{{$todo_item->content}}">
                                      </div>
                                      <div class="form-group">
                                          <label for="UpdateTaskDueDate{{$todo_item->id}}">DueDate</label>
                                          <input type="date" class="form-control" id="update_task_due_date{{$todo_item->id}}" value="{{$todo_item->due_date}}">
                                      </div>
                                      <div class="form-group">
                                          <label for="UpdateTaskStatus">Status</label>
                                          <select id="update_task_status{{$todo_item->id}}">
                                             <option value="on_queue">On queue</option>
                                             <option value="done">Done</option>
                                             <option value="over_date">Over DueDate</option>
                                          </select>
                                      </div>
                                      <button type="submit" class="btn btn-default">Submit</button>
                                      <script type="text/javascript">
                                         update_task({{$todo_item->id}});
                                      </script>
                                  </form>
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