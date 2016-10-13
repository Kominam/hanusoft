@extends('backend.pages.master')
@section('external_css')
     <!--external css-->
    <link href="{{url('backend/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link href="{{url('backend/assets/morris.js-0.4.3/morris.css')}}" rel="stylesheet" />
@endsection
@section('content')
<section class="wrapper site-min-height">
        <!-- page start-->
        <div id="morris">
            <div class="row">
                <div class="col-lg-6">
                    <section class="panel">
                        <header class="panel-heading">
                            Jaguar 'E' Type vehicles in the UK
                        </header>
                        <div class="panel-body">
                            <div id="hero-graph" class="graph"></div>
                        </div>
                    </section>
                </div>
                <div class="col-lg-6">
                    <section class="panel">
                        <header class="panel-heading">
                            iPhone CPU benchmarks
                        </header>
                        <div class="panel-body">
                            <div id="hero-bar" class="graph"></div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <section class="panel">
                        <header class="panel-heading">
                            Quarterly Apple iOS device unit sales
                        </header>
                        <div class="panel-body">
                            <div id="hero-area" class="graph"></div>
                        </div>
                    </section>
                </div>
                <div class="col-lg-6">
                    <section class="panel">
                        <header class="panel-heading">
                            Donut flavours
                        </header>
                        <div class="panel-body">
                            <div id="hero-donut" class="graph"></div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!-- page end-->
</section>
@endsection
@section('external_script')
        <script src="{{url('backend/js/jquery-1.8.3.min.js')}}"></script>
     <script src="{{url('backend/assets/morris.js-0.4.3/morris.min.js')}}" type="text/javascript"></script>
    <script src="{{url('backend/assets/morris.js-0.4.3/raphael-min.js')}}" type="text/javascript"></script>
    <script src="{{url('backend/js/morris-script.js')}}"></script>
@endsection