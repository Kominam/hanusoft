@extends('frontend.pages.master')
@section('content')

<div role="main" class="main">
    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Portfolio</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Single Project</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="portfolio-title">
            <div class="row">
                <div class="portfolio-nav-all col-md-1">
                    <a href="{{route('projects')}}" data-tooltip data-original-title="Back to list"><i class="fa fa-th"></i></a>
                </div>
                <div class="col-md-10 center">
                    <h2 class="shorter">{{$project->name}}</h2>
                </div>
                <div class="portfolio-nav col-md-1">
                    <a href="portfolio-single-project.html" class="portfolio-nav-prev" data-tooltip data-original-title="Previous"><i class="fa fa-chevron-left"></i></a>
                    <a href="portfolio-single-project.html" class="portfolio-nav-next" data-tooltip data-original-title="Next"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
        <hr class="tall">
        <div class="row">
            <div class="col-md-4">
                <div class="owl-carousel" data-plugin-options='{"items": 1}'>
                       @foreach($project->images as $image)
                    <div>
                        <div class="thumbnail">

                            <img alt="" class="img-responsive" src="{{url('frontend/img/projects/'. $image->img_name)}}">
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-8">
                <div class="portfolio-info">
                    <div class="row">
                        <div class="col-md-12 center">
                            <ul>
                                <li>
                                    <a href="#" data-tooltip data-original-title="Like"><i class="fa fa-heart"></i>14</a>
                                </li>
                                <li>
                                    <i class="fa fa-calendar"></i> 21 November 2013
                                </li>
                                <li>
                                    <i class="fa fa-tags"></i> <a href="#">{{$project->type->name}}</a></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <h4>Project <strong>Description</strong></h4>
                <p class="taller">{{$project->description}}</p>
                <a href="{{$project->link_preview}}" class="btn btn-primary btn-icon"><i class="fa fa-external-link"></i>Live Preview</a> <span class="arrow hlb" data-appear-animation="rotateInUpLeft" data-appear-animation-delay="800"></span>
                <ul class="portfolio-details">
                    <li>
                        <p><strong>Skills:</strong></p>
                        <ul class="list list-skills icons list-unstyled list-inline">
                            @foreach($project->skills as $skill)
                            <li><i class="fa fa-check-circle"></i>{{$skill->name}}</li>
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <p><strong>Client:</strong></p>
                        <p>Okler Themes</p>
                    </li>
                </ul>
            </div>
        </div>
        <hr class="tall" />
        <div class="row">
            <div class="col-md-12">
                <h3>Related <strong>Work</strong></h3>
            </div>
            <ul class="portfolio-list">
            @foreach($related_projects as $related_project)
                <li class="col-md-3 col-xs-6">
                    <div class="portfolio-item thumbnail">
                        <a href={{route('single_project',['id'=> $related_project->id])}} class="thumb-info">
                         @foreach ($related_project->images as $key=>$image)
                    @if($key == 0)
                         <img alt="" class="img-responsive" src="{{url('frontend/img/projects/'.$image->img_name)}}">
                    @endif
                @endforeach  
                        <span class="thumb-info-title">
                        <span class="thumb-info-inner">{{$related_project->name}}</span>
                        <span class="thumb-info-type">{{$related_project->type->name}}</span>
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
<section class="call-to-action featured footer">
    <div class="container">
        <div class="row">
            <div class="center">
                <h3>Hanusoft is <strong>everything</strong> you need to create an <strong>awesome</strong> website! <a href="http://themeforest.net/item/Hanusoft-responsive-html5-template/4106987" target="_blank" class="btn btn-lg btn-primary" data-appear-animation="bounceIn">Buy Now!</a> <span class="arrow hlb hidden-xs hidden-sm hidden-md" data-appear-animation="rotateInUpLeft" style="top: -22px;"></span></h3>
            </div>
        </div>
    </div>
</section>
@endsection()