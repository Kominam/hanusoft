@extends('frontend.pages.master')
@section('content')

<div role="main" class="main">
    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                       {!! Breadcrumbs::render('memberdetail',$member) !!}
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>About {{$member->name}}</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            <div class="thumbnail">
                            <img alt="" height="300" class="img-responsive" src="{{url('frontend/img/team/'.$member->url_avt)}}">
                        </div>
               {{--  <div class="owl-carousel" data-plugin-options='{"items": 1}'>
                    <div>
                        <div class="thumbnail">
                            <img alt="" height="300" class="img-responsive" src="{{url('frontend/img/team/team-3.jpg')}}">
                        </div>
                    </div>
                    <div>
                        <div class="thumbnail">
                            <img alt="" height="300" class="img-responsive" src="{{url('frontend/img/team/team-9.jpg')}}">
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="col-md-8">
                <h2 class="shorter"><strong>{{$member->name}}</strong></h2>
                <h4>{{$member->position->name}}</h4>
                <span class="thumb-info-social-icons">
                <a data-tooltip data-placement="bottom" target="_blank" href="{{$member->url_fb}}" data-original-title="Facebook"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                <a data-tooltip data-placement="bottom" href="{{$member->url_gmail}}" data-original-title="Gmail"><i class="fa fa-envelope"></i><span>Gmail</span></a>
                <a data-tooltip data-placement="bottom" href="{{$member->url_github}}" data-original-title="Github"><i class="fa fa-github"></i><span>Github</span></a>
                </span>
                <p>{{$member->bio}}</p>
                <ul class="list icons list-unstyled">
                    <li><i class="fa fa-check"></i> Fusce sit amet orci quis arcu vestibulum vestibulum sed ut felis.</li>
                    <li><i class="fa fa-check"></i> Phasellus in risus quis lectus iaculis vulputate id quis nisl.</li>
                    <li><i class="fa fa-check"></i> Iaculis vulputate id quis nisl.</li>
                </ul>
            </div>
        </div>
        <hr class="tall" />
        <div class="row center">
             @php
                function rand_color() {
                    return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
                }
            @endphp
            @foreach ($member->skills as $skill)
                 <div class="col-md-3">
                <div class="circular-bar">
                    <div class="circular-bar-chart" data-percent="{{$skill->pivot->level}}" data-plugin-options='{"barColor": "{{rand_color()}}", "delay":300}'>
                        <strong>{{$skill->name}}</strong>
                        <label><span class="percent">{{$skill->pivot->level}}</span>%</label>
                    </div>
                </div>
            </div>
            @endforeach
           
            {{-- <div class="col-md-3">
                <div class="circular-bar">
                    <div class="circular-bar-chart" data-percent="85" data-plugin-options='{"barColor": "#0088CC", "delay": 300}'>
                        <strong>Design</strong>
                        <label><span class="percent">85</span>%</label>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="circular-bar">
                    <div class="circular-bar-chart" data-percent="60" data-plugin-options='{"barColor": "#2BAAB1", "delay": 600}'>
                        <strong>WordPress</strong>
                        <label><span class="percent">60</span>%</label>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="circular-bar">
                    <div class="circular-bar-chart" data-percent="95" data-plugin-options='{"barColor": "#734BA9", "delay": 900}'>
                        <strong>Photoshop</strong>
                        <label><span class="percent">95</span>%</label>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <section class="parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/parallax-transparent.jpg);">
        <div class="container">
           <!--  <div class="row center">
               <div class="col-md-12">
                   <div class="row">
                       <div class="owl-carousel" data-plugin-options='{"items": 1}'>
                           <div>
                               <blockquote>
                                   <p><i class="fa fa-quote-left"></i> Joe Doe is the smartest guy I ever met, he provides great tech service for each template and allows me to become more knowledgeable as a designer.</p>
                                   <span>- Mark Doe</span>
                               </blockquote>
                           </div>
                           <div>
                               <blockquote>
                                   <p><i class="fa fa-quote-left"></i> He provides great tech service for each template and allows me to become more knowledgeable as a designer.</p>
                                   <span>- Joseph Doe</span>
                               </blockquote>
                           </div>
                       </div>
                   </div>
               </div>
           </div> -->
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="short">My <strong>Work</strong></h3>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
            </div>
            <ul class="portfolio-list">
            @foreach($member->projects as $project)
                <li class="col-md-3">
                    <div class="portfolio-item thumbnail">
                        <a href="{{route('single_project',['id'=>$project->id])}}" class="thumb-info">
                           @foreach ($project->images as $key=>$image)
                                @if($key == 0)
                                     <img alt="" class="img-responsive" src="{{url('frontend/img/projects/'.$image->img_name)}}">
                                @endif
                            @endforeach
                        <span class="thumb-info-title">
                        <span class="thumb-info-inner">{{$project->name}}</span>
                        <span class="thumb-info-type">{{$project->type->name}}</span>
                        </span>
                        <span class="thumb-info-action">
                        <span title="Universal" class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
                        </span>
                        </a>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection()