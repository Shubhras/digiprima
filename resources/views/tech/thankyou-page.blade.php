@push('evnetscript')
<!-- Event snippet for Submit lead form1 conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-10896540563/h9ySCNaDyc0DEJOH8Mso'});
</script>


@endpush
<?php 

 $title ='Thank You for Your Response | Feedback
 ';
 $description= 'Thanks for getting in touch with DigiPrima. We`ll make sure the right person replies as soon as possible for discuss about your projects.
 ';
 $keyword = 'Thank You , Response, Feedback, query ';
 $imagetag_url= 'images/page/digiprima-sofrware-development-company.png';
?>
@include('head')
<div class="thankyou-page">
    <div class="_header">
        <div class="logo">
            <!-- <img src="images/thanks.png" alt=""> -->
        </div>
        <h1 class="theme-gradient-bg">Thank You!</h1>
    </div>
    <div class="_body">
        <div class="_box">
            <h2>
                <strong>Thank you for getting in touch! 
</strong>We'll make sure the right person replies as soon as possible.

            </h2>
            <p class="text-alian">
            You can also mail at <a href="mailto:info@digiprima.com">info@digiprima.com</a> or call at <a href="tel:+1 (347) 973 9732">+1 (347) 973 9732</a> to start a conversation about your project straight away.
            </p>
        </div>
    </div>
    <div class="_footer">
        <p>Having trouble? <a href="{{url('/contact')}}">Contact us</a> </p>
        <a class="btn" href="{{url('/')}}">Back to homepage</a>
    </div>
</div>


<!-- CSS Start -->
<style>
    @import url('https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap');

    html,
    body {
        font-family: 'Raleway', sans-serif;
    }

    .thankyou-page ._header {
        background: #3273e1;
        padding: 100px 30px;
        text-align: center;
    }

    .thankyou-page ._header .logo {
        max-width: 200px;
        margin: 0 auto 50px;
    }

    .thankyou-page ._header .logo img {
        width: 100%;
    }

    .thankyou-page ._header h1 {
        font-size: 65px;
        font-weight: 800;
        color: white;
        margin: 0;
    }

    .thankyou-page ._body {
        margin: -70px 0 30px;
    }

    .thankyou-page ._body ._box {
        margin: auto;
        max-width: 80%;
        padding: 50px;
        background: white;
        border-radius: 3px;
        box-shadow: 0 0 35px rgba(10, 10, 10, 0.12);
        -moz-box-shadow: 0 0 35px rgba(10, 10, 10, 0.12);
        -webkit-box-shadow: 0 0 35px rgba(10, 10, 10, 0.12);
    }

    .thankyou-page ._body ._box h2 {
        font-size: 26px;
        font-weight: 600;
        color: #ad2d27;
        text-align: center;
        }

    .thankyou-page ._footer {
        text-align: center;
        padding: 50px 30px;
    }

    .thankyou-page ._footer .btn {
        background: #4ab74a;
        color: white;
        border: 0;
        font-size: 14px;
        font-weight: 600;
        border-radius: 0;
        letter-spacing: 0.8px;
        padding: 20px 33px;
        text-transform: uppercase;
    }
</style>