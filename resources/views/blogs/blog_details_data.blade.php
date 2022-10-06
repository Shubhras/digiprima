<?php
   $title = $blog->title;
   $description= $blog->description;
   $keyword = $blog->tag;
   $imagetag_url='files/'.$blog->metaImageHash . '/' . $blog->metaImageName;
   $slug = $blog->slug;
   
   ?>
@include('head') 
<style type="text/css">
  .post{
    display: block!important;
  }
   .new-sec h3{
     padding: 0;
    }
    .M{
      height: auto;
      /* padding: 133px; */
    }
    </style>
<style>
  .page {
    line-height: 3.0em;
    /* height: 5em; */
    overflow: hidden;
    /* white-space: nowrap; */
   text-overflow: ellipsis;
   width: 100%;
  }
  .xs-icon a {
    font-size: 24px;
    width: 52px!important;
    height: 54px!important;
    line-height: 54px!important;
  }
  p {
    font-size: 16px!important;
    line-height: 29px!important;
    color: black;
    /* align-items: ju; */
    justify-content: center;
    /* text-align: justify; */
    font-family: 'Montserrat', sans-serif!important;
  }
  .blog .img{

      height: 659px;
    }
    .social-icons-style-05 a.whatsaap, .social-icons-style-06 .icon.whatsaap .icofont, .social-icons-style-12 a.whatsaap {
      color: #06ed00;
    }
    .blog-standard img {
    max-height: 600px!important;
  }
nav.navbar.bootsnav.navbar-transparent.white ul.nav > li > a {
color: black!important;}

.p {
    text-align: left;
    margin-top: 13cm;
    margin-bottom: 0cm;
    direction: ltr;
    color: rgb(0, 0, 10);
    line-height: 30.6667px;
    background: transparent;
    text-align: justify;
    font-family: 'Montserrat', sans-serif!important;
}
ul {
  font-size: 16px!important;
  /* line-height: 32px!important; */
    color: black;
    justify-content: center;
    font-weight: 500;
    /* text-align: justify; */
    font-family: 'Montserrat', sans-serif!important;
    padding-left: 14px;
  }
  h3 {
    font-size: 17px!important;
    line-height: 32px!important;
    color: black;
    justify-content: center;
    font-weight: 500;
    /* text-align: justify; */
    font-family: 'Montserrat', sans-serif!important;
  }
  h1 {
    font-size: 20px!important;
    line-height: 28px!important;
    color: black;
    justify-content: center;
    font-weight: 500;
    /* text-align: justify; */
    font-family: 'Montserrat', sans-serif!important;
}
h2 {
  font-size: 19px!important;
  line-height: 32px!important;
  color: black;
  justify-content: center;
    font-weight: 500;
    /* text-align: justify; */
    font-family: 'Montserrat', sans-serif!important;
  }
span {
  font-size: 16px!important;
  line-height: 29px!important;
    /* color: black; */
    justify-content: center;
    font-weight: 500;
    /* text-align: justify; */
    font-family: 'Montserrat', sans-serif!important;
}
div {
  font-size: 16px!important;
  line-height: 29px!important;
  /* color: black; */
    justify-content: center;
    font-weight: 500;
    /* text-align: justify; */
    font-family: 'Montserrat', sans-serif!important;
}

.post-info h3 {
  font-size: 23px!important;
  margin-top: 0;
  margin-bottom: 10px;
  font-weight: 700;
}

