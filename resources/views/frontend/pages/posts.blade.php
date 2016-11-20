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
                    @foreach ($posts as $post)
                    <article class="post post-large" style="padding: 50px 0px 50px 0px">
                        <div class="post-date">
                            <span class="day">{{$post->created_at->format('d')}}</span>
                            <span class="month">
                            {{substr($post->created_at->format('F'),0,3)}}</span>
                        </div>
                        <div class="post-content">
                            <h2><a href="{{route('post_detail',['slug'=>$post->slug])}}">{{$post->tittle}}</a></h2>
                            <p>{!!substr($post->content,0,750)!!}[...]</p>
                            <div class="post-meta">
                                <span><i class="fa fa-user"></i> By <a href="{{ route('member_detail',$post->user->slug) }}">{{$post->user->name}}</a> </span>
                                <span><i class="fa fa-tag"></i> <a href={{route('browse-post-by-cate', $post->type->slug)}}>{{$post->type->name}}</a></span>
                                <span><i class="fa fa-comments"></i> <a href="#">{{$post->comments->count()}} Comments</a></span>
                                <a href="{{route('post_detail',['slug'=>$post->slug])}}" class="btn btn-xs btn-primary pull-right">Read more...</a>
                            </div>
                        </div>
                    </article>
                    @endforeach
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
                    <form action="{{ route('post.searchForFront') }}" method="POST">
                    {!! csrf_field() !!}
                        <div class="input-group input-group-lg">
                            <input class="form-control" placeholder="Search..." name="keyword" id="keyword" type="text" required>
                            <span class="input-group-btn">
                            <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <hr />
                    <h4>Categories</h4>
                    <ul class="nav nav-list primary push-bottom">
                    @foreach ($all_post_cate as $post_cate)
                        <li><a href="{{route('browse-post-by-cate', $post_cate->slug)}}">{{$post_cate->name}}</a></li>
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
                                                <a href="{{route('post_detail', $ppost->slug)}}">
                                                <img src="{{url($ppost->user->url_avt)}}" alt="" width="50px" height="50px">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <a href="{{route('post_detail', $ppost->slug)}}">{{$ppost->tittle}}</a>
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
                                                <a href="{{route('post_detail', $rpost->slug)}}">
                                                <img src="{{url($rpost->user->url_avt)}}" alt="" width="50px" height="50px">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                           <a href="{{route('post_detail', $rpost->slug)}}">{{$rpost->tittle}}</a>
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
                    <p>Hanusoft is an IT club, working in Faculty of Information Technology. Taking part in Hanusoft if you have passion with programming. </p>
                </aside>
            </div>
        </div>
    </div>
</div>
@endsection