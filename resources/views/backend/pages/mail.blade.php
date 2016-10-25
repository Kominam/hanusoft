@extends('backend.pages.master')
@section('external_css')
    <link href="{{url('backend/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link href="{{url('backend/assets/jquery-file-upload/css/jquery.fileupload-ui.css')}}" rel="stylesheet" type="text/css" >
@endsection
@section('content')
<section class="wrapper">
 <input type="hidden" name="_token" value="{{csrf_token()}}">
        <!--mail inbox start-->
        <div class="mail-box">
            <aside class="sm-side">
                <div class="user-head">
                    <a href="javascript:;" class="inbox-avatar">
                    <img src="{{url('frontend/img/team/'.Auth::user()->url_avt)}}" alt="" style="width: 60px;height: 64px">
                    </a>
                    <div class="user-name">
                        <h5><a href="#">{{Auth::user()->name}}</a></h5>
                        <span><a href="#">{{Auth::user()->email}}</a></span>
                    </div>
                    <a href="javascript:;" class="mail-dropdown pull-right">
                    <i class="icon-chevron-down"></i>
                    </a>
                </div>
                <div class="inbox-body">
                    <a class="btn btn-compose" data-toggle="modal" href="#myModal">
                    Compose
                    </a>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Compose</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label  class="col-lg-2 control-label">To</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" id="inputEmail1" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label  class="col-lg-2 control-label">Cc / Bcc</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" id="cc" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Subject</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" id="inputPassword1" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Message</label>
                                            <div class="col-lg-10">
                                                <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <span class="btn green fileinput-button">
                                                <i class="icon-plus icon-white"></i>
                                                <span>Attachment</span>
                                                <input type="file" multiple=""  name="files[]">
                                                </span>
                                                <button type="submit" class="btn btn-send">Send</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                </div>
                <ul class="inbox-nav inbox-divider">
                    @foreach ($belonged_projects as $project_chat)
                    <li>
                        <a href="#{{$project_chat->name}}"><i class="icon-envelope-alt"></i>{{$project_chat->name}}</a>
                    </li>
                    <script type="text/javascript">
                        $(document).ready(function() {
                              $.ajaxSetup({
                              headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                              }
                            });
                            $('a[href="#{{$project_chat->name}}"]').click(function(){
                                $('#project_chat_name').find('p').text($(this).text());
                                  $.ajax({
                                    url:'/member/get-chat-project-cont',
                                    type: "post",
                                    data: { '_token': $('input[name=_token]').val(), 'project_chat_name': "{{$project_chat->name}}"},
                                    success: function(data) {   
                                            $('#msg-cont').empty();
                                           $('#msg-cont').prepend(data);

                                }          
                            });
                                
                            }); 
                        });
                    </script>
                    @endforeach
                    <!-- <li class="active">
                        <a href="#"><i class="icon-inbox"></i> Bussiness CMS <span class="label label-danger pull-right">2</span></a>
                    </li> -->
                </ul>
            </aside>
            <aside class="lg-side">
                <div class="inbox-head">
                    <h3>Chat</h3>
                    <form class="pull-right position" action="#">
                        <div class="input-append">
                            <input type="text"  placeholder="Search Mail" class="sr-input">
                            <button type="button" class="btn sr-btn"><i class="icon-search"></i></button>
                        </div>
                    </form>
                </div>
                <div class="inbox-body">
                   
                    <section class="panel" >
                          <header class="panel-heading" id="project_chat_name">
                              <p>Bussiness CMS</p>
                        
                          </header>
                          <div class="panel-body">
                              <div class="timeline-messages" id="msg-cont">
                                <p>Please choose a topic from left-sidebar and message will appear in here</p>

                              </div>
                              <div class="chat-form">
                                    <div class="input-cont ">
                                      <input type="text" class="form-control col-lg-12" placeholder="Type a message here..." id="message">
                                  </div>
                                  <div class="form-group">
                                      <div class="pull-right chat-features">
                                          <a href="javascript:;">
                                              <i class="icon-camera"></i>
                                          </a>
                                          <a href="javascript:;">
                                              <i class="icon-link"></i>
                                          </a>
                                          <a class="btn btn-danger" href="javascript:;" id="sendMsg">Send</a>
                                      </div>
                                  </div>
                                  <script type="text/javascript">
                                      $(document).ready(function() {
                                         $.ajaxSetup({
                                          headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                          }
                                        });
                                        $('#sendMsg').click(function() {
                                              var project_chat_name = $('#project_chat_name').find('p').text();
                                              var message= $('#message').val();
                                               $.ajax({
                                                    url:'/member/chat-project',
                                                    type: "post",
                                                    data: { '_token': $('input[name=_token]').val(), 'project_chat_name': project_chat_name, 'message': message},
                                                    success: function(data) {   
                                                }          
                                            });
                                        })
                                      });
                                  </script>

                              </div>
                          </div>
                      </section>
                </div>
            </aside>
        </div>
        <!--mail inbox end-->
    </section>
@endsection
@section('external_script')
     <!-- BEGIN:File Upload Plugin JS files-->
  <script src="{{url('backend/assets/jquery-file-upload/js/vendor/jquery.ui.widget.js')}}"></script>
  <!-- The Templates plugin is included to render the upload/download listings -->
  <script src="{{url('backend/assets/jquery-file-upload/js/vendor/tmpl.min.js')}}"></script>
  <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
  <script src="{{url('backend/assets/jquery-file-upload/js/vendor/load-image.min.js')}}"></script>
  <!-- The Canvas to Blob plugin is included for image resizing functionality -->
  <script src="{{url('backend/assets/jquery-file-upload/js/vendor/canvas-to-blob.min.js')}}"></script>
  <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
  <script src="{{url('backend/assets/jquery-file-upload/js/jquery.iframe-transport.js')}}"></script>
  <!-- The basic File Upload plugin -->
  <script src="{{url('backend/assets/jquery-file-upload/js/jquery.fileupload.js')}}"></script>
  <!-- The File Upload file processing plugin -->
  <script src="{{url('backend/assets/jquery-file-upload/js/jquery.fileupload-fp.js')}}"></script>
  <!-- The File Upload user interface plugin -->
  <script src="{{url('backend/assets/jquery-file-upload/js/jquery.fileupload-ui.js')}}"></script>
   <script src="{{url('backend/js/jquery-1.8.3.min.js')}}"></script>
   <script class="include" type="text/javascript" src="{{url('backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
@stop