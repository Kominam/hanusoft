@extends('backend.pages.master')
@section('external_css')
    <link href="{{url('backend/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{url('backend/assets/bootstrap-datepicker/css/datepicker.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('backend/assets/bootstrap-colorpicker/css/colorpicker.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('backend/assets/bootstrap-daterangepicker/daterangepicker.css')}}" />
@endsection
@section('content')
     <section class="wrapper">
              <!-- page start-->
              @cannot('create-project')
                <h3>Sorry you have not permission to create project</h3>
              @endcannot
              @can('create-project')
                 <div class="row">
                  <div class="col-lg-12">
                  <form class="form-horizontal tasi-form" method="POST" action="{{ route('createProject') }}"> 
                      <section class="panel">
                          <div class="panel-body">
                              <input type="hidden" name="_token" value="{{csrf_token()}}">
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Category</label>
                                      <div class="col-lg-5">
                                        @foreach ($all_project_cate as $project_cate)
                                           <div class="radio">
                                              <label>
                                                  <input type="radio" name="project_cate_id" id="optionsRadios1" value="{{$project_cate->id}}">
                                                  {{$project_cate->name}}
                                              </label>
                                          </div>
                                        @endforeach
                                          @if ($errors->has('project_cate_id'))
                                              <span style="color: red">{{ $errors->first('project_cate_id') }}</span>
                                          @endif
                                      </div>
                                       <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Required Skills</label>
                                        <div class="col-lg-3">
                                        @foreach ($all_skill as $skill)
                                           <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" name="skills[]" id="optionsRadios1" value="{{$skill->id}}">
                                                  {{$skill->name}}
                                              </label>
                                          </div>
                                        @endforeach
                                          @if ($errors->has('skills'))
                                              <span style="color: red">{{ $errors->first('skills') }}</span>
                                          @endif
                                      </div>
                                  </div>
                          </div>
                      </section>
                      <section class="panel">
                        <header class="panel-heading">
                            Invite member
                        </header>
                        <div class="panel-body">
                             <div class="form-group">
                                        <label class="col-sm-2 control-label col-sm-2">Invite memebr</label>
                                        <div class="col-sm-10">
                                             @foreach ($all_member as $member)
                                           <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" name="inviters[]" id="optionsRadios1" value="{{$member->id}}">
                                                  {{$member->name}}
                                              </label>
                                          </div>
                                        @endforeach
                                        </div>
                                    </div>
                        </div>
                      </section>
                      <section class="panel">
                          <header class="panel-heading">
                              Content
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label col-sm-2">Tittle</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="" name="name" placeholder="Enter project name">
                                        </div>
                                        @if ($errors->has('name'))
                                              <span style="color: red">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                     <div class="form-group">
                                        <label class="col-sm-2 control-label col-sm-2">Link preview (optional)</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="" name="link_preview" value="http://">
                                        </div>
                                         @if ($errors->has('link_preview'))
                                              <span style="color: red">{{ $errors->first('link_preview') }}</span>
                                        @endif
                                    </div>
                                      <div class="form-group">
                                          <label class="col-sm-2 control-label col-sm-2">Description</label>
                                          <div class="col-sm-10">
                                              <textarea class="form-control ckeditor" name="description" rows="6"></textarea>
                                          </div>
                                           @if ($errors->has('description'))
                                              <span style="color: red">{{ $errors->first('description') }}</span>
                                        @endif
                                      </div>
                              </div>
                          </div>
                          </section>
                    <input type="submit" value="Create">
                  </form>
                  </div>
              </div>
              @endcan
             
              <!-- page end-->
          </section>
@endsection
@section('external_script')
  <script src="{{url('backend/js/jquery-ui-1.9.2.custom.min.js')}}"></script>
  <script src="{{url('backend/js/bootstrap-switch.js')}}"></script>
  <!--custom tagsinput-->
  <script src="{{url('backend/js/jquery.tagsinput.js')}}"></script>
  <!--custom checkbox & radio-->
  <script type="text/javascript" src="{{url('backend/js/ga.js')}}"></script>

  <script type="text/javascript" src="{{url('backend/assets/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
  <script type="text/javascript" src="{{url('backend/assets/bootstrap-daterangepicker/date.js')}}"></script>
  <script type="text/javascript" src="{{url('backend/assets/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
  <script type="text/javascript" src="{{url('backend/assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script>
  <script type="text/javascript" src="{{url('backend/assets/ckeditor/ckeditor.js')}}"></script>

  <script type="text/javascript" src="{{url('backend/assets/bootstrap-inputmask/bootstrap-inputmask.min.js')}}"></script>
   <script src="{{url('backend/js/form-component.js')}}"></script>
    <script src="{{url('backend/js/jquery-1.8.3.min.js')}}"></script>
   <script class="include" type="text/javascript" src="{{url('backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
@endsection