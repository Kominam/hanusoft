@extends('backend.pages.master')
@section('external_css')
     <link href="{{url('backend/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
       <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
     <link href="{{url('backend/css/tasks.css')}}" rel="stylesheet">
        <link href="{{url('backend/assets/xchart/xcharts.css')}}" rel="stylesheet" />
@endsection
@section('content')
<section class="wrapper site-min-height">
      <div class="row">
        <div class="col-md-6">
                      <section class="panel tasks-widget">
                          <header class="panel-heading">
                              Todo list
                          </header>
                          <div class="panel-body">

                              <div class="task-content">

                                  <ul class="task-list">
                                      <li>
                                          <div class="task-checkbox">
                                              <input type="checkbox" class="list-child" value=""  />
                                          </div>
                                          <div class="task-title">
                                              <span class="task-title-sp">Flatlab is Modern Dashboard</span>
                                              <span class="badge badge-sm label-success">2 Days</span>
                                              <div class="pull-right hidden-phone">
                                                  <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
                                                  <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                                  <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                              </div>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="task-checkbox">
                                              <input type="checkbox" class="list-child" value=""  />
                                          </div>
                                          <div class="task-title">
                                              <span class="task-title-sp">Fully Responsive & Bootstrap 3.0.2 Compatible</span>
                                              <span class="badge badge-sm label-danger">Done</span>
                                              <div class="pull-right hidden-phone">
                                                  <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
                                                  <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                                  <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                              </div>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="task-checkbox">
                                              <input type="checkbox" class="list-child" value=""  />
                                          </div>
                                          <div class="task-title">
                                              <span class="task-title-sp">Daily Standup Meeting</span>
                                              <span class="badge badge-sm label-warning">Company</span>
                                              <div class="pull-right hidden-phone">
                                                  <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
                                                  <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                                  <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                              </div>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="task-checkbox">
                                              <input type="checkbox" class="list-child" value=""  />
                                          </div>
                                          <div class="task-title">
                                              <span class="task-title-sp">Write well documentation for this theme</span>
                                              <span class="badge badge-sm label-primary">3 Days</span>
                                              <div class="pull-right hidden-phone">
                                                  <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
                                                  <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                                  <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                              </div>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="task-checkbox">
                                              <input type="checkbox" class="list-child" value=""  />
                                          </div>
                                          <div class="task-title">
                                              <span class="task-title-sp">We have a plan to include more features in future update</span>
                                              <span class="badge badge-sm label-info">Tomorrow</span>
                                              <div class="pull-right hidden-phone">
                                                  <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
                                                  <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                                  <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                              </div>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="task-checkbox">
                                              <input type="checkbox" class="list-child" value=""  />
                                          </div>
                                          <div class="task-title">
                                              <span class="task-title-sp">Don't be hesitate to purchase this Dashbord</span>
                                              <span class="badge badge-sm label-inverse">Now</span>
                                              <div class="pull-right">
                                                  <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
                                                  <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                                  <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                              </div>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="task-checkbox">
                                              <input type="checkbox" class="list-child" value=""  />
                                          </div>
                                          <div class="task-title">
                                              <span class="task-title-sp">Code compile and upload</span>
                                              <span class="badge badge-sm label-success">2 Days</span>
                                              <div class="pull-right hidden-phone">
                                                  <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
                                                  <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                                  <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                              </div>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="task-checkbox">
                                              <input type="checkbox" class="list-child" value=""  />
                                          </div>
                                          <div class="task-title">
                                              <span class="task-title-sp">Tell your friends to buy this dashboad</span>
                                              <span class="badge badge-sm label-danger">Now</span>
                                              <div class="pull-right hidden-phone">
                                                  <button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
                                                  <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                                  <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                              </div>
                                          </div>
                                      </li>
                                      
                                  </ul>
                              </div>

                              <div class=" add-task-row">
                                  <a class="btn btn-success btn-sm pull-left" href="#">Add New Tasks</a>
                                  <a class="btn btn-default btn-sm pull-right" href="#">See All Tasks</a>
                              </div>
                          </div>
                      </section>
                      <section class="panel">
                            <div class="panel-heading">
                                Members
                            </div>
                          <div class="panel-body">
                          <ul>
                              <li>Hello</li>
                               <li>Hello</li>
                                <li>Hello</li>
                                 <li>Hello</li>
                                  <li>Hello</li>
                          </ul>
                          </div>
                      </section>
        </div>
        <div class="col-md-6">
           <section class="panel">
                <div class="panel-body">
                    <div class="text-center mbot30">
                        <h3 class="timeline-title">Timeline</h3>
                        <p class="t-info">This is a project timeline</p>
                    </div>
                    <div class="timeline">
                        <article class="timeline-item">
                            <div class="timeline-desk">
                                <div class="panel">
                                    <div class="panel-body">
                                        <span class="arrow"></span>
                                        <span class="timeline-icon red"></span>
                                        <span class="timeline-date">08:25 am</span>
                                        <h1 class="red">12 July | Sunday</h1>
                                        <p>Lorem ipsum dolor sit amet consiquest dio</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="timeline-item alt">
                            <div class="timeline-desk">
                                <div class="panel">
                                    <div class="panel-body">
                                        <span class="arrow-alt"></span>
                                        <span class="timeline-icon green"></span>
                                        <span class="timeline-date">10:00 am</span>
                                        <h1 class="green">10 July | Wednesday</h1>
                                        <p><a href="#">Jonathan Smith</a> added new milestone <span><a href="#" class="green">ERP</a></span></p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="timeline-item">
                            <div class="timeline-desk">
                                <div class="panel">
                                    <div class="panel-body">
                                        <span class="arrow"></span>
                                        <span class="timeline-icon blue"></span>
                                        <span class="timeline-date">11:35 am</span>
                                        <h1 class="blue">05 July | Monday</h1>
                                        <p><a href="#">Anjelina Joli</a> added new album <span><a href="#" class="blue">PARTY TIME</a></span></p>
                                        <div class="album">
                                            <a href="#">
                                            <img alt="" src="img/sm-img-1.jpg">
                                            </a>
                                            <a href="#">
                                            <img alt="" src="img/sm-img-2.jpg">
                                            </a>
                                            <a href="#">
                                            <img alt="" src="img/sm-img-3.jpg">
                                            </a>
                                            <a href="#">
                                            <img alt="" src="img/sm-img-1.jpg">
                                            </a>
                                            <a href="#">
                                            <img alt="" src="img/sm-img-2.jpg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="timeline-item alt">
                            <div class="timeline-desk">
                                <div class="panel">
                                    <div class="panel-body">
                                        <span class="arrow-alt"></span>
                                        <span class="timeline-icon purple"></span>
                                        <span class="timeline-date">3:20 pm</span>
                                        <h1 class="purple">29 June | Saturday</h1>
                                        <p>Lorem ipsum dolor sit amet consiquest dio</p>
                                        <div class="notification">
                                            <i class=" icon-exclamation-sign"></i> New task added for <a href="#">Denial Collins</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="timeline-item">
                            <div class="timeline-desk">
                                <div class="panel">
                                    <div class="panel-body">
                                        <span class="arrow"></span>
                                        <span class="timeline-icon light-green"></span>
                                        <span class="timeline-date">07:49 pm</span>
                                        <h1 class="light-green">10 June | Friday</h1>
                                        <p><a href="#">Jonatha Smith</a> added new milestone <span><a href="#" class="light-green">prank</a></span> Lorem ipsum dolor sit amet consiquest dio</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="clearfix">&nbsp;</div>
                </div>
            </section>
        </div>
     </div>
     <section class="panel">
                  <header class="panel-heading">
                      xCharts Basic Example
                  </header>
                  <div class="panel-body">
                      <figure class="demo-xchart" id="chart"></figure>
                  </div>
              </section>

