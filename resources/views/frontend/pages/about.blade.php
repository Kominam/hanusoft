@extends('frontend.pages.master')
@section('content')

<div role="main" class="main">
    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>About Us</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <h2 class="word-rotator-title">
            The New Way to <strong>
            <span class="word-rotate" data-plugin-options='{"delay": 2000}'>
            <span class="word-rotate-items">
            <span>success.</span>
            <span>advance.</span>
            <span>progress.</span>
            </span>
            </span>
            </strong>
        </h2>
        <div class="row">
            <div class="col-md-10">
                <p class="lead">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla non <span class="alternative-font">metus.</span> pulvinar. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut eu risus enim, ut pulvinar lectus. Sed hendrerit nibh.
                </p>
            </div>
            <div class="col-md-2">
                <a href="#" class="btn btn-lg btn-primary push-top">Join Our Team!</a>
            </div>
        </div>
        <hr class="tall">
        <div class="row">
            <div class="col-md-6">
                <h3><strong>Who</strong> We Are</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Nullam convallis, arcu vel pellentesque sodales, nisi est varius diam, ac ultrices sem ante quis sem. Proin ultricies volutpat sapien, nec scelerisque ligula mollis lobortis.</p>
                <p>Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing <span class="alternative-font">metus</span> sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula.</p>
            </div>
            <div class="col-md-4">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/xskh9NG64PQ" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <hr class="tall">
        <div class="row">
            <div class="col-md-12">
                <h3 class="push-top">Our <strong>History</strong></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="history">
                    <li data-appear-animation="fadeInUp">
                        <div class="thumb">
                            <img src="img/office-4.jpg" alt="" />
                        </div>
                        <div class="featured-box">
                            <div class="box-content">
                                <h4><strong>2016</strong></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus,</p>
                            </div>
                        </div>
                    </li>
                    <li data-appear-animation="fadeInUp">
                        <div class="thumb">
                            <img src="img/office-3.jpg" alt="" />
                        </div>
                        <div class="featured-box">
                            <div class="box-content">
                                <h4><strong>2015</strong></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia.</p>
                            </div>
                        </div>
                    </li>
                    <li data-appear-animation="fadeInUp">
                        <div class="thumb">
                            <img src="img/office-2.jpg" alt="" />
                        </div>
                        <div class="featured-box">
                            <div class="box-content">
                                <h4><strong>2007</strong></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus,</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection()
