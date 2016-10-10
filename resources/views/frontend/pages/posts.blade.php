@extends('frontend.pages.master')
@section('content')

<div role="main" class="main">
    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                          {!! Breadcrumbs::render('posts') !!}
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Large Image</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="posts_details">
                    {{-- <article class="post post-large">
                        <div class="post-image">
                            <div class="owl-carousel" data-plugin-options='{"items":1}'>
                                <div>
                                    <div class="img-thumbnail">
                                        <img class="img-responsive" src="{{url('frontend/img/blog/blog-image-3.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div>
                                    <div class="img-thumbnail">
                                        <img class="{{url('frontend/img-responsive" src="img/blog/blog-image-2.jpg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-date">
                            <span class="day">10</span>
                            <span class="month">Jan</span>
                        </div>
                        <div class="post-content">
                            <h2><a href="{{route('post_detail')}}">Post Format - Image Gallery</a></h2>
                            <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. [...]</p>
                            <div class="post-meta">
                                <span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
                                <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
                                <a href="{{route('post_detail')}}" class="btn btn-xs btn-primary pull-right">Read more...</a>
                            </div>
                        </div>
                    </article> --}}
                    @foreach ($posts as $post)
                    <article class="post post-large">
                        <div class="post-image single">
                            <img class="img-thumbnail" src="{{url('frontend/img/blog/blog-image-2.jpg')}}" alt="">
                        </div>
                        <div class="post-date">
                            <span class="day">{{$post->created_at->format('d')}}</span>
                            <span class="month">
                            {{substr($post->created_at->format('F'),0,3)}}</span>
                        </div>
                        <div class="post-content">
                            <h2><a href="{{route('post_detail',['id'=>$post->id])}}">{{$post->tittle}}</a></h2>
                            <p>{{substr($post->content,0,450)}}[...]</p>
                            <div class="post-meta">
                                <span><i class="fa fa-user"></i> By <a href="{{ route('member_detail',$post->user->id) }}">{{$post->user->name}}</a> </span>
                                <span><i class="fa fa-tag"></i> <a href={{route('browse-post-by-cate', $post->type->id)}}>{{$post->type->name}}</a></span>
                                <span><i class="fa fa-comments"></i> <a href="#">{{$post->comments->count()}} Comments</a></span>
                                <a href="{{route('post_detail',['id'=>$post->id])}}" class="btn btn-xs btn-primary pull-right">Read more...</a>
                            </div>
                        </div>
                    </article>
                    @endforeach
                   {{--  <article class="post post-large">
                        <div class="post-video">
                            <iframe src="http://player.vimeo.com/video/28614006?color=0088CC" width="1280" height="720" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                        <div class="post-date">
                            <span class="day">10</span>
                            <span class="month">Jan</span>
                        </div>
                        <div class="post-content">
                            <h2><a href="{{route('post_detail')}}">Post Format - Video</a></h2>
                            <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. [...]</p>
                            <div class="post-meta">
                                <span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
                                <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
                                <a href="{{route('post_detail')}}" class="btn btn-xs btn-primary pull-right">Read more...</a>
                            </div>
                        </div>
                    </article>
                    <article class="post post-large">
                        <div class="post-audio">
                            <iframe scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F67943430&amp;show_artwork=true&amp;maxwidth=132&amp;maxheight=1000"></iframe>
                        </div>
                        <div class="post-date">
                            <span class="day">10</span>
                            <span class="month">Jan</span>
                        </div>
                        <div class="post-content">
                            <h2><a href="{{route('post_detail')}}">Post Format - Audio</a></h2>
                            <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. [...]</p>
                            <div class="post-meta">
                                <span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
                                <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
                                <a href="{{route('post_detail')}}" class="btn btn-xs btn-primary pull-right">Read more...</a>
                            </div>
                        </div>
                    </article>
                    <article class="post post-large">
                        <div class="post-date">
                            <span class="day">10</span>
                            <span class="month">Jan</span>
                        </div>
                        <div class="post-content">
                            <blockquote>
                                Post Format - Blockquote - Mauris aliquet ultricies ante, non faucibus ante gravida sed. Sed ultrices pellentesque purus, vulputate volutpat ipsum hendrerit sed neque sed sapien rutrum laoreet justo ultrices. In pellentesque lorem condimentum dui morbi pulvinar dui non quam pretium ut lacinia tortor.
                                <small>Someone famous <cite title="Source Title">Source Title</cite></small>
                            </blockquote>
                            <div class="post-meta">
                                <span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
                                <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
                                <a href="{{route('post_detail')}}" class="btn btn-xs btn-primary pull-right">Read more...</a>
                            </div>
                        </div>
                    </article> --}}

                    <ul class="pagination pagination-lg pull-right">
                         @if ($posts->currentPage()!==1)
                            <li><a href="{{$posts->previousPageUrl()}}">«</a></li>
                         @endif
                         @for ($i=1; $i< $posts->lastPage()+1;$i++)
                            <li class="{{ ($posts->currentPage()==$i) ? 'active' : '' }}"><a href="{!! $posts->url($i)!!}">{{$i}}</a></li>   
                        @endfor
                        @if ($posts->currentPage()!== $posts->lastPage())
                            <li><a href="{{$posts->nextPageUrl()}}">»</a></li>
                        @endif
                       
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <aside class="sidebar">
                    <form>
                        <div class="input-group input-group-lg">
                            <input class="form-control" placeholder="Search..." name="s" id="s" type="text">
                            <span class="input-group-btn">
                            <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <hr />
                    <h4>Categories</h4>
                    <ul class="nav nav-list primary push-bottom">
                    @foreach ($all_post_cate as $post_cate)
                        <li><a href="{{route('browse-post-by-cate', $post_cate->id)}}">{{$post_cate->name}}</a></li>
                    @endforeach
                    </ul>
                    <div class="tabs">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#popularPosts" data-toggle="tab"><i class="fa fa-star"></i> Popular</a></li>
                            <li><a href="#recentPosts" data-toggle="tab">Recent</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="popularPosts">
                                <ul class="simple-post-list">
                                @foreach($popular_posts as $ppost)
                                    <li>
                                        <div class="post-image">
                                            <div class="img-thumbnail">
                                                <a href="{{route('post_detail', $ppost->id)}}">
                                                <img src="{{url('frontend/img/blog/blog-thumb-1.jpg')}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <a href="{{route('post_detail', $ppost->id)}}">{{$ppost->tittle}}</a>
                                            <div class="post-meta">
                                                {{$ppost->created_at->toFormattedDateString()}}
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                                </ul>
                            </div>
                            <div class="tab-pane" id="recentPosts">
                                <ul class="simple-post-list">
                                @foreach ($recent_posts as $rpost)
                                    <li>
                                        <div class="post-image">
                                            <div class="img-thumbnail">
                                                <a href="{{route('post_detail', $rpost->id)}}">
                                                <img src="{{url('frontend/img/blog/blog-thumb-2.jpg')}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                           <a href="{{route('post_detail', $rpost->id)}}">{{$rpost->tittle}}</a>
                                            <div class="post-meta">
                                                 {{$rpost->created_at->toFormattedDateString()}}
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <h4>About Us</h4>
                    <p>Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Nulla nunc dui, tristique in semper vel. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. </p>
                </aside>
            </div>
        </div>
    </div>
</div>
@endsection()