@extends('frontend.pages.master')
@section('content')
<div class="body">
<div role="main" class="main">

    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        {!! Breadcrumbs::render('contact') !!}
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
    <div id="googlemaps" class="google-map"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="offset-anchor" id="contact-sent"></div>
                <h2 class="short"><strong>Contact</strong> Us</h2>
                <form id="contactFormAdvanced" action="{{ url('send-contact') }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-6">
                                <label>Your name *</label>
                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
                            </div>
                            <div class="col-md-6">
                                <label>Your email address *</label>
                                <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Subject *</label>
                                  <input type="text" value="" data-msg-required="Please enter your subject." maxlength="100" class="form-control" name="subject" id="subject" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Message *</label>
                                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Human Verification *</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-4">
                                <div class="captcha form-control">
                                  {!! captcha_img() !!} 
                                </div>
                            </div>
                            <div class="col-md-8">
                                <input type="text" value="" maxlength="6" data-msg-captcha="Wrong verification code." data-msg-required="Please enter the verification code." placeholder="Type the verification code." class="form-control input-lg captcha-input" name="captcha" id="captcha" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" value="Send Message" id="contactFormSubmit" class="btn btn-primary btn-lg pull-right">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <h4 class="push-top">Get in <strong>touch</strong></h4>
                <p>Hanusoft is an IT club, working in Faculty of Information Technology. Taking part in Hanusoft means that you have passion with programming. </p>
                <hr />
                <h4>The <strong>Office</strong></h4>
                <ul class="list-unstyled">
                    <li><i class="fa fa-map-marker"></i> <strong>Address:</strong> Hanoi University Km9 Nguyen Trai, Thanh Xuan, Ha Noi</li>
                    <li><i class="fa fa-phone"></i> <strong>Phone:</strong> (123) 456-7890</li>
                    <li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:anusoft@gmail.com">hanusoft@gmail.com</a></li>
                </ul>
                <hr />
                <h4>Business <strong>Hours</strong></h4>
                <ul class="list-unstyled">
                    <li><i class="fa fa-time"></i> Monday - Friday 9am to 5pm</li>
                    <li><i class="fa fa-time"></i> Saturday - 9am to 2pm</li>
                    <li><i class="fa fa-time"></i> Sunday - Closed</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyBPeM7t3PgqmMYE-lkT2oIDybq4fCb498Y"></script>
<script>

    //google map
    function initialize() {
        var myLatlng = new google.maps.LatLng(20.989491066295383, 105.79470402951665);
        var mapOptions = {
            zoom: 15,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById('googlemaps'), mapOptions);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'Hello World!'
        });
    }
   		google.maps.event.addDomListener(window, 'load', initialize);
</script>
