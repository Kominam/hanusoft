   <div class="col-md-6">
         <section class="panel">
            <div class="panel-body">
               <div class="text-center mbot30">
                  <h3 class="timeline-title">Timeline</h3>
                  <p class="t-info">This is a project timeline</p>
                  <table >
                     <tr>
                        <td>
                           <div style="height: 15px; width: 15px; background: #A8D76F; border-radius: 50%"></div>
                        </td>
                        <td>Done</td>
                     </tr>
                     <tr>
                        <td>
                           <div style="height: 15px; width: 15px; background: #EF6F66; border-radius: 50%"></div>
                        </td>
                        <td>Over Date</td>
                     </tr>
                     <tr>
                        <td>
                           <div style="height: 15px; width: 15px; background: #56C9F5; border-radius: 50%"></div>
                        </td>
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
                                 <a class="btn btn-default btn-sm pull-right" href="#editstate{{$state->id}}" data-toggle="modal"><i class="icon-pencil"></i></a>
                                 <a class="btn btn-default btn-sm pull-right" href="#deletestate{{$state->id}}" data-toggle="modal"><i class="icon-trash"></i></a>
                                  
                                 @endcan
                                 </span>
                              </h1>
                              <p>{{$state->content}}</p>
                           </div>
                        </div>
                     </div>
                  </article>
                  <?php $count++; ?>
                  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="editstate{{$state->id}}" class="modal fade">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                  <h4 class="modal-title">Edit This State</h4>
                              </div>
                              <div class="modal-body">

                                  <form role="form" id="updatStateForm{{$state->id}}" method="PUT" action="#">
                                  
                                      <div class="form-group">
                                          <label for="UpdateStateContenten{{$state->id}}">Content</label>
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                          <input type="text" class="form-control" id="update_state_content{{$state->id}}" value="{{$state->content}}">
                                      </div>
                                      <div class="form-group">
                                          <label for="UpdateStateDueDate{{$state->id}}">DueDate</label>
                                          <input type="date" class="form-control" id="update_state_due_date{{$state->id}}" value="{{$state->due_date}}">
                                      </div>
                                      <div class="form-group">
                                          <label for="UpdateStateStatus">Status</label>
                                          <select id="update_state_status{{$state->id}}">
                                             <option value="on_queue">On queue</option>
                                             <option value="done">Done</option>
                                             <option value="over_date">Over DueDate</option>
                                          </select>
                                      </div>
                                      <button type="submit" class="btn btn-default">Submit</button>
                                      <script type="text/javascript">
                                         update_state({{$state->id}});
                                      </script>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="modal fade" id="deletestate{{$state->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                 deleteState({{$state->id}});  
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