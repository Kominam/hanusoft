      <section class="panel">
         <div class="panel-heading">
            Members({{$project->users()->count()}})
         </div>
         <div class="panel-body">
            @foreach ($project->users()->get()->chunk(6) as $chunk)
            <div class="row">
               @foreach ($chunk as $member)
               <div class="col-md-2" style="text-align: center;">
                  <img src="{{url($member->url_avt)}}" height="55px" width="55px" style="border-radius: 50%;" id="mem-in-project{{$member->name}}">
                  <script type="text/javascript">   
                  </script>
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