</section>
@endsection
@section('external_script')
    <script src="{{url('backend/js/tasks.js')}}" type="text/javascript"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script>
      jQuery(document).ready(function() {
          TaskList.initTaskWidget();
      });

      $(function() {
          $( "#sortable" ).sortable();
          $( "#sortable" ).disableSelection();
      });

    </script>
    <script src="{{url('backend/assets/xchart/d3.v3.min.js')}}"></script>
    <script src="{{url('backend/assets/xchart/xcharts.min.js')}}"></script>
    <script>
      (function () {
          var data = [{"xScale":"ordinal","comp":[],"main":[{"className":".main.l1","data":[{"y":15,"x":"2012-11-19T00:00:00"},{"y":11,"x":"2012-11-20T00:00:00"},{"y":8,"x":"2012-11-21T00:00:00"},{"y":10,"x":"2012-11-22T00:00:00"},{"y":1,"x":"2012-11-23T00:00:00"},{"y":6,"x":"2012-11-24T00:00:00"},{"y":8,"x":"2012-11-25T00:00:00"}]},{"className":".main.l2","data":[{"y":29,"x":"2012-11-19T00:00:00"},{"y":33,"x":"2012-11-20T00:00:00"},{"y":13,"x":"2012-11-21T00:00:00"},{"y":16,"x":"2012-11-22T00:00:00"},{"y":7,"x":"2012-11-23T00:00:00"},{"y":18,"x":"2012-11-24T00:00:00"},{"y":8,"x":"2012-11-25T00:00:00"}]}],"type":"line-dotted","yScale":"linear"},{"xScale":"ordinal","comp":[],"main":[{"className":".main.l1","data":[{"y":12,"x":"2012-11-19T00:00:00"},{"y":18,"x":"2012-11-20T00:00:00"},{"y":8,"x":"2012-11-21T00:00:00"},{"y":7,"x":"2012-11-22T00:00:00"},{"y":6,"x":"2012-11-23T00:00:00"},{"y":12,"x":"2012-11-24T00:00:00"},{"y":8,"x":"2012-11-25T00:00:00"}]},{"className":".main.l2","data":[{"y":29,"x":"2012-11-19T00:00:00"},{"y":33,"x":"2012-11-20T00:00:00"},{"y":13,"x":"2012-11-21T00:00:00"},{"y":16,"x":"2012-11-22T00:00:00"},{"y":7,"x":"2012-11-23T00:00:00"},{"y":18,"x":"2012-11-24T00:00:00"},{"y":8,"x":"2012-11-25T00:00:00"}]}],"type":"cumulative","yScale":"linear"},{"xScale":"ordinal","comp":[],"main":[{"className":".main.l1","data":[{"y":12,"x":"2012-11-19T00:00:00"},{"y":18,"x":"2012-11-20T00:00:00"},{"y":8,"x":"2012-11-21T00:00:00"},{"y":7,"x":"2012-11-22T00:00:00"},{"y":6,"x":"2012-11-23T00:00:00"},{"y":12,"x":"2012-11-24T00:00:00"},{"y":8,"x":"2012-11-25T00:00:00"}]},{"className":".main.l2","data":[{"y":29,"x":"2012-11-19T00:00:00"},{"y":33,"x":"2012-11-20T00:00:00"},{"y":13,"x":"2012-11-21T00:00:00"},{"y":16,"x":"2012-11-22T00:00:00"},{"y":7,"x":"2012-11-23T00:00:00"},{"y":18,"x":"2012-11-24T00:00:00"},{"y":8,"x":"2012-11-25T00:00:00"}]}],"type":"bar","yScale":"linear"}];
          var order = [0, 1, 0, 2],
                  i = 0,
                  xFormat = d3.time.format('%A'),
                  chart = new xChart('line-dotted', data[order[i]], '#chart', {
                      axisPaddingTop: 5,
                      dataFormatX: function (x) {
                          return new Date(x);
                      },
                      tickFormatX: function (x) {
                          return xFormat(x);
                      },
                      timing: 1250
                  }),
                  rotateTimer,
                  toggles = d3.selectAll('.multi button'),
                  t = 3500;

          function updateChart(i) {
              var d = data[i];
              chart.setData(d);
              toggles.classed('toggled', function () {
                  return (d3.select(this).attr('data-type') === d.type);
              });
              return d;
          }

          toggles.on('click', function (d, i) {
              clearTimeout(rotateTimer);
              updateChart(i);
          });

          function rotateChart() {
              i += 1;
              i = (i >= order.length) ? 0 : i;
              var d = updateChart(order[i]);
              rotateTimer = setTimeout(rotateChart, t);
          }
          rotateTimer = setTimeout(rotateChart, t);
      }());

  </script>
   <script src="{{url('backend/js/jquery-1.8.3.min.js')}}"></script>
@endsection