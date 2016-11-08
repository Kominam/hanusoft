@extends('backend.pages.master')
@section('external_css')
   <link href="{{url('backend/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
   <link href="{{url('backend/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="{{url('backend/css/owl.carousel.css')}}" type="text/css">
@endsection
@section('external_script')
    <script src="{{url('backend/js/jquery-1.8.3.min.js')}}"></script>
    <script src="{{url('backend/js/jquery.sparkline.js')}}" type="text/javascript"></script>
    <script src="{{url('backend/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
    <script src="{{url('backend/js/owl.carousel.js')}}" ></script>
    <script src="{{url('backend/js/jquery.customSelect.min.js')}}" ></script>
     <script class="include" type="text/javascript" src="{{url('backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
     <!--script for this page-->
    <script src="{{url('backend/js/sparkline-chart.js')}}"></script>
    <script src="{{url('backend/js/easy-pie-chart.js')}}"></script>
    <script src="{{url('backend/js/count.js')}}"></script>

  <script>

      //owl carousel
      $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
              autoPlay:true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>
@endsection
@section('content')
<section class="wrapper">
@if (empty(Auth::user()->grade->name) || empty(Auth::user()->position->name))
    <div class="row">
        <div class="col-lg-12 col-sm-12 alert alert-danger">
            <a href="{{ route('profile-edit') }}" style="text-decoration:none;color: inherit;"><i class="icon-warning-sign"></i> You must update some important information right now </a>
        </div>
    </div>
