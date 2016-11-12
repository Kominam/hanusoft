<section id="container" class="">
<script src="{{url('backend/js/jquery-1.8.3.min.js')}}"></script>
<script src="{{ url('backend/js/handle_num_task.js') }}"></script>
<script src="{{ url('backend/js/handle-num-mess.js') }}"></script>
<script src="{{ url('backend/js/handle_state_noti.js') }}"></script>
<script src="{{ url('backend/js/handle_invite_project.js') }}"></script>
  <input type="hidden" name="_token" value="{{csrf_token()}}" >
    <!--header start-->

    <header class="header white-bg">
        <div class="sidebar-toggle-box">
            <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
        </div>
        <!--logo start-->
        <a href="{{route('dashboard')}}" class="logo" >HANU<span>soft</span></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
                <!-- settings start -->
                <li class="dropdown" id="header_task_bar">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <i class="icon-tasks"></i>
                    <span class="badge bg-success" id="badge_num_unread_task">{{$num_unread_task}}</span>
                    </a>
                    <ul class="dropdown-menu extended tasks-bar" id="task_disp">
                        <div class="notify-arrow notify-arrow-green"></div>
                        <li>
                            <p class="green">You have <span id="num_unread_task">{{$num_unread_task}}</span> pending tasks</p>
                        </li>
                        @foreach (Auth::user()->unreadNotifications->whereIn('type',['App\Notifications\AssignNewTask','App\Notifications\DeleteTask','App\Notifications\UpdateTask','App\Notifications\MarkTaskDone'])->take(5) as $notification)
                             @if($notification->type=='App\Notifications\AssignNewTask')
                                 <li id="{{$notification->id}}">
                                    <a href="{{ route('project.show',$notification->data['project_slug'] ) }}">
                                        <div class="task-info">
                                            <div class="desc">{{$notification->data['project_name']}}</div>
                                            <div class="desc"><span><i class="icon-plus" style="color:green"></i></span>New task for you: {{$notification->data['todo_content']}}</div>
                                        </div>
                                    </a>
                                </li>
                             @elseif($notification->type=='App\Notifications\DeleteTask')
                                  <li id="{{$notification->id}}">
                                    <a href="{{ route('project.show',$notification->data['project_slug'] ) }}">
                                        <div class="task-info">
                                            <div class="desc">{{$notification->data['project_name']}}</div>
                                            <div class="desc"><span><i class="icon-trash" style="color:red"></i></span> Task #{{$notification->data['todo_id']}} was deleted</div>
                                        </div>
                                    </a>
                                </li>
                            @elseif($notification->type=='App\Notifications\UpdateTask')
                                  <li id="{{$notification->id}}">
                                    <a href="{{ route('project.show',$notification->data['project_slug'] ) }}">
                                        <div class="task-info">
                                            <div class="desc">{{$notification->data['project_name']}}</div>
                                            <div class="desc"><span><i class="icon-refresh" style="color:blue"></i></span> Task #{{$notification->data['todo_id']}} was updated</div>
                                        </div>
                                    </a>
                                </li>
                            @elseif($notification->type=='App\Notifications\MarkTaskDone')
                                  <li id="{{$notification->id}}">
                                    <a href="{{ route('project.show',$notification->data['project_slug'] ) }}">
                                        <div class="task-info">
                                            <div class="desc">{{$notification->data['project_name']}}</div>
                                            <div class="desc"><span><i class="icon-check" style="color:green"></i></span> Task #{{$notification->data['todo_id']}}: {{$notification->data['todo_content']}}<br> was marked as done<br> by {{$notification->data['marker_name']}}</div>
                                        </div>
                                    </a>
                                </li>
                             @endif
                             <script type="text/javascript">
                             handle_num_task("{{$notification->id}}")</script>
                        @endforeach 
                        <li class="external">
                            <a href="{{ route('all_task_noti') }}">See All Tasks</a>
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
                        <li id="frist_li_inbox">
                            <p class="red">You have <span id="num_unread_mess">{{$num_unread_mess}}</span>new messages</p>
                        </li>
                          @foreach(Auth::user()->unreadNotifications->where('type','=', 'App\Notifications\ChatProject')->take(5) as $notification)
                             @if($notification->type=='App\Notifications\ChatProject')
                                     <li id="{{$notification->id}}">
                                        <a href="#">
                                        <span class="photo"><img alt="avatar" src="{{url($notification->data['member_avt'])}}"></span>
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
                                handle_mess("{{$notification->id}}");
                             </script>
                          @endforeach
                        <li>
                            <a href="{{ route('all_message_noti') }}">See all messages</a>
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
                       
                        @foreach (Auth::user()->unreadNotifications->whereIn('type',['App\Notifications\InvitetoProject', 'App\Notifications\AddNewState','App\Notifications\UpdateState','App\Notifications\DeleteState','App\Notifications\NewResourceAdded'])->take(5) as $notification)
                         @if($notification->type=='App\Notifications\InvitetoProject')
                              <li id="invite{{$notification->data['leadership_id']}}{{$notification->data['project_id']}}">
                                <a href="#">
                                <span style="display: none" id="noti_id">{{$notification->id}}</span>
                                <span class="label label-success"><i class="icon-signin"></i></span>
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
                                  handle_inite_project("{{$notification->data['leadership_id']}}","{{$notification->data['project_id']}}");
                             </script>
                        @elseif($notification->type=='App\Notifications\AddNewState')
                            <li id="{{$notification->id}}"><a href="{{ route('project.show', $notification->data['project_slug']) }}"><span class="label label-primary"><i class="icon-plus"></i></span>New State Added.<span class="small italic">{{$notification->data['project_name']}}</span></a></li>'
                             
                          @elseif($notification->type=='App\Notifications\UpdateState')
                         <li id="{{$notification->id}}"><a href="{{ route('project.show', $notification->data['project_slug']) }}"><span class="label label-danger"><i class="icon-trash"></i></span> State #{{$notification->data['state_id']}} Updated.<span class="small italic">{{$notification->data['project_name']}}</span></a></li>'

                        @elseif($notification->type=='App\Notifications\DeleteState')
                         <li id="{{$notification->id}}"><a href="{{ route('project.show', $notification->data['project_slug']) }}"><span class="label label-danger"><i class="icon-trash"></i></span> State #{{$notification->data['state_id']}} Removed.<span class="small italic">{{$notification->data['project_name']}}</span></a></li>'
                          @elseif($notification->type=='App\Notifications\NewResourceAdded')
                        <li id="{{$notification->id}}"><a href="{{ route('project.show', $notification->data['project_slug']) }}"><span class="label label-primary"><i class="icon-plus"></i></span>New Resource Added.<span class="small italic">{{$notification->data['project_name']}}</span></a></li>'
                        @endif
                        <script type="text/javascript">
                                    handle_state("{{$notification->id}}");
                             </script>
                        @endforeach
                        <li>
                            <a href="{{ route('all_important_noti') }}">See all notifications</a>
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
                    <img alt="" src="{{url(Auth::user()->url_avt)}}" style="width: 28px; height: 28px">
                    <span class="username">{{Auth::user()->name}}</span>
                    <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li><a href="{{route('profile.show')}}"><i class=" icon-suitcase"></i>Profile</a></li>
                        <li><a href="#"><i class="icon-cog"></i> Settings</a></li>
                        <li><a href="{{ route('all_important_noti') }}"><i class="icon-bell-alt"></i> Notification</a></li>
                        <li><a href="{{ route('logout') }}"><i class="icon-key"></i> Log Out</a></li>
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
                          <li><a  href="{{ route('project.show', $project->slug) }}"> <i class=" icon-folder-close"></i>{{$project->name}}</a></li>
                        @endforeach
                         <li><a  href="{{ route('project.create') }}"> <i class="icon-plus-sign-alt"></i>Create a new project</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" >
                    <i class="icon-user"></i>
                    <span>Profile</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="{{route('profile.show')}}"> <i class=" icon-info"></i>Your profile</a></li>
                         <li><a  href="{{route('profile.edit')}}"><i class="icon-edit"></i>Edit profile</a></li>
                        <li><a  href="{{route('profile.activity')}}"><i class="icon-calendar"></i>Activity</a></li>
                        <li><a href="{{route('profile.inbox')}}"><i class="icon-envelope"></i><span>Inbox</span></a></li>
                    </ul>
                </li>
                  <li class="sub-menu">
                    <a href="javascript:;" >
                    <i class="icon-tasks"></i>
                    <span>Post</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="{{ route('post.create') }}"><i class="icon-edit"></i>Write post</a></li>
                        <li><a  href="{{ route('post.your-post') }}"><i class="icon-book"></i>Your post</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                    <i class="icon-group"></i>
                    <span>Friends</span>
                    </a>
                    <ul class="sub">
                    @foreach ($all_member as $friend)
                        <li><a  href="{{ route('friends.profile', $friend->slug) }}">{{$friend->name}}</a></li>
                    @endforeach
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                    <i class="icon-gear (alias)"></i>
                    <span>Setting</span>
                    </a>
                    <!-- <ul class="sub">
                        <li><a  href="#">Basic Table</a></li>
                        <li><a  href="#">Dynamic Table</a></li>
                        <li><a  href="#">Advanced Table</a></li>
                        <li><a  href="#">Editable Table</a></li>
                    </ul> -->
                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
</section>