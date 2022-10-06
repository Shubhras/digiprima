<?php 
 $title ='SiteMap ';
 $description= 'Use the DigiPrima sitemap to help navigate the our official website easily, quickly land on to our services, technology, solutions, sucess story portfolio and company full details.';
 $keyword = 'Sitemap DigiPrima, Website Sitemap, Site-Map, Site Structure ';
?>
@include('head')
<style>
mt-0 {margin-top: 0;font-weight: 700;color: #000;font-size: 32px;}.col-chnge {margin-left: 71px;margin-right: 9px;}a.color-black {font-size: 15px;}.page-title h1 {line-height: 2.5em;font-weight: 900;margin: 0;font-style: normal;font-family: 'Montserrat', sans-serif;}
</style>
<div class="transition-none">
    <section class="title-hero-bg" style="background-image: url(assets/images/title-bg/title-bg-0.jpg);" alt="SiteMap"
        title="SiteMap">
        <div class=" layer container">
            <div class="page-title text-center white-color">
                <h1>Site-Map </h1>
                <h4 class="mt-50" style="margin-top: -5px;">"For easy navigation and better visibility"</h4>
                <span>
                    <a href="{{url('https://calendly.com/shubhra-s/30min?month=2022-02')}}" style="color: #fff;"><button
                            type="submit" name="submit" class="btn btn-md btn-color btn-animate1 btn-review">
                            Request a Meeting <i class="tr-icon icofont icofont-arrow-right"></i>
                </span>
                </button></a>
            </div>
        </div>
    </section>

    <section class="white-bg">
        <div class="container">
            <div class="row mt-50">
                <div class="col-md-3 col-sm-6 col-chnge">
                    <H4><a class="qbutton  arrow" href="{{ url('home') }} ">HOME</a> </H4>
                    <H4><a class="qbutton  arrow" href="{{ url('about-us') }}">ABOUT<a></H4>
                    <H4><a class="qbutton  arrow" href="{{ url('portfolio') }}">PORTFOLIO</a></H4>
                    <H4><a class="qbutton  arrow" href="{{ url('bi-portfolio-management ') }}">BI
                            PORTFOLIO</a></H4>
                    <H4><a class="qbutton  arrow" href="{{ url('case-study') }}">CASE-STUDY</a></H4>
                    <H4><a class="qbutton  arrow" href="{{ url('career') }}">CAREER<a></H4>
                    <H4><a class="qbutton  arrow" href="{{ url('contact') }} ">CONTACT</a></H4>
                    <H4><a class="qbutton  arrow" href="{{ url('blogs') }}">BLOGS<a>
                                <H4>
                                    <H4><a class="qbutton  arrow" href="{{ url('development-process ') }}">DEVELOPMENT
                                            PROCESS</a></H4>
                </div>

                <div class="col-md-3 col-sm-6 col-chnge">
                    <h3><a class="qbutton  arrow font-comm" href="{{ url('specialties') }}"><b>SERVICES
                            </b></a></h3>
                    <ul class="remove-padding list-style-02">
                        <div class="container justify-content-md-center">
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <h4><a><b>Mobile</b></a></h4>
                                    <li> <a class="color-black"
                                            href="{{ url('mobile-application-development-services ') }}">Mobile
                                            App Development</a></li>
                                    <li> <a class="color-black" href="{{ url('ios-app-development ') }}">Iphone App
                                            Development</a></li>
                                    <li><a class="color-black" href="{{ url('android-app-development') }}">Android App
                                            Development</a></li>
                                    <li><a class="color-black"
                                            href="{{ url('flutter-app-development-company') }}">Flutter App
                                            Development</a></li>
                    </ul>
                    <h4><a><b>Web</b></a></h4>
                    <ul class="remove-padding list-style-02">
                        <li> <a class="color-black" href="{{ url('web-development-services') }}">Web
                                Development</a></li>
                        <li> <a class="color-black" href="{{ url('mean-stack-development-services') }}">Mean/Full
                                Stack Development</a></li>
                        <li><a class="color-black" href="{{ url('front-end-development') }}">Front/Back
                                End
                                Developemnt</a></li>
                        <li><a class="color-black" href="{{ url('cloud-service') }}">Cloud
                                Computing</a></li>
                    </ul>
                    <h4><a><b>Software Development</b></a></h4>
                    <ul class="remove-padding list-style-02">
                        <li> <a class="color-black" href="{{ url('custom-software-development') }}">Custom
                                Software
                                Development</a></li>
                        <li> <a class="color-black"
                                href="{{ url('outsourcing-software-development-projects') }}">Software
                                Development Outsourcing</a></li>
                        <li><a class="color-black" href="{{ url('online-exam-software') }}">Exam
                                Software Development</a></li>
                    </ul>

                    <h4><a><b>Social Development</b></a></h4>
                    <ul class="remove-padding list-style-02">
                        <li> <a class="color-black" href="{{ url('social-media/social-network-development') }}">Social
                                Network
                                Development</a></li>
                        <li> <a class="color-black"
                                href="{{ url('social-media/white-label-social-platform-web-development') }}">White
                                Label Social Media Development</a></li>
                        <li><a class="color-black" href="{{ url('social-media/custom-social-platform-app-development') }}">Custom
                                Social Media Development</a></li>
                    </ul>
                    <h4><a class="remove-padding list-style-02" href=""><b>Business Intelligence</b></a></h4>
                    <ul class="remove-padding list-style-02">
                        <li> <a class="color-black" href="{{ url('data-analytics-services') }}">Data
                                Analytics</a></li>
                        <li><a class="color-black" href="{{ url('data-visualization') }}">Data
                                Visualization</a></li>
                    </ul>

                    <h4><a class="qbutton  arrow font-comm"
                            href="{{ url('ecommerce-software-development-services') }} "><b>eCommerce &
                                CMS</b></a></h4>
                    <ul class="remove-padding list-style-02">
                        <li> <a class="color-black" href="{{ url('wordpress-development-services') }}">
                                Wordpress</a></li>
                        <li> <a class="color-black" href="{{ url('woocomerce-developer') }}">WooCommerce</a>
                        </li>
                        <li><a class="color-black" href="{{ url('magento-development-services') }}">Magento</a>
                        </li>
                        <li> <a class="color-black" href="{{ url('joomla-development-company') }}">Joomla</a>
                        </li>
                        <li><a class="color-black" href="{{ url('drupal-development-services') }}">Drupal</a>
                        </li>
                        <li> <a class="color-black" href="{{ url('sitefinity-development') }}">Sitefinity</a> </li>
                    </ul>
                </div>

                <div class="col-md-3 col-sm-6 col-chnge">
                    <h3><a class="qbutton  arrow font-comm" href="{{ url('industry') }}"><b>INDUSTRIES</b></a></h3>
                    <ul class="remove-padding list-style-02">
                        <li><a class="color-black"
                                href="{{ url('manufacturing-software-development-services') }}">Manufacturing</a>
                        </li>
                        <li><a class="color-black" href="{{ url('fintech-development-Services') }}">Fintech
                                & Banking</a></li>
                        <li><a class="color-black"
                                href="{{ url('healthcare-software-development-services') }}">Healthcare</a>
                        </li>
                        <li><a class="color-black"
                                href="{{ url('logistics-software-development-services') }}">Transportation
                                & Logistics</a></li>
                        <li><a class="color-black" href="{{ url('ecommerce-software-development-services') }}">Ecommerce
                                &
                                Retail</a></li>
                        <li><a class="color-black" href="{{ url('fantasy-sports-app-development') }}">Sports</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-chnge">
                    <h3><a class="button  arrow font-comm" href=" "><b>TECHNOLOGIES</b></a></h3>
                    <ul class="remove-padding list-style-02">
                        <li><a class="color-black" href="{{ url('python-developer') }}">Python</a></li>
                        <li><a class="color-black" href="{{ url('microsoft-dot-net-developer') }}">.NET</a>
                        </li>
                        <li><a class="color-black" href="{{ url('php-development-company') }}">PHP</a></li>
                        <li><a class="color-black" href="{{ url('java-development') }}">Java</a></li>
                        <li><a class="color-black" href="{{ url('angular-js-developers') }}">Angular</a>
                        </li>
                        <li><a class="color-black" href="{{ url('react-js-developer ') }}">React</a></li>
                        <li><a class="color-black" href="{{ url('node-js-development') }}">Node.js</a></li>
                        <li><a class="color-black" href="{{ url('laravel-development-company') }}">Laravel</a></li>
                        <li><a class="color-black" href="{{ url('bootstrap-app-development') }}">Bootstrap</a></li>
                        <li><a class="color-black" href="{{ url('codeigniter-developer') }}">Codeigniter</a></li>
                        <li><a class="color-black" href="{{ url('artificial-intelligence') }}">Artificial
                                Intelligence</a></li>
                        <li><a class="color-black" href="{{ url ('iot-software-development-services') }}">Internet of
                                Things</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <?php echo App\Http\Controllers\BlogsController::RequMeet('Ready to build your custom application solution?','Get Free Consultation');?>