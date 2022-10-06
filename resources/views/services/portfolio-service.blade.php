<!-- @push('custom-scripts')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Corporation",
  "name": "digiprima",
  "alternateName": "DiGiPRIMA Technologies Pvt. Ltd.",
  "url": "https://www.digiprima.com",
  "logo": "https://www.digiprima.com/images/digiprima-images/dg-logo.png",
	"contactPoint": [{
    "@type": "ContactPoint",
    "telephone": "+1 347 973 9732",
    "contactType": "technical support",
    "contactOption": "TollFree",
    "areaServed": "US",
    "availableLanguage": "en"
  },{
    "@type": "ContactPoint",
    "telephone": "+91 (975) 557 0042",
    "contactType": "technical support",
    "contactOption": "TollFree",
    "areaServed": "IN",
    "availableLanguage": ["en","Hindi"]
  }],
	"address" : [{
	"@type": "PostalAddress",
	"addressCountry": "US",
	"streetAddress": " 47 W 13th St, New York, NY 10011 USA",
	 "addressRegion": "NY",
    "postalCode": "10011",
	"telephone": "+ 1 (347) 973 9732"
	
	}],
"image":"https://maps.gstatic.com/mapfiles/place_api/icons/generic_business-71.png",
"aggregateRating":{"@type":"AggregateRating",
"ratingValue":5,"bestRating":5,"worstRating":0,"ratingCount":3},"review":[{"@type":"review","author":"Robin Owens-Wright","datePublished":"20-06-2019","description":"We are truly enjoyed our collaboration with DigiPrima over the management of our website strategy and other areas of my business. They have been taking care of some specialized tasks for us. I love their 24/7 availability, affordable pricing plans, and compliance with best-in-class work practices has given us the confidence to delegate them more responsibilities than before.nnThe best advantage that we have reaped from hiring virtual assistants from DigiPrima is the way they actively contribute their thoughts and ideas on how can the processes be more streamlined for time and cost efficiency.","name":"DigiPrima Technologies","reviewRating":{"@type":"Rating","bestRating":5,"ratingValue":5,"worstRating":"0"}},{"@type":"review","author":"Shubhra Shrivastava","datePublished":"15-06-2019","description":"Company, you can trust on!!","name":"DigiPrima Technologies","reviewRating":{"@type":"Rating","bestRating":5,"ratingValue":5,"worstRating":"0"}},{"@type":"review","author":"AAYUSHI CHOUDHARY","datePublished":"12-10-2019","description":"","name":"DigiPrima Technologies","reviewRating":{"@type":"Rating","bestRating":5,"ratingValue":5,"worstRating":"0"}}]} 
 
	"description": "Digiprima is among the top website and Mobile Application Development company provides end to end solution for Education, Manufacturing & fintech industry.",
	
  "sameAs": [
    "https://www.facebook.com/DigiprimaTech",
    "https://twitter.com/digiprimatech",
    "https://www.instagram.com/digiprima",
    "https://www.youtube.com/channel/UCyK3Cqt8uTDs3DEzN-h-ueA",
    "https://www.linkedin.com/company/digiprima-technologies",
"https://www.goodfirms.co/company/digiprima-technologies-pvt-ltd",
"https://www.trustpilot.com/review/digiprima.com"
  ]
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "BreadcrumbList", 
  "itemListElement": [{
    "@type": "ListItem", 
    "position": 1, 
    "name": "About US",
    "item": "https://www.digiprima.com/about-us"  
  },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "Portfolio",
    "item": "https://www.digiprima.com/portfolio"  
  },{
    "@type": "ListItem", 
    "position": 3, 
    "name": "Industries Development",
    "item": "https://www.digiprima.com/industries"  
  },{
    "@type": "ListItem", 
    "position": 4, 
    "name": "Contact US",
    "item": "https://www.digiprima.com/contact-us"  
  }]
}
</script>
@endpush -->
<?php

$title = 'BI Portfolio Management  | Power BI Projects Overview | DigiPrima';
$description = 'DigiPrima is a top business intelligence software company in 2022 , let’s see our past business intelligence & Power BI  successful projects overview. ';
$keyword = 'ai development services, ai development company, artificial intelligence services, artificial intelligence service provider, ai software development company, ai and ml development services, ai app development, ai software development, artificial intelligence software development, artificial intelligence integration';
?>
@include('head')


