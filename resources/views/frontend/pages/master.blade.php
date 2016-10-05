<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="HanuSoft">
    <meta name="keyword" content="HanuSoft, Websites, Coder">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>HanuSoft</title>

    {{-- <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/cssfb2f.css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css"> --}}

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{url('frontend/vendor/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('frontend/vendor/fontawesome/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{url('frontend/vendor/owlcarousel/owl.carousel.min.css')}}" media="screen">
    <link rel="stylesheet" href="{{url('frontend/vendor/owlcarousel/owl.theme.default.min.css')}}" media="screen">
    <link rel="stylesheet" href="{{url('frontend/vendor/magnific-popup/magnific-popup.css')}}" media="screen">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{url('frontend/css/theme.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/theme-elements.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/theme-blog.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/theme-shop.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/theme-animate.css')}}">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{url('frontend/css/skins/default.css')}}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{url('frontend/css/custom.css')}}">

    <!-- Head Libs -->
    <script src="{{url('frontend/vendor/modernizr/modernizr.js')}}"></script>
    
  </head>
  <body>
      @include('frontend.blocks.top_block')
      @yield('content')
      @include('frontend.blocks.bottom_block')      

    <!-- Vendor -->
    <script src="{{url('frontend/vendor/jquery/jquery.js')}}"></script>
    <script src="{{url('frontend/vendor/jquery.appear/jquery.appear.js')}}"></script>
    <script src="{{url('frontend/vendor/jquery.easing/jquery.easing.js')}}"></script>
    <script src="{{url('frontend/vendor/jquery-cookie/jquery-cookie.js')}}"></script>
    <script src="{{url('frontend/master/style-switcher/style.switcher.js')}}"></script>
    <script src="{{url('frontend/vendor/bootstrap/bootstrap.js')}}"></script>
    <script src="{{url('frontend/vendor/common/common.js')}}"></script>
    <script src="{{url('frontend/vendor/jquery.validation/jquery.validation.js')}}"></script>
    <script src="{{url('frontend/vendor/jquery.stellar/jquery.stellar.js')}}"></script>
    <script src="{{url('frontend/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
    <script src="{{url('frontend/vendor/jquery.gmap/jquery.gmap.js')}}"></script>
    <script src="{{url('frontend/vendor/isotope/jquery.isotope.js')}}"></script>
    <script src="{{url('frontend/vendor/owlcarousel/owl.carousel.js')}}"></script>
    <script src="{{url('frontend/vendor/jflickrfeed/jflickrfeed.js')}}"></script>
    <script src="{{url('frontend/vendor/magnific-popup/jquery.magnific-popup.js')}}"></script>
    <script src="{{url('frontend/vendor/vide/vide.js')}}"></script>
    
    <!-- Theme Base, Components and Settings -->
    <script src="{{url('frontend/js/theme.js')}}"></script>
    
    <!-- Specific Page Vendor and Views -->
    <script src="{{url('frontend/vendor/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{url('frontend/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{url('frontend/vendor/circle-flip-slideshow/js/jquery.flipshow.js')}}"></script>
    <script src="{{url('frontend/js/views/view.home.js')}}"></script>
    
    <!-- Theme Custom -->
    <script src="{{url('frontend/js/custom.js')}}"></script>
    
    <!-- Theme Initialization Files -->
    <script src="{{url('frontend/js/theme.init.js')}}"></script>

    <script type="text/javascript">
    
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-42715764-5']);
      _gaq.push(['_trackPageview']);
    
      (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    
    </script>
  </body>
  </html>