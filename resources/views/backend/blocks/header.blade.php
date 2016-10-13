<section id="container" class="">
 <script src="{{url('backend/js/jquery-1.8.3.min.js')}}"></script>
  <input type="hidden" name="_token" value="{{csrf_token()}}" >
    <!--header start-->
    <header class="header white-bg">
        <div class="sidebar-toggle-box">
            <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
        </div>
        <!--logo start-->
        <a href="{{route('index')}}" class="logo" >HANU<span>soft</span></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
                <!-- settings start -->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <i class="icon-tasks"></i>
                    <span class="badge bg-success">6</span>
                    </a>
                    <ul class="dropdown-menu extended tasks-bar">
                        <div class="notify-arrow notify-arrow-green"></div>
                        <li>
                            <p class="green">You have 6 pending tasks</p>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Dashboard v1.3</div>
                                    <div class="percent">40%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Database Update</div>
                                    <div class="percent">60%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60% Complete (warning)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Iphone Development</div>
                                    <div class="percent">87%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 87%">
                                        <span class="sr-only">87% Complete</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Mobile App</div>
                                    <div class="percent">33%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 33%">
                                        <span class="sr-only">33% Complete (danger)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Dashboard v1.3</div>
                                    <div class="percent">45%</div>
                                </div>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                        <span class="sr-only">45% Complete</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="external">
                            <a href="#">See All Tasks</a>
                        </li>
                    </ul>
                </li>
                <!-- settings end -->
                <!-- inbox dropdown start-->
                <li id="header_inbox_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <i class="icon-envelope-alt"></i>
                    <span class="badge bg-important" id="badge_num_unread_mess">{{$num_unread_mess}}</span>
                    </a>
                    <ul class="dropdown-menu extended inbox" id="inbox">
                        <div class="notify-arrow notify-arrow-red"></div>
                        <li>
                            <p class="red">You have <span id="num_unread_mess">{{$num_unread_mess}}</span>new messages</p>
                        </li>
                          @foreach (Auth::user()->unreadNotifications->take(5) as $notification)
                             @if($notification->type=='App\Notifications\ChatProject')
                                     <li id="{{$notification->id}}">
                                        <a href="{{ url('member/mail') }}">
                                        <span class="photo"><img alt="avatar" src="{{url('frontend/img/team/'.$notification->data['member_avt'])}}"></span>
                                        <span class="subject">
                                        <span class="from" style="color:red">{{$notification->data['member_name']}}</span>
                                        <span class="time">{{$notification->created_at}}</span>
                                        </span>
                                        <span class="message">
                                        <strong>{{$notification->data['project_chat_name']}}</strong>
                                        </span>
                                         <span class="message">
                                        {{substr($notification->data['message'], 0,50)}}...
                                        </span>
                                        </a>
                                    </li>
                             @endif
                             <script type="text/javascript">
                              $(document).ready(function() {
                                 var num_unread_mess= parseInt($('#num_unread_mess').text());
                                 var temp= parseInt(" 1 ");
                                    $("#inbox").on("click", "#{{$notification->id}}", function(event){
                                        var noti_id = "{{$notification->id}}";
                                         $.ajaxSetup({
                                              headers: {
                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                              }
                                            });
                                          $.ajax({
                                                url:'/member/notifications',
                                                type: "post",
                                                data: { '_token': $('input[name=_token]').val(), 'noti_id': noti_id},
                                                success: function(data) {
                                                    var new_num_unread_mess = num_unread_mess - temp;
                                                    $('#num_unread_mess').text(new_num_unread_mess);
                                                    $('#badge_num_unread_mess').text(new_num_unread_mess);
                                                    }
                                                });
                                    });
                                 });
                             </script>
                          @endforeach
                        <li>
                            <a href="#">See all messages</a>
                        </li>
                    </ul>
                </li>
                <!-- inbox dropdown end -->
                <!-- notification dropdown start-->
                <li id="header_notification_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <i class="icon-bell-alt"></i>
                    <span class="badge bg-warning" id="badge_num_unread_noti">{{$num_unread_noti}}</span>
                    </a>
                    <ul class="dropdown-menu extended notification" id="noti">
                        <div class="notify-arrow notify-arrow-yellow"></div>
                        <li>
                            <p class="yellow">You have <span id="num_unread_noti">{{$num_unread_noti}}</span> new notifications</p>
                        </li>
                        @foreach (Auth::user()->unreadNotifications->take(5) as $notification)
                         @if($notification->type=='App\Notifications\InvitetoProject')
                              <li id="invite{{$notification->data['leadership_id']}}{{$notification->data['project_id']}}">
                                <a href="#">
                                <span style="display: none" id="noti_id">{{$notification->id}}</span>
                                <span class="label label-danger"><i class="icon-bolt"></i></span>
                                 <span style="color:red;font-size:15px">Invite project</span><br>{{$notification->data['project_name']}} from {{$notification->data['leadership_name']}}
                                 <br>
                                <span class="small italic">{{$notification->created_at->diffForHumans()}}</span>
                                <br>
                                <table>
                                    <tr>
                                        <td><a id="accept{{$notification->data['leadership_id']}}{{$notification->data['project_id']}}"><i class=" icon-ok" style="color:green">Accept</i></a></td>
                                        <td><a id="decline{{$notification->data['leadership_id']}}{{$notification->data['project_id']}}"><i class="icon-minus" style="color:red">Decline</i></a></td>
                                        <td><a id="hide{{$notification->data['leadership_id']}}{{$notification->data['project_id']}}"><i class="icon-off">Hide</i></td>
                                    </tr>
                                </table>
                                </a>
                            </li>
                              <script type="text/javascript">
                                    $(document).ready(function(){
                                          $.ajaxSetup({
                                              headers: {
                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                              }
                                            });

                                          /*$('#header_notification_bar ul').prepend('Some text');*/
                                        var notification_id = $('#noti_id').text();
                                        var num_unread_noti= parseInt($('#num_unread_noti').text());
                                        var temp= parseInt(" 1 ");
                                        $('#accept{{$notification->data['leadership_id']}}{{$notification->data['project_id']}}').click(function(){
                                                var project_id="{{$notification->data['project_id']}}";
                                                $.ajax({
                                                url:'/member/accept-invite',
                                                type: "post",
                                                data: { '_token': $('input[name=_token]').val(), 'project_id': project_id, 'response': 'accept', 'noti_id': notification_id},
                                                success: function(data) {
                                                    alert("Accept success");
                                                    $('#invite{{$notification->data['leadership_id']}}{{$notification->data['project_id']}}').remove();
                                                     var new_num_unread_noti = num_unread_noti - temp;
                                                    $('#num_unread_noti').text(new_num_unread_noti);
                                                    $('#badge_num_unread_noti').text(new_num_unread_noti);
                                                    }
                                                });
                                            });
                                        $('#decline{{$notification->data['leadership_id']}}{{$notification->data['project_id']}}').click(function(){
                                              var project_id="{{$notification->data['project_id']}}";
                                                $.ajax({
                                                url:'/member/accept-invite',
                                                type: "post",
                                                data: { '_token': $('input[name=_token]').val(), 'project_id': project_id, 'response': 'decline','noti_id': notification_id},
                                                success: function(data) {
                                                     alert("Decline success");
                                                    $('#invite{{$notification->data['leadership_id']}}{{$notification->data['project_id']}}').remove();
                                                     var new_num_unread_noti = num_unread_noti - temp;
                                                    $('#num_unread_noti').text(new_num_unread_noti);
                                                    $('#badge_num_unread_noti').text(new_num_unread_noti);
                                                    }
                                                });
                                            });
                                        $('#hide{{$notification->data['leadership_id']}}{{$notification->data['project_id']}}').click(function(){
                                              var project_id="{{$notification->data['project_id']}}";
                                                $.ajax({
                                                url:'/member/accept-invite',
                                                type: "post",
                                                data: { '_token': $('input[name=_token]').val(), 'project_id': project_id, 'response': 'hide',  'noti_id': notification_id},
                                                success: function(data) {
                                                     alert("Hide success");
                                                    $('#invite{{$notification->data['leadership_id']}}{{$notification->data['project_id']}}').remove();
                                                     var new_num_unread_noti = num_unread_noti - temp;
                                                    $('#num_unread_noti').text(new_num_unread_noti);
                                                    $('#badge_num_unread_noti').text(new_num_unread_noti);
                                                    }
                                                });
                                            });
                                    });
                             </script>
                        @elseif($notification->type=='App\Notifications\AddNewState')
                            <li id="{{$notification->id}}"><a href="{{ route('backend.project', $notification->data['project_id']) }}"><span class="label label-danger"><i class="icon-bolt"></i></span>New State Added.<span class="small italic">{{$notification->data['project_name']}}</span></a></li>'
                             <script type="text/javascript">
                              $(document).ready(function() {
                                 var num_unread_noti= parseInt($('#num_unread_noti').text());
                                 var temp= parseInt(" 1 ");
                                    $("#noti").on("click", "#{{$notification->id}}", function(event){
                                        var noti_id = "{{$notification->id}}";
                                         $.ajaxSetup({
                                              headers: {
                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                              }
                                            });
                                          $.ajax({
                                                url:'/member/notifications',
                                                type: "post",
                                                data: { '_token': $('input[name=_token]').val(), 'noti_id': noti_id},
                                                success: function(data) {
                                                    var new_num_unread_noti = num_unread_noti - temp;
                                                    $('#num_unread_noti').text(new_num_unread_noti);
                                                    $('#badge_num_unread_noti').text(new_num_unread_noti);
                                                    }
                                                });
                                    });
                                 });
                             </script>
                        @endif
                        @endforeach
                        <li>
                            <a href="#">See all notifications</a>
                        </li>
                    </ul>
                </li>
                <!-- notification dropdown end -->
            </ul>
        </div>
        <div class="top-nav ">
            <ul class="nav pull-right top-menu">
                <li>
                    <input type="text" class="form-control search" placeholder="Search">
                </li>
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <img alt="" src="{{url('frontend/img/team/'.Auth::user()->url_avt)}}" style="width: 28px; height: 28px">
                    <span class="username">{{Auth::user()->name}}</span>
                    <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li><a href="{{route('profile')}}"><i class=" icon-suitcase"></i>Profile</a></li>
                        <li><a href="#"><i class="icon-cog"></i> Settings</a></li>
                        <li><a href="#"><i class="icon-bell-alt"></i> Notification</a></li>
                        <li><a href="{{ url('member/logout') }}"><i class="icon-key"></i> Log Out</a></li>
                    </ul>
                </li>
                <!-- user login dropdown end -->
            </ul>
        </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a href="{{ route('dashboard') }}">
                    <i class="icon-dashboard"></i>
                    <span>Dashboard</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                    <i class=" icon-folder-open"></i>
                    <span>Projects</span>
                    </a>
                    <ul class="sub">
                        @foreach (Auth::user()->projects as $project)
                          <li><a  href="{{ route('backend.project', $project->id) }}"> <i class=" icon-folder-close"></i>{{$project->name}}</a></li>
                        @endforeach
                         <li><a  href="{{ route('create-project') }}"> <i class="icon-plus-sign-alt"></i>Create a new project</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" >
                    <i class="icon-user"></i>
                    <span>Profile</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="{{route('profile')}}"> <i class=" icon-info"></i>Your profile</a></li>
                         <li><a  href="{{route('profile-edit')}}"><i class="icon-edit"></i>Edit profile</a></li>
                        <li><a  href="{{route('profile-activity')}}"><i class="icon-calendar"></i>Activity</a></li>
                        <li><a href="{{route('mail')}}"><i class="icon-envelope"></i>Inbox</a></li>
                    </ul>
                </li>
                  <li class="sub-menu">
                    <a href="javascript:;" >
                    <i class="icon-tasks"></i>
                    <span>Post</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="{{ route('showPostForm') }}"><i class="icon-edit"></i>Write post</a></li>
                        <li><a  href="{{ route('your-post') }}"><i class="icon-book"></i>Your post</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                    <i class="icon-gear (alias)"></i>
                    <span>Setting</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="#">Basic Table</a></li>
                        <li><a  href="#">Dynamic Table</a></li>
                        <li><a  href="#">Advanced Table</a></li>
                        <li><a  href="#">Editable Table</a></li>
                    </ul>
                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
</section>
