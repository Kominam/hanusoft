<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="shortcut icon" href="{{url('backend/img/favicon.png')}}">
    <title>Register</title>
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
       @if (count($errors) >0)
          @foreach($errors->all() as $error)
            <div class="alert alert-danger"> 
                {!! $error !!}    
            </div>
            @endforeach 
      @endif
      <form class="form-signin" action="{{ route('register.post') }}" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <h2 class="form-signin-heading">registration now</h2>
        <div class="login-wrap">
          <p>Enter your personal details below</p>
          <input type="text" class="form-control" name="name" placeholder="Full Name" autofocus value="{{ old('name')}}">
          <input type="text" class="form-control" name="address" placeholder="Address" autofocus value="{{ old('address')}}">
          <!-- <input type="text" class="form-control" placeholder="Email" autofocus>
          <input type="text" class="form-control" placeholder="City/Town" autofocus> -->
          <!-- <div class="radios">
            <label class="label_radio col-lg-6 col-sm-6" for="radio-01">
            <input name="sample-radio" id="radio-01" value="1" type="radio" checked /> Male
            </label>
            <label class="label_radio col-lg-6 col-sm-6" for="radio-02">
            <input name="sample-radio" id="radio-02" value="1" type="radio" /> Female
            </label>
          </div> -->
          <select class="form-control input-sm m-bot15" name="position_id">
          @foreach ($all_position as $position)
             <option value="{{$position->id}}">{{$position->name}}</option>
          @endforeach
          </select>
          <p> Enter your account details below</p>
          <input type="text" class="form-control" placeholder="Email" autofocus name="email" value="{{ old('email')}}">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <input type="password" name="password_confirmation" class="form-control" placeholder="Re-type Password">
          <label class="checkbox">
          <input type="checkbox" value="agree this condition"> I agree to the Terms of Service and Privacy Policy
          </label>
          <button class="btn btn-lg btn-login btn-block" type="submit">Submit</button>
          <div class="registration">
            Already Registered.
            <a class="" href="{{ route('login') }}">
            Login
            </a>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>