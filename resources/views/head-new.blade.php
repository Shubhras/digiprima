<?php error_reporting(0) ?>
<!DOCTYPE html>
<html lang="en">  
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="digiprima.com">
<title>Software development companies in USA | DigiPrima</title>
<meta name="description"
content="Digiprima is among the best companies provides website, Desktop & Mobile Application Development services end to end solution for Education, Manufacturing & fintech industry.">
<meta property="og:description" content="Your Trusted Partners for Software Development  and  Enterprise Solutions">
<meta name="keywords" content="Software development companies, software for small manufacturing companies, healthcare software,  fintech development company, mobile apps development, Logistics software, Ecommerce development , Blockchain, IoT solution , IT company India, USA, UK, UEA">
    <meta property="og:image" content="{{asset('/images/DigiImages/digiprima-technologies.png') }}">
    <meta name="twitter:image" content="{{asset('/images/DigiImages/digiprima-technologies.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{asset ('css/main.css?v=0.1') }}">
    <meta name="geo.region" content="US-NY" />
    <meta name="geo.placename" content="New York" />
    <meta name="geo.position" content="40.736452;-73.996209" />
    <meta name="ICBM" content="40.736452, -73.996209" />
    <meta name=geography
    content="Virginia, New Jersey, California, New York, Pennsylvania, Connecticut, Illinois, Florida, Oregon, Texas, Georgia, Arizona, District of Columbia, Kansas, New Mexico, Colorado, Massachusetts, Minnesota, North Carolina, Washington, Nevada, South Carolina, Utah, Arkansas, Iowa, Michigan, Delaware, Hawaii, Indiana, Maryland, Missouri, South Dakota, Wyoming- USA ">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:locale" content="en_US" />
    <meta name="google-site-verification" content="D4zO1nmRsJ025xgKsUNmdFQkNe3NNAEyi2x6fo6fZO8" />
    <meta property="og:url" content="https://digiprima.com/">
    <meta name="msvalidate.01" content="7EC5D9ECFDA2611AE3F856BD76F626D6" />
    <meta name="yandex-verification" content="dea5c754aba29389" />
    <meta name="robots" content="index,follow" />
    <!-- page  meta tags open -->
    <?php
    // Program to display URL of current page.
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $link = "https";
    else $link = "http";
    
    // Here append the common URL characters.
    $link .= "://";
    
    // Append the host(domain name, ip) to the URL.
    $link .= $_SERVER['HTTP_HOST'];
      
    // Append the requested resource location to the URL
    $link .= $_SERVER['REQUEST_URI'];
    ?>
<?php echo $meta_tag;?>

<meta property="og:site_name" content="Digiprima Technologies" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@digiprimatech" />
<meta name="twitter:creator" content="@digiprimatech" />
    <link rel="canonical" href="<?php echo $link; ?>" />
    <link rel="stylesheet" href="{{asset ('/assets/css/master-new.css') }}">
    <link rel="stylesheet" href="{{asset ('/assets/css/responsive.css') }}">
