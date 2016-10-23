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
                          <img src="{{url('frontend/img/team/'.$member->url_avt)}}" alt="">
                          </a>
                          <h1>{{$member->name}}</h1>
                          <p>{{$member->email}}</p>
                      </div>
                    <ul class="nav nav-pills nav-stacked">
                         <li ><a href="{{ route('profile') }}"> <i class="icon-user"></i> Profile</a></li>
                        <li><a href="{{ route('profile-activity') }}"> <i class="icon-calendar"></i> Recent Activity <span class="label label-danger pull-right r-activity">9</span></a></li>
                        <li class="active"><a href="{{route('profile-edit')}}"> <i class="icon-edit"></i> Edit profile</a></li>
                    </ul>
                </section>
            </aside>
            <aside class="profile-info col-lg-9">
                <section class="panel">
                    <div class="bio-graph-heading">
                        Aliquam ac magna metus. Nam sed arcu non tellus fringilla fringilla ut vel ispum. Aliquam ac magna metus.
                    </div>
                    <div class="panel-body bio-graph-info">
                        <h1> Profile Info</h1>
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label  class="col-lg-2 control-label">About Me</label>
                                <div class="col-lg-10">
                                    <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-lg-2 control-label">Name</label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="name" placeholder=" ">
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-lg-2 control-label">Address</label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="address" placeholder=" ">
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-lg-2 control-label">Gender</label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="b-day" placeholder=" ">
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-lg-2 control-label">Occupation</label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="occupation" placeholder=" ">
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-lg-2 control-label">Mobile</label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="email" placeholder=" ">
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-lg-2 control-label">Grade</label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="mobile" placeholder=" ">
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-lg-2 control-label">URL Facebook</label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="url" placeholder="http://www.demowebsite.com ">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn btn-success">Save</button>
                                    <button type="button" class="btn btn-default">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
                <section>
                    <div class="panel panel-primary">
                        <div class="panel-heading"> Sets New Password & Avatar</div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" enctype="multipart/form-data" method="POST" action="{{ route('change-pwd') }}">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="form-group">
                                    <label  class="col-lg-2 control-label">Current Password</label>
                                    <div class="col-lg-6">
                                        <input type="password" class="form-control" id="c-pwd" placeholder=" ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-lg-2 control-label">New Password</label>
                                    <div class="col-lg-6">
                                        <input type="password" class="form-control" id="n-pwd" name="n_pwd">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-lg-2 control-label">Re-type New Password</label>
                                    <div class="col-lg-6">
                                        <input type="password" class="form-control" id="rt-pwd" placeholder=" ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-lg-2 control-label">Change Avatar</label>
                                    <div class="col-lg-6">
                                        <input type="file" class="file-pos" id="exampleInputFile" name="AvtImgFile">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button type="submit" class="btn btn-info">Save</button>
                                        <button type="button" class="btn btn-default">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </aside>
        </div>
        <!-- page end-->
</section>
@endsection
@section('external_script')
   <script src="{{url('backend/assets/jquery-knob/js/jquery.knob.js')}}"></script>
    <script src="{{url('backend/js/jquery-1.8.3.min.js')}}"></script>
   <script class="include" type="text/javascript" src="{{url('backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
@endsection