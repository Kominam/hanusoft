<div class="body">
<header id="header">
    <div class="container">
        <div class="logo">
            <a href="{{route('index')}}">
            <img alt="Hanusoft" width="111" height="54" data-sticky-width="82" data-sticky-height="40" src="{{url('frontend/img/logo.png')}}">
            </a>
        </div>
        <div class="search">
            <form id="searchForm" action="http://preview.oklerthemes.com/Hanusoft/3.7.0/page-search-results.html" method="get">
                <div class="input-group">
                    <input type="text" class="form-control search" name="q" id="q" placeholder="Search..." required>
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </form>
        </div>
        <nav>
            <ul class="nav nav-pills nav-top">
                <li>
                    <a href="{{route('about')}}"><i class="fa fa-angle-right"></i>About Us</a>
                </li>
                <li>
                    <a href="{{route('contact')}}"><i class="fa fa-angle-right"></i>Contact Us</a>
                </li>
                <li class="phone">
                    <span><i class="fa fa-phone"></i>(123) 456-7890</span>
                </li>
            </ul>
        </nav>
        <button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse">
        <i class="fa fa-bars"></i>
        </button>
    </div>
    <div class="navbar-collapse nav-main-collapse collapse">
        <div class="container">
            <ul class="social-icons">
                <li class="facebook"><a href="../../../www.facebook.com/index.html" target="_blank" title="Facebook">Facebook</a></li>
                <li class="twitter"><a href="../../../www.twitter.com/index.html" target="_blank" title="Twitter">Twitter</a></li>
                <li class="linkedin"><a href="../../../www.linkedin.com/index.html" target="_blank" title="Linkedin">Linkedin</a></li>
            </ul>
            <nav class="nav-main mega-menu">
                <ul class="nav nav-pills nav-main" id="mainMenu">
                    <li class="active"><a href={{route('index')}}>Home</a></li>
                    <li><a href={{route('about')}}>About</a></li>
                    <li><a href={{route('services')}}>Service</a></li>
                    <li><a href={{route('members')}}>Members </a></li>
                    <li><a href={{route('projects')}}>Project</a></li>
                    <li><a href={{route('posts')}}>Post</a></li>
                    <li><a href={{route('contact')}}>Contact</a></li>                    
                </ul>
            </nav>
        </div>
    </div>
</header>