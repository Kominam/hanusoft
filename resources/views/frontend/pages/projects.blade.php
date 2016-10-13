@extends('frontend.pages.master')
@section('content')

<div role="main" class="main">
    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                           {!! Breadcrumbs::render('projects') !!}
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Full Width</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="sort-source-wrapper">
        <div class="container">
            <ul class="nav nav-pills sort-source secundary pull-right" data-sort-id="portfolio" data-option-key="filter">
                <li data-option-value="*" class="active"><a href="#">Show All</a></li>
                <li data-option-value=".Website"><a href="#">Websites</a></li>
                <li data-option-value=".Application"><a href="#">Applications</a></li>
                <li data-option-value=".Brand"><a href="#">Brands</a></li>
                 <li data-option-value=".Logo"><a href="#">Logos</a></li>
            </ul>
        </div>
    </div>
    <ul class="portfolio-list sort-destination full-width" data-sort-id="portfolio">
        @foreach($projects as $project)
        <li class="isotope-item {{$project->type->name}}">
            <div class="portfolio-item img-thumbnail">
                <a href="{{route('single_project', ['id'=> $project->id])}}" class="thumb-info secundary">
                @foreach ($project->images as $key=>$image)
                    @if($key == 0)
                         <img alt="" class="img-responsive" src="{{url('frontend/img/projects/'.$image->img_name)}}" style="width: 447px; height: 247px">
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
<section class="call-to-action featured footer no-arrow">
    <div class="container">
        <div class="row">
            <div class="center">
                <h3>Porto is <strong>everything</strong> you need to create an <strong>awesome</strong> website! <a href="http://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank" class="btn btn-lg btn-primary" data-appear-animation="bounceIn">Buy Now!</a> <span class="arrow hlb hidden-xs hidden-sm hidden-md" data-appear-animation="rotateInUpLeft" style="top: -22px;"></span></h3>
            </div>
        </div>
    </div>
</section>
@endsection()