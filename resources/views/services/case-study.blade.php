@push('custom-scripts-data')
<script type="application/ld+json">
{
    "@context": "https://schema.org/",
    "@type": "BreadcrumbList",
    "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "case study",
        "item": "https://www.digiprima.com/case-study"
    }]
}
</script>
@endpush
<?php


$title = 'Loan Moksha - Largest Loan & Card Marketplace ';
$description = 'We at Digiprima met this criterion. Thanks to our extensive experience and expertise in complex solutions for the financial and investment management domains.';

?>
@include('head')

<style>
.page-title.text-center.white-color {
    margin-top: 30px;
}

section.title-hero-bg.banking-banner {
    min-height: 400px;

}

.button {
    margin-top: 12px;
    margin-bottom: 10px;
    padding: 7px 10px;
    border-radius: 5px;
    /* color: #fff; */
    line-height: 1.4em;
    font-weight: 500;
    text-align: center;
}

a {
    text-decoration: none;
    /* color: #ffffff;
    background-color: #ffffff;
     */
}

.vip {
    font-size: 14px;
}

.button:hover {
    background-color: #ffffff;
    -webkit-transform: scale(0.95);
    -ms-transform: scale(0.95);
    transform: scale(0.95);
    color: #ffffff;
}

a:active,
a:hover {
    outline: 0;
}

.new-sec-list-new {
    font-size: 18px;
    font-weight: 100;
    line-height: 38px;
    padding: 16px 55px 0px 72px;
    color: #606060;
}

.post-info.pt-20.pb-20.digi-blog.new-one {
    width: 90%;
    height: 578px;
}

.post.scholly {
    margin-top: -45px;
}

.post.bet {
    margin-top: -50px;
}

.post.fin {
    margin-top: -50px;
}

button.btn.btn-dark.sub-btn.add-new {
    margin-top: 2px;
}

.read-next-card-content.py-new.python-new {
    list-style: none;
    padding: 10px;
    color: white !important;
    padding-bottom: 25px;
    margin-top: -25px;
}

.read-next-card-content ul li.ch-lis-new {
    list-style: none;
    border-bottom: 1px solid white;
    padding: 25px;
    color: white !important;
}



@media (min-width: 992px) {
    .col-md-3.col-sm-6.col-xs-12.wow.fadeInUp {
        padding-left: 0px;
        padding-right: 0px;
    }
}

@media (min-width: 768px) {
    button.btn.btn-dark.sub-btn {
        margin-left: 284px;
        margin-top: 10px;
    }

    .col-md-3.col-sm-6.col-xs-12.wow.fadeInUp {
        padding-left: 0px;
        padding-right: 0px;
    }
}

@media (min-width: 425px) {
    button.btn.btn-dark.sub-btn {
        margin-left: 117px;
        margin-top: 10px;
    }

}

@media (min-width: 375px) {
    button.btn.btn-dark.sub-btn {
        margin-left: 88px;
        margin-top: 10px;
    }

}

@media (min-width: 320px) {
    button.btn.btn-dark.sub-btn {
        margin-left: 60px;
        margin-top: 10px;
    }
}

/* .button1 {background-color: #4b4b4b; color:white;} */
</style>
<!-- <div class="transition-none">
     <section class="title-hero-bg sec-bg-port" style="background-image: url(images/background/case-study205.jpg); background-size: 100% 550px;" alt="loan lending app development in india" title="loan lending app development in india">
       <div class="container">
           
     </section>
 </div> -->

<div class="transition-none">
    <section class="title-hero-bg banking-banner" style="background: url('images/background/case-study205.jpg')"
        alt="case study in development" title="case study in development">

        <div class="layer container">
            <div class="page-title text-center white-color">
                <h1>BI Case Study</h1>
                <h4 class="mt-30" style="margin-top: -5px">Proven Development Partner for Top-Tier InsurTech Company
                </h4>
            </div>
        </div>
    </section>
</div>



