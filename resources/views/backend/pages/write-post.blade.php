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
                  <form class="form-horizontal tasi-form" method="get"> 
                      <section class="panel">
                          <div class="panel-body">
                              
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Category</label>
                                      <div class="col-lg-10">
                                           <div class="radio">
                                              <label>
                                                  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                                  Technology
                                              </label>
                                          </div>
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                                 Design
                                              </label>
                                          </div>
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
                                          <input type="text" class="form-control" id="" placeholder="Enter title">
                                        </div>
                                      
                                         </div>
                                      <div class="form-group">
                                          <label class="col-sm-2 control-label col-sm-2">Content</label>
                                          <div class="col-sm-10">
                                              <textarea class="form-control ckeditor" name="editor1" rows="6"></textarea>
                                          </div>
                                      </div>
                              </div>
                          </div>
                          </section>
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