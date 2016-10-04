@extends('frontend.pages.master')
@section('content')
<div role="main" class="main">

        <div class="slider-container">
          <div class="slider" id="revolutionSlider" data-plugin-revolution-slider data-plugin-options='{"startheight": 677}'>
            <ul>
              <li data-transition="fade" data-slotamount="10" data-masterspeed="300">
                <img src="{{url('frontend/img/slides/slide-bg-4.jpg')}}" data-bgfit="cover" data-bgposition="right center" data-bgrepeat="no-repeat">

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
                <img src="{{url('frontend/img/slides/slide-bg-3.jpg')}}" data-bgfit="cover" data-bgposition="right center" data-bgrepeat="no-repeat">

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
                  <a href="#" class="btn btn-lg btn-primary">Get Started Now!</a>
                  <div class="learn-more">or <a href="index-2.html">learn more.</a></div>
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
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo. vamus suscipit molestie vestibulum.
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
                  <i class="icon-featured fa fa-user"></i>
                  <h4>Loved by Customers</h4>
                  <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus.</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="featured-box featured-box-secundary">
                <div class="box-content">
                  <i class="icon-featured fa fa-book"></i>
                  <h4>Well Documented</h4>
                  <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus.</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="featured-box featured-box-tertiary">
                <div class="box-content">
                  <i class="icon-featured fa fa-trophy"></i>
                  <h4>Winner</h4>
                  <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus.</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="featured-box featured-box-quartenary">
                <div class="box-content">
                  <i class="icon-featured fa fa-cogs"></i>
                  <h4>Customizable</h4>
                  <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus. </p>
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

          <div class="map-section">
          <section class="featured footer map">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div class="recent-posts push-bottom">
                    <h2>Latest <strong>Blog</strong> Posts</h2>
                    <div class="row">
                      <div class="owl-carousel" data-plugin-options='{"items": 1}'>
                        <div>
                          <div class="col-md-6">
                            <article>
                              <div class="date">
                                <span class="day">15</span>
                                <span class="month">Jan</span>
                              </div>
                              <h4><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero. <a href="{{url('http://preview.oklerthemes.com/')}}" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
                            </article>
                          </div>
                          <div class="col-md-6">
                            <article>
                              <div class="date">
                                <span class="day">15</span>
                                <span class="month">Jan</span>
                              </div>
                              <h4><a href="blog-post.html">Lorem ipsum dolor</a></h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. <a href="{{url('http://preview.oklerthemes.com/')}}" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
                            </article>
                          </div>
                        </div>
                        <div>
                          <div class="col-md-6">
                            <article>
                              <div class="date">
                                <span class="day">12</span>
                                <span class="month">Jan</span>
                              </div>
                              <h4><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero. <a href="http://preview.oklerthemes.com/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
                            </article>
                          </div>
                          <div class="col-md-6">
                            <article>
                              <div class="date">
                                <span class="day">11</span>
                                <span class="month">Jan</span>
                              </div>
                              <h4><a href="blog-post.html">Lorem ipsum dolor</a></h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="http://preview.oklerthemes.com/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
                            </article>
                          </div>
                        </div>
                        <div>
                          <div class="col-md-6">
                            <article>
                              <div class="date">
                                <span class="day">15</span>
                                <span class="month">Jan</span>
                              </div>
                              <h4><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero. <a href="http://preview.oklerthemes.com/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
                            </article>
                          </div>
                          <div class="col-md-6">
                            <article>
                              <div class="date">
                                <span class="day">15</span>
                                <span class="month">Jan</span>
                              </div>
                              <h4><a href="blog-post.html">Lorem ipsum dolor</a></h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. <a href="http://preview.oklerthemes.com/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
                            </article>
                          </div>
                        </div>
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
                              <img src="'{{url('frontend/img/clients/client-1.jpg')}}" alt="">
                            </div>
                            <p><strong>John Smith</strong><span>CEO & Founder - Okler</span></p>
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
                              <img src="{{url('frontend/img/clients/client-1.jpg')}}" alt="">
                            </div>
                            <p><strong>John Smith</strong><span>CEO & Founder - Okler</span></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
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
          <li class="isotope-item">
            <div class="portfolio-item img-thumbnail">
              <a href="portfolio-single-project.html" class="thumb-info secundary">
                <img alt="" class="img-responsive" src="{{url('frontend/img/projects/project.jpg')}}">
                <span class="thumb-info-title">
                  <span class="thumb-info-inner">SEO</span>
                  <span class="thumb-info-type">Website</span>
                </span>
                <span class="thumb-info-action">
                  <span title="Universal" class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
                </span>
              </a>
            </div>
          </li>
          <li class="isotope-item">
            <div class="portfolio-item img-thumbnail">
              <a href="portfolio-single-project.html" class="thumb-info secundary">
                <img alt="" class="img-responsive" src="{{url('frontend/img/projects/project-1.jpg')}}">
                <span class="thumb-info-title">
                  <span class="thumb-info-inner">Okler</span>
                  <span class="thumb-info-type">Brand</span>
                </span>
                <span class="thumb-info-action">
                  <span title="Universal" class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
                </span>
              </a>
            </div>
          </li>
          <li class="isotope-item">
            <div class="portfolio-item img-thumbnail">
              <a href="portfolio-single-project.html" class="thumb-info secundary">
                <img alt="" class="img-responsive" src="{{url('frontend/img/projects/project-7.jpg')}}">
                <span class="thumb-info-title">
                  <span class="thumb-info-inner">The Code</span>
                  <span class="thumb-info-type">Website</span>
                </span>
                <span class="thumb-info-action">
                  <span title="Universal" class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
                </span>
              </a>
            </div>
          </li>
          <li class="isotope-item">
            <div class="portfolio-item img-thumbnail">
              <a href="portfolio-single-project.html" class="thumb-info secundary">
                <img alt="" class="img-responsive" src="{{url('frontend/img/projects/project-4.jpg')}}">
                <span class="thumb-info-title">
                  <span class="thumb-info-inner">The Code</span>
                  <span class="thumb-info-type">Website</span>
                </span>
                <span class="thumb-info-action">
                  <span title="Universal" class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
                </span>
              </a>
            </div>
          </li>
          <li class="isotope-item">
            <div class="portfolio-item img-thumbnail">
              <a href="portfolio-single-project.html" class="thumb-info secundary">
                <img alt="" class="img-responsive" src="{{url('frontend/img/projects/project-5.jpg')}}">
                <span class="thumb-info-title">
                  <span class="thumb-info-inner">SEO</span>
                  <span class="thumb-info-type">Website</span>
                </span>
                <span class="thumb-info-action">
                  <span title="Universal" class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
                </span>
              </a>
            </div>
          </li>
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
                <img class="img-responsive" src="{{url('frontend/img/logos/logo-1.png')}}" alt="">
              </div>
              <div>
                <img class="img-responsive" src="{{url('frontend/img/logos/logo-2.png')}}" alt="">
              </div>
              <div>
                <img class="img-responsive" src="{{url('frontend/img/logos/logo-3.png')}}" alt="">
              </div>
              <div>
                <img class="img-responsive" src="{{url('frontend/img/logos/logo-4.png')}}" alt="">
              </div>
              <div>
                <img class="img-responsive" src="{{url('frontend/img/logos/logo-5.png')}}" alt="">
              </div>
              <div>
                <img class="img-responsive" src="{{url('frontend/img/logos/logo-6.png')}}" alt="">
              </div>
              <div>
                <img class="img-responsive" src="{{url('frontend/img/logos/logo-4.png')}}" alt="">
              </div>
              <div>
                <img class="img-responsive" src="{{url('frontend/img/logos/logo-2.png')}}" alt="">
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