<style>
.rs-contact .contact-wrap {
    background: #ffffff;
    padding: 25px 40px 50px;
    border-radius: 10px 10px 10px 10px;
}

.rs-contact .contact-wrap .content-part {
    text-align: center;
}

.rs-contact .contact-wrap .content-part .title {
    font-size: 24px;
    line-height: 40px;
    font-weight: 700;
    color: #0a0a0a;
    margin: 0;
}

.rs-contact .contact-wrap .content-part .desc {
    margin: 0;
}

.rs-contact .contact-wrap .from-control {
    padding: 12px 16px 12px 16px;
    border-radius: 5px 5px 5px 5px;
    border-style: solid;
    border-color: #02010100;
    background-color: #F6F7F9;
    color: #454545;
    width: 100%;
    opacity: 4;
}

.mb-15 {
    margin-bottom: 15px;
}

.submit-btn {
    box-shadow: 0 28px 50px 0 rgb(0 0 0 / 5%);
    outline: 0;
    border: none;
    padding: 13px 10px 13px 10px;
    border-radius: 3px;
    display: inline-block;
    text-transform: capitalize;
    font-size: 16px;
    line-height: 1;
    font-weight: 500;
    color: #fff !important;
    background-image: linear-gradient(160deg, #03228f 0%, #0b70e1 77%);
    transition: all .3s ease;
    position: relative;
    overflow: hidden;
    width: 100%;
    cursor: pointer;
}

.feature-box.text-center.mb-50.feature-box-rounded1.center-feature.border-radius-10.boxrounded.add-height {
    min-height: 378px;
}

p.font-500.mt-20.add-new-cls {
    font-weight: 400;
    color: black;
}

section.white-bg.section-two.para6.new-cls {
    padding-bottom: 0px;
    padding-top: 0px;
}



@media (max-width:1100px) {
    .feature-box.text-center.mb-50.feature-box-rounded1.center-feature.border-radius-10.boxrounded.add-height {
        min-height: 438px;
    }

}

@media only screen and (min-device-width: 320px) and (max-device-width: 374px) {

    /* .mob {
    } */
    .btn-tab-hadding {
        font-size: 18px !important;
        margin-top: 22px !important;
    }

    .textf {
        font-size: 38px !important;
    }

    .p-text {
        margin-top: 4px;
        text-align: left;
        margin-left: 48px;
    }
}

@media only screen and (min-device-width: 375px) and (max-device-width: 425px) {

    /* .mob {
    } */
    .btn-tab-hadding {
        font-size: 18px !important;
        margin-top: 22px !important;

    }

    .textf {
        font-size: 38px !important;
    }

    .p-text {
        margin-top: 4px;
        text-align: left;
        margin-left: 48px;
    }

    .img-responsive-none,
    .full-width {
        display: none;

    }
}

  ul li {
    list-style-type: square;
  }

/* @media (max-width:768) {
    h3#change-sty {
      padding-left: 0px;
    }
      

  } */
</style>
<div class="transition-none">
    <section class="title-hero-bg " style="background-color: rgba(2, 2, 2, 0.7);">
        <!-- <section class="title-hero-bg " style="background: #b3bbe2;"> -->
        <div class="container">
            <div class="row mt-50">
                <div class="col-md-12 mt-75">
                    <div class="">
                        <div class=" text-center white-color">
                            <h1 class="textf">BI Portfolio Management </h1>
                            <h4 class="mt-30" style="margin-top: 4px; text-align: center;">BI Architecture road map and
                                implemented end to end BI solution</h4>
                            <a href="{{url('https://calendly.com/shubhra-s/30min?month=2022-02')}}">
                                <button type="submit" name="submit"
                                    class="btn btn-md btn-color btn-animate1 btn-review"><span>Request a Meeting <i
                                            class="tr-icon icofont icofont-arrow-right"></i></span></button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
</div>
<section class="white-bg section1">
    <div class="container">
        <div class="row mt-50 white-color" style="background-color: #e5e5e257; border: 1px solid #8080805e;">
            <div class="col-md-4 col-sm-12 sm-mb-30">
                <div class="all-padding-24">
                    <img class="img-responsive pading-1" src="{{asset('images/portfolio2.jpg')}}"
                        alt="Group companies – Saudi Arabia" title="Group companies – Saudi Arabia" />
                </div>
            </div>
            <div class="col-md-8 col-sm-12 sm-mb-30">
                <div class="all-padding-24">
                    <h3 style="color: black!important;">Confidential Group companies – Saudi Arabia</h3>
                    <p style="color: black!important;">Created complete BI Architecture road map and implemented end to
                        end BI solution for their financial
                        reporting needs by providing them self service capabilities and enabling them to create their
                        own reports
                        & dashboards for their 18 companies (Industries, Engineering, Telecom and Services) using
                        Microsoft
                        technology stack (Azure SQL, Azure Analysis Service and POWER BI).</p>
                    <b class="sect1">Microsoft
                        technology stack</b>
                    <ul class="sect1">
                        <li>Azure SQL</li>
                        <li>Azure Analysis Service</li>
                        <li>POWER BI</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="white-bg section1">
    <div class="container">
        <div class="row mt-50 white-color" style="background-color: #e5e5e257; border: 1px solid #8080805e;">
            <div class="col-md-4 col-sm-12 sm-mb-30">
                <div class="all-padding-24">
                    <img class="img-responsive pading-1" src="{{asset('images/port3d.jpg')}}"
                        alt="Group companies – Saudi Arabia" title="Group companies – Saudi Arabia" />
                </div>
            </div>
            <div class="col-md-8 col-sm-12 sm-mb-30">
                <div class="all-padding-24">
                    <h3 style="color: black!important;">Confidential -Audio Products Manufacturer - USA</h3>
                    <p style="color: black!important;">Implemented end to end cloud data warehouse by bring data from 5
                        different data sources (Oracle ERP,
                        Salesforce, Go Transverse, Gemalto, Google Analytics ) and generating sales, marketing, finance
                        and
                        operation reports using SSRS & Power BI for their Executive and operation team.</p>
                    <b class="sect1">Microsoft
                        technology stack</b>
                    <ul class="sect1">
                        <li>Azure SQL</li>
                        <li>Azure Analysis Service</li>
                        <li>POWER BI</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="white-bg section1">
    <div class="container">
        <div class="row mt-50 white-color" style="background-color: #e5e5e257; border: 1px solid #8080805e;">
            <div class="col-md-4 col-sm-12 sm-mb-30">
                <div class="all-padding-24">
                    <img class="img-responsive pading-1" src="{{asset('images/port-analytics.jpg')}}"
                        alt="Group companies – Saudi Arabia" title="Group companies – Saudi Arabia" />
                </div>
            </div>
            <div class="col-md-8 col-sm-12 sm-mb-30">
                <div class="all-padding-24">
                    <h3 style="color: black!important;">Confidential – Homehealth and Hospice - USA</h3>
                    <p style="color: black!important;">Provided end to end BI solution for a US based healthcare
                        organization having more than 20 branch by
                        providing them self service reporting capabilities. Developed an Enterprise data warehouse which
                        ingest
                        data from 3 different data sources i.e. wellsky (patient management system), ultipro (Employee
                        and
                        time management system), Microsoft GP (accounting system) and created several reports by using
                        Azure
                        Analysis services and Power BI.</p>
                    <b class="sect1">Microsoft
                        technology stack</b>
                    <ul class="sect1">
                        <li>Azure SQL</li>
                        <li>Azure Analysis Service</li>
                        <li>POWER BI</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="white-bg section1">
    <div class="container">
        <div class="row mt-50 white-color" style="background-color: #e5e5e257; border: 1px solid #8080805e;">
            <div class="col-md-4 col-sm-12 sm-mb-30">
                <div class="all-padding-24">
                    <img class="img-responsive pading-1" src="{{asset('images/port4.jpg')}}"
                        alt="Group companies – Saudi Arabia" title="Group companies – Saudi Arabia" />
                </div>
            </div>
            <div class="col-md-8 col-sm-12 sm-mb-30">
                <div class="all-padding-24">
                    <h3 style="color: black!important;">Confidential - CPM Software Company - India</h3>
                    <p style="color: black!important;">Implemented Machine learning for their existing CRM solutions to
                        get the probability of opportunity closure,
                        keep track of current opportunities status and help them to strategically plan their resource
                        allocation for
                        maximum closure probability</p>
                    <b class="sect1">Microsoft
                        technology stack</b>
                    <ul class="sect1">
                        <li>Azure SQL</li>
                        <li>Azure Analysis Service</li>
                        <li>POWER BI</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="white-bg section1">
    <div class="container">
        <div class="row mt-50 white-color" style="background-color: #e5e5e257; border: 1px solid #8080805e;">
            <div class="col-md-4 col-sm-12 sm-mb-30">
                <div class="all-padding-24">
                    <img class="img-responsive pading-1" src="{{asset('images/port5.jpg')}}"
                        alt="Group companies – Saudi Arabia" title="Group companies – Saudi Arabia" />
                </div>
            </div>
            <div class="col-md-8 col-sm-12 sm-mb-30">
                <div class="all-padding-24">
                    <h3 style="color: black!important;">Confidential - Logistics Company - USA</h3>
                    <p style="color: black!important;">Created architecture blueprint and Implemented Business
                        Intelligence solution using MS BI tools (SSIS, SSAS
                        and POWER BI) to keep track of their conveyor efficiency for their three warehouses with advance
                        descriptive
                        and diagnostic reporting</p>
                    <b class="sect1">Microsoft
                        technology stack</b>
                    <ul class="sect1">
                        <li>Azure SQL</li>
                        <li>Azure Analysis Service</li>
                        <li>POWER BI</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<br><br>
<?php echo App\Http\Controllers\BlogsController::RequMeet('Ready to build your custom application solution?','Request a Free Consultation');?>
<!-- @include('request-meeting') -->
<section class="white-bg section1">
    <div class="container">
        <div class="row mt-50 white-color" style="background-color: #e5e5e257; border: 1px solid #8080805e;">
            <div class="col-md-4 col-sm-12 sm-mb-30">
                <div class="all-padding-24">
                    <img class="img-responsive pading-1" src="{{asset('images/port6.jpg')}}"
                        alt="Group companies – Saudi Arabia" title="Group companies – Saudi Arabia" />
                </div>
            </div>
            <div class="col-md-8 col-sm-12 sm-mb-30">
                <div class="all-padding-24">
                    <h3 style="color: black!important;">Confidential - Non-Profit Organization - USA</h3>
                    <p style="color: black!important;">Created architecture roadmap and working on POC to bring data
                        from three
                        different source systems, designing EDW and generate power bi and SSRS reports –
                        Financial and CRM</p>
                    <b class="sect1">Microsoft
                        technology stack</b>
                    <ul class="sect1">
                        <li>Azure SQL</li>
                        <li>Azure Analysis Service</li>
                        <li>POWER BI</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="white-bg section1">
    <div class="container">
        <div class="row mt-50 white-color" style="background-color: #e5e5e257; border: 1px solid #8080805e;">
            <div class="col-md-4 col-sm-12 sm-mb-30">
                <div class="all-padding-24">
                    <img class="img-responsive pading-1" src="{{asset('images/port7.jpg')}}"
                        alt="Group companies – Saudi Arabia" title="Group companies – Saudi Arabia" />
                </div>
            </div>
            <div class="col-md-8 col-sm-12 sm-mb-30">
                <div class="all-padding-24">
                    <h3 style="color: black!important;">Confidential - Gaming company - USA</h3>
                    <p style="color: black!important;">Implemented Power bi dashboard to keep track of their product and
                        service sales against various dimensions
                        such as vendor, genre, location and category, to get insight of their marketing expense along
                        with financial
                        reporting such as P&L and Debtor’s Aging Report</p>
                    <b class="sect1">Microsoft
                        technology stack</b>
                    <ul class="sect1">
                        <li>Azure SQL</li>
                        <li>Azure Analysis Service</li>
                        <li>POWER BI</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="white-bg section1">
    <div class="container">
        <div class="row mt-50 white-color" style="background-color: #e5e5e257; border: 1px solid #8080805e;">
            <div class="col-md-4 col-sm-12 sm-mb-30">
                <div class="all-padding-24">
                    <img class="img-responsive pading-1" src="{{asset('images/port9.jpg')}}"
                        alt="Group companies – Saudi Arabia" title="Group companies – Saudi Arabia" />
                </div>
            </div>
            <div class="col-md-8 col-sm-12 sm-mb-30">
                <div class="all-padding-24">
                    <h3 style="color: black!important;">Confidential - Pathology Laboratory – Australia</h3>
                    <p style="color: black!important;">Designed & Implemented OLTP system along with advance reporting
                        capabilities to track their order/work
                        status, maintain inventory, sales and marketing expenditure</p>
                    <b class="sect1">Microsoft
                        technology stack</b>
                    <ul class="sect1">
                        <li>Azure SQL</li>
                        <li>Azure Analysis Service</li>
                        <li>POWER BI</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="white-bg section1">
    <div class="container">
        <div class="row mt-50 white-color" style="background-color: #e5e5e257; border: 1px solid #8080805e;">
            <div class="col-md-4 col-sm-12 sm-mb-30">
                <div class="all-padding-24">
                    <img class="img-responsive pading-1" src="{{asset('images/portfolio-3.jpg')}}"
                        alt="Group companies – Saudi Arabia" title="Group companies – Saudi Arabia" />
                </div>
            </div>
            <div class="col-md-8 col-sm-12 sm-mb-30">
                <div class="all-padding-24">
                    <h3 style="color: black!important;">Confidential – Logistics - Australia</h3>
                    <p style="color: black!important;">Implemented diagnostic analytical solution to analyze hit and
                        miss ratio, keep track of operational cost,
                        vendor management, Freight cost analysis, to identify most cost effective mode of transport,
                        total and
                        volume of parcels delivered to a location (geotagging) and customer wise along with financial
                        reporting</p>
                    <b class="sect1">Microsoft
                        technology stack</b>
                    <ul class="sect1">
                        <li>Azure SQL</li>
                        <li>Azure Analysis Service</li>
                        <li>POWER BI</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<br><br>
<section class="parallax-bg fixed-bg pt-80 pb-80" data-parallax-bg-image="assets/images/   background/parallax-bg-6.jpg"
    data-parallax-speed="0.8" data-parallax-direction="up">
    <div class="parallax-overlay">
        <div class="container">
            <div class="row">
                <div class="centerize-col text-center white-color relative">
                    <h3 class="roboto-font-size font-700 btn-tab-hadding">EXPLORE OUR DATA VISUALISATIONS CONSULTING
                        SERVICE HERE</h3>
                    <a href="{{url('https://calendly.com/shubhra-s/30min?month=2022-02')}}"
                        class="btn btn-md btn-light-outline btn-square">talk to our expert</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="white-bg section1">
    <div class="container">
        <div class="row mt-50 white-color" style="background-color: #e5e5e257; border: 1px solid #8080805e;">
            <div class="col-md-4 col-sm-12 sm-mb-30">
                <div class="all-padding-24">
                    <img class="img-responsive pading-1" src="{{asset('images/port-img.jpg')}}"
                        alt="Group companies – Saudi Arabia" title="Group companies – Saudi Arabia" />
                </div>
            </div>
            <div class="col-md-8 col-sm-12 sm-mb-30">
                <div class="all-padding-24">
                    <h3 style="color: black!important;">Confidential - Photo gallery Store – India</h3>
                    <p style="color: black!important;">Provided business and IT consultancy to redefine their Operation,
                        HR and Procurement process and help
                        them in implementing a complete ERP solution</p>
                    <b class="sect1">Microsoft
                        technology stack</b>
                    <ul class="sect1">
                        <li>Azure SQL</li>
                        <li>Azure Analysis Service</li>
                        <li>POWER BI</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="white-bg section1">
    <div class="container">
        <div class="row mt-50 white-color" style="background-color: #e5e5e257; border: 1px solid #8080805e;">
            <div class="col-md-4 col-sm-12 sm-mb-30">
                <div class="all-padding-24">
                    <img class="img-responsive pading-1" src="{{asset('images/portfolio-img.webp')}}"
                        alt="Group companies – Saudi Arabia" title="Group companies – Saudi Arabia" />
                </div>
            </div>
            <div class="col-md-8 col-sm-12 sm-mb-30">
                <div class="all-padding-24">
                    <h3 style="color: black!important;">Confidential - Audio Video conferencing service provider - USA
                    </h3>
                    <p style="color: black!important;">Created architecture document to integrate data from their
                        various services- U manage, U-server and U-
                        control to have cross reporting capabilities. The end product was in the form of new reporting
                        product
                        service line (U-report)</p>
                    <b class="sect1">Microsoft
                        technology stack</b>
                    <ul class="sect1">
                        <li>Azure SQL</li>
                        <li>Azure Analysis Service</li>
                        <li>POWER BI</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="white-bg section1">
    <div class="container">
        <div class="row mt-50 white-color" style="background-color: #e5e5e257; border: 1px solid #8080805e;">
            <div class="col-md-4 col-sm-12 sm-mb-30">
                <div class="all-padding-24">
                    <img class="img-responsive pading-1" src="{{asset('images/port-img1.jpg')}}"
                        alt="Group companies – Saudi Arabia" title="Group companies – Saudi Arabia" />
                </div>
            </div>
            <div class="col-md-8 col-sm-12 sm-mb-30">
                <div class="all-padding-24">
                    <h3 style="color: black!important;">Confidential - Software Provider - USA</h3>
                    <p style="color: black!important;">Consolidated their sales, financial and labor cost data from
                        difference data sources (Connect wise sell,
                        connect wise manage & sage Intacct) and created P&L report</p>
                    <b class="sect1">Microsoft
                        technology stack</b>
                    <ul class="sect1">
                        <li>Azure SQL</li>
                        <li>Azure Analysis Service</li>
                        <li>POWER BI</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="white-bg section1">
    <div class="container">
        <div class="row mt-50 white-color" style="background-color: #e5e5e257; border: 1px solid #8080805e;">
            <div class="col-md-4 col-sm-12 sm-mb-30">
                <div class="all-padding-24">
                    <img class="img-responsive pading-1" src="{{asset('images/port-img-1.jpg')}}"
                        alt="Group companies – Saudi Arabia" title="Group companies – Saudi Arabia" />
                </div>
            </div>
            <div class="col-md-8 col-sm-12 sm-mb-30">
                <div class="all-padding-24">
                    <h3 style="color: black!important;">Multiple Clients - Dynamics GP - USA</h3>
                    <p style="color: black!important;">Created ETL and data model to integrate Financial data from GP
                        for reporting purpose</p>
                    <b class="sect1">Microsoft
                        technology stack</b>
                    <ul class="sect1">
                        <li>Azure SQL</li>
                        <li>Azure Analysis Service</li>
                        <li>POWER BI</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pb-0">
    <div class="container">
        <div class="row mt-50 service-box-style-01">
            <h2 class="mt-d font-700">CASE STUDY</h2>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="feature-box text-center mb-50 feature-box-rounded center-feature border-radius-10">
                    <div class="testi-information1">
                        <div class="testi-name">TELAQUA - SMART AGRICULTURE & IRRIGATION (IOT, PYTHON) </div>
                        <span class="font-400 mt-20">Proven Development Partner for Top-Tier InsurTech Company</span>
                    </div>
                    <a>
                        <img src="assets/images/talaqua.png" class="test12" alt="education software development company"
                            title="Transforming technical advancements"></a>
                    <div class="btn-part">
                        <a class="readon discover more add-new" href="{{url('/Telaqua-case-study')}}">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="feature-box text-center mb-50 feature-box-rounded center-feature border-radius-10">
                    <div class="testi-information1">
                        <div class="testi-name">OWL SITE - Remote Monitoring Solution For Propane Dealers </div>
                        <span class="font-400 mt-20">Remote Monitoring Solution For Propane Dealers</span>
                    </div>
                    <a>
                        <img src="assets/images/owl.png" class="test12" alt="education software development company"
                            title="Transforming technical advancements"></a>
                    <div class="btn-part">
                        <a class="readon discover more add-new" href="{{url('/owl-case-study')}}">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="feature-box text-center mb-50 feature-box-rounded center-feature border-radius-10">
                    <div class="testi-information1">
                        <div class="testi-name">Neural Marker - Annotation And Training Data Platform For Computer
                            Vision</div>
                        <span class="font-400 mt-20">Annotation And Training Data Platform For Computer Vision</span>
                    </div>
                    <a>
                        <img src="assets/images/newkar.png" class="test13" alt="education software development company"
                            title="Transforming technical advancements"></a>
                    <div class="btn-part">
                        <a class="readon discover more add-new" href="{{url('/neuralmarker-case-study')}}">View
                            Details</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>
@include('client-slider')
@include('talk_to_action')