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
                      All  Notification
                  </header>
                  <div class="panel-body">
                      @foreach ($all_important_noti as $noti)
                       <div class="classic-search">
                        @if ($noti->type=='App\Notifications\InvitetoProject')
                        @endif
                         <h4><a href="#">{{ $noti->data['project_name'] }}</a></h4>
                         By: <a href="#"> {{ $noti->data['leadership_name'] }}</a><br>
                          @if ($noti->type=='App\Notifications\InvitetoProject')
                            <strong>Invite to project </strong> 
                          @elseif($noti->type=='App\Notifications\DeleteState')
                            The state of this project was deleted
                          @elseif($noti->type=='App\Notifications\AddNewState')
                              New state was added in this project
                          @endif
                          <br>
                         Time:{{$noti->created_at->diffForHumans()}}
                         <br>
                         @if (is_null($noti->read_at))
                            <a class="btn btn-info" href="{{ route('markRead', $noti->id) }}">
                                 <i class="icon-eye-close"></i>
                            </a>   
                         @endif
                      </div>
                      <hr>
                     @endforeach 
                    
                      <div class="text-center">
                          <ul class="pagination">
                             @if ($all_important_noti->currentPage()!==1)
                                <li><a href="{{$all_important_noti->previousPageUrl()}}">«</a></li>
                             @endif
                             @for ($i=1; $i< $all_important_noti->lastPage()+1;$i++)
                                <li class="{{ ($all_important_noti->currentPage()==$i) ? 'active' : '' }}"><a href="{!! $all_important_noti->url($i)!!}">{{$i}}</a></li>   
                            @endfor
                            @if ($all_important_noti->currentPage()!== $all_important_noti->lastPage())
                                <li><a href="{{$all_important_noti->nextPageUrl()}}">»</a></li>
                            @endif
                          </ul>
                      </div>
                  </div>
              </section>

              <!-- page end-->
          </section>
@endsection

