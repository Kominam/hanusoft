@extends('backend.pages.master')
@section('external_css')
     <link href="{{url('backend/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
@endsection
@section('content')
@if (session('statusEditBasicProfile')==='success')
       <script type="text/javascript">
            swal({
              title: "Succesful!",
              text: "Your information was up-to-date!",
              type: "success",
              timer:2000,
              confirmButtonText: "OK"
            });
       </script>
@endif
@if (session('change_profile')==='OK')
       <script type="text/javascript">
            swal({
              title: "Succesful!",
              text: "Your password and avatar was up-to-date!",
              type: "success",
              timer:2000,
              confirmButtonText: "OK"
            });
       </script>
@endif
<section class="wrapper">
        <!-- page start-->
        <div class="row">
            <aside class="profile-nav col-lg-3">
                <section class="panel">
                    <div class="user-heading round">
                        <a href="#">
                        <img src="{{url(Auth::user()->url_avt)}}" alt="">
                        </a>
                        <h1>{{$member->name}}</h1>
                        <p>{{$member->email}}</p>
                    </div>
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="{{ route('profile.show') }}"> <i class="icon-user"></i> Profile</a></li>
                        <li><a href="{{ route('profile.activity') }}"> <i class="icon-calendar"></i> Recent Activity <span class="label label-danger pull-right r-activity">9</span></a></li>
                        <li><a href="{{route('profile.edit')}}"> <i class="icon-edit"></i> Edit profile</a></li>
                    </ul>
                </section>
            </aside>
            <aside class="profile-info col-lg-9">
                <section class="panel">
                    <form>
                        <textarea placeholder="Whats in your mind today?" rows="2" class="form-control input-lg p-text-area"></textarea>
                    </form>
                    <footer class="panel-footer">
                        <button class="btn btn-danger pull-right">Post</button>
                        <ul class="nav nav-pills">
                            <li>
                                <a href="#"><i class="icon-map-marker"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-camera"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class=" icon-film"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-microphone"></i></a>
                            </li>
                        </ul>
                    </footer>
                </section>
                <section class="panel">
                    <div class="bio-graph-heading">
                       {{$member->bio}}
                    </div>
                    <div class="panel-body bio-graph-info">
                        <h1>Bio Graph</h1>
                        <div class="row">
                            <div class="bio-row">
                                <p><span>Name </span>: {{$member->name}}</p>
                            </div>
                            <div class="bio-row">
                                <p><span>Gender </span>: 
                                    @if($member->gender==0)
                                        Underfined
                                    @elseif($member->gender==1)
                                        Male
                                    @else
                                        Female
                                    @endif
                                </p>
                            </div>
                            <div class="bio-row">
                                <p><span>Address </span>: {{$member->address}}</p>
                            </div>
                            <div class="bio-row">
                                <p><span>Birthday</span>: {{$member->birthday}}</p>
                            </div>
                            <div class="bio-row">
                                <p><span>Occupation </span>: {{$member->position ? $member->position->name : 'Undefined'}}</p>
                            </div>
                            <div class="bio-row">
                                <p><span>Email </span>: {{$member->email}}</p>
                            </div>
                            <div class="bio-row">
                                <p><span>Mobile </span>: {{$member->phone}}</p>
                            </div>
                              <div class="bio-row">
                                <p><span>Grade </span>: {{$member->grade ? $member->grade->name: 'Undefined'}}</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="row">
                       @php
                        function rand_color() {
                            return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
                        }
                       @endphp
                            @foreach ($member->projects as $project)
                             <div class="col-lg-6">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="bio-chart">
                                            <input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="{{Auth::user()->calContribute($project->id)}}" data-fgColor="{{rand_color()}}" data-bgColor="#e8e8e8">
                                        </div>
                                        <div class="bio-desk">
                                            <h4 class="red">{{$project->name}}</h4>
                                            <p>Started : {{$project->displayStartDate()}}</p>
                                            <p>Deadline : {{$project->displayPlanEndDate()}}</p>
                                            <p>Actual: {{$project->displayActualEndDate()}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                      
                    </div>
                </section>
            </aside>
        </div>
        <!-- page end-->
    </section>
@endsection
@section('external_script')
     <script src="{{url('backend/assets/jquery-knob/js/jquery.knob.js')}}"></script>
     <script>

      //knob
      $(".knob").knob();

  </script>
   <script src="{{url('backend/js/jquery-1.8.3.min.js')}}"></script>
   <script class="include" type="text/javascript" src="{{url('backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
@endsection