@extends('backend.pages.master')
@section('external_css')
    <link href="{{url('backend/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
@endsection
@section('content')
@if (session('statusEditBasicProfile')==='error')
      <script type="text/javascript">
            swal({
              title: "Whoops!",
              text: "Something went wrong !",
              type: "error",
              confirmButtonText: "OK"
            });
       </script>
@endif
@if (session('p_wrong_input'))
      <script type="text/javascript">
            swal({
              title: "Whoops!",
              text: "Something went wrong !",
              type: "error",
              confirmButtonText: "OK"
            });
       </script>
@endif
@if (session('wrong_current_pass'))
      <script type="text/javascript">
            swal({
              title: "Whoops!",
              text: "Something went wrong !",
              type: "error",
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
                          <img src="{{url($member->url_avt)}}" alt="">
                          </a>
                          <h1>{{$member->name}}</h1>
                          <p>{{$member->email}}</p>
                      </div>
                    <ul class="nav nav-pills nav-stacked">
                         <li ><a href="{{ route('profile.show') }}"> <i class="icon-user"></i> Profile</a></li>
                        <li><a href="{{ route('profile.activity') }}"> <i class="icon-calendar"></i> Recent Activity <span class="label label-danger pull-right r-activity">9</span></a></li>
                        <li class="active"><a href="{{route('profile.edit')}}"> <i class="icon-edit"></i> Edit profile</a></li>
                    </ul>
                </section>
            </aside>
            <aside class="profile-info col-lg-9">
                <section class="panel">
                    <div class="bio-graph-heading">
                       {{$member->bio}}
                    </div>
                    <div class="panel-body bio-graph-info">
                        <h1> Profile Info</h1>
                        <form class="form-horizontal" role="form" action="{{ route('profile.update') }}" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label  class="col-lg-2 control-label">About Me</label>
                                <div class="col-lg-10">
                                    <textarea name="bio" id="" class="form-control" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-lg-2 control-label">Name</label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="name" placeholder=" " name="name" value="{{$member->name}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-lg-2 control-label">Address</label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="address" placeholder=" " name="address" value="{{$member->address}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-lg-2 control-label">Gender</label>
                                <div class="col-lg-6">
                                    <select class="form-control m-bot15" name="gender">
                                       <option value="0" {{($member->gender=0)? 'selected' : ''}}>Undefined</option>
                                       <option value="1" {{($member->gender=1)? 'selected' : ''}}>Male</option>
                                       <option value="2" {{($member->gender=2)? 'selected' : ''}}>Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-lg-2 control-label">Birthday</label>
                                <div class="col-lg-6">
                                    <input type="date" class="form-control" id="birthday" placeholder=" " name="birthday" value="{{$member->birthday}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-lg-2 control-label">Occupation</label>
                                <div class="col-lg-6">
                                   <select class="form-control m-bot15" name="position_id">
                                      @foreach ($all_position as $position)
                                          <option value="{{$position->id}}"
                                            @if ($member->position)
                                              {{($position->id === $member->position->id) ? 'selected="selected"' : ''}}
                                            @endif
                                          >{{$position->name}}</option>
                                      @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-lg-2 control-label">Mobile</label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="email" placeholder=" " name="phone" value={{$member->phone}}>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-lg-2 control-label">Grade</label>
                                <div class="col-lg-6">
                                    <select class="form-control m-bot15" name="grade_id">
                                        @foreach ($all_grade as $grade)
                                            <option value="{{$grade->id}}" 
                                            @if ($member->grade)
                                               {{($grade->id === $member->grade->id) ? 'selected="selected"' : ''}}
                                            @endif
                                            >{{$grade->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-lg-2 control-label">URL Facebook</label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="url" placeholder="http://www.demowebsite.com " name="url_fb" value="{{$member->url_fb}}">
                                </div>
                            </div>
                             <div class="form-group">
                                <label  class="col-lg-2 control-label">URL Gmail</label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="url" placeholder="http://www.demowebsite.com " name="url_gmail" value="{{$member->url_gmail}}">
                                </div>
                            </div>
                             <div class="form-group">
                                <label  class="col-lg-2 control-label">URL Github</label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="url" placeholder="http://www.demowebsite.com " name="url_github" value="{{$member->url_github}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn btn-success">Save</button>
                                    <button type="reset" class="btn btn-default">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
                <section>
                    <div class="panel panel-primary">
                        <div class="panel-heading"> Sets New Password & Avatar</div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" enctype="multipart/form-data" method="POST" action="{{ route('profile.changePassword') }}">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="form-group">
                                    <label  class="col-lg-2 control-label">Current Password</label>
                                    <div class="col-lg-6">
                                        <input type="password" class="form-control" id="c-pwd" placeholder=" " name="currentPassword">   
                                    </div>
                                    @if (session('wrong_current_pass'))
                                        <span style="color: red">
                                            {{ session('wrong_current_pass') }}
                                       </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label  class="col-lg-2 control-label">New Password</label>
                                    <div class="col-lg-6">
                                        <input type="password" class="form-control" id="n-pwd" name="newPass">
                                    </div>
                                    @if ($errors->has('newPass'))
                                              <span style="color: red">{{ $errors->first('newPass') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label  class="col-lg-2 control-label">Re-type New Password</label>
                                    <div class="col-lg-6">
                                        <input type="password" class="form-control" id="rt-pwd" placeholder=" " name="newPass_confirmation">
                                    </div>
                                     @if ($errors->has('newPass_confirmation'))
                                              <span style="color: red">{{ $errors->first('newPass_confirmation') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label  class="col-lg-2 control-label">Change Avatar</label>
                                    <div class="col-lg-6">
                                        <input type="file" class="file-pos" id="exampleInputFile" name="AvtImgFile">
                                    </div>

                                      @if ($errors->has('AvtImgFile'))
                                              <span style="color: red">{{ $errors->first('AvtImgFile') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label  class="col-lg-2 control-label">Preview Image</label>
                                    <div class="col-lg-6">
                                       <img id="blah" src="#" width="35px" height="35px" alt="your image" />
                                       <script type="text/javascript">
                                           function readURL(input) {
                                            if (input.files && input.files[0]) {
                                                var reader = new FileReader();
                                                reader.onload = function (e) {
                                                    $('#blah').attr('src', e.target.result);
                                                }
                                                reader.readAsDataURL(input.files[0]);
                                            }
                                        }
                                        $("#exampleInputFile").change(function(){
                                            readURL(this);
                                        });
                                       </script>
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