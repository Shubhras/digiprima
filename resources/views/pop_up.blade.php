<style>
#modal-popup {
    display: none;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js" ></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>
<style>
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
}

@media (max-width:699px) {
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
}

@media only screen and (min-device-width: 375px) and (max-device-width: 400px) {
    img.img-11-new {
        margin-left: 45px;
        width: 110px !important;
        margin-top: -12px;
    }
    h6.fo-66 {
        margin-left: 180px;
        margin-bottom: -5px !important;
    }
}

@media only screen and (min-device-width: 375px) and (max-device-width: 425px) {
    .mob {
        font-size: 12px;
    }
    .hid {
        display: none;
        clear: both;
    }

    img.img-11-new {
        display: none;
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
a.close.new-add {
    margin-top: -10px;
    margin-right: -20px;
}
</style>

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
function hide() {
    document.getElementById('modal-popup').style.display = "none";
}
</script>
<!--== Modal Popup Style 01 End ==-->