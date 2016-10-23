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
            Hanusoft will give you a chance to  <strong>
            <span class="word-rotate" data-plugin-options='{"delay": 2000}'>
            <span class="word-rotate-items">
            <span style="color:#F20202">learn.</span>
            <span style="color:#F20202">practice.</span>
            <span style="color:#F20202">experience.</span>
            </span>
            </span>
            </strong>
        </h2>
        <div class="row">
            <div class="col-md-10">
                <p class="lead">
                    You are passionate about the technology? You want to create the application, e-commerce sites or interested games by yourself? And you are wondering how to be able to raise, train your own skills at the same time have the opportunity to pursue other passions .So do not hesitate any longer, join with us, Hanusoft will accompany you!
                   <!-- Bạn là người đam mê với Công nghệ? Bạn muốn tự tay mình tạo ra những ứng dụng hay, những website thương mại điện tử hay những game lôi cuốn người dùng.Bạn đang băn khoăn không biết làm cách nào để có thể nâng cao, rèn luyện kĩ năng của bản thân đồng thời có cơ hội theo đuổi đam mê của chính mình.Vậy còn chần chừ gì nữa, hãy tham gia ngay với chúng tôi, Hanusoft sẽ đồng hành cùng bạn! -->
                </p>
            </div>
            <div class="col-md-2">
                <a href="{{ route('login') }}" class="btn btn-lg btn-primary push-top">Join with us !!!</a>
            </div>
        </div>
        <hr class="tall">
        <div class="row">
            <div class="col-md-6">
                <h3><strong>Who</strong> are we? </h3>
                <p>Hanusoft was built in 2006 based on the idea of ​​sharing knowledge to improve their skills and experience in the IT field. For those who are not have knowledge about information technology, programming a job is always sublime, mysterious and it makes people fed up with this boring. In fact, even with the new students to coding how to learn the code,understand it and writing it clearly is always a difficult challenge. Hence, Hanusoft desire to create an academic playground for all students who have enthusiasts of Information Technology, at the same time encourages and promotes student learning, doing scientific research and work as teams in a collaborative environment. And together we make programming become an intersting inspiration not boring as what we normally know about it. The enthusiasm of the teachers in the department and members have experienced had promoted the club became an academic discussion with good organization. Hanusoft currently playing a useful and practical for those who love programming, especially Java and PHP programming of IT students of Hanoi University.
               <!--  <h3><strong>Chúng tôi</strong> là ai </h3>
               <p>Hanusoft được xây dựng vào năm 2006 dựa trên ý tưởng chia sẻ kiến thức để nâng cao kỹ năng và kinh nghiệm trong lĩnh vực CNTT. Với những ai chưa am hiểu về công nghệ thông tin, lập trình luôn là một công việc cao siêu, bí hiểm, khiến người ta mới nghe thấy thôi đã lắc đầu, ngán ngẩm. Thậm chí, ngay cả với các sinh viên mới nhập môn lập trình, học code, hiểu code, viết code luôn là thử thách đầy khó khăn. Do đó, Hanusoft mong muốn tạo sân chơi học thuật uy tín dành cho sinh viên yêu thích, đam mê Công nghệ Thông tin, đồng thời, khích lệ, cổ vũ sinh viên tích cực học tập, nghiên cứu khoa học và làm việc đội nhóm trong môi trường cộng tác và hội nhập khiến cho lập trình trở thành một món ăn tinh thần đầy hứng thú và không hề khô cứng, chán ngắt như những gì chúng ta thường biết tới. Bằng sự nhiệt tình của các thầy trong khoa, các thành viên có nhiều kinh nghiệm, đã đưa câu lạc bộ trở thành nơi thảo luận nghiêm túc, có tổ chức tốt. Hanusoft hiện nay đang là một sân chơi bổ ích và thiết thực đối với những người yêu thích lập trình, đặc biệt là lập trình Java và PHP của sinh viên khoa CNTT trường Đại học Hà Nội. -->
            </div>
            <div class="col-md-4">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/FOtPeL-sVik" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <hr class="tall">
        <div class="row">
            <div class="col-md-12">
                <h3 class="push-top">Our <strong>History </strong></h3>
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
                                <p>In 2016, we continue to finish FIT portal project also recieve other project to gain mỏe experiences. the iportance thing is organize new recruiment to have new Hanusoft generations  .</p>
                               <!--  <h4><strong>2016</strong></h4>
                               <p>Trong năm 2016, Hanusoft sẽ tiếp tục triển khai và hoàn thiện FIT website đồng thời nhận thêm một số dự án khác.</p> -->
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
                                <p>Though many year of development Hanusoft also have interupt period for one or other reasons. with many mature generations. It's not a milestone until 2013 Hanusoft have briliants development as ever. There are many ex-members from F1 and F2 generations had accompany with the newest to take part in the semina with other from KOSEN group to share knowledge  </p>
                               <!--  <h4><strong>2013</strong></h4>
                               <p>Trải qua nhiều năm hoạt động cũng có lúc câu lạc bộ phải tạm dừng hoạt động, biết bao lứa thành viên tham gia nhưng phải đến 2013 câu lạc bộ Hanusoft mới thực sự hoạt động mạnh mẽ trở lại.Cùng đồng hành với F3 là các anh chị từ F1, F2 đã dẫn dăt câu lạc bộ tham gia một số hoạt động của khoa như giao lưu với sinh viên các nước thuộc khối KOSEN </p> -->
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
                                <p>First we have to mention our most millestone in long time development period. It's 2007 became the foundation step to establish Hanusoft as the official club of Hanoi university about IT. Though still as the new club but we had attract many student want to join. Our F1 generations was the one who had biggest passionate with IT and wish to learn more also raise skills. They was successful and gain many achievements as Hanusoft member   </p>
                               <!--  <p>Năm 2007 là năm đặt nên móng cho sự hình thành của câu lạc bộ Hanusoft-dành cho sinh viên khoa CNTT trường đại học Hà Nội.Tuy mới được thành lập nhưng Hanusoft đã thu hút được sự chú ý khá nhiều các bạn sinh viên tham gia. Thế hệ F1 của câu lạc bộ là những bạn có niềm đam mê với công nghệ mong muốn học hỏi và trau dồi kĩ năng bản thân . Họ đã đạt được những thành tựu nhất định trong tời gian hoạt động tại câu lạc bộ</p> -->
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
