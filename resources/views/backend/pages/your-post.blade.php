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
                      Search Your Post
                  </header>
                  <div class="panel-body">
                      <form class="form-horizontal search-result">
                          <div class="form-group">
                              <label class="col-lg-1 col-sm-1 control-label">Search</label>
                              <div class="col-lg-8 col-sm-8">
                                  <input type="text" class="form-control input-xxlarge">
                                 <!--  <p class="help-block">About 5,880,000 results (0.23 seconds) </p> -->
                              </div>
                              <div class="col-lg-2">
                                  <button class="btn " type="submit">SEARCH</button>
                              </div>
                          </div>
                      </form>
                      @foreach ($posts_of_cur_user as $post)
                        <div class="classic-search">
                          <h4><a href=" {{ route('post_detail', $post->slug) }}" target="_blank">{{$post->tittle}}</a></h4>
                          <a href=" {{ route('post_detail', $post->slug) }}" target="_blank"> {{ route('post_detail', $post->slug) }}</a>
                          {!! substr($post->content, 0,200)!!}[...]
                          <br>
                           <a class="btn btn-info" href="{{ route('post.edit', $post->slug) }}">
                                  <i class="icon-edit"></i>
                           </a>
                           <a class="btn btn-danger" data-toggle="modal" href="#myModal{{$post->id}}">
                                  <i class="icon-trash"></i>
                           </a>
                           
                            <div class="modal fade" id="myModal{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              <h4 class="modal-title">Warning</h4>
                                          </div>
                                          <div class="modal-body">

                                              Are you sure to delete this post?

                                          </div>
                                          <div class="modal-footer">
                                              <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                              <a class="btn btn-danger" href="{{ route('post.destroy', $post->id) }}">Yes, I sure</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                       </div>
                      @endforeach
                    
                      <div class="text-center">
                          <ul class="pagination">
                             @if ($posts_of_cur_user->currentPage()!==1)
                                <li><a href="{{$posts_of_cur_user->previousPageUrl()}}">«</a></li>
                             @endif
                             @for ($i=1; $i< $posts_of_cur_user->lastPage()+1;$i++)
                                <li class="{{ ($posts_of_cur_user->currentPage()==$i) ? 'active' : '' }}"><a href="{!! $posts_of_cur_user->url($i)!!}">{{$i}}</a></li>   
                            @endfor
                            @if ($posts_of_cur_user->currentPage()!== $posts_of_cur_user->lastPage())
                                <li><a href="{{$posts_of_cur_user->nextPageUrl()}}">»</a></li>
                            @endif
                          </ul>
                      </div>
                  </div>
              </section>

              <!-- page end-->
          </section>
@endsection

