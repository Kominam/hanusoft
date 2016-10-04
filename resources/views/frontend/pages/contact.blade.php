@extends('frontend.pages.master')
@section('content')
<div class="body">
<div role="main" class="main">
    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Contact Us Advanced</h1>
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
                <form id="contactFormAdvanced" action="http://preview.oklerthemes.com/porto/3.7.0/contact-us-advanced.php#contact-sent" method="POST" enctype="multipart/form-data">
                    <input type="hidden" value="true" name="emailSent" id="emailSent">
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
                                <label>Subject</label>
                                <select data-msg-required="Please enter the subject." class="form-control" name="subject" id="subject" required>
                                    <option value=""></option>
                                    <option value="Option 1">Option 1</option>
                                    <option value="Option 2">Option 2</option>
                                    <option value="Option 3">Option 3</option>
                                    <option value="Option 4">Option 4</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Checkboxes</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="checkbox-group" data-msg-required="Please select at least one option.">
                                            <label class="checkbox-inline">
                                            <input type="checkbox" name="checkboxes[]" id="inlineCheckbox1" value="option1"> 1
                                            </label>
                                            <label class="checkbox-inline">
                                            <input type="checkbox" name="checkboxes[]" id="inlineCheckbox2" value="option2"> 2
                                            </label>
                                            <label class="checkbox-inline">
                                            <input type="checkbox" name="checkboxes[]" id="inlineCheckbox3" value="option3"> 3
                                            </label>
                                            <label class="checkbox-inline">
                                            <input type="checkbox" name="checkboxes[]" id="inlineCheckbox2" value="option4"> 4
                                            </label>
                                            <label class="checkbox-inline">
                                            <input type="checkbox" name="checkboxes[]" id="inlineCheckbox3" value="option5"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Radios</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="radio-group" data-msg-required="Please select one option.">
                                            <label class="radio-inline">
                                            <input type="radio" name="radios" id="inlineRadio1" value="option1"> 1
                                            </label>
                                            <label class="radio-inline">
                                            <input type="radio" name="radios" id="inlineRadio2" value="option2"> 2
                                            </label>
                                            <label class="radio-inline">
                                            <input type="radio" name="radios" id="inlineRadio3" value="option3"> 3
                                            </label>
                                            <label class="radio-inline">
                                            <input type="radio" name="radios" id="inlineRadio2" value="option4"> 4
                                            </label>
                                            <label class="radio-inline">
                                            <input type="radio" name="radios" id="inlineRadio3" value="option5"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Attachment</label>
                                <input type="file" name="attachment" id="attachment">
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
                                    <div class="captcha-image">
                                        <img id="captcha-image" src="php/simple-php-captcha/simple-php-captcha.php/porto/3.7.0/php/simple-php-captcha/simple-php-captcha943a.png?_CAPTCHA&amp;t=0.63040000+1425567791" alt="CAPTCHA code">												
                                    </div>
                                    <div class="captcha-refresh">
                                        <a href="#" id="refreshCaptcha"><i class="fa fa-refresh"></i></a>
                                    </div>
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
                            <input type="submit" id="contactFormSubmit" value="Send Message" class="btn btn-primary btn-lg pull-right" data-loading-text="Loading...">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <h4 class="push-top">Get in <strong>touch</strong></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus.</p>
                <hr />
                <h4>The <strong>Office</strong></h4>
                <ul class="list-unstyled">
                    <li><i class="fa fa-map-marker"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</li>
                    <li><i class="fa fa-phone"></i> <strong>Phone:</strong> (123) 456-7890</li>
                    <li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></li>
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
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&AMP;sensor=false"></script>
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
