<style>
@media only screen and (max-device-width: 425px) {
    input.form1request {
        margin-top: 15px;
    }
    button.btn.btn-md.btn-color.btn-animate {
        margin-top: 15px;
    }
    button.text-form-h {
        margin-top: 1px !important;
    }
}

input {
    
    background-color: white;
    color: #110c0c;
    border-radius: 4px;
    margin-top: 8px;
   
}
.g-recaptcha {
    transform: scale(0.60);
    margin-top: -6px;
    margin-left: -29px;
    transform-origin: 1 0;
}
.rc-anchor-light {
    background: white!important;
    color: #000;
}
.btn.btn-md {
    padding: 14px 30px;
    font-size: 11px;
    margin-top:10px;
}
.section-d {
    height: 200px;
    display: flex;
    align-items: center;
}
</style>
<?php
if(empty($bUrl)){
    $url_b = "/contact";
}else{
    $url_b = $bUrl;
}
?>
<section class="section-d" style="background-color:#132763"  data-parallax-bg-image="assets/images/background/parallax-bg-6.jpg" data-parallax-speed="0.8" data-parallax-direction="up">
    <div class="container">
    	  <div class="row">
            <div class="col-md-12 col-sm-12 centerize-col text-center white-color relative">
              <span class="sm-mb-30 font-25px display-inline-block mr-30 font-700">{{$mainTex}}</span>
              <a href="{{$url_b}}" style="color: #fff;"> <button type="submit" name="submit" class="btn btn-md btn-color btn-animate1 btn-review bn-t">
                    <span>
                       {{$buTex}} <i
                            class="tr-icon icofont icofont-arrow-right"></i>
                    </span>
                </button>
                </a>
            </div>
        </div>
    </div>
  </section>