<section class="gray-bg white-block banking-section my-bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 section-heading">
                <!-- <h2 class="text-uppercase mt-0" style="color: black">Telaqua - Smart Agriculture & Irrigation (IoT, Python)</h2> -->
                <!-- <h2 class="text-uppercase mt-0" style="color: black">Case Study</h2> -->

                <!-- <h5 class="roboto-font font-100">Case Study, SEO, PPC, GOOGLE ADS (ADWORDS) /6 JULY 2020</h5> -->

            </div>
        </div>
    </div>
</section>

<div class="container mt-pag-sec">
    <div class="row">
        <div class="new-sec">
            <h3>Customer </h3>
            <p style="color:#606060">The Customer is an UK based company that offers software to help organizations to
                perform a diagnostic test for strategic professional development and gain a fuller understanding of
                where the firm is ‘at’ in relation to the key business, people, digital and regulatory development
                issues.
            </p>
            <!-- <a href="https://telaqua.com/en">https://telaqua.com/en </a></p> -->

            <h3>Challenge</h3>
            <p style="color:#606060">The Customer commissioned Digiprima to create the Data Analytics Dashboard, to be
                used by their clients to provide engage Insight via diagnostic platform quarterly so that your business
                can keep track of new regulatory directives, relevant final guidance and discussion papers and our
                industry best practice research benchmarks. The company looked for an overall competitive advantage and
                a way to support better decision-making. </p>

            <!-- <p style="color:#606060">In short, a portal and a mobile app was needed to be developed so that customers can </p>
            <ul class="new-sec-list-new">
                <li> Save time on water distribution circuits</li>
                <li> Customer can monitor, program and optimise irrigation with mind at ease and plan the irrigation better. </li>
                <li>Create a system in the state-of-the-art digital format.</li>
                <li> Real-time dashboard, Accessible in both web and mobile versions </li>
            </ul>
            <br>
            <h3>Our Approach – Proposed Solution:</h3>
            <p style="color:#606060">We proposed a solution that provided an efficient way to deal with water consumption and irrigation monitoring.</p>
            <ul class="new-sec-list-new">
                <li>Front End: Vieu.js</li>
                <li> Database: AWS RDS</li>
                <li>Firebase – NoSQL real time database (Back-end)</li>
                <li> Back End: Node JS, Python </li>
            </ul>
            <br> -->
            <center>
                <img src="images/portfolio-service-img.png" alt="loan lending app development in india"
                    title="loan lending app development in india" style="padding: 57px;">
            </center>
            <!-- <br>
            <br>
            <p style="color:#606060">The client had 350+ physical lands wanted the users to interact with the application by scheduling the irrigation day cycle and duration hours etc. So that the Automated irrigation system can help farmers across the world by alleviating human intervention for monitoring the crop land. And have the back end database, a real time database that reflects and set data to and fro between device and front end. </p> -->
            <h3>Solution</h3>
            <!-- <h4>Delivering a proof of concept</h4> -->
            <p style="color: #2a2929; font-size: 20px!important;">Delivering a proof of concept:</p>
            <p style="color:#606060">As the solution-to-be was to serve all the Customer’s business directions, collect
                and aggregate data from database, Digiprima team first provided the Customer with a proof of concept:
                based on the Customer’s ERP data, we created a set of sample analytics reports. </p>
            <br>
            <p style="color: #2a2929; font-size: 20px!important;">Preparing conceptual solution design:</p>
            <p style="color:#606060">Digiprima team defined high-level architecture components and outlined their main
                functions. The analytical solution was planned to be highly scalable. Initially, it was to analyze the
                historical data for 5 years, and in the future it was to deal with data growth.As the Customer was
                concerned about the security of their data, the solution was hybrid (hosted inside a private cloud in a
                data center). </p>
            <br>
            <h3>Implementing a data analytics solution</h3>
            <p style="color: #2a2929; font-size: 20px!important;">The implemented analytical solution consisted of the
                following components:</p>
            <ul class="new-sec-list-new">
                <li>A data hub to store both structured and unstructured data from 15 data sources.</li>
                <li> About 100 ETL (extract-transform-load) processes. </li>
                <li>A data warehouse to combine and aggregate data.</li>
                <li> An analytical server with 5 OLAP-cubes and about 60 dimensions overall. </li>
                <li> Reporting.</li>
            </ul>
            <br>
            <h3>Results</h3>
            <p style="color:#606060">The Customer’s clients are now able to improve their management processes thanks to
                prompt analytics reports. Together with Digiprima, the Customer is also planning to build OLAP-cubes to
                store aggregated data for KPIs and goal management reports, the Customer was able to define the
                employees’ quality of work and advanced data analytics and information processing. </p>
            <br>
            <h3>Technologies and Tools</h3>
            <p style="color:#606060">Microsoft SQL Server, Microsoft SQL Analysis and Integration Services, <a
                    href="python-developer" style="text-decoration: underline;">Python</a>,<a href="python-developer"
                    style="text-decoration: underline;"> Microsoft</a>,<a href="portfolio-service"
                    style="text-decoration: underline;"> Power BI </a>. </p>

            <img src="images/study2.png" alt="" style="height: auto;
              max-width: 47%; margin-left:52px;" />
            <img src="images/study3.png" alt="" style="height: auto;
              max-width: 40%;padding: 12px;margin-left:43px;" />

            <p>

            <div class="container text-center news-sec">

                <div class="row">
                    <div class="co-md-12">
                        <h5>Subscribe to our newsletter for more search marketing news & industry trends</h5>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-2">


                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control form-control-lg" placeholder="Email"
                                    name="text3">
                            </div>
                            <div class="col-md-4">
                                <button type="button" class="btn btn-dark sub-btn add-new">Submit</button>
                            </div>
                        </div>

                    </div>


                </div>
            </div>

            </p>




        </div>
        <!--1-->


    </div>
    <!--1-->
