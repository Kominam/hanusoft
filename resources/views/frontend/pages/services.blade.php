@extends('frontend.pages.master')
@section('content')

<div role="main" class="main">
    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                          {!! Breadcrumbs::render('services') !!}
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Services</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <h2>Our <strong>Services</strong></h2>
        <div class="row">
            <div class="col-md-10">
                <p class="lead">
                    At Hanusoft, we are committed to providing customers with the best possible IT and systems support services that we can offer.
                    We also believe in giving clear information about each of the services we provide, as well as the standards that we aim to achieve.
                    Your goal - and ours - is to keep your plant running smoothly at all times. Our efforts are firmly focused on delivering what your plant needs,
                    and we cooperate closely with our customers to work out a package of services that fits perfectly.
                    Wherever you are in the world, our experienced team of process engineers located close to you is ready to provide you the needed support and troubleshooting.
                </p>
            </div>
            <div class="col-md-2">
                <a href="#" class="btn btn-lg btn-primary push-top pull-right">Contact Us!</a>
            </div>
        </div>
        <hr>
        <div class="row featured-boxes">
            <div class="col-md-3 col-sm-6">
              <div class="featured-box featured-box-primary">
                <div class="box-content">
                 <i class="icon-featured fa fa-html5"></i>
                  <h4>Web Development</h4>
                  <p>We build, create and maintain full function of the web.</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="featured-box featured-box-secundary">
                <div class="box-content">
                <i class="icon-featured fa fa-magic"></i>
                  <h4>UI/UX Design</h4>
                  <p>Iterative process to support incremental software.</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="featured-box featured-box-tertiary">
                <div class="box-content">
                  <i class="icon-featured fa fa-android"></i>
                  <h4>Software Engineer</h4>
                  <p>Develope, implement and maintain system. </p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="featured-box featured-box-quartenary">
                <div class="box-content">
                 <i class="icon-featured fa fa-check-square-o"></i>
                  <h4>Testing</h4>
                  <p>Conduct testing of whole software to indentify errors. </p>
                </div>
              </div>
            </div>
        </div>
        <div class="row push-top">
            <div class="col-md-12">
                <h2>Our <strong>Features</strong></h2>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="feature-box">
                            <div class="feature-box-icon">
                                <i class="fa fa-group"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="shorter">Customer Support</h4>
                                <p class="tall"></p>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="feature-box-icon">
                                <i class="fa fa-file"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="shorter">HTML5 / CSS3 / JS</h4>
                                <p class="tall"></p>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="feature-box-icon">
                                <i class="fa fa-google-plus"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="shorter">PHP</h4>
                                <p class="tall"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="feature-box">
                            <div class="feature-box-icon">
                                <i class="fa fa-facebook"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="shorter">Social media integration</h4>
                                <p class="tall"></p>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="feature-box-icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="shorter">Hosting</h4>
                                <p class="tall"></p>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="feature-box-icon">
                                <i class="fa fa-bars"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="shorter">FAQ</h4>
                                <p class="tall"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-4">
                <h2>and more...</h2>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                <i class="fa fa-usd"></i>
                                Pricing Tables
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="accordion-body collapse in">
                            <div class="panel-body">
                                Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                <i class="fa fa-comment"></i>
                                Contact Forms
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="accordion-body collapse">
                            <div class="panel-body">
                                Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                <i class="fa fa-laptop"></i>
                                Portfolio Pages
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="accordion-body collapse">
                            <div class="panel-body">
                                Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <hr class="tall" />
    </div>
</div>
@endsection()
