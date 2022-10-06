<?php
$title = 'latest IT Blogs - Technology Trend for 2023 ';
$description = 'Learn latest technology, digital trend through DigiPrima IT blogs for 2023. Our expert blog writer share application development ideas for beginners.';
$keyword = 'IT Blogs ,  Technologies Updates, Development Updates, Information Technologies Updates 
';
$imagetag_url = 'images/page/digiprima-sofrware-development-company.png';
?>
@include('head')
<?php
$min  = 1;
$max  = 10;
$num1 = rand( $min, $max );
$num2 = rand( $min, $max );
$sum  = $num1 + $num2;
?>
<style type="text/css">
.post {display: block !important;}.new-sec h3 {padding: 0;}.M {height: auto;}.form-chnge {margin-bottom: 13px !important;}.height-557px {border-radius: 20px;box-shadow: 0 4px 24px 0 rgb(34 41 47 / 10%);}.col-change {margin-left: 223px;margin-top: -40px;}button.btn.btn-link.link-dark {margin-left: 30px !important;}.img-mrg {margin-top: -46px !important;}.page {line-height: 3.0em;overflow: hidden;text-overflow: ellipsis;width: 100%;}.xs-icon a {font-size: 24px;width: 52px !important;height: 54px !important;line-height: 54px !important;}p {font-size: 18px !important;line-height: 32px !important;color: black;justify-content: center;}.blog .img {height: 659px;}.social-icons-style-05 a.whatsaap, .social-icons-style-06 .icon.whatsaap .icofont, .social-icons-style-12 a.whatsaap {color: #06ed00;}.blog-standard img {max-height: 600px !important;}.post-tags.new a:hover {background: #BF0731;border: 1px solid #BF0731;color: #fff;text-decoration: none;}.blog-style-01 .post {-webkit-box-shadow: 0 7px 20px -10px rgb(171 171 171 / 70%);-moz-box-shadow: 0 7px 20px -10px rgba(171, 171, 171, 0.7);box-shadow: 0 7px 20px -10px rgb(171 171 171 / 70%);-webkit-transition: all 0.4s ease;-moz-transition: all 0.4s ease;-o-transition: all 0.4s ease;transition: all 0.4s ease;}.all-paddings {padding: 40px 20px 0px 20px }.post-date {color: #b0b0b0 !important;font-size: 24px !important;font-weight: 800 !important;padding: 50% 0;text-align: center;margin: 0;}.mobile-view {display: none;}.desk-view {display: block;}@media screen and (min-device-width: 320px) and (max-device-width: 428px) {.blogs_two {height: 150px;}}@media only screen and (max-device-width: 768px) {.image_view_height {height: 100px;}.font-size-text {font-size: 6.2em;}input#quiz {margin-left: -65px;}.text-left-f {margin-left: 91px !important;}.btn.btn-md {margin-left: -85px;margin-top: 14px !important;}label.col-sm-3.col-form-label {margin-top: 21px !important;}}@media only screen and (max-width: 767px) {.mobile-view {display: block;}.desk-view {display: none;}.all-paddings {padding: 28px 20px 29px 20px }.post-date {font-size: 15px !important;padding: 30% 0 !important;}.content-box-size {height: 87px }.post-date {font-size: 20px !important;padding: 43% 0;}.padding_data_text {padding: 20px;}}.padding_data_text {padding: 20px;}.container-fluid {margin-right: auto;margin-left: auto;padding-left: 50px;padding-right: 50px;}p {font-size: 16px !important;line-height: 32px !important;color: black;justify-content: center;}.card {box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);transition: 0.3s;height: 492px;}.card:hover {box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);}.container {padding: 2px;}.box-pp {float: right;margin-right: 0px !important;}ul p {}.text-left-f {margin-left: 153px !important;}label.col-sm-3.col-form-label {margin-top: 21px !important;padding-left: 38px !important;}.col-change {margin-left: 191px;margin-top: -40px;}@media (min-width:320px) and (max-width:350px) {.text-mr {margin-left: 6px !important;}button.btn.btn-link.link-dark {margin-left: 42px !important;}.text-left-f {margin-left: 96px !important;}label.col-sm-3.col-form-label {margin-top: 21px !important;padding-left: 8px !important;}}@media (min-width:351px) and (max-width:380px) {.text-mr {margin-left: 155px !important;margin-top: 10px;}button.btn.btn-link.link-dark {margin-left: 60px !important;}.form-chnge {width: 106%;}}@media (min-width:381px) and (max-width:450px) {.col-change {margin-left: 300px;margin-top: -40px;}.form-chnge {width: 106%;}.btn.btn-md {margin-left: -45px;margin-top: -41px !important;}}@media (max-width:500px) {.height-557px {box-shadow: none !important;border-radius: 0px !important;height: 643px !important;}}
</style>
<div class="transition-none">
    <section class="title-hero-bg banking-banner" style="background: url('images1/digi-blog-banner.jpg')"
        alt="case study in development" title="case study in development">

        <div class="layer container">
            <div class="page-title text-center white-color">
                <h1>IT Blogs </h1>
            </div>
        </div>
    </section>
</div>
<!--== Blog Standard Posts Start ==-->
<section class="white-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="widget sidebar_widget">

                    <div class="sidebar_widget widget_tag_cloud mb-50">
                        <h2>Blogs</h2>
                        <div class=" post-tags new post-tags-border">
                            @foreach($categories as $category)
                            @if($category->name)
                            <a href="{{ url('blog-list')}}?category={{$category->name}}"
                                style="border: 2px solid #b0b0b0">{{$category->name}}</a>
                            @endif

                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<section class="white-bg">
    <div class="container-fluid">
        <div class="row blog-style-01">

            @foreach($blogs as $blog)

            <a href="{{ url('blogs', ['slug' => $blog->slug]) }}" target="_blank" id="title_data">

                <div class="col-md-3 col-sm-6 col-xs-12 mb-30 image-box-shadow">

                    <div class="post">

                        <div class="post-img"> @if($blog->metaImageHash)
                            <img src="{{ asset('/files') . '/' . $blog->metaImageHash . '/' . $blog->metaImageName }}"
                                alt="Meta Image" style="height: 150px;">
                            @endif
                        </div>
                        <div class="post-info all-padding-40">
                            <!-- <h3 style="height: 72px;"><p style="color:black;"><a href="{{ url('blogs', ['slug' => $blog->slug]) }}" target="_blank" id="title_data">{{ $blog->title }}  </a></p></h3> -->

                            <h3 style="min-height: 75px;">
                                <p style="color:black;">{{ $blog->title }} </p>
                            </h3>
                            <h6>{{ $blog->date }}</h6>

                            <!-- <a class="readmore" href="{{ url('blogs', ['slug' => $blog->slug]) }}" target="_blank"><span>Read More</span></a> -->
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
            <br>
            <!--== Post End ==-->
        </div>
    </div>
</section>
<section class="">
    <div class="container">
        <center>
            <h2 class="headr1"><b>Tell us your target. We'll grow your business </b></h2>
        </center>
        <center>
            <h3 class="roboto-font font-300">Complete the form below and we will contact you to discuss your project.
                Your information will be kept confidential.</h3>
        </center>
        <script src="https://www.google.com/recaptcha/api.js"></script>
        <section class="">
            <!-- <div class="container">
        <h2 class="headr1 font-35px"><b>We Can help You For Digital Success </b></h2> -->
            <div class="row mt-50 service-box-style-02">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="flipper">
                        <!-- <div class="text-center" style="text-align: center;"> -->
                        <div class="box-front height-557px white-bg ">
                            <div class="content-wrap">

                                <h2><b style="font-size: 28px;">Why Only DigiPrima?</b></h2>

                                <ul style="float:left;">
                                    <h4><img src="images/tics.png" style="height: 18px;width:26px; ">
                                        <b>10&nbsp;years</b>
                                        in IT.</h4>

                                    <h4><img src="images/tics.png" style="height: 18px;width:26px; "> <b>Over
                                            1,000</b>&nbsp; success stories.</h4>

                                    <h4> <img src="images/tics.png" style="height: 18px;width:26px; "> <b>Over 200
                                            &nbsp;specialists</b> on Company.</h4>

                                    <h4><img src="images/tics.png" style="height: 18px;width:26px; "> Microsoft & Azure
                                        certified partner. </h4>

                                    <h4><img src="images/tics.png" style="height: 18px;width:26px; "> <b>ISO
                                            certified</b>
                                        to service quality and customer data security.</h4>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="flipper" style="margin-bottom: 130px">
                        <div class="text-center mb-50 main-box">
                            <div class="box-front height-557px white-bg">
                                <div class="content-wrap">
                                    <div id="appointment-messages"></div>
                                    <form name="contact-form" id="contactform" action="{{url('/contact')}}"
                                        method="POST" class="contact-form-style-01 ttt" style="border-radius: 10px;">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            @if(Session::has('message'))
                                            <p class="alert {{ Session::get('alert-class', 'alert-success') }}">
                                                {{ Session::get('message') }}</p>
                                            @endif
                                            @if(Session::has('loginerror'))
                                            <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">
                                                {{ Session::get('loginerror') }}</p>
                                            @endif
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6"></div>
                                            <div class="col-md-6 col-sm-6">
                                                <img src="images/godaddy-ssl.png" style="max-width:100%;float:right;"
                                                    class="img-mrg">
                                            </div>

                                        </div>
                                        <div class="row">
                                            <h5 style="text-align: center; ">Please send us your requirements through
                                                form
                                                below and we'll get back to you at the earliest</b></h5>
                                            <br>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group form-chnge ">
                                                    <label for="your-surname" class="form-label sr-only">Name</label>
                                                    <input type="text" class=" md-input-new" id="your-name" name="name"
                                                        placeholder="Name *" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group form-chnge ">
                                                    <label for="your-surname" class="form-label sr-only">Email</label>
                                                    <input type="text" class=" md-input-new" id="your-email"
                                                        name="email" placeholder="Email *" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group form-chnge ">
                                                    <label for="your-surname" class="form-label sr-only">Number</label>
                                                    <input type="text" class=" md-input-new" id="your-number"
                                                        name="number" placeholder="Number *">

                                                    <div class="help-block with-errors"></div>

                                                    <!-- <link rel="stylesheet" href="{{asset('/build/css/intlTelInput.css')}}">
                                                <script
                                                    src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
                                                </script>
                                                <script src="{{asset('/build/js/intlTelInput.js')}}"></script> -->

                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group form-chnge ">
                                                    <label for="your-subject" class="form-label sr-only">
                                                        Subject</label>
                                                    <input type="text" class=" md-input-new" id="your-subject"
                                                        name="subject" placeholder="Subject *">

                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-sm-12">
                                                <div class="form-group form-chnge ">
                                                    <label for="your-message" class="form-label sr-only">Message</label>
                                                    <textarea class=" md-input-new" id="your-message" name="message"
                                                        rows="4" placeholder="Message *" required></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <label for="quiz" class="col-sm-3 col-xs-3 col-form-label">
                                                                <?php echo $num1 . '+' . $num2; ?>?
                                                            </label>
                                                            <div class="col-sm-6 col-xs-6">
                                                                <input type="text" class="quiz-control" id="quiz">
                                                            </div>
                                                            <div class="col-md-6 col-sm-6 col-xs-3 text-end col-change">
                                                                <button type="reset"
                                                                    class="btn btn-link link-dark">Reset</button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="text-left-f text-mr ">
                                                    <button id="new_dis" data-res="<?php echo $sum; ?>" type="submit"
                                                        class=" btn btn-outline-new btn-md btn-square btn-animate btn-new btn btn-dark w-100 fw-bold"><span>Send
                                                            Message
                                                            <i class="ion-android-arrow-forward"></i></span></button>
                                                    <!-- <button type="submit" name="submit"
                                                        class="btn btn-outline-new btn-md btn-square btn-animate btn-new"><span>Send
                                                        Message
                                                        <i class="ion-android-arrow-forward"></i></span></button> -->
                                                </div>

                                            </div>
                                            @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            @endif
                                        </div>
                                </div>

                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>
<script>
const submitButton = document.querySelector('#new_dis');
console.log('hello raaaaaa', submitButton)
const quizInput = document.querySelector(".quiz-control");
quizInput.addEventListener("input", function(e) {
    console.log('ineeeeeeeeeeeee');
    const res = submitButton.getAttribute("data-res");
    if (this.value == res) {
        console.log('with diabled', res);
        submitButton.disabled = false;

        // submitButton.removeAttribute("disabled");
    } else {
        console.log('with anbled');
        submitButton.setAttribute("disabled", "");
    }
});
</script>