@endif
    <!--state overview start-->
    <div class="row state-overview">
        <div class="col-lg-3 col-sm-6">
            <section class="panel">
                <div class="symbol terques">
                    <i class="icon-folder-open"></i>
                </div>
                <div class="value">
                    <h1 class="count">
                    <span id="num_project" style="display: none">{{Auth::user()->projects->count()}}</span>
                        0
                    </h1>
                    <p>Projects</p>
                </div>
            </section>
        </div>
        <div class="col-lg-3 col-sm-6">
            <section class="panel">
                <div class="symbol blue">
                    <i class="icon-tasks"></i>
                </div>
                <div class="value">
                    <h1 class=" count2">
                    <span id="num_post" style="display: none">{{Auth::user()->posts->count()}}</span>
                        0
                    </h1>
                    <p>Posts</p>
                </div>
            </section>
        </div>
        <div class="col-lg-3 col-sm-6">
            <section class="panel">
                <div class="symbol yellow">
                    <i class="icon-envelope"></i>
                </div>
                <div class="value">
                    <h1 class=" count3">
                        0
                    </h1>
                    <p>Messages</p>
                </div>
            </section>
        </div>
        <div class="col-lg-3 col-sm-6">
            <section class="panel">
                <div class="symbol red">
                    <i class="icon-bell-alt"></i>
                </div>
                <div class="value">
                    <h1 class=" count4">
                        0
                    </h1>
                    <p>Notification</p>
                </div>
            </section>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-4">
            <!--user info table start-->
            <section class="panel">
                <div class="panel-body">
                    <a href="#" class="task-thumb">
                    <img src="{{url('frontend/img/team/'.Auth::user()->url_avt)}}" alt="" width="90px" height="83px">
                    </a>
                    <div class="task-thumb-details">
                        <h1><a href="{{ route('profile')}}">{{Auth::user()->name}}</a></h1>
                        <p>{{Auth::user()->grade ? Auth::user()->grade->name : 'Undefined'}} - {{Auth::user()->position ? Auth::user()->position->name : 'Undefined'}}</p>
                    </div>
                </div>
                <table class="table table-hover personal-task">
                    <tbody>
                        <tr>
                            <td>
                                <i class=" icon-tasks"></i>
                            </td>
                            <td>New Task Issued</td>
                            <td> 02</td>
                        </tr>
                        <tr>
                            <td>
                                <i class="icon-warning-sign"></i>
                            </td>
                            <td>Task Pending</td>
                            <td> 14</td>
                        </tr>
                        <tr>
                            <td>
                                <i class="icon-envelope"></i>
                            </td>
                            <td>Inbox</td>
                            <td> {{$num_unread_mess}}</td>
                        </tr>
                        <tr>
                            <td>
                                <i class=" icon-bell-alt"></i>
                            </td>
                            <td>New Notification</td>
                            <td> {{$num_unread_noti}}</td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <!--user info table end-->
        </div>
        <div class="col-lg-8">
            <!--work progress start-->
            <section class="panel">
                <div class="panel-body progress-panel">
                    <div class="task-progress">
                        <h1>Work Progress</h1>
                        <p>{{Auth::user()->name}}</p>
                    </div>
                    <!-- <div class="task-option">
                        <select class="styled">
                            <option>Anjelina Joli</option>
                            <option>Tom Crouse</option>
                            <option>Jhon Due</option>
                        </select>
                    </div> -->
                </div>
                <table class="table table-hover personal-task">
                    <tbody>
                   <!--  important, success, info, warning, primary -->
                        @php
                            $i=0;
                        @endphp
                     @foreach (Auth::user()->projects->take(5) as $project)
                           <tr>
                            <td>{{$i++}}</td>
                            <td>
                                {{$project->name}}
                            </td>
                            <td>
                                <span class="badge bg-info"> {{$project->displayCurPercentageCompleted()}}</span>
                            </td>
                            <td>
                                <div id="work-progress3"></div>
                            </td>
                        </tr>
                     @endforeach
                      
                       
                       
                    </tbody>
                </table>
            </section>
            <!--work progress end-->
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <!--latest product info start-->
            <section class="panel post-wrap pro-box">
                <aside>
                    <div class="post-info">
                        <span class="arrow-pro right"></span>
                        <div class="panel-body">
                            <h1><strong>Daily Quote</strong> <br> </h1>
                            <div class="desk yellow">
                                <h3>Albert Einstein</h3>
                                <p id="qoute_content">It has become appallingly obvious that our technology has exceeded our humanity</p>
                            </div>
                            <div class="post-btn">
                                <a href="#nextquote">
                                <i class="icon-chevron-sign-left"></i>
                                </a>
                                <a href="#previousquote">
                                <i class="icon-chevron-sign-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </aside>
                <aside class="post-highlight yellow v-align">
                    <div class="panel-body text-center">
                        <div class="pro-thumb">
                            <img src="{{url('frontend/img/innovate.jpg')}}" alt="">
                        </div>
                    </div>
                </aside>
            </section>
            <!--latest product info end-->
            <!--twitter feedback start-->
            <section class="panel post-wrap pro-box">
                <aside class="post-highlight terques v-align">
                    <div class="panel-body" id="showSkill">
                        <h2>Flatlab is new model of admin dashboard <a href="javascript:;"> http://demo.com/</a> 4 days ago  by jonathan smith</h2>
                    </div>
                </aside>
                <aside>
                    <div class="post-info">
                        <span class="arrow-pro left"></span>
                        <div class="panel-body">
                            <div class="text-center twite">
                                <h1>Your Skills</h1>
                            </div>
                            <footer class="social-footer">
                                <ul>
                                    <li>
                                        <a href="#html">
                                        <i class="icon-html5"></i>
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a href="#css">
                                        <i class="icon-css3"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        <i class="icon-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        <i class="icon-pinterest"></i>
                                        </a>
                                    </li>
                                </ul>
                            </footer>
                            <script type="text/javascript">
                                $(document).ready(function() {
                                   $('a[href="#html"]').click(function(){
                                     $('#showSkill h2').text("HTML:"); 
                                    }); 
                                });
                            </script>
                        </div>
                    </div>
                </aside>
            </section>
            <!--twitter feedback end-->
        </div>
        <div class="col-lg-4">
            <div class="row">
                <div class="col-xs-6">
                    <!--pie chart start-->
                    <section class="panel">
                        <div class="panel-body">
                            <div class="chart">
                                <div id="pie-chart" ></div>
                            </div>
                        </div>
                        <footer class="pie-foot">
                            Free: 260GB
                        </footer>
                    </section>
                    <!--pie chart start-->
                </div>
                <div class="col-xs-6">
                    <!--follower start-->
                    <section class="panel">
                        <div class="follower">
                            <div class="panel-body">
                                <h4>Jonathan Smith</h4>
                                <div class="follow-ava">
                                    <img src="img/follower-avatar.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <footer class="follower-foot">
                            <ul>
                                <li>
                                    <h5>2789</h5>
                                    <p>Follower</p>
                                </li>
                                <li>
                                    <h5>270</h5>
                                    <p>Following</p>
                                </li>
                            </ul>
                        </footer>
                    </section>
                    <!--follower end-->
                </div>
            </div>
            <!--weather statement start-->
            <section class="panel">
                <div class="weather-bg">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-6">
                                <i class="icon-cloud"></i>
                                Hanoi
                            </div>
                            <div class="col-xs-6">
                                <div class="degree">
                                    24°
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="weather-category">
                    <ul>
                        <li class="active">
                            <h5>humidity</h5>
                            56%
                        </li>
                        <li>
                            <h5>precip</h5>
                            1.50 in
                        </li>
                        <li>
                            <h5>winds</h5>
                            10 mph
                        </li>
                    </ul>
                </footer>
            </section>
            <!--weather statement end-->
        </div>
    </div>
</section>
@endsection

