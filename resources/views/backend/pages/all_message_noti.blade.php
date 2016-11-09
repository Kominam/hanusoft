@extends('backend.pages.master')
@section('external_css')
   <link href="{{url('backend/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
@endsection
@section('external_script')
    <script src="{{url('backend/js/jquery-1.8.3.min.js')}}"></script>
    <script class="include" type="text/javascript" src="{{url('backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
   
@endsection
@section('content')
    <section class="wrapper">
              <!-- page start-->
              <section class="panel">
                  <header class="panel-heading">
                      All Message Notification
                  </header>
                  <div class="panel-body">
                      @foreach ($all_mess_noti as $mess)
                       <div class="classic-search">
                         <h4><a href="{{ route('profile.inbox') }}">{{ $mess->data['project_chat_name'] }}</a></h4>
                         From: <a href="#"> {{ $mess->data['member_name'] }}</a><br>

                         Meessage: {!! $mess->data['message']!!}
                         <br>
                         Time:{{$mess->created_at->diffForHumans()}}
                         <br>
                         @if (is_null($mess->read_at))
                            <a class="btn btn-info" href="{{ route('markRead', $mess->id) }}">
                                 <i class="icon-eye-close"></i>
                            </a>   
                         @endif
                      </div>
                      <hr>
                     @endforeach 
                    
                      <div class="text-center">
                          <ul class="pagination">
                             @if ($all_mess_noti->currentPage()!==1)
                                <li><a href="{{$all_mess_noti->previousPageUrl()}}">«</a></li>
                             @endif
                             @for ($i=1; $i< $all_mess_noti->lastPage()+1;$i++)
                                <li class="{{ ($all_mess_noti->currentPage()==$i) ? 'active' : '' }}"><a href="{!! $all_mess_noti->url($i)!!}">{{$i}}</a></li>   
                            @endfor
                            @if ($all_mess_noti->currentPage()!== $all_mess_noti->lastPage())
                                <li><a href="{{$all_mess_noti->nextPageUrl()}}">»</a></li>
                            @endif
                          </ul>
                      </div>
                  </div>
              </section>

              <!-- page end-->
          </section>
@endsection

