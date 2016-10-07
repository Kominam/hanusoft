@extends('frontend.pages.master')
@section('content')

<div role="main" class="main">
    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                          {!! Breadcrumbs::render('members') !!}
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Team</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <h2>Meet the <strong>Team</strong></h2>
        <ul class="nav nav-pills sort-source" data-sort-id="team" data-option-key="filter">
            <li data-option-value="*" class="active"><a href="#">Show All</a></li>
            <li data-option-value=".Leadership"><a href="#">Leadership</a></li>
            <li data-option-value=".Tester"><a href="#">Tester</a></li>
            <li data-option-value=".Development"><a href="#">Development</a></li>
            <li data-option-value=".Design"><a href="#">Design</a></li>
        </ul>
        <hr />
        <div class="row">
            <ul class="team-list sort-destination" data-sort-id="team">
                @foreach($members as $member)
                <li class="col-md-3 col-sm-6 col-xs-12 isotope-item {{$member->position->name}}">
                    <div class="team-item thumbnail">
                        <a href="{{route('member_detail')}}" class="thumb-info team">
                       
                        <img class="img-responsive" alt="" src="{{url('frontend/img/team/'.$member->url_avt)}}">
                        <span class="thumb-info-title">
                        <span class="thumb-info-inner">{{$member->name}}</span>
                        <span class="thumb-info-type">{{$member->position->name}}</span>
                        </span>
                        </a>
                        <span class="thumb-info-caption">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.</p>
                            <span class="thumb-info-social-icons">
                            <a data-tooltip data-placement="bottom" target="_blank" href="{{$member->url_fb}}"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                            <a data-tooltip data-placement="bottom" href="../../../www.twitter.com/index.html" data-original-title="Twitter"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                            <a data-tooltip data-placement="bottom" href="../../../www.linkedin.com/index.html" data-original-title="Linkedin"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
                            </span>
                        </span>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection()