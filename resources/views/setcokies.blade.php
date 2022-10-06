<style>
#modal-popup {
    display: none;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>
<script type="text/javascript">
$(window).on('load', function() {
    // setTimeout(function(){ $('#clickNow').trigger('click'); }, 10000);
    setTimeout(function() {
        var overlay = $('<div id="overlay"></div>');
        overlay.show();
        overlay.appendTo(document.body);
        $('.popup').show();
        $('.close').click(function() {
            $('.popup').hide();
            overlay.appendTo(document.body).remove();
            return false;
        });
        $('.x').click(function() {
            $('.popup').hide();
            overlay.appendTo(document.body).remove();
            return false;
        });
        // document.getElementById('modal-popup').style.display = "block";
    }, 15000);
});
</script>
<?php
$min  = 1;
$max  = 5;
$num1 = rand( $min, $max );
$num2 = rand( $min, $max );
$sum  = $num1 + $num2;
?>
<style>
a.close.new-add111 {
    font-size: 35px !important;
}
img.img-11-new {
     margin-top: 55px;
     border-radius: 5px;
     border: 1px solid #e5d9d9;
    margin-left: 15px;
    
}
.pop-button {
    margin-top: 16px!important;
    padding: 14px !important;
    
}
@media only screen and (max-device-width: 768px) {
    img.img-fluid.z-depth-1-half.rounded-circle {
        max-width: 81px;
    }
}
@media only screen and (max-device-width: 768px) {
    .btn-pad {
        padding: 10px;
    }
    .all-padding-60 {
        padding: 30px;
    }
    .mt-10px {
        margin-top: 20px;
    }
    .rounded-circle {
        border-radius: 50%;
    }
    .btn-inf {
        color: #fff;
        background-color: green;
    }
    .size-font {
        color: #0d0d0d;

        font-size: 16px;
        font-family: 'Roboto', sans-serif;
        font-weight: 400;
        line-height: 30px;
    }
    .size-font1 {

        font-size: 18px;
    }
    .dark-chnge {
    margin-left: 127px;
}
    
}
    .img-11-new {
        margin-bottom: -151px;
    }
    .fo-66 {
        font-size: 12px !important;
        margin-left: 205px;
    }
    .right-bottom .btn-orange {
        margin-top: 14px;
    }
    a.btn-orange {
        margin-bottom: -17px;
    }
    div#modal-popup {
        width: 212px;
    }
    
@media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
    .mob {
        font-size: 8px;
    }
    .right-bottom {
        background-color: #2b298803 !important;
    }
    .right-bottom h6 {
        margin-left: 197px;

    }
    div#modal-popup {
        width: 170px !important;
        font-size: 11px;
    }
    h6.fo-66 {
        font-size: 16px !important;
        margin-bottom: -8px !important;
        margin-top: -12px !important;
        margin-left: 205px;
    }
    img.img-11-new {
        display: none;
    }
    a.btn-orange {
        width: 50% !important;
        margin-top: 31px;
        margin-bottom: -15px;
    }
    .right-bottom .btn-orange {
        width: 170px !important;
        font-size: 11px;
    }
    h5.let-font1 {
    display: none;
}
input#quiz_demo {
    margin-left: -13px;
}
}
@media (max-width:400px) {
    .cnt223 {
        min-width: auto !important;
        width: auto !important;
        height: auto !important;
        margin: 100px auto;
    }
    
}
@media only screen and (min-device-width: 375px) and (max-device-width: 400px) {
    h5.let-font1 {
        display: none;
    }
    .text-left-f {
        text-align: left !important;
        margin-top: 40px;
        margin-left: 80px !important;
    }
    a.close.new-add111 {
        width: 55% !important;
    }
    .let-font {
        width: 50%;
    }
    h5.let-font1 {
        width: 60%;
    }
    .form-group {
        width: 100% !important;
    }
    h6.fo-66 {
        margin-left: 180px;
        margin-bottom: -5px !important;

    }
}
@media only screen and (min-device-width: 375px) and (max-device-width: 425px) {
    .let-font {
        width: 100%;
    }
    .let-font1 {
        width: 50%;
    }
    .form-group {
        width: 50%;
    }
    .mob {
        font-size: 12px;
    }
    .hid {
        display: none;
        clear: both;
    }
        h6.fo-66 {
            margin-left: 160px;
            display: none;
        }
        .right-bottom .btn-orange {
            width: 170px !important;
            font-size: 11px;
        }
        .right-bottom {
            background-color: #2b298803 !important;
        }
        input#quiz_demo-1{
          margin-left: -35px !important;
}
    .dark-chnge {
    margin-left: 50px !important;
}
input#quiz_demo {
    margin-left: -28px;
}
}

@media only screen and (min-device-width: 400px) and (max-device-width: 750px) {
    .let-font {
        width: 100% !important;
    }
    h5.let-font1 {
        display: none;
    }
    .form-group {
        width: 100%;
    }
    .text-left-f {
        text-align: left !important;
        margin-top: 40px;
        margin-left: 80px !important;
    }
    .cnt223 {
    min-width: auto !important;
    width: auto !important;
    }
    .dark-chnge-2 {
    margin-left: -39px !important;
}
input#quiz_demo {
    margin-left: -40px;
}
}
@media only screen and (min-device-width: 769px) and (max-device-width: 1024px) {
    .mob {
        font-size: 11px;
    }
    .fob {
        font-size: 11px;
    }
}
.right-bottom {
    width: 400px;
    position: fixed;
    right: 0;
    background: #023562;
    z-index: 9999;
    padding: 20px;
    bottom: 0;
    box-shadow: 0 0 5px rgb(0 0 0 / 0%);
    border-radius: 5px 0 0 0;
}
.right-bottom h6 {
    color: #fff;
    margin-bottom: 15px;
    font-weight: 600;
    font-size: 14px;
    margin-top: 0;
}

.right-bottom .btn-orange {
    width: 80%;
    padding: 14px 0px;
    font-size: 11px;
}
.btn-orange {
    background: #feb60c;
    background: linear-gradient(-90deg, #feb60c 0, #fb820e 30%, #f73011 100%);
    color: #fff;
    padding: 10px 25px;
    font-size: 13px;
    transition: all .9s ease-in-out;
    border-radius: 7px;
    text-transform: uppercase;
    display: inline-block;
    font-weight: 600;
    border: none;
    text-align: center;
}
.btn-orange:hover {
    color: #fff;
    background: #feb60c;
    background: linear-gradient(90deg, #feb60c 0, #fb820e 30%, #f73011 100%);
    transition: all .9s ease-in-out;
}
.right-bottom .close {
    color: #fff;
    top: -5px;
    opacity: 1;
    padding: 0 10px 0 0;
    text-shadow: none;
}
a.close.new-add111 {
    margin-top: -10px;
    margin-right: -20px;
}
.chnge {
    margin-left: 15px;
    margin-right: 15px;
}
.close-chnge {
    margin-top: -10px;
    margin-right: -7px !important;
}
.let-font1 {
    text-align: center;
}
</style>
<style type="text/css">
/* Anjali */
.title-heading {
    color: red;
    font-family: "Montserrat", Sans-serif;
    font-size: 24px;
    font-weight: 600;
    line-height: 1.2em;
}
.form-group {
    margin-bottom: 0px !important;
}
.md-input-new {
    background: #fff !important;
}
#overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #000;
    filter: alpha(opacity=70);
    -moz-opacity: 0.7;
    -khtml-opacity: 0.7;
    opacity: 0.7;
    z-index: 100;
    display: none;
}
.cnt223 a {
    text-decoration: none;
}
.popup {
    width: 100%;
    margin: 0 auto;
    display: none;
    position: fixed;
    z-index: 101;
}
.cnt223 {
    min-width: 600px;
    width: 700px;
    height: 530px;
    margin: 100px auto;
    background: #fff;
    position: relative;
    z-index: 103;
    padding: 27px;
    border-radius: 5px;
    box-shadow: 0 2px 5px #000;
}
.let-font {
    font-size: 26px;
    line-height: 1;
    color: #35CCE1;
    text-align: center;
}
.cnt223 p {
    clear: both;
    color: #555555;
    text-align: justify;
}
.cnt223 p a {
    color: #d91900;
    font-weight: bold;
}
.cnt223 .x {
    float: right;
    height: 35px;
    left: 22px;
    position: relative;
    top: -25px;
    width: 34px;
}
.cnt223 .x:hover {
    cursor: pointer;
}
.text-left-f1.text-mr1 {
    text-align: center;
}
.pop-btn{
    margin-top:0px!important;
}
.grecaptcha-badge {
	visibility: collapse !important;  
	display:none !important;
}
.text-align {
    text-align: center;
    margin-top: 14px;
}
.label-mrg {
 
    margin-left: 180px;
    margin-top: -40px;
}
.dark-chnge {
    margin-left: 13px;
    
}
label.col-form-label {
    margin-top: 23px;
    margin-left: 41px;
}

@media (max-width:400px) {
    .white-bg2 {
        display: none;
    }

}
/* h2.dark-color {
    margin-top: -47px !important;
    font-size: 27px !important;
} */
@media (min-width: 320px) and (max-width: 480px) {
    .mt-10 {
        margin-left: 12px !important;
    }
}
.D-color {
    color: #2BB5E1 !important;
}

.font-500 {
    font-weight: 500;
}
.ma1_btn {
    justify-content: center;
    display: flex;
    margin-top: 74px;
}
</style>
<script type='text/javascript'>
</script>
<div class='popup'>
    <div class='cnt223'>
        <div class="row">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                <img class="img-11-new" src="{{asset('images/pop up11_webp')}}" alt="Digiprima">
            </div>
            <div class="col-md-8 col-sm-8 col-lg-8 col-xs-12">
                <div class="">
                    <a href="javascript:void(0)" class="close new-add close-chnge" data-dismiss="right-bottom" onclick="hide()"
                        aria-label="close">×</a>
                </div>
                <form name="contact-form" id="contactform" action="{{url('/contact')}}" method="POST"
                    class="contact-form-style-01 ttt" style="border-radius: 10px;">
                    {{ csrf_field() }}
                    <script>
                        function submitForm(token) {   
                            document.getElementById("contactform").submit();
                        }
                    </script>
                    <div class="row chnge">
                        <h4 class="let-font"><b>Convert Your Business Idea Into Success!
                            </b></h4>
                        <h5 style="" class="let-font1">Full stack development agency to convert your ideas into
                            beautiful apps, games & products
                            </b></h5>
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="your-surname" class="form-label sr-only">Name</label>
                                <input type="text" class=" md-input-new" id="your-name" name="name" placeholder="Name *"
                                    required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="your-surname" class="form-label sr-only">Email</label>
                                <input type="text" class=" md-input-new" id="your-email" name="email"
                                    placeholder="Email *" required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12" style="display:none;">
                            <div class="form-group">
                                <label for="your-surname" class="form-label sr-only">Number</label>
                                <input type="text" class=" md-input-new" id="your-number" name="number" value="0000000"
                                    placeholder="Number *">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group" style="margin-top:15px;">
                                <label for="your-message" class="form-label sr-only">Message</label>
                                <textarea class="md-input-new" id="your-message" name="message" rows="1"
                                    placeholder="Message *" required></textarea>
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
                                                            <input type="text" class="quiz-control" id="quiz_demo">
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-3 text-end  label-mrg">
                                                            <button type="reset"
                                                                class="btn btn-link link-dark dark-chnge ">Reset</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                            <div class="text-left-f1 text-mr1  text-align">
                                <button id="new_dis_demo" data-res_demo="<?php echo $sum; ?>" type="submit"
                                    class=" btn btn-outline-new  btn-square pop-button btn-animate btn-new btn btn-dark w-100 fw-bold" disabled = false><span>Send
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
<div class="right-bottom" id="modal-popup">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-lg-4">
            <img class="img-11-new" src="{{asset('images/clutch-logo.webp')}}" alt="Digiprima">
        </div>
        <div class="col-md-8 col-sm-8 col-lg-8">
            <div class="">
                <a href="javascript:void(0)" class="close new-add" data-dismiss="right-bottom" onclick="hide()"
                    aria-label="close">×</a>
            </div>
            <h6 class="fo-66">Accelerate Your Analytics Success With Our Free Discovery Workshop</h6>
            <a href="{{asset('https://calendly.com/shubhra-s/30min?month=2022-01')}}" target="__blank"
                class="btn-orange">Get Free Consultation</a>
        </div>
    </div>
</div>

<script>
const submitButton_pop = document.querySelector('#new_dis_demo');
console.log('hello raaaaaa',submitButton_pop)
const quizInput_pop = document.querySelector("#quiz_demo");
quizInput_pop.addEventListener("input", function(e) {
    console.log('ineeeeeeeeeeeee');
    const res_pop = submitButton_pop.getAttribute("data-res_demo");
    if (this.value == res_pop) {
        console.log('with diabled',res_pop);
        submitButton_pop.disabled = false;

        // submitButton_pop.removeAttribute("disabled");
    } else {
        console.log('with anbled');
        submitButton_pop.setAttribute("disabled", "");
    }
});
</script>
