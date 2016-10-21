@extends('backend.pages.master')
@section('external_css')
     <link href="{{url('backend/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
@endsection
@section('content')
<section class="wrapper">
        <!-- page start-->
        <div class="row">
            <aside class="profile-nav col-lg-3">
                <section class="panel">
                    <div class="user-heading round">
                        <a href="#">
                        <img src="{{url('frontend/img/team/'.Auth::user()->url_avt)}}" alt="">
                        </a>
                        <h1>{{$member->name}}</h1>
                        <p>{{$member->email}}</p>
                    </div>
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="profile.html"> <i class="icon-user"></i> Profile</a></li>
                        <li><a href="profile-activity.html"> <i class="icon-calendar"></i> Recent Activity <span class="label label-danger pull-right r-activity">9</span></a></li>
                        <li><a href="{{route('profile-edit')}}"> <i class="icon-edit"></i> Edit profile</a></li>
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
                        Aliquam ac magna metus. Nam sed arcu non tellus fringilla fringilla ut vel ispum. Aliquam ac magna metus.
                    </div>
                    <div class="panel-body bio-graph-info">
                        <h1>Bio Graph</h1>
                        <div class="row">
                            <div class="bio-row">
                                <p><span>First Name </span>: Jonathan</p>
                            </div>
                            <div class="bio-row">
                                <p><span>Last Name </span>: Smith</p>
                            </div>
                            <div class="bio-row">
                                <p><span>Country </span>: Australia</p>
                            </div>
                            <div class="bio-row">
                                <p><span>Birthday</span>: 13 July 1983</p>
                            </div>
                            <div class="bio-row">
                                <p><span>Occupation </span>: {{$member->position->name}}</p>
                            </div>
                            <div class="bio-row">
                                <p><span>Email </span>: {{$member->email}}</p>
                            </div>
                            <div class="bio-row">
                                <p><span>Mobile </span>: (12) 03 4567890</p>
                            </div>
                            <div class="bio-row">
                                <p><span>Phone </span>: 88 (02) 123456</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="row">
                       
                            @foreach ($member->projects as $project)
                             <div class="col-lg-6">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="bio-chart">
                                            <input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="35" data-fgColor="#e06b7d" data-bgColor="#e8e8e8">
                                        </div>
                                        <div class="bio-desk">
                                            <h4 class="red">{{$project->name}}</h4>
                                            <p>Started : 15 July</p>
                                            <p>Deadline : 15 August</p>
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