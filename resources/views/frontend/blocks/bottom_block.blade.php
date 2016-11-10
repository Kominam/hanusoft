<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="footer-ribbon">
                <span>Get in Touch</span>
            </div>
            <div class="col-md-3">
                <div class="newsletter">
                    <h4>Newsletter</h4>
                    <p>Keep up on our always evolving new projects or IT news. Enter your e-mail and subscribe to our newsletter.</p>
                    <div class="alert alert-success hidden" id="newsletterSuccess">
                        <strong>Success!</strong> You've been added to our email list.
                    </div>
                    <div class="alert alert-danger hidden" id="newsletterError"></div>
                    <form id="newsletterForm" action="#" method="POST">
                        <div class="input-group">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input class="form-control" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text" required>
                            <span class="input-group-btn">
                            <button class="btn btn-default" type="submit" id="subscriber">Go!</button>
                            <script type="text/javascript">
                                $(document).ready(function() {
                                  $.ajaxSetup({
                                      headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                      }
                                    });
                                   $('#newsletterForm').on('submit', function(e){
                                       e.preventDefault();
                                       var sub_email = $('#newsletterEmail').val();
                                          $.ajax({
                                            url:'/add-subcribers',
                                            type: "post",
                                            data: { '_token': $('input[name=_token]').val(), 'email': sub_email},
                                            success: function(data) {   
                                                swal({
                                                  title: "Thanks you!",
                                                  text: "You are subcribe us via email!",
                                                  type: "success",
                                                  confirmButtonText: "OK"
                                                });
                                            },
                                            error: function(jqXHR, textStatus, errorThrown) {
                                                 swal({
                                                  title: "Whoops!",
                                                  text: "Sorry, something went wrong!",
                                                  type: "error",
                                                  confirmButtonText: "OK"
                                                });
                                            }         
                                            });
                                       });
                                   });
                            </script>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-3">
                <h4>Latest Tweets</h4>
                <div id="tweet" class="twitter" data-plugin-tweets data-plugin-options='{"username": "oklerthemes", "count": 2}'>
                    <p>Please wait...</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-details">
                    <h4>Contact Us</h4>
                    <ul class="contact">
                        <li>
                            <p><i class="fa fa-map-marker"></i> <strong>Address:</strong> Km9 Nguyen Trai, Thanh Xuan, Ha Noi, Viet Nam</p>
                        </li>
                        <li>
                            <p><i class="fa fa-phone"></i> <strong>Phone:</strong> (84 4)35 43 0267</p>
                        </li>
                        <li>
                            <p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:hanusoft@gmail.com">hanusoft.dev@gmail.com</a></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <h4>Follow Us</h4>
                <div class="social-icons">
                    <ul class="social-icons">
                        <li class="facebook"><a href="https://www.facebook.com/groups/1598773820362830/?fref=ts" target="_blank" data-placement="bottom" data-tooltip title="Facebook">Facebook</a></li>
                        <li class="googleplus"><a href="https://plus.google.com/u/3/108878251893660650893" target="_blank" data-placement="bottom" data-tooltip title="Google Plus">Gmail</a></li>
                        <li class="github"><a href="https://github.com/Hanusoft" target="_blank" data-placement="bottom" data-tooltip title="Linkedin">Github</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                 <div class="col-md-1">
                    <a href="{{route('index')}}" class="logo">
                    <img alt="Hanusoft Website Template" class="img-responsive" src="{{url('frontend/img/logo-footer.png')}}">
                    </a>
                </div> 
                <div class="col-md-7">
                    <p>© Copyright 2016. All Rights Reserved.</p>
                </div>
                <div class="col-md-4">
                    <nav id="sub-menu">
                        <ul>
                            <li><a href="page-faq.html">FAQ's</a></li>
                            <li><a href="sitemap.html">Sitemap</a></li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>

