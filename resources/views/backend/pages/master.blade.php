<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Administrator</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url('backend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('backend/css/bootstrap-reset.css')}}" rel="stylesheet">
    <!--external css-->
    @yield('external_css')
    <!-- Custom styles for this template -->
    <link href="{{url('backend/css/style.css')}}" rel="stylesheet">
    <link href="{{url('backend/css/style-responsive.css')}}" rel="stylesheet" />
  </head>
  <body>
  @include('backend.blocks.header')
  <section id="container" class="">
      <!--main content start-->
      <section id="main-content">         
              <!-- page start-->
              @yield('content')
              <!-- page end-->          
      </section>
      <!--main content end-->
      <!--footer start-->
      @include('backend.blocks.footer')
      <!--footer end-->
  </section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{url('backend/js/jquery.js')}}"></script>
    <script src="{{url('backend/js/bootstrap.min.js')}}"></script>
    <script class="include" type="text/javascript" src="{{url('backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{url('backend/js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{url('backend/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
    <script src="{{url('backend/js/respond.min.js')}}" ></script>
   
     <script src="{{url('backend/js/jquery-1.8.3.min.js')}}"></script>

     <!--common script for all pages-->
    <script src="{{url('backend/js/common-scripts.js')}}"></script>
    <script src="{{ elixir('js/app.js') }}"></script>

    @yield('external_script')
  </body>
</html>
