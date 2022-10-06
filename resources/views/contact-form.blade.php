
<?php
if ($mainTex != "no" && !empty($mainTex)) {
    $head_text = $mainTex;
}elseif ($mainTex === "no") {
    $head_text = '';
}else {
    $head_text = 'Create Your Own All-in-one Social Network platform';
}
?>
<?php
$min  = 1;
$max  = 10;
$num1 = rand( $min, $max );
$num2 = rand( $min, $max );
$sum  = $num1 + $num2;
?>
<style>
    .form-chnge {
    margin-bottom: 13px !important;
    width: 99%;
}
    .text-left-f {
    margin-left: 153px !important;
}
label.col-sm-3.col-form-label {
    margin-top: 21px !important;
    padding-left: 92px !important;
}
.col-change {
    margin-left: 191px;
    margin-top: -40px;
}
label.col-form-label {
    margin-left: -40px;
}
/* .btn.btn-md {
    margin-left: -5px;
    margin-top: 12px !important;
} */
.img-mrg {
    margin-top: 22px !important;
}
input#quiz {
    margin-left: 22px;
}
div#contactR {
    box-shadow: 0 4px 24px 0 rgb(34 41 47 / 10%);
    border-radius: 20px;
    height: 619px;
}
h5 {
    font-size: 16px;
}
@media (max-width:425px) {
    .text-left-f {
        margin-left: 81px !important;
    }
    .learn-more-btn-green {
        /* padding: 10px 5px 6px 4px !important; */
        border-radius: 4px;
        font-size: 12px !important;
        margin: 2px 0px 5px 0px !important;
    }
    section.grey-bg1 {
        background-color: white;
        /* padding-bottom: 216px !important; */
    }
    .text-left-f {
        text-align: center;
        /* background-color: #0b70e1; */
        margin-top: 25px !important;
    }
    .offering-secton {
        margin-left: 22px !important;
    }
    a.btn.btn-dark.btn-md.radius-0 {
        margin-left: 32px !important;
    }
}
@media (max-width:375px) {
    .font-25px {
        font-size: 16px !important;
        margin: 0px 10px 3px 2px !important;
        text-align: center !important;
    }
    .text-left-f {
        text-align: center;
        /* background-color: #0b70e1; */
        margin-top: 11px !important;
    }
    section.grey-bg1 {
        background-color: white;
        padding-bottom: 75px !important;
    }
    .img-button {
        margin-left: 3px !important;
    }
    .offering-secton {
        margin-left: 22px !important;
    }
    h3.font-600 {
        margin-left: 24px !important;
    }
    a.btn.btn-dark.btn-md.radius-0 {
        margin-left: 32px !important;
    }
    .col-change {
        margin-left: 262px !important;
    }
    div#contactR {
        /* box-shadow: 0 4px 24px 0 rgb(34 41 47 / 10%); */
        border-radius: 20px;
        height: 619px;
        display: contents;
    }
}
@media (max-width:320px) {
    section.grey-bg1 {
        /* background-color: white; */
        padding-bottom: 73px !important;
    }
    .text-left-f {
        text-align: center;
        /* background-color: #0b70e1; */
        /* margin-top: -17px !important; */
        margin-left: 21px !important;
    }
    .g-recaptcha {
        transform: scale(0.70) !important;
        margin-top: 4px !important;
        margin-left: 0px !important;
        transform-origin: 1 0;
    }
    strong {
        color: #e40a0a;
        /* text-align: center; */
        margin-left: 20px !important;
    }
    .offering-secton {
        margin-left: 22px !important;
    }
    a.btn.btn-dark.btn-md.radius-0 {
        margin-left: 32px !important;
    }
    .img-fix-size {
        margin-top: 36px !important;
    }
    .col-change {
        margin-left: 220px !important;
    }
    button.btn.btn-link.link-dark {
        margin-left: 29px !important;
    }
}
@media only screen and (min-width:425px) and (max-width:767px) {
    /* .btn.btn-md {
        padding: 12px 30px;
        font-size: -11px;
        margin-top: 8px !important;
        width: 196px !important;
        height: 40px !important;
    } */
    .button-font {
        font-size: 20px !important;
    }
    ul,
    ol {
        margin-top: 0;
        margin-bottom: -17px;
    }
    a.btn.btn-dark.btn-md.radius-0 {
        margin-left: 32px !important;
    }
    .img-fix-size {
        margin-top: 36px !important;
    }
    button.btn.btn-link.link-dark {
        margin-left: 91px;
    }
    div#contactR {
        display: contents;
    }
}
@media (max-width: 768px) {
    section.grey-bg1 {
        background-color: white;
        /* padding-bottom: 256px !important; */
    }
    ul.sect {
        margin-left: 51px !important;
    }
    h3.font-600 {
        margin-left: 27px !important;
    }
    h4.font-500 {
        margin-left: 30px !important;
    }
    .btn-change {
        margin-left: 27px !important;
    }
    .img-btn {
        margin-left: -30px !important;
    }
    .img-button {
        margin-left: 4px !important;
    }
    /* .title-hero-bg {
        min-height: 319px !important;
    } */
    .offering-secton {
        margin-left: 22px !important;
    }
    a.btn.btn-dark.btn-md.radius-0 {
        margin-left: 32px !important;
    }
    .img-fix-size {
        margin-top: 36px !important;
    }
    .offe98 {
        margin-left: 40px;
    }
    /* .col-change {
        margin-left: 210px !important;
    } */
}
@media (max-width:768px) and (min-width:450px) {
    .text-mr {
        margin-left: 66px !important;
    }
    section.grey-bg1 {
        padding-bottom: 4px !important;
    }
    div#contactR {
        height: 706px;
    }
}
@media (min-width: 381px) and (max-width: 450px) {
    section.grey-bg1 {
        /* background-color: white; */
        padding-bottom: 85px !important;
    }
    /* button.btn.btn-link.link-dark {
        margin-left: 18px;
    } */
    div#contactR {
        box-shadow: 0 4px 24px 0 rgb(34 41 47 / 10%);
        border-radius: 20px;
        height: 619px;
        display: contents;
    }
    img {
        height: auto;
        max-width: 100%;
        padding: 25px 0 30px 0;
    }
}
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12" id="contactR">
                <div class="flipper" style="margin-bottom: 130px">
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
                                        <div class="col-md-6 mobile-hide">
                                            <img class="" src="{{asset('images/godaddy-ssl.png')}}"
                                                style="max-width:100%;float:right;" alt="Social Media App Development"
                                                title="Social Media App Development" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <h4><b>{{$head_text}}</b></h4>
                                        <h5 style="text-align: center; ">Please send us your requirements through form
                                            below and we'll get back to you at the earliest</b></h5>
                                        <br>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-chnge">
                                                <label for="your-surname" class="form-label sr-only">Name</label>
                                                <input type="text" class=" md-input-new" id="your-name" name="name"
                                                    placeholder="Name *" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-chnge">
                                                <label for="your-surname" class="form-label sr-only">Email</label>
                                                <input type="text" class=" md-input-new" id="your-email" name="email"
                                                    placeholder="Email *" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-chnge">
                                                <label for="your-surname" class="form-label sr-only">Number</label>
                                                <input type="text" class=" md-input-new" id="your-number" name="number"
                                                    placeholder="Number *">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-chnge">
                                                <label for="your-subject" class="form-label sr-only"> Subject</label>
                                                <input type="text" class=" md-input-new" id="your-subject"
                                                    name="subject" placeholder="Subject *">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-chnge">
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