@media screen and (min-device-width: 320px) and (max-device-width: 428px) { 
  
  .typee{
    margin-top: 203px!important;
    height: 152px!important;
  }
  .wxy{
    box-shadow: rgb(0 0 0 / 35%) 0px 5px 15px;
    height: 749px!important;
}

}
@media only screen and (max-device-width: 768px) {
  .typee{
    margin-top: 203px!important;
    height: 152px!important;
} 
.wxy{
  
  box-shadow: rgb(0 0 0 / 35%) 0px 5px 15px;
  height: 608px!important;
}

}
.post-tags.new a:hover {
    background: #BF0731;
    border: 1px solid #BF0731;
    color: #fff;
    text-decoration: none;
  }
  
  .blog-style-01 .post {
    -webkit-box-shadow: 0 7px 20px -10px rgb(171 171 171 / 70%);
    -moz-box-shadow: 0 7px 20px -10px rgba(171, 171, 171, 0.7);
    box-shadow: 0 7px 20px -10px rgb(171 171 171 / 70%);
    -webkit-transition: all 0.4s ease;
    -moz-transition: all 0.4s ease;
    -o-transition: all 0.4s ease;
    transition: all 0.4s ease;
  }
  .image-box-shadow{
    /* -webkit-box-shadow: 0 7px 20px -10px rgb(171 171 171 / 70%); */
    -moz-box-shadow: 0 7px 20px -10px rgba(171, 171, 171, 0.7);
    /* box-shadow: 0 7px 20px -10px rgb(171 171 171 / 70%); */
    -webkit-transition: all 0.4s ease;
    -moz-transition: all 0.4s ease;
    -o-transition: all 0.4s ease;
    transition: all 0.4s ease;
  }
  
  .all-paddings {
    /*padding: 20px;*/
    padding: 40px 20px 0px 20px
  }
 
  div{
    font-size: 20px;
}
  .post-date {
    color: #b0b0b0 !important;
    font-size: 24px !important;
    font-weight: 800 !important;
    padding: 50% 0;
    text-align: center;
    margin: 0;
  }

  .mobile-view {
    display: none;
  }

  .desk-view {
    display: block;
  }
  @media screen and (min-device-width: 320px) and (max-device-width: 428px) { 
    .blogs_two{
     height: 150px;
    }
  }
  
  @media only screen and (max-device-width: 768px) {
    .image_view_height {
      height: 100px;
      
    }
    .font-size-text{
      font-size: 6.2em;
    }
  }
  
  @media only screen and (max-width: 767px) {
    .mobile-view {

      display: block;
    }
    
    .desk-view {
      display: none;
    }

    .all-paddings {
      /* padding: 20px; */
      /* padding: 30px 20px 31px 20px;*/
      padding: 28px 20px 29px 20px
    }
    .post-date {
      font-size: 15px !important;
      padding: 30% 0 !important;
    }

    .content-box-size{
      height: 87px
    }

    .post-date {
      font-size: 20px !important;
      padding: 43% 0;
    }
    .padding_data_text{
      padding: 20px;
  }
  }
  .padding_data_text{
    padding: 20px;
  }
  .container-fluid{
    margin-right: auto;
    margin-left: auto;
    padding-left: 50px;
    padding-right: 50px;
  }
  p {
    line-height: 3.0em;
    /* height: 5em; */
    overflow: hidden;
    /* white-space: nowrap; */
    text-overflow: ellipsis;
    /* width: 100%; */
}
b {
    font-size: 17px;
    font-weight: 700;
}
body {
    background: #fff;
}
/* .navbar {
  height: 10%;
  width: 100%;
  background: rgb(51, 204, 51);
  position: fixed;
  z-index: 0;
}

.dashboard {
  height: 100%;
    width: 160px;
    position: fixed;
    z-index: 10;
    top: 0;
    /* left: 0; */
    /* right: 0;
    margin-top:70px;
} */
.white-bg {
    background-color: #fff;
    z-index: -1;
} */
/* .sidebar {
  border-right: 1px solid #ededed;
  background: #fff;
  flex: 0.50 0 0%;
  padding: 1rem;
  display:None;
}

.content {
  overflow-y: auto;
  flex: 5;
}

.data {
  font-size: 50px;
}
@media (min-width:789px) {
    .sidebar{
        display:block;
    }
}
section{
  z-index: 1;
} */
</style>

<br><br><br>
<section class="default-bg pt-30 pb-30">
   <div class="container">
      <div class="row white-color">
         <div class="col-lg-8  col-xs-12 display-table" style="height:30px;">
            <div class="v-align-middle text-left text-xs-center breadcrumb">

               <ul class="text-xs-center white-color">
                  <li>Post on  {{$blog->date}}</li>
                  
                  <li>{{$blog->category_name}}</li>
                  
                </ul>
              </div>
         </div>
         
         <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 display-table text-right text-xs-left xs-mt-10">
            <div class="v-align-middle text-right text-xs-center">
               <!-- <h1 class="text-uppercase mb-0 font-600 font-20px line-height-26 mt-0">Blog Slider Post</h1> -->
            </div>
         </div>
      </div>
   </div>
</section>
<!-- <div class="dashboard">
     <div class="sidebar">sidebar</div> -->
    <!-- <div class="content">
      <div class="data"></div> -->
      <!-- <div class="data">a</div>
      <div class="data">a</div>
      <div class="data">a</div>
      <div class="data">a</div>
      <div class="data">a</div>
      <div class="data">a</div>
      <div class="data">a</div>
      <div class="data">a</div>
      <div class="data">a</div>
      <div class="data">a</div>
      <div class="data">a</div>
      <div class="data">a</div>
      <div class="data">a</div>
      <div class="data">a</div> -->
    <!-- </div>
    <div class="sidebar">
  <a src="#About">What is 5G</a>
  <h5> <a src="#"> Difference in 4G and 5 G</a></h5>
  <h5><a src="#"> Impact of 5G on Global Economy</a></h5>
  <h5> <a src="#"> Sectoral Uses of 5G: Unlimited Potentials</a></h5>
  <h5> <a src="#"> Future Ready Workforces</a></h5>
  <h5><a src="#"> Conclusion</a></h5>
  <h5> <a src="#"> READ MORE</a></h5>
  
    </div>
  </div> --> 
<section class="white-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-12  col-xs-12 " >
<div class="row">
  <div class="col-md-12">
    <div class="post">
                     <div class="post-info " style="margin-top: 40px;">
                        <h3 class="font-20px text-uppercase"style="color:black;text-align:center">{{$blog->title}}</h3>
                        <!-- <h6>Post on {{$blog->date}}</h6> -->
                        <hr>
                        
                      </div>
                     @if($blog->bannerImageHash)
                     <div>
                        <div class="item" style="text-align: center;"><img src="{{asset('/files') .'/'.$blog->metaImageHash . '/' . $blog->metaImageName }}" width="800px" height="160px"></div>
                      </div>
                     @endif
                     
                  </div>
               </div>
               
               <!--== Post End ==-->
               <div class="col-md-9 mb-30" >
                 <div class="blog-standard" style="font-family: 'Montserrat', sans-serif!important;">
                     <!-- <span class="font-300"> {!! $blog->content !!}</span> -->
              <div style="font-family: 'Montserrat', sans-serif!important; margin-top: 257px; text-align: justify;margin-left: 50px;margin-right: 50px;" > {!! $blog->content !!} </div>
                     <br>
                    </div>
                 
               </div>
            </div>
         </div>
      </div>  
      
    </div>
</section>

<script type="application/ld+json">
   {
     "@context": "https://schema.org/",
     "@type": "Article",
   "mainEntityOfPage": {
   "@type": "WebPage",
   "@id": "{{asset('/blogs') .'/'.$blog->slug}}"
  },
  "headline": "{!! $blog->title !!}",
   "description": "{!! $blog->description !!}",
   "image": {
   "@type": "ImageObject",
   "url": "{{asset('/files') .'/'.$blog->metaImageHash . '/' . $blog->metaImageName }}",
   "width": "600px",
   "height": "200px"
   },
   "author": {
   "@type": "Organization",
   "name": "Shubhra Shrivastava"
  },
  "articleBody" : "{!! (strip_tags($blog->content)) !!}",
  "publisher": {
    "@type": "Organization",
    "name": "DigiPrima Technologies",
    "logo": {
      "@type": "ImageObject",
      "url": "https://www.digiprima.com/images/logo-digi-w.png",
      "width": "760px",
      "height": "200px"
    }
  },
   "datePublished": "{{$blog->date}}"
  }
</script>

<div class="container">
  <div class="row mt-50 service-box-style-02" >
    <div class="col-md-6 col-sm-6 col-xs-12" style="width: 100%;border: 1px solid #ddd;">
                <div class="flipper">
                <center><h3><b>Web, Mobile & Software Development Services by DigiPrima</b></h3></center>
                    <!-- <div class="text-center" style="text-align: center;"> -->
                      <div class="box-front height-300px white-bg ">
                       
                        <div class="content-wrap">
                               
                               <div class="row rowadd"  style="margin-top: 84px;">
                                
                               <div class="col-md-6">
                              <img class="typee" alt="Software Consulting Services "src="{{asset('images/about-img-blog.jpg')}}" style="margin-top: 75px;height: 310px;width:521px">
                               </div>
                               <div class="col-md-6">
                                 <p style="margin-top: 65px; font-family: 'Montserrat';">Looking for IT consulting services? Great your search end here, because we are top rated Software, Web and Mobile App development company.  </p>
                                 <p>
                                 We have already successfully completed ~1000 projects. Take advantage of our all-round software application development services.   
                                 </p>
                                 <a  href="/contact" style="float: right; font-size:18px;">KNOW MORE ABOUT US</a>
                               </div>

                        </div>
                    </div>
                  </div>
                </div>
         </div>
</div>
</div>
<section class="grey-bg">
        <div class="row">
          <div class="col-sm-8 section-heading">
            <h5 class="text-uppercase mt-0" style="color: black;">READ MORE RELATED BLOGS
            </h5>
            </div>
        </div>
<!--== Blog Standard Posts Start ==-->
<section class="white-bg">
  <div class="container-fluid">
    <div class="row blog-style-01">
      <?php $i = 0;?>
      @foreach($blogs as $blog)
     
      <a href="{{ url('blogs', ['slug' => $blog->slug]) }}" target="_blank" id="title_data">
        
        <div class="col-md-3 col-sm-6 col-xs-12 mb-30 image-box-shadow">
        
          <div class="post">
          
            <div class="post-img"> @if($blog->metaImageHash)
                  <img src="{{ asset('/files') . '/' . $blog->metaImageHash . '/' . $blog->metaImageName }}" alt="Meta Image" style="height: 150px;">
                  @endif </div>
                  
                  
                  <div class="post-info all-padding-40">
            
                    
              <!-- <h3 style="height: 72px;"><p style="color:black;"><a href="{{ url('blogs', ['slug' => $blog->slug]) }}" target="_blank" id="title_data">{{ $blog->title }}  </a></p></h3> -->

              <h3 style="min-height: 75px;"><p style="color:black;">{{ $blog->title }}  </p></h3>
              <h6>{{ $blog->date }}</h6>
              
              
              <!-- <a class="readmore" href="{{ url('blogs', ['slug' => $blog->slug]) }}" target="_blank"><span>Read More</span></a> -->
              
               </div>
               <?php $i++ ?>
               
        </div>
        </div>
      </a>
      @if($i >= 4)
            @break
            @endif
            @endforeach
        <br>
      </div>
  </section>
</section>