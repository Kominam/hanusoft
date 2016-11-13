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
            @foreach ($all_position as $position)
                <li data-option-value=".{{$position->name}}"><a href="#">{{$position->name}}</a></li>
            @endforeach
           @foreach ($all_grade as $grade)
                <li data-option-value=".{{$grade->name}}"><a href="#">{{$grade->name}}</a></li>
            @endforeach
        </ul>
        <hr />
        <div class="row">
            <ul class="team-list sort-destination" data-sort-id="team">
                @foreach($members as $member)
                <li class="col-md-3 col-sm-6 col-xs-12 isotope-item {{$member->position->name}} {{$member->grade->name}} ">
                    <div class="team-item thumbnail">
                        <a href="{{route('member_detail', ['slug'=>$member->slug])}}" class="thumb-info team">
                       
                        <img class="img-responsive" alt="" src="{{url($member->url_avt)}}" style="width: 585px; height: 295px">
                        <span class="thumb-info-title">
                        <span class="thumb-info-inner">{{$member->name}}</span>
                        <span class="thumb-info-type">{{$member->position->name}}</span>
                        </span>
                        </a>
                        <span class="thumb-info-caption">
                            <p>{{substr($member->bio, 0, 200)}} ...</p>
                            <span class="thumb-info-social-icons">
                            <a data-tooltip data-placement="bottom" target="_blank" href="{{$member->url_fb}}"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                            <a data-tooltip data-placement="bottom" href="{{$member->url_gmail}}" data-original-title="Gmail"><i class="fa fa-envelope"></i><span>Gmail</span></a>
                            <a data-tooltip data-placement="bottom" href="{{$member->github}}" data-original-title="Github"><i class="fa fa-github"></i><span>Github</span></a>
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