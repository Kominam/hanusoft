@extends('frontend.pages.master')
@section('content')

<div role="main" class="main">
    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Pages</li>
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
            <li data-option-value=".leadership"><a href="#">Leadership</a></li>
            <li data-option-value=".marketing"><a href="#">Marketing</a></li>
            <li data-option-value=".development"><a href="#">Development</a></li>
            <li data-option-value=".design"><a href="#">Design</a></li>
        </ul>
        <hr />
        <div class="row">
            <ul class="team-list sort-destination" data-sort-id="team">
                <li class="col-md-3 col-sm-6 col-xs-12 isotope-item leadership">
                    <div class="team-item thumbnail">
                        <a href="members_detail.html" class="thumb-info team">
                        <img class="img-responsive" alt="" src="img/team/team-1.jpg">
                        <span class="thumb-info-title">
                        <span class="thumb-info-inner">John Doe</span>
                        <span class="thumb-info-type">CEO</span>
                        </span>
                        </a>
                        <span class="thumb-info-caption">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.</p>
                            <span class="thumb-info-social-icons">
                            <a data-tooltip data-placement="bottom" target="_blank" href="../../../www.facebook.com/index.html" data-original-title="Facebook"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                            <a data-tooltip data-placement="bottom" href="../../../www.twitter.com/index.html" data-original-title="Twitter"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                            <a data-tooltip data-placement="bottom" href="../../../www.linkedin.com/index.html" data-original-title="Linkedin"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
                            </span>
                        </span>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 col-xs-12 isotope-item marketing">
                    <div class="team-item thumbnail">
                        <a href="members_detail.html" class="thumb-info team">
                        <img class="img-responsive" alt="" src="img/team/team-2.jpg">
                        <span class="thumb-info-title">
                        <span class="thumb-info-inner">Jessica Doe</span>
                        <span class="thumb-info-type">Marketing</span>
                        </span>
                        </a>
                        <span class="thumb-info-caption">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <span class="thumb-info-social-icons">
                            <a data-tooltip data-placement="bottom" target="_blank" href="../../../www.facebook.com/index.html" data-original-title="Facebook"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                            <a data-tooltip data-placement="bottom" href="../../../www.twitter.com/index.html" data-original-title="Twitter"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                            <a data-tooltip data-placement="bottom" href="../../../www.linkedin.com/index.html" data-original-title="Linkedin"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
                            </span>
                        </span>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                    <div class="team-item thumbnail">
                        <a href="members_detail.html" class="thumb-info team">
                        <img class="img-responsive" alt="" src="img/team/team-3.jpg">
                        <span class="thumb-info-title">
                        <span class="thumb-info-inner">Rick Edward Doe</span>
                        <span class="thumb-info-type">Developer</span>
                        </span>
                        </a>
                        <span class="thumb-info-caption">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.</p>
                            <span class="thumb-info-social-icons">
                            <a data-tooltip data-placement="bottom" target="_blank" href="../../../www.facebook.com/index.html" data-original-title="Facebook"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                            <a data-tooltip data-placement="bottom" href="../../../www.twitter.com/index.html" data-original-title="Twitter"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                            <a data-tooltip data-placement="bottom" href="../../../www.linkedin.com/index.html" data-original-title="Linkedin"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
                            </span>
                        </span>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 col-xs-12 isotope-item design">
                    <div class="team-item thumbnail">
                        <a href="members_detail.html" class="thumb-info team">
                        <img class="img-responsive" alt="" src="img/team/team-4.jpg">
                        <span class="thumb-info-title">
                        <span class="thumb-info-inner">Melinda Wolosky</span>
                        <span class="thumb-info-type">Design</span>
                        </span>
                        </a>
                        <span class="thumb-info-caption">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <span class="thumb-info-social-icons">
                            <a data-tooltip data-placement="bottom" target="_blank" href="../../../www.facebook.com/index.html" data-original-title="Facebook"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                            <a data-tooltip data-placement="bottom" href="../../../www.twitter.com/index.html" data-original-title="Twitter"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                            <a data-tooltip data-placement="bottom" href="../../../www.linkedin.com/index.html" data-original-title="Linkedin"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
                            </span>
                        </span>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                    <div class="team-item thumbnail">
                        <a href="members_detail.html" class="thumb-info team">
                        <img class="img-responsive" alt="" src="img/team/team-5.jpg">
                        <span class="thumb-info-title">
                        <span class="thumb-info-inner">Robert Doe</span>
                        <span class="thumb-info-type">Developer</span>
                        </span>
                        </a>
                        <span class="thumb-info-caption">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.</p>
                            <span class="thumb-info-social-icons">
                            <a data-tooltip data-placement="bottom" target="_blank" href="../../../www.facebook.com/index.html" data-original-title="Facebook"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                            <a data-tooltip data-placement="bottom" href="../../../www.twitter.com/index.html" data-original-title="Twitter"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                            <a data-tooltip data-placement="bottom" href="../../../www.linkedin.com/index.html" data-original-title="Linkedin"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
                            </span>
                        </span>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 col-xs-12 isotope-item marketing">
                    <div class="team-item thumbnail">
                        <a href="members_detail.html" class="thumb-info team">
                        <img class="img-responsive" alt="" src="img/team/team-6.jpg">
                        <span class="thumb-info-title">
                        <span class="thumb-info-inner">Melissa Doe</span>
                        <span class="thumb-info-type">Marketing</span>
                        </span>
                        </a>
                        <span class="thumb-info-caption">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <span class="thumb-info-social-icons">
                            <a data-tooltip data-placement="bottom" target="_blank" href="../../../www.facebook.com/index.html" data-original-title="Facebook"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                            <a data-tooltip data-placement="bottom" href="../../../www.twitter.com/index.html" data-original-title="Twitter"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                            <a data-tooltip data-placement="bottom" href="../../../www.linkedin.com/index.html" data-original-title="Linkedin"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
                            </span>
                        </span>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                    <div class="team-item thumbnail">
                        <a href="members_detail.html" class="thumb-info team">
                        <img class="img-responsive" alt="" src="img/team/team-7.jpg">
                        <span class="thumb-info-title">
                        <span class="thumb-info-inner">Will Doe</span>
                        <span class="thumb-info-type">Developer</span>
                        </span>
                        </a>
                        <span class="thumb-info-caption">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.</p>
                            <span class="thumb-info-social-icons">
                            <a data-tooltip data-placement="bottom" target="_blank" href="../../../www.facebook.com/index.html" data-original-title="Facebook"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                            <a data-tooltip data-placement="bottom" href="../../../www.twitter.com/index.html" data-original-title="Twitter"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                            <a data-tooltip data-placement="bottom" href="../../../www.linkedin.com/index.html" data-original-title="Linkedin"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
                            </span>
                        </span>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                    <div class="team-item thumbnail">
                        <a href="members_detail.html" class="thumb-info team">
                        <img class="img-responsive" alt="" src="img/team/team-8.jpg">
                        <span class="thumb-info-title">
                        <span class="thumb-info-inner">Jerry Doe</span>
                        <span class="thumb-info-type">Developer</span>
                        </span>
                        </a>
                        <span class="thumb-info-caption">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.</p>
                            <span class="thumb-info-social-icons">
                            <a data-tooltip data-placement="bottom" target="_blank" href="../../../www.facebook.com/index.html" data-original-title="Facebook"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                            <a data-tooltip data-placement="bottom" href="../../../www.twitter.com/index.html" data-original-title="Twitter"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                            <a data-tooltip data-placement="bottom" href="../../../www.linkedin.com/index.html" data-original-title="Linkedin"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
                            </span>
                        </span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection()