<?php 
 $title ='Contact Us for Software - Mobile App Development Solution
 ';
 $description= 'DigiPrima is a leading IT development Company in USA, UAE, Uk and India. You can Contact us for any  kind of web, mobile and software development query. ';
 $keyword = 'Contact Us for Software development, call us for web development , 
 ';
 $imagetag_url= 'images/page/digiprima-sofrware-development-company.png1';
 $meta_tag='';
?>
<?php
$min  = 1;
$max  = 5;
$num1 = rand( $min, $max );
$num2 = rand( $min, $max );
$sum  = $num1 + $num2;
?>
@include('head')
<style>
.form-chnge {display: flex;float: right;width: 100%;margin-top: 0px;margin-bottom: 13px !important;}input#quiz {margin-left: 28px;}label.col-sm-3.col-form-label {margin-top: 21px !important;padding-left: 33px !important;}@media (min-width:320px) and (max-width:780px) {section {padding-top: 0px;padding-bottom: 0px;}button.btn.btn-link.link-dark {margin-left: 19px !important;}}@media (max-width:400px) {.white-bg2 {display: none;}}.card {box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);transition: 0.3s;height: 492px;}.card:hover {box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);}.container {padding: 2px;}.box-pp {float: right;margin-right: 0px !important;}ul p {}.text-left-f {margin-left: 153px !important;}label.col-form-label {margin-left: 13px;}.btn.btn-md {margin-left: -5px;margin-top: 14px !important;}.col-change {margin-left: 223px;margin-top: -40px;}.img-mrg {margin-top: 22px !important;}@media (max-width:768px) {input#quiz {margin-left: -20px;}.btn.btn-md {margin-left: -82px;margin-top: 10px !important;}button.btn.btn-md.btn-color.btn-animate1.btn-review.bn-t {margin-left: 20px;}}@media (min-width:320px) and (max-width:380px) {.col-change {margin-left: 240px;margin-top: -40px;}.height-557px {height: 615px !important;}.text-mr {margin-top: 10px !important;}button.btn.btn-link.link-dark {margin-left: 19px !important;}.btn.btn-md {margin-top: 10px !important;}}@media (min-width:381px) and (max-width:450px) {.col-change {margin-left: 300px;margin-top: -40px;}.height-557px {height: 606px !important;}.text-mr {margin-left: 6px !important;}.form-group {width: 99%;}.btn.btn-md {margin-left: 87px;margin-top: -23px !important;}}@media (min-width:768px) {.box-front.height-557px.white-bg {border-radius: 20px;box-shadow: 0 4px 24px 0 rgb(34 41 47 / 10%);}.form-group {width: 99%;}button.btn.btn-link.link-dark {margin-left: 20px !important;}}@media (max-width:375px) {.form-group {width: 99%;}}
</style>
<!--== Contact Hero Start ==-->
<section class="pt-0 pb-0" style="background-image: url(images/DigiImages/banner.webp);">
    <div class=" z-index-0"></div>
    <div class=" container relative sm-screen">
        <div class="simple-content-slider text-center">
            <div class="simple-content-slider-text">
                <div class="simple-content-text-inner">
                    <div class="row">
                        <div class="col-md-12 centerize-col social-icons-style-12">
                            <div class="white-color text-center">
                                <h1
                                    class="white-color font-700 text-uppercase font-60px line-height-90 line-height-90 xs-font-40px xs-line-height-50 sm-font-60px sm-line-height-60">
                                    Let's Talk</h1>
                                <span class="font-20px font-300">"Your Trusted Partners for Software Development and
                                    Enterprise Solutions"</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="">
    <div class="container">
        <h2 class="headr1 font-35px"><b>We Can help You For Digital Success </b></h2>
        <div class="row mt-50 service-box-style-02">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="flipper">
                    <div class="box-front height-557px white-bg ">
                        <div class="content-wrap">
                            <h2><b style="font-size: 28px;">Why Only DigiPrima?</b></h2>
                            <ul style="float:left;">
                                <h4><img src="images/tics.png" alt="IT Software Development"
                                        style="height: 18px;width:26px; "> <b>10&nbsp;years</b>
                                    in IT.</h4>
                                <h4><img src="images/tics.png" alt="Over
                                        1,000 Software Development" style="height: 18px;width:26px; "> <b>Over
                                        1,000</b>&nbsp; success stories.</h4>
                                <h4> <img src="images/tics.png" alt=" Software Development on Company"
                                        style="height: 18px;width:26px; "> <b>Over 200
                                        &nbsp;specialists</b> on Company.</h4>
                                <h4><img src="images/tics.png" alt=" Microsoft & Azure "
                                        style="height: 18px;width:26px; "> Microsoft & Azure
                                    certified partner. </h4>
                                <h4><img src="images/tics.png" alt="ISO certified" style="height: 18px;width:26px; ">
                                    <b>ISO certified</b>
                                    to service quality and customer data security.</h4>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="flipper">
                    <div class="text-center mb-50 main-box">
                        <div class="box-front height-557px white-bg">
                            <div class="content-wrap">
                                <div id="appointment-messages"></div>
                                <form name="contact-form" id="contactform" action="{{url('/contact')}}" method="POST"
                                    class="contact-form-style-01 ttt" style="border-radius: 10px;">
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
                                            <img src="images/godaddy-ssl.png" alt=" Software Development godaddy form"
                                                title="Software Development godaddy form"
                                                style="max-width:100%;float:right;" class="img-mrg">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <h5 style="text-align: center; ">Please send us your requirements through form
                                            below and we'll get back to you at the earliest</b></h5>
                                        <br>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-chng-1">
                                                <label for="your-surname" class="form-label sr-only">Name</label>
                                                <input type="text" class=" md-input-new" id="your-name" name="name"
                                                    placeholder="Name *" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-chng-1">
                                                <label for="your-surname" class="form-label sr-only">Email</label>
                                                <input type="text" class=" md-input-new" id="your-email" name="email"
                                                    placeholder="Email *" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-chng-1">
                                                <label for="your-surname" class="form-label sr-only">Number</label>
                                                <input type="text" class=" md-input-new" id="your-number" name="number"
                                                    placeholder="Number *">

                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-chng-1">
                                                <label for="your-subject" class="form-label sr-only"> Subject</label>
                                                <input type="text" class=" md-input-new" id="your-subject"
                                                    name="subject" placeholder="Subject *">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-chng-1">
                                                <label for="your-message" class="form-label sr-only">Message</label>
                                                <textarea class=" md-input-new" id="your-message" name="message"
                                                    rows="4" placeholder="Message *" required></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div id="mail-status"></div>
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
                                                    class=" btn btn-outline-new btn-md btn-square btn-animate btn-new btn btn-dark w-100 fw-bold"
                                                    disabled><span>Send
                                                        Message
                                                        <i class="ion-android-arrow-forward"></i></span></button>
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
<!-- end contact form -->
<!--== Contact Info Start ==-->
<section class="">
    <div class="container">
        <div class="row mt-50 service-box-style-03">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="flipper">
                    <div class="text-center mb-50 main-box">
                        <div class="box-front height-300px white-bg">
                            <div class="content-wrap">
                                <i class="icon-map-pin font-40px default-color"></i>
                                <h4 class="font-600">Our Presence</h4>
                                <p class="font-400 mt-20 text-center-g">USA</p>
                            </div>
                        </div>
                        <div class="box-back height-300px dark-bg">
                            <div class="content-wrap white-color">
                                <i class="icon-map-pin font-40px white-color"></i>
                                <h4 class="font-600">Our Presence</h4>
                                <p class="font-400 mt-20 white-color text-center-g"><a
                                        href="https://g.page/DigiprimaTech?share" target="_blank"> USA</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="flipper">
                    <div class="text-center mb-50 main-box">
                        <div class="box-front height-300px white-bg">
                            <div class="content-wrap">
                                <i class="icon-chat font-40px default-color"></i>
                                <h4 class="font-600">Call Us Now</h4>
                                <p class="font-400 mt-20 text-center-g">+1 (347) 973 9732<br>
                                    <!-- +91 97555 70042<br>
                      +971 55 3570329</p> -->
                                </p>
                            </div>
                        </div>
                        <div class="box-back height-300px dark-bg">
                            <div class="content-wrap white-color">
                                <i class="icon-chat font-40px white-color"></i>
                                <h4 class="font-600 white-color">Call Us Now</h4>
                                <p class="white-color font-400 mt-20 text-center-g"><a href="tel:+1 (347) 973 9732"> +1
                                        (347) 973 9732</a><br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="flipper">
                    <div class="text-center mb-50 main-box">
                        <div class="box-front height-300px white-bg">
                            <div class="content-wrap">
                                <i class="icon-envelope font-40px default-color"></i>
                                <h4 class="font-600">Email Us</h4>
                                <p class="font-400 mt-20 text-center-g"><a
                                        href="mailto:info@digiprima.com">info@digiprima.com</a><br></p>
                            </div>
                        </div>
                        <div class="box-back height-300px dark-bg">
                            <div class="content-wrap white-color">
                                <i class="icon-envelope font-40px white-color"></i>
                                <h4 class="font-600">Email Us</h4>
                                <p class="font-400 mt-20 white-color text-center-g"><a
                                        href="mailto:info@digiprima.com">info@digiprima.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!--== Contact Info End ==-->
<section class="grey-bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 section-heading">
                <h5 class="text-uppercase mt-0" style="color: black;">What our clients have to say about us
                </h5>
                <br>
                <video width="520" height="480" controls>
                    <source src="assets/images/final_mitch.mp4" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
        <div class="row mt-50">
            <div class="slick testimonial">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <!--== Slide ==-->
                    <div class="testimonial-item">
                        <div class="testimonial-content mh-500">
                            <img class="img-responsive img-circle text-center" src="{{asset('images/chales.jpeg')}}"
                                alt="outsource node js development company" />
                            <h5 class="font-700 mb-0">CHARLES BLUNDEL</h5>
                            <span class="grey-color font-14px">Scientist</span>
                            <p class="mt-20 line-height-26 font-16px">DigiPrima worked very hard on our project at short
                                notice. Node.js and Mongo experts!!! Their help in our Mean stack development project
                                which was much appreciated! Great team to work with.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <!--== Slide ==-->
                    <div class="testimonial-item">
                        <div class="testimonial-content mh-500">
                            <img class="img-responsive img-circle text-center"
                                src="{{asset('images/WILLIAM-STANTON.jpeg')}}"
                                alt="outsource node js development company" />
                            <h5 class="font-700 mb-0">WILLIAM STANTON</h5>
                            <span class="grey-color font-14px">Director of Business Development</span>
                            <p class="mt-20 line-height-26 font-16px">DigiPrima Technologies is a highly skilled team
                                with an eye for details. The project management and communication really good and the
                                dedicated project manager made a great job keeping things together. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <!--== Slide ==-->
                    <div class="testimonial-item">
                        <div class="testimonial-content mh-500">
                            <img class="img-responsive img-circle" src="{{asset('images/robin_50.jpeg')}}"
                                alt="outsource node js development company" />
                            <h5 class="font-700 mb-0">ROBIN OWENS-WRIGHT</h5>
                            <span class="grey-color font-14px">Founder/Managing Principal</span>
                            <p class="mt-20 line-height-26 font-16px">AMAZING work! DigiPrima knows how to troubleshoot
                                and is quick and reliable. I HIGHLY recommend DigiPrima. they back up their work and
                                they will now be my “go to” person. Very professional and creative.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <!--== Slide ==-->
                    <div class="testimonial-item">
                        <div class="testimonial-content mh-500">
                            <img class="img-responsive img-circle" src="{{asset('images/Zach-Boisjoly.png')}}"
                                alt="outsource node js development company" />
                            <h5 class="font-700 mb-0">ZACH BOISJOLY</h5>
                            <span class="grey-color font-14px">CEO</span>
                            <p class="mt-20 line-height-26 font-16px">Thank you Digiprima for all your help getting the
                                site up and running. I really appreciate your help and enjoyed working with you and wish
                                you all the best. Should the occasion arise for more project based work, I hope that you
                                would be open to working with us again!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('client-slider')
<section class="dark-grey-bg mobile-hide">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-10 col-xs-10 centerize-col text-center social-icons-style-03">
                <ul class="xl-icon mb-0">
                    <li><a class="fb" href="https://www.facebook.com/DigiprimaTech"><i
                                class="icofont icofont-social-facebook"></i><span></span></a></li>
                    <li><a class="tw" href="https://twitter.com/digiprimatech"><i
                                class="icofont icofont-social-twitter"></i><span></span></a></li>
                    <li><a class="be" href="#."><i class="icofont icofont-social-behance"></i><span></span></a></li>
                    <li><a class="in" href="https://www.linkedin.com/company/digiprima-technologies/"><i
                                class="icofont icofont-social-linkedin"></i><span></span></a></li>
                    <li><a class="gplus" href="#."><i class="icofont icofont-social-google-plus"></i><span></span></a>
                    </li>
                    <li><a class="in"
                            href="https://www.youtube.com/channel/UCyK3Cqt8uTDs3DEzN-h-ueA?sub_confirmation=1~"
                            target="_blank" title="DigiPrima youtube Oficial Account"><i
                                class="icofont icofont-social-youtube"></i><span></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<script>
const submitButton_contact = document.querySelector('#new_dis');
console.log('hello raaaaaa', submitButton_contact)
const quizInput_demo = document.querySelector("#quiz");
quizInput_demo.addEventListener("input", function(e) {
    console.log('ineeeeeeeeeeeee');
    const res_demp = submitButton_contact.getAttribute("data-res");
    if (this.value == res_demp) {
        console.log('with diabled', res_demp);
        submitButton_contact.disabled = false;
    } else {
        console.log('with anbled');
        submitButton_contact.setAttribute("disabled", "");
    }
});
</script>
<!--== Social Icons End ==-->
<!-- @include('request-meeting') -->
<?php echo App\Http\Controllers\BlogsController::RequMeet('Ready to build your custom application solution?','Get free consultation');?>