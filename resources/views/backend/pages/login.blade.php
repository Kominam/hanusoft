<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Mosaddek">
        <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <link rel="shortcut icon" href="{{url('backend/img/favicon.png')}}">
        <title>Administrator</title>
        <!-- Bootstrap core CSS -->
        <link href="{{url('backend/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{url('backend/css/bootstrap-reset.css')}}" rel="stylesheet">
        <!--external css-->
        <link href="{{url('backend/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
        <link href="{{url('backend/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen"/>
        <link rel="stylesheet" href="{{url('backend/css/owl.carousel.css')}}" type="text/css">
        <!-- Custom styles for this template -->
        <link href="{{url('backend/css/style.css')}}" rel="stylesheet">
        <link href="{{url('backend/css/style-responsive.css')}}" rel="stylesheet" />
    </head>
    <body class="login-body">
        <div class="container">
            <form class="form-signin" method="POST" action="{{ url('/member/login') }}" >
                <h2 class="form-signin-heading">sign in now</h2>
                <div class="login-wrap">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="text" class="form-control" placeholder="User ID" autofocus name="email">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <label class="checkbox">
                    <input type="checkbox" value="remember-me"> Remember me
                    <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> Forgot Password?</a>
                    </span>
                    </label>
                    <input class="btn btn-lg btn-login btn-block" type="submit">
            </form> 
            <p>or you can sign in via social network</p>
                    <div class="login-social-link">
                        <a href="{{ url('/redirect/facebook') }}" class="facebook">
                        <i class="icon-facebook"></i>
                        Facebook
                        </a>
                        <a href="index.html" class="twitter">
                        <i class="icon-twitter"></i>
                        Twitter
                        </a>
                    </div>
                    <div class="registration">
                        Don't have an account yet?
                        <a class="" href="registration.html">
                        Create an account
                        </a>
                    </div>
                </div>
                <!-- Modal -->
                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Forgot Password ?</h4>
                            </div>
                            <div class="modal-body">
                                <p>Enter your e-mail address below to reset your password.</p>
                                <form method="POST" action="{{ url('/password/email') }}">
                                <input type="text"  placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                                <button class="btn btn-success" type="button">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal -->

        </div>
    </body>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{url('backend/js/jquery.js')}}"></script>
    <script src="{{url('backend/js/bootstrap.min.js')}}"></script>
</html>

