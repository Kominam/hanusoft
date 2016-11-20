@extends('backend.pages.master')
@section('external_css')
   
   <link href="{{url('backend/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ elixir('css/jquery-typeahead.css') }}">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="{{ elixir('js/jquery-typeahead.js') }}"></script>
    <script src="{{ url('backend/js/search-post.js') }}"></script>
 
@endsection
@section('external_script')
    <script src="{{url('backend/js/jquery-1.8.3.min.js')}}"></script>
    <script class="include" type="text/javascript" src="{{url('backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
   
@endsection
@section('content')
    @if (session('statusCreate')==='success')
       <script type="text/javascript">
            swal({
              title: "Succesful!",
              text: "Create post successful!",
              type: "success",
              timer:2000,
              confirmButtonText: "OK"
            });
       </script>
    @elseif (session('statusCreate')==='error')
        <script type="text/javascript">
            swal({
              title: "Whoops!",
              text: "Something went wrong!",
              type: "error",
              confirmButtonText: "OK"
            });
       </script>
    @endif
    @if (session('statusEdit')==='success')
       <script type="text/javascript">
            swal({
              title: "Succesful!",
              text: "Edit post successful!",
              type: "success",
              timer:2000,
              confirmButtonText: "OK"
            });
       </script>
     @elseif (session('statusEdit')==='error')
        <script type="text/javascript">
            swal({
              title: "Whoops!",
              text: "Something went wrong!",
              type: "error",
              confirmButtonText: "OK"
            });
       </script>
    @endif
    @if (session('statusDelete')==='success')
       <script type="text/javascript">
            swal({
              title: "Succesful!",
              text: "Delete post successful!",
              type: "success",
              timer: 1500,
              confirmButtonText: "OK"
            });
       </script>
    @endif
    <section class="wrapper">
              <!-- page start-->
              <section class="panel">
                  <header class="panel-heading">
                      Search Your Post
                  </header>
                  <div class="panel-body">
                    <var id="result-container" class="result-container"></var>
                  <form id="form-country_v2" name="form-country_v2">
                      <div class="typeahead__container">
                          <div class="typeahead__field">
                   
                              <span class="typeahead__query">
                                  <input class="js-typeahead-country_v2" name="country_v2[query]" type="search" placeholder="Search" autocomplete="off">
                              </span>
                              <span class="typeahead__button">
                                  <button type="submit">
                                      <i class="typeahead__search-icon"></i>
                                  </button>
                              </span>
                   
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