</div>
<!--1-->

</div>
<!--1-->


<section class="white-bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 section-heading">
                <h5 class="text-uppercase default-color mt-0">So what's new</h5>
                <h3 class="roboto-font font-400">Brands are built around stories. <br>Here are a few of our own</h3>
            </div>
        </div>
        <div class="row mt-50">
            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.1s">
                <div class="post">

                    <div class="post-info pt-20 pb-20 digi-blog new-one">
                        <!-- s<h3>— The Official SpyFu Blog —</h3> -->
                        <text style="text-align:center; font-size: xx-large; margin-left: 26px; color: #f3eeee;">Case
                            Study</text>
                        <!--  <div class="read-next-divider"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M13 14.5s2 3 5 3 5.5-2.463 5.5-5.5S21 6.5 18 6.5c-5 0-7 11-12 11C2.962 17.5.5 15.037.5 12S3 6.5 6 6.5s4.5 3.5 4.5 3.5"></path></svg>
</div> -->
                        <hr>

                        <div class="read-next-card-content py-new python-new">
                            <ul>
                                <li class="ch-lis-new"><a href="/blog/allbirds-weaves-branding-and-seo/">Allbirds Weaves
                                        its Brand-building Expertise into SEO and Google Ads</a></li>
                                <li class="ch-lis-new"><a href="/blog/intercom-content-strategy-leader/">How Intercom's
                                        Content Strategy Helped Them Become a Leader in Website Chat</a></li>
                                <li class="ch-lis-new"><a
                                        href="/blog/mailchimps-conversion-content-strategy/">Mailchimp's Secret Content
                                        Strategy Convinces Freemium Users to Upgrade to Paid</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <!--== Post End ==-->

            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.2s">
                <div class="post">
                    <div class="post-img"> <img class="img-responsive" src="{{asset('images/loanmoksha.png')}}"
                            alt="outsource node js development company" title="outsource node js development company">
                    </div>
                    <div class="post-info pt-20 pb-20">
                        <h3 style="color: black; margin-left:10px; margin-top: -22px;"> <a href="loanmoksha-case-study"
                                target="blank"> LoanMoksha largest loan & card marketplace</a></h3>
                        <h6 style="margin-left:10px;"> April 19, 2014</h6>
                        <hr>

                        <!-- <a class="readmore" href="#"><span>Read More</span></a>  -->
                    </div>
                </div>
            </div>
            <!--== Post End ==-->

            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.3s">
                <div class="post">
                    <div class="post-img"> <img class="img-responsive" src="{{asset('images/mdout.png')}}"
                            alt="outsource node js development company" title="outsource node js development company">
                    </div>
                    <div class="post-info pt-20 pb-20">
                        <h3 style="color: black; margin-left:10px; margin-top: -22px;"><a href="owl-case-study">MDout
                                healthcare research and analutics company</a></h3>
                        <h6 style="margin-left:10px;">Febuary 13, 2018</h6>
                        <hr>
                        </span> </p>
                        <!-- <a class="readmore" href="#"><span>Read More</span></a>  -->
                    </div>
                </div>
            </div>
            <!--== Post End ==-->

            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.4s">
                <div class="post thana">
                    <div class="post-img"> <img class="img-responsive" src="{{asset('images/my-thana-app.png')}}"
                            alt="outsource node js development company" title="outsource node js development company">
                    </div>
                    <div class="post-info pt-20 pb-20">
                        <h3 style="color: black; margin-left:10px; margin-top: -22px;"><a
                                href="my-thana-app-case-study">My Thana App India's First Police App with Video Call</a>
                        </h3>
                        <h6 style="margin-left:10px;">November 18, 2016</h6>
                        <hr>
                        <!-- <p class="mt-10"> <span> <a class="extras-wrap" href="#"><i class="icofont icofont-chat"></i><span>5 Comments</span></a> <span class="extras-wrap"><i class="icofont icofont-clock-time"></i><span>15 Minutes</span></span> </span> </p>
             <a class="readmore" href="#"><span>Read More</span></a>  -->
                    </div>
                </div>
            </div>
            <!--== Post End ==-->


            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.2s">
                <div class="post bet">
                    <div class="post-img"> <img class="img-responsive" src="{{asset('images/mdout.png')}}"
                            alt="outsource node js development company" title="outsource node js development company">
                    </div>
                    <div class="post-info pt-20 pb-20">
                        <h3 style="color: black; margin-left:10px; margin-top: -22px;"> <a href="bethite-case-study"
                                target="blank"> BetHite Peer to Peer Sports Betting Platform</a></h3>
                        <h6 style="margin-left:10px;"> April 19, 2014</h6>
                        <hr>

                        <!-- <a class="readmore" href="#"><span>Read More</span></a>  -->
                    </div>
                </div>
            </div>
            <!--== Post End ==-->

            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.3s">
                <div class="post fin">
                    <div class="post-img"> <img class="img-responsive" src="{{asset('images/finaceexchange.png')}}"
                            alt="outsource node js development company" title="outsource node js development company">
                    </div>
                    <div class="post-info pt-20 pb-20">
                        <h3 style="color: black; margin-left:10px; margin-top: -22px;"><a
                                href="finexchange-case-study">Finexchange Online Syndication Desk</a></h3>
                        <h6 style="margin-left:10px;">Febuary 13, 2018</h6>
                        <hr>
                        </span> </p>
                        <!-- <a class="readmore" href="#"><span>Read More</span></a>  -->
                    </div>
                </div>
            </div>
            <!--== Post End ==-->

            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.4s">
                <div class="post scholly">
                    <div class="post-img"> <img class="img-responsive" src="{{asset('images/mob-apps.png')}}"
                            alt="outsource node js development company" title="outsource node js development company">
                    </div>
                    <div class="post-info pt-20 pb-20">
                        <h3 style="color: black; margin-left:10px; margin-top: -22px;"><a
                                href="scholly-me-case-study">SchollyMe Social Platform for Athletes & Coaches</a></h3>
                        <h6 style="margin-left:10px;">November 18, 2016</h6>
                        <hr>
                       
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    </div>

    </div>
    </div>
</section>
<!--== Blogs End ==-->