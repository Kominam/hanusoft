@extends('frontend.pages.master')
@section('content')
<div role="main" class="main">

        <div class="slider-container">
          <div class="slider" id="revolutionSlider" data-plugin-revolution-slider data-plugin-options='{"startheight": 677}'>
            <ul>
              <li data-transition="fade" data-slotamount="10" data-masterspeed="300">
                <img src="{{url('frontend/img/slides/hs-silder1.jpg')}}" data-bgfit="cover" data-bgposition="center" data-bgrepeat="no-repeat">

                  <div class="tp-caption sft stb visible-lg"
                     data-x="417"
                     data-y="250"
                     data-speed="300"
                     data-start="1000"
                     data-easing="easeOutExpo"><img src="{{url('frontend/img/slides/slide-title-border.png')}}" alt=""></div>

                  <div class="tp-caption top-label lfl stl"
                     data-x="center" data-hoffset="0"
                     data-y="250"
                     data-speed="300"
                     data-start="500"
                     data-easing="easeOutExpo">DO YOU NEED A NEW</div>

                  <div class="tp-caption sft stb visible-lg"
                     data-x="717"
                     data-y="250"
                     data-speed="300"
                     data-start="1000"
                     data-easing="easeOutExpo"><img src="{{url('frontend/img/slides/slide-title-border.png')}}" alt=""></div>

                  <div class="tp-caption main-label sft stb"
                     data-x="center" data-hoffset="0"
                     data-y="280"
                     data-speed="300"
                     data-start="1500"
                     data-easing="easeOutExpo">WEB DESIGN?</div>

                  <div class="tp-caption bottom-label sft stb"
                     data-x="center" data-hoffset="0"
                     data-y="350"
                     data-speed="500"
                     data-start="2000"
                     data-easing="easeOutExpo">Check out our options and features.</div>

                  <a class="tp-caption customin btn btn-lg btn-primary main-button" href="about-us.html"
                    data-x="center" data-hoffset="0"
                    data-y="400"
                    data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                    data-speed="800"
                    data-start="1700"
                    data-easing="Back.easeInOut"
                    data-endspeed="300">
                      Get Started!
                  </a>

              </li>
              <li data-transition="fade" data-slotamount="10" data-masterspeed="300">
                <img src="{{url('frontend/img/slides/hs-silder1.jpg')}}" data-bgfit="cover" data-bgposition="right center" data-bgrepeat="no-repeat">

                <div class="tp-caption featured-label sft stb"
                   data-x="center"
                   data-y="280"
                   data-speed="300"
                   data-start="1500"
                   data-easing="easeOutExpo">WELCOME TO HANUSOFT</div>

                <div class="tp-caption bottom-label sft stb"
                   data-x="center"
                   data-y="338"
                   data-speed="500"
                   data-start="2000"
                   data-easing="easeOutExpo">The <strong>#1 Selling</strong> HTML Site Template on ThemeForest</div>
              </li>
            </ul>
          </div>
        </div>

        <div class="home-intro">
          <div class="container">

            <div class="row">
              <div class="col-md-8">
                <p>
                  The fastest way to grow your business with the leader in <em>Technology</em>
                  <span>Check out our options and features included.</span>
                </p>
              </div>
              <div class="col-md-4">
                <div class="get-started">
                  <a href="{{ route('login') }}" class="btn btn-lg btn-primary">Get Started Now!</a>
                  <div class="learn-more">or <a href="{{ route('about') }}">learn more.</a></div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="container">

          <div class="container">

          <div class="row center">
            <div class="col-md-12">
              <h1 class="short word-rotator-title">
                Hanusoft is
                <strong class="inverted">
                  <span class="word-rotate" data-plugin-options='{"delay": 2000, "animDelay": 300}'>
                    <span class="word-rotate-items">
                      <span>incredibly</span>
                      <span>especially</span>
                      <span>extremely</span>
                    </span>
                  </span>
                </strong>
                creative and fully active.
              </h1>
              <p class="featured lead">
                Winners never quit and quitters never win
              </p>
            </div>
          </div>

        </div>

        </div>

        <div class="container">
          <div class="row center">
            <div class="col-md-12">
              <img src="{{url('frontend/img/dark-and-light.jpg')}}" class="img-responsive" data-appear-animation="fadeInUp" alt="dark and light" style="margin: 45px 0px -35px;">
            </div>
          </div>
        </div>

        <section class="featured">
          <div class="container">
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
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-4">
                    <div class="feature-box secundary">
                      <div class="feature-box-icon">
                        <i class="fa fa-group"></i>
                      </div>
                      <div class="feature-box-info">
                        <h4 class="shorter">Customer Support</h4>
                        <p class="tall">Lorem ipsum dolor sit amet, consectetur adipiscing <span class="alternative-font">metus.</span> elit. Quisque rutrum pellentesque imperdiet.</p>
                      </div>
                    </div>
                    <div class="feature-box secundary">
                      <div class="feature-box-icon">
                        <i class="fa fa-file"></i>
                      </div>
                      <div class="feature-box-info">
                        <h4 class="shorter">HTML5 / CSS3 / JS</h4>
                        <p class="tall">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="feature-box secundary">
                      <div class="feature-box-icon">
                        <i class="fa fa-film"></i>
                      </div>
                      <div class="feature-box-info">
                        <h4 class="shorter">Sliders</h4>
                        <p class="tall">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                      </div>
                    </div>
                    <div class="feature-box secundary">
                      <div class="feature-box-icon">
                        <i class="fa fa-check"></i>
                      </div>
                      <div class="feature-box-info">
                        <h4 class="shorter">Icons</h4>
                        <p class="tall">Lorem ipsum dolor sit amet, consectetur adipiscing <span class="alternative-font">metus.</span> elit. Quisque rutrum pellentesque imperdiet.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="feature-box secundary">
                      <div class="feature-box-icon">
                        <i class="fa fa-bars"></i>
                      </div>
                      <div class="feature-box-info">
                        <h4 class="shorter">Buttons</h4>
                        <p class="tall">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                      </div>
                    </div>
                    <div class="feature-box secundary">
                      <div class="feature-box-icon">
                        <i class="fa fa-desktop"></i>
                      </div>
                      <div class="feature-box-info">
                        <h4 class="shorter">Lightbox</h4>
                        <p class="tall">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

          <hr class="tall" />
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div class="recent-posts push-bottom">
                    <h2>Latest <strong>Posts</strong></h2>
                    <div class="row">
                      <div class="owl-carousel" data-plugin-options='{"items": 1}'>
                      @foreach ($lastest_posts->chunk(2) as $chunk)
                         <div>
                         @foreach ($chunk as $l_post)
                            <div class="col-md-6">
                            <article>
                              <div class="date">
                                <span class="day">{{$l_post->created_at->format('d')}}</span>
                                <span class="month">{{substr($l_post->created_at->format('F'),0,3)}}</span>
                              </div>
                              <h4><a href="{{ route('post_detail', $l_post->id) }}">{{substr($l_post->tittle,0,70)}}[...] <a href="{{ route('post_detail', $l_post->id) }}" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
                            </article>
                          </div>
                         @endforeach
                        </div>
                      @endforeach
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <h2><strong>Meet</strong> Our founder </h2>
                  <div class="row">
                    <div class="owl-carousel push-bottom" data-plugin-options='{"items": 1}'>
                      <div>
                        <div class="col-md-12">
                          <blockquote class="testimonial">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.  Donec hendrerit vehicula est, in consequat.  Donec hendrerit vehicula est, in consequat.</p>
                          </blockquote>
                          <div class="testimonial-arrow-down"></div>
                          <div class="testimonial-author">
                            <div class="img-thumbnail img-thumbnail-small">
                              <img src="{{url('frontend/img/founder.jpg')}}" alt="" width="120px" height="120px">
                            </div>
                            <p><strong>Trinh Bao Ngoc</strong><span>FIT-Vice</span></p>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="col-md-12">
                          <blockquote class="testimonial">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                          </blockquote>
                          <div class="testimonial-arrow-down"></div>
                          <div class="testimonial-author">
                            <div class="img-thumbnail img-thumbnail-small">
                              <img src="{{url('frontend/img/founder.jpg')}}" alt="">
                            </div>
                            <p><strong>Trinh Bao Ngoc</strong><span>FIT - Vice</span></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


        </div>
        <hr class="tall">
        <div class="container">

          <div class="row center">
            <div class="col-md-12">
              <h2 class="shorter word-rotator-title push-top">
                Our <strong>Portfolio</strong>
              </h2>
              <p class="lead push-bottom">
                Check out what we have been doing
              </p>
            </div>
          </div>

        </div>

        <ul class="portfolio-list sort-destination full-width">
          @foreach ($all_project as $project)
          <li class="isotope-item">
            <div class="portfolio-item img-thumbnail">
              <a href="{{route('single_project', $project->id)}}" class="thumb-info secundary">
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

        <section class="parallax" data-stellar-background-ratio="0.5" style="background-image: url(frontend/img/parallax-image.jpg);">
          <div class="container">
            <div class="row center">
              <div class="col-md-12 center">
                <h2 class="white"><strong>What</strong> Client’s Say</h2>
                <div class="row">
                  <div class="owl-carousel testimonials" data-plugin-options='{"items": 1}'>
                    <div>
                      <div class="col-md-12">
                        <img src="{{url('frontend/img/clients/client-1.jpg')}}" class="img-responsive img-circle" alt="">
                        <blockquote class="testimonial-carousel">
                        <p>This theme is totally customizable, clean with all the options you could want. Don't want full screen layout? With one word added to the code the entire site becomes a boxed version.... The customer support is absolutely unsurpassed. Every question is answered with more help than anyone could expect for the price. Can not recommend this enough.</p>
                        </blockquote>
                        <p class="white"><strong>John Smith</strong><br><span>CEO & Founder - Okler</span></p>
                      </div>
                    </div>
                    <div>
                      <div class="col-md-12">
                        <img src="{{url('frontend/img/clients/client-1.jpg')}}" class="img-responsive img-circle" alt="">
                        <blockquote class="testimonial-carousel">
                        <p>Excellent customer support. I had a minor issue with getting the contact form to work and I was provided with a solution within 8 hours and over the weekend. </p>
                        </blockquote>
                        <p class="white"><strong>John Smith</strong><br><span>CEO & Founder - Okler</span></p>
                      </div>
                    </div>
                    <div>
                      <div class="col-md-12">
                        <img src="{{url('frontend/img/clients/client-1.jpg')}}" class="img-responsive img-circle" alt="">
                        <blockquote class="testimonial-carousel">
                        <p>Outstanding about everything : - Support is fast and perfect : I got answers to every questions I asked. - Code quality is up to date, modern, structured, clear, easy to understand. </p>
                        </blockquote>
                        <p class="white"><strong>John Smith</strong><br><span>CEO & Founder - Okler</span></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <div class="container">
          <div class="row center">
            <div class="col-md-12">
              <h2 class="shorter word-rotator-title">
                We're not the only ones
                <strong>
                  <span class="word-rotate" data-plugin-options='{"delay": 3500, "animDelay": 400}'>
                    <span class="word-rotate-items">
                      <span>excited</span>
                      <span>happy</span>
                    </span>
                  </span>
                </strong>
                about Hanusoft Template...
              </h2>
              <p class="lead">13,000+ customers in more than 100 countries use Hanusoft Template.</p>
            </div>
          </div>
          <div class="row center push-top">
            <div class="owl-carousel" data-plugin-options='{"items": 6, "autoplay": true, "autoplayTimeout": 3000}'>
              <div>
                <img class="img-responsive" src="{{url('frontend/img/partner/codelover.png')}}" alt="">
              </div>
              <div>
                <img class="img-responsive" src="{{url('frontend/img/partner/fsoft.jpg')}}" alt="">
              </div>
              <div>
                <img class="img-responsive" src="{{url('frontend/img/partner/hackademic hanoi.png')}}" alt="">
              </div>
              <div>
                <img class="img-responsive" src="{{url('frontend/img/partner/ibm-logo.jpg')}}" alt="">
              </div>
              <div>
                <img class="img-responsive" src="{{url('frontend/img/partner/IFS.png')}}" alt="">
              </div>
              <div>
                <img class="img-responsive" src="{{url('frontend/img/partner/it japan.png')}}" alt="">
              </div>
              <div>
                <img class="img-responsive" src="{{url('frontend/img/partner/smartosc.png')}}" alt="">
              </div>
            </div>
          </div>
        </div>

        <section class="call-to-action featured footer">
          <div class="container">
            <div class="row">
              <div class="center">
                <h3>Hanusoft is <strong>everything</strong> you need to create an <strong>awesome</strong> website! <a href="http://themeforest.net/item/Hanusoft-responsive-html5-template/4106987" target="_blank" class="btn btn-lg btn-primary" data-appear-animation="bounceIn">Contact us Now!</a> <span class="arrow hlb hidden-xs hidden-sm hidden-md" data-appear-animation="rotateInUpLeft" style="top: -22px;"></span></h3>
              </div>
            </div>
          </div>
        </section>

      </div>
     @endsection
