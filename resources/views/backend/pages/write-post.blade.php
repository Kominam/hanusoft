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
              <div class="row">
                  <div class="col-lg-12">
                  <form class="form-horizontal tasi-form" method="post" action="{{ route('writePost') }}">
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                    @if (count($errors) >0)
                        <section class="panel">
                          <div class="panel-heading">
                            Errors
                          </div>
                          <div class="panel-body">
                              <strong>Something went wrong.Check detail below</strong>
                          </div>
                        </section>
                    @endif
                      <section class="panel">
                          <div class="panel-body">
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Category</label>
                                      <div class="col-lg-10">
                                            @foreach ($all_post_cate as $post_cate)
                                              <div class="radio">
                                               <label>
                                                  <input type="radio" name="post_type_id" id="optionsRadios1" value="{{$post_cate->id}}">
                                                  {{$post_cate->name}}
                                              </label>
                                              </div>
                                            @endforeach
                                               @if ($errors->has('post_type_id'))
                                              <span style="color: red">{{ $errors->first('post_type_id') }}</span>
                                              @endif
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
                                          <input type="text" class="form-control" id="" placeholder="Enter title" name="tittle" required>

                                          @if ($errors->has('tittle'))
                                          <span style="color: red">{{ $errors->first('tittle') }}</span>
                                          @endif
                                        </div>

                                         </div>
                                      <div class="form-group">
                                          <label class="col-sm-2 control-label col-sm-2">Content</label>
                                          <div class="col-sm-10">
                                              <textarea class="form-control ckeditor" name="content" rows="25"></textarea>
                                               @if ($errors->has('content'))
                                              <span style="color: red">{{ $errors->first('content') }}</span>
                                              @endif
                                          </div>
                                      </div>
                              </div>
                          </div>
                      </section>
                     <input type="submit" name="submit" value="submit">
                  </form>
                  </div>
              </div>
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
