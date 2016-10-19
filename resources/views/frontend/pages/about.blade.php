@extends('frontend.pages.master')
@section('content')

<div role="main" class="main">
    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                       {!! Breadcrumbs::render('about') !!}
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>About Us</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <h2 class="word-rotator-title">
            Hanusoft giúp bạn  <strong>
            <span class="word-rotate" data-plugin-options='{"delay": 2000}'>
            <span class="word-rotate-items">
            <span style="color:#F20202">học tập.</span>
            <span style="color:#F20202">rèn luyện.</span>
            <span style="color:#F20202">trải nghiệm.</span>
            </span>
            </span>
            </strong>
        </h2>
        <div class="row">
            <div class="col-md-10">
                <p class="lead">

                   Bạn là người đam mê với Công nghệ? Bạn muốn tự tay mình tạo ra những ứng dụng hay, những website thương mại điện tử hay những game lôi cuốn người dùng.Bạn đang băn khoăn không biết làm cách nào để có thể nâng cao, rèn luyện kĩ năng của bản thân đồng thời có cơ hội theo đuổi đam mê của chính mình.Vậy còn chần chừ gì nữa, hãy tham gia ngay với chúng tôi, Hanusoft sẽ đồng hành cùng bạn!
                </p>
            </div>
            <div class="col-md-2">
                <a href="#" class="btn btn-lg btn-primary push-top">Đăng kí làm thành viên!</a>
            </div>
        </div>
        <hr class="tall">
        <div class="row">
            <div class="col-md-6">
                <h3><strong>Chúng tôi</strong> là ai </h3>
                <p>Hanusoft được xây dựng vào năm 2006 dựa trên ý tưởng chia sẻ kiến thức để nâng cao kỹ năng và kinh nghiệm trong lĩnh vực CNTT. Với những ai chưa am hiểu về công nghệ thông tin, lập trình luôn là một công việc cao siêu, bí hiểm, khiến người ta mới nghe thấy thôi đã lắc đầu, ngán ngẩm. Thậm chí, ngay cả với các sinh viên mới nhập môn lập trình, học code, hiểu code, viết code luôn là thử thách đầy khó khăn. Do đó, Hanusoft mong muốn tạo sân chơi học thuật uy tín dành cho sinh viên yêu thích, đam mê Công nghệ Thông tin, đồng thời, khích lệ, cổ vũ sinh viên tích cực học tập, nghiên cứu khoa học và làm việc đội nhóm trong môi trường cộng tác và hội nhập khiến cho lập trình trở thành một món ăn tinh thần đầy hứng thú và không hề khô cứng, chán ngắt như những gì chúng ta thường biết tới. Bằng sự nhiệt tình của các thầy trong khoa, các thành viên có nhiều kinh nghiệm, đã đưa câu lạc bộ trở thành nơi thảo luận nghiêm túc, có tổ chức tốt. Hanusoft hiện nay đang là một sân chơi bổ ích và thiết thực đối với những người yêu thích lập trình, đặc biệt là lập trình Java và PHP của sinh viên khoa CNTT trường Đại học Hà Nội.
            </div>
            <div class="col-md-4">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/FOtPeL-sVik" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <hr class="tall">
        <div class="row">
            <div class="col-md-12">
                <h3 class="push-top">Quá trình <strong>Phát triển </strong></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="history">
                    <li data-appear-animation="fadeInUp">
                        <div class="thumb">
                            <img src="{{url('frontend/img/develop-p3.jpg')}}" alt="" />
                        </div>
                        <div class="featured-box">
                            <div class="box-content">
                                <h4><strong>2016</strong></h4>
                                <p>Trong năm 2016, Hanusoft sẽ tiếp tục triển khai và hoàn thiện FIT website đồng thời nhận thêm một số dự án khác.</p>
                            </div>
                        </div>
                    </li>
                    <li data-appear-animation="fadeInUp">
                        <div class="thumb">
                            <img src="{{url('frontend/img/develop-p2.jpg')}}" alt="" />
                        </div>
                        <div class="featured-box">
                            <div class="box-content">
                                <h4><strong>2013</strong></h4>
                                <p>Trải qua nhiều năm hoạt động cũng có lúc câu lạc bộ phải tạm dừng hoạt động, biết bao lứa thành viên tham gia nhưng phải đến 2013 câu lạc bộ Hanusoft mới thực sự hoạt động mạnh mẽ trở lại.Cùng đồng hành với F3 là các anh chị từ F1, F2 đã dẫn dăt câu lạc bộ tham gia một số hoạt động của khoa như giao lưu với sinh viên các nước thuộc khối KOSEN </p>
                            </div>
                        </div>
                    </li>
                    <li data-appear-animation="fadeInUp">
                        <div class="thumb">
                            <img src="{{url('frontend/img/develop-p1.jpg')}}" alt="" />
                        </div>
                        <div class="featured-box">
                            <div class="box-content">
                                <h4><strong>2007</strong></h4>
                                <p>Năm 2007 là năm đặt nên móng cho sự hình thành của câu lạc bộ Hanusoft-dành cho sinh viên khoa CNTT trường đại học Hà Nội.Tuy mới được thành lập nhưng Hanusoft đã thu hút được sự chú ý khá nhiều các bạn sinh viên tham gia. Thế hệ F1 của câu lạc bộ là những bạn có niềm đam mê với công nghệ mong muốn học hỏi và trau dồi kĩ năng bản thân . Họ đã đạt được những thành tựu nhất định trong tời gian hoạt động tại câu lạc bộ</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