</head>
<body>
    <div class="wrapper">
        <!--== Header Start ==-->
        <nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav on no-full">
            <!--== Start Top Search ==-->
            <div class="fullscreen-search-overlay" id="search-overlay">
                <a href="#" class="fullscreen-close" id="fullscreen-close-button"><i
                class="icofont icofont-close"></i></a>
                <div id="fullscreen-search-wrapper">
                    <script src="https://cse.google.com/cse.js?cx=004086563400022892773:b4xcbjidi29" defer></script>
                    <div class="gcse-search" defer></div> 
                </div>
            </div>
            <!--== End Top Search ==-->
            <div class="container">
                @if(Session::has('message'))
                <div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                            <strong>{{ Session::get('message') }} </strong>
                </div>
                @endif

                <!--== Start Header Navigation ==-->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i
                    class="tr-icon ion-android-menu"></i> </button>
                    <div class="logo"> <a href="{{asset ('/') }}">
                            <img class="logo logo-display" src="{{asset ('/images/logo-digi.png') }}"
                                alt="DigiPrima Technologies logo">
                            <img class="logo logo-scrolled" src="{{asset ('/images/logo-digi-w.png') }}"
                                alt="Software copmany in USA "> </a> </div>
                </div>
                <!--== End Header Navigation ==-->

                <!--== Collect the nav links, forms, and other content for toggling ==-->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="fadeIn" data-out="fadeOut">
                        <li class="dropdown megamenu-fw"> <a href="{{asset('/') }}">Home</a>
                    </li>
                    <li class="dropdown megamenu-fw"> <a href="{{asset('industry')}}
                        ">Industry</a>
                        <ul class="dropdown-menu megamenu-content hidden-xs sm-display-none" role="menu">
                            <li>
                                    <div class="row">
                                        <div class="col-menu col-md-12">
                                            <h6 class="title">Industries</h6>
                                            <div class="content">
                                                <p>Creating a Unified Consumer Experience at various touch points to the
                                                    consumers with leveraging pre-defined processes to enable faster
                                                    turn-around time and harness data analytics to refine your consumer
                                                    outreach initiatives.</p>
                                            </div>
                                        </div>
                                        <div class=" col-md-6">
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a
                                                    href="{{asset('manufacturing-software-development-services')}}">Manufacturing
                                                </a></li>
                                                <li><a href="{{asset('fintech-development-Services')}}">Banking,
                                                            Financial Services</a></li>
                                                    <li><a href="{{asset('healthcare-software-development-services')}}">Healthcare
                                                        </a></li>
                                                    </ul>
                                            </div>
                                        </div>
                                        <!--== end col-3 ==-->
                                        <div class=" col-md-6">
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="{{asset('logistics-software-development-services')}}">Logistics
                                                        </a></li>
                                                    <li><a href="{{asset('/business-intelligence-consulting')}}">Business
                                                            Intelligence </a></li>
                                                    <li><a href="{{asset('/cloud-service')}}">Cloud Services</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--== end col-3 ==-->

                                    </div>
                                    <!--== end row ==-->
                                </li>
                            </ul>
                        </li>                        
                        <li class="dropdown megamenu-fw"> <a href="{{asset('/specialties') }}">Services</a>
                            <ul class="dropdown-menu megamenu-content hidden-xs sm-display-none" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6 class="title">Services</h6>
                                            <div class="content">
                                                <p> A commitment to our core values has helped DigiPrima Technologies
                                                    build long-term, value-centric relationships with customers and
                                                    become one of the next-generation global technology companies. Our
                                                    experts keep it in mind to improve the quality and usability of your
                                                    software, web, and mobile applications alongside performing what is
                                                    required. </p>
                                                </div>
                                        </div>
                                        <div class=" col-md-4">
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="{{asset('artificial-intelligence')}}">Artificial
                                                        Intelligence</a></li>
                                                    <li><a href="{{asset('iot-software-development-services')}}">Internet
                                                            of Things (IoT) </a></li>
                                                    <li><a href="#">Open Source</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--== end col-3 ==-->
                                        <div class=" col-md-4">
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <!--a <li><a href="#">Open Source</a></li> -->
                                                    <li><a href="{{asset('/ecommerce-software-development-services')}}">eCommerce
                                                        </a></li>
                                                    <li><a
                                                    href="{{asset('/blockchain-software-development-services')}}">Blockchain
                                                        </a></li>
                                                        <li><a href="{{asset('/education-software-development-services')}}">Education
                                                            Software</a></li>
                                                        </ul>
                                            </div>
                                        </div>
                                        <!--== end col-3 ==-->
                                        <div class="col-md-4">
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="{{asset('/cloud-service')}}">Cloud Services</a></li>
                                                    <li><a href="#">Testing</a></li>
                                                    <li><a href="{{asset('/data-analytics-services')}}">Data Analytics</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== end row ==-->
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown megamenu-fw"> <a href="{{asset('/about-us') }}">Company</a>
                        <ul class="dropdown-menu megamenu-content hidden-xs sm-display-none" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-menu col-md-12">
                                            <h6 class="title">About us</h6>
                                            <div class="content">
                                                <p>DigiPrima is a team of top dedicated software developers, UI/UX
                                                    designers, QA experts, and product managers with keen eye on
                                                    detailing. Leader in IT and Business Solutions, we partner with
                                                    clients to simplify, strengthen, and transform their businesses to
                                                    the fully managed teams.<br>
                                                </p>
                                            </div>
                                        </div>
                                        <div class=" col-md-4">
                                            <a href="{{asset('/about-us') }}">
                                                <h6 class="title">Overview</h6>
                                            </a>   
                                        </div>
                                        <!--== end col-3 ==-->
                                        <div class=" col-md-4">
                                            <a href="{{asset('/#')}}">
                                                <h6 class="title">Events</h6>
                                            </a>
                                        </div>
                                        <!--== end col-3 ==-->
                                        <div class=" col-md-4">
                                            <a href="{{asset('#')}}">
                                                <h6 class="title">Testimonial </h6>
                                            </a>
                                        </div>
                                    </div>
                                    <!--== end row ==-->
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown megamenu-fw"> <a href="{{asset('/career') }}">career</a>
                        <ul class="dropdown-menu megamenu-content hidden-xs sm-display-none" role="menu">
                            <li>
                                    <div class="row">
                                        <div class="col-menu col-md-12">
                                            <h6 class="title">Opportunities with DigiPrima</h6>
                                            <div class="content">
                                                <p> DigiPrima puts employees at the forefront of innovation where they
                                                    innovate and collaborate with each other and with customers to seed,
                                                    nurture and harvest ideas. This innovation and collaboration culture
                                                    has given rise to a number of key enablers and tools to bring about
                                                    a business impact.<br>
                                                    <a class="title" href="{{asset('/apply-now')}}">Apply Now</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== end row ==-->
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown megamenu-fw"> <a href="{{asset('/blogs') }}">Blogs</a></li>
                        <li class="dropdown"> <a href="{{asset('/contact')}}">Contact us</a></li>
                        <li class="dropdown attr-nav ">
                            <ul>
                                <li class="side-menu menu-color-li"><a href="#" class="menu-color" style="color: #fff">
                                        <b> +1 (347) 973 9732 </b> </a></li>
                                    </ul>
                                </li>
                        <li class="dropdown search">
                            <a href="#" id="search-button"><i class="icofont icofont-search"></i></a>
                        </li>
                    </ul>
                </div>
                <!--== /.navbar-collapse ==-->
            </div>
            <!-- Start Side Menu -->
            <div class="side">
                <a href="{{url('/home')}}" class="logo-side"></a>
                <a href="#" class="close-side"><i class="icofont icofont-close"></i></a>
                <div class="widget  white-color">
                    <h4>Get Free Consultation</h4>
                </div>
                <form action="{{url('/home')}}" method="POST" class="contact-form-style-02">
                    {{ csrf_field() }}
                    <div class="widget white-color">
                        <label>Name</label>
                        <input type="text" name="name" placeholder="Name">
                        <label>Message</label>
                        <input type="text" name="message" placeholder="Message">
                        <label>Email</label>
                        <input type="email" name="email" required placeholder="Email">
                        <div class="col-md-4 col-sm-4">
                            @if(Session::has('captcha'))
                            <span style="color:red">{{ Session::get('captcha') }}</span>
                            @endif
                        </div>
                        <button type="submit" name="submit"
                        class="btn btn-xl btn-dark btn-animate margin-left-auto margin-right-auto display-table-sm">request
                        a meeting </button>
                        <a class="btn btn-xl btn-dark btn-animate margin-left-auto margin-right-auto display-table-sm"
                            href="tel:+1 (347) 973 9732"><span> +1 (347) 973 9732s</span></a>
                        </div>
                </form>
            </div>
        </nav>
    </div>