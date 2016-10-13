@extends('backend.pages.master')
@section('external_css')
    <link href="{{url('backend/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
@endsection
@section('content')
  <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <aside class="profile-nav col-lg-3">
                      <section class="panel">
                          <div class="user-heading round">
                              <a href="#">
                                  <img src="img/profile-avatar.jpg" alt="">
                              </a>
                              <h1>Jonathan Smith</h1>
                              <p>jsmith@flatlab.com</p>
                          </div>

                          <ul class="nav nav-pills nav-stacked">
                              <li><a href="profile.html"> <i class="icon-user"></i> Profile</a></li>
                              <li class="active"><a href="#"> <i class="icon-calendar"></i> Recent Activity <span class="label label-danger pull-right r-activity">9</span></a></li>
                              <li><a href="profile-edit.html"> <i class="icon-edit"></i> Edit profile</a></li>
                          </ul>

                      </section>
                  </aside>
                  <aside class="profile-info col-lg-9">
                      <section class="panel">
                          <form>
                              <textarea placeholder="Whats in your mind today?" rows="2" class="form-control input-lg p-text-area"></textarea>
                          </form>
                          <footer class="panel-footer">
                              <button class="btn btn-danger pull-right">Post</button>
                              <ul class="nav nav-pills">
                                  <li>
                                      <a href="#"><i class="icon-map-marker"></i></a>
                                  </li>
                                  <li>
                                      <a href="#"><i class="icon-camera"></i></a>
                                  </li>
                                  <li>
                                      <a href="#"><i class=" icon-film"></i></a>
                                  </li>
                                  <li>
                                      <a href="#"><i class="icon-microphone"></i></a>
                                  </li>
                              </ul>
                          </footer>
                      </section>
                      <section class="panel">
                          <div class="panel-body profile-activity">
                              <h5 class="pull-right">12 August 2013</h5>
                              <div class="activity terques">
                                  <span>
                                      <i class="icon-shopping-cart"></i>
                                  </span>
                                  <div class="activity-desk">
                                      <div class="panel">
                                          <div class="panel-body">
                                              <div class="arrow"></div>
                                              <i class=" icon-time"></i>
                                              <h4>10:45 AM</h4>
                                              <p>Purchased new equipments for zonal office setup and stationaries.</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="activity alt purple">
                                  <span>
                                      <i class="icon-rocket"></i>
                                  </span>
                                  <div class="activity-desk">
                                      <div class="panel">
                                          <div class="panel-body">
                                              <div class="arrow-alt"></div>
                                              <i class=" icon-time"></i>
                                              <h4>12:30 AM</h4>
                                              <p>Lorem ipsum dolor sit amet consiquest dio</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="activity blue">
                                  <span>
                                      <i class="icon-bullhorn"></i>
                                  </span>
                                  <div class="activity-desk">
                                      <div class="panel">
                                          <div class="panel-body">
                                              <div class="arrow"></div>
                                              <i class=" icon-time"></i>
                                              <h4>10:45 AM</h4>
                                              <p>Please note which location you will consider, or both. Reporting to the VP <br> of Compliance and CSR, you will be responsible for managing.. </p>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="activity alt green">
                                  <span>
                                      <i class="icon-beer"></i>
                                  </span>
                                  <div class="activity-desk">
                                      <div class="panel">
                                          <div class="panel-body">
                                              <div class="arrow-alt"></div>
                                              <i class=" icon-time"></i>
                                              <h4>12:30 AM</h4>
                                              <p>Please note which location you will consider, or both.</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                          </div>
                      </section>
                      <section class="panel">
                          <header class="panel-heading summary-head">
                              <h4>Day summary</h4>
                              <p>12 August 2013</p>
                          </header>
                          <div class="panel-body">
                              <ul class="summary-list">
                                  <li>
                                      <a href="javascript:;">
                                        <i class=" icon-shopping-cart text-primary"></i>
                                          1 Purchase
                                      </a>
                                  </li>
                                  <li>
                                      <a href="javascript:;">
                                          <i class="icon-envelope text-info"></i>
                                          15 Emails
                                      </a>
                                  </li>
                                  <li>
                                      <a href="javascript:;">
                                          <i class=" icon-picture text-muted"></i>
                                          2 Photo Upload
                                      </a>
                                  </li>
                                  <li>
                                      <a href="javascript:;">
                                          <i class="icon-tags text-success"></i>
                                          19 Sales
                                      </a>
                                  </li>
                                  <li>
                                      <a href="javascript:;">
                                          <i class="icon-microphone text-danger"></i>
                                          4 Audio
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </section>
                      <section class="panel">
                          <div class="panel-body profile-activity">
                              <h5 class="pull-right">11 August 2013</h5>
                              <div class="activity terques">
                                  <span>
                                      <i class="icon-picture"></i>
                                  </span>
                                  <div class="activity-desk">
                                      <div class="panel">
                                          <div class="panel-body">
                                              <div class="arrow"></div>
                                              <i class=" icon-time"></i>
                                              <h4>10:45 AM</h4>
                                              <p>Added new photo for the current feature product</p>
                                              <div class="album">
                                                  <a href="#">
                                                      <img src="img/pro-ac-1.png" alt="">
                                                  </a>
                                                  <a href="#">
                                                      <img src="img/pro-ac-2.png" alt="">
                                                  </a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="activity alt purple">
                                  <span>
                                      <i class="icon-rocket"></i>
                                  </span>
                                  <div class="activity-desk">
                                      <div class="panel">
                                          <div class="panel-body">
                                              <div class="arrow-alt"></div>
                                              <i class=" icon-time"></i>
                                              <h4>12:30 AM</h4>
                                              <p>Vocal Recording. Please note which location you will consider, or both.</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </section>
                      <div class="text-center">
                          <a class="btn btn-danger" href="javascript:;">Load Old Activities</a>
                      </div>
                  </aside>
              </div>

              <!-- page end-->
  </section>
@endsection
@section('external_script')
   <script src="{{url('backend/assets/jquery-knob/js/jquery.knob.js')}}"></script>
    <script src="{{url('backend/js/jquery-1.8.3.min.js')}}"></script>
   <script class="include" type="text/javascript" src="{{url('backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
@endsection