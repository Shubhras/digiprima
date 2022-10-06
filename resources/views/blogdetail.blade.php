<?php 

 $title ='Finance Exchange';
 $description= 'Finance Exchange is a marketplace of Lenders, Borrowers and Equipment Vendors who can all transact more efficiently in a safe and secure environment using modern cloud based software automation tools';

?>
@include('head')

@if($blog->metaImageHash)
<img src="{{ asset('/files') . '/' . $blog->metaImageHash . '/' . $blog->metaImageName }}" alt="Meta Image">
@endif
@if($blog->bannerImageHash)
<img src="{{ asset('/files') . '/' . $blog->bannerImageHash . '/' . $blog->bannerImageName }}" alt="Meta Image">
@endif

<style type="text/css">
section {
    padding-top: 56px;
    padding-bottom: 90px;
}
.post {
    display: block !important;
}
.new-sec h3 {
    padding: 0;
}
</style>

<div class="transition-none">
    <section class="title-hero-bg sec-bg-port"
        style="background-image: url(assets/images/post/post-01.jpg); background-size: 100% 550px;">
        <div class="container">
    </section>
</div>

<section class="gray-bg white-block banking-section my-bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 section-heading">
                <h1 class="text-uppercase mt-0 font-30px" style="color: #000;">HOW THESE DIFFERENT BOOK COVERS REFLECT
                    THE DESIGN</h1>
                <h5 class="roboto-font font-100">Case Study, SEO, PPC, GOOGLE ADS (ADWORDS) /6 JULY 2020</h5>

            </div>
        </div>
    </div>
</section>

<div class="container mt-pag-sec">
    <div class="row">
        <div class="new-sec">
            <p>Finance Exchange is a marketplace of Lenders, Borrowers and Equipment Vendors who can all transact more
                efficiently in a safe and secure environment using modern cloud based software automation tools.</p>
            <h3>What all we did?</h3>
            <p>We can really relate to this project now that we’ve grown this product from where we approached it. So we
                did all as below –</p>
            <br>
            <ul class="new-sec-list">
                <li>Business analysis.</li>
                <li>Project Management.</li>
                <li>Designing and UX planning fully. </li>
                <li>Development of multiple POC (proof of concepts).</li>
                <li>Analyzing and integrating all the multiple POCs</li>
                <li>Quality Analysis done keeping in mind the standards of the finance industry.</li>
                <li>Product was made a white label and is SaaS. </li>
                <li>Now vision of this project is to make it easy and quick for manufacturers, dealers and small
                    businesses to acquire financing for their customer Problem Statements at low rates, fair terms and be
                    able to manage the process simply.</li>
            </ul>
            <h3>Problem Statement<h3>
                    <p>Banks are looking for borrowers to use their money, borrowers looking at banks for loan and some
                        3rd party vendors looking to close the gap between borrowers and lenders. But all individually
                        which causes the classical Chinese whispers problem. </p>
                    <p>Our problem statement thus is bridging the gap between the loan providers, seekers and
                        facilitators via communication, calculator and management tools.</p>
                    <br />
                    <h3>How did we approach it?</h3>
                    <p>This platform was a tool that our client was looking for to bridge the gap between the loan
                        providers, seekers and facilitators a.k.a. vendors. It was not a domain we knew much about but
                        our skills to almost dig out solution from any problem thrown to us came into use. </p>
                    <p>Our client was really busy in seeking the right market for it and wanted to see us develop a
                        quick prototype that he could use. And that’s what was our first step - loan calculator. </p>
                    <P>A user could just come into the system, put their amount and tenure in and get the lowest EMI
                        possible for them with all details. That was the right start the client needed and then started
                        building a communications model around it. So now along with the calculation, the users could
                        speak to each other, share documents for verifications. Now was the last piece of the puzzle -
                        can we make them enter into a loan contract? And yes we did it in a way it was seamless!</P>
                    <br>
                    <br>
                    <h3>Project Roadmap</h3>
                    <ul class="new-sec-list">
                        <li>We started off by just supporting client by telling him we didn’t have this domain but had
                            the right intent and knowledge of our industry. All we needed was a little guidance in the
                            beginning. Chad was very supportive and made us learn his industry very nicely! </li>
                        <li>Next was a POC (proof of concept), which was the tool of calculating the EMI. </li>
                        <li>Then we thought along with the client - why not connect the users too - leading to another
                            PoC of communications model, which was iterative. </li>
                        <li>Then was the POC of managing users. And its then we realized there were too many POCs, which
                            we needed to connect, and something we did in 2014 last 2 months. </li>
                        <li>2015 was a year we looked right into taking this product to the next level - allowing the
                            vendor type users OR the loan facilitators to seek more loan seekers. And we came up with a
                            proposals sending engine which utilized all contacts of the vendor while tracking each such
                            campaign taken. It was worth our time.</li>
                        <li> We looked at controlling the white label and allowed the admin of SaaS users to make edits
                            to their “theme” and give it a shape. We improved on our analytics and super admin features
                            to have control of all users and accounts. </li>
                        <li>At this stage we are refining the product to new business standards by working on things
                            like - auto loan suggest or tool, partner OR bank side of tasks where the banks can create
                            various types of loans and make them available. </li>
                        <li>Vendors can now choose their loan program etc. too. </li>
                        <li>Future work is all set as we take the drivers seat now.</li>
                    </ul>
                    <h3>Features and screenshots</h3>
                    <ul class="new-sec-list">
                        <li>Loan engine. A loan seeker can just put the amount, use the slider and find out the lowest
                            EMI that can be applied for.</li>
                        <br>
                        <center>
                            <img src="images/New Project (91).png" alt="" />
                        </center>
                        <br>
                        <br>
                        <li> Analytics for the Banking side. Where the bankers can look over the various numbers
                            <br>
                            <br>
                            <center>
                                <img src="images/New Project (96).png" alt="" />
                            </center>
                        </li>
                        <h3>Current Situation</h3>
                        <ul class="new-sec-list">
                            <li>There are about 9 white label instances created with customizations</li>
                            <li>More than 250 lender/ vendors set up out of which the client has set up 3 of his own
                                companies. </li>
                            <li>More than 3500 actual loan applications, created till now, and actual disbursement of
                                about $1,600,000.00. </li>
                            <li>There are more than 2850 actual loan seekers (borrowers) registered in the system and
                                making applications for loans. </li>
                            <li>Client is due to set up many partners into the system who can fuel the data overall.
                            </li>
                            <li>At a single time there are at least 45 people who are working on this product on daily
                                basis along with communication. </li>
                            <li>There are 9 new instances have been </li>
                            <li>There are tie-ups with big USA financial giants </li>
                            <li>We are working on some future enhancements, which will change a lot of things on finance
                                side</li>
                        </ul>
                    </ul>
                    <p>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2">
                                <img class="fb-img" src="images/sidpic.jpg" alt="" />
                            </div>
                            <div class="col-md-8">
                                <h5>Sidra Condron</h5>
                                <span>Sidra writes for SpyFu, sharing ideas that connect with real-life marketers at all
                                    skill levels. We're all just trying to raise our game one more notch, right?</span>
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-dark readmor">Read More</button>
                            </div>
                        </div>
                    </div>
                    </p>
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
                                        <button type="button" class="btn btn-dark sub-btn">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </p>
                    <div class="row mt-50">
                        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="post">
                                <div class="post-info pt-20 pb-20 digi-blog">
                                    <h3>— The Official SpyFu Blog —</h3>
                                    <h2>Case Study</h2>
                                    <hr>
                                    <div class="read-next-card-content">
                                        <ul>
                                            <li><a href="/blog/allbirds-weaves-branding-and-seo/">Allbirds Weaves its
                                                    Brand-building Expertise into SEO and Google Ads</a></li>
                                            <li><a href="/blog/intercom-content-strategy-leader/">How Intercom's Content
                                                    Strategy Helped Them Become a Leader in Website Chat</a></li>
                                            <li><a href="/blog/mailchimps-conversion-content-strategy/">Mailchimp's
                                                    Secret Content Strategy Convinces Freemium Users to Upgrade to
                                                    Paid</a></li>
                                        </ul>
                                    </div>
                                    <a class="mi-col" href="/blog/tag/case-study/">See all 8 posts →</a>
                                </div>
                            </div>
                        </div>
                        <!--== Post End ==-->

                        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="post">
                                <div class="post-img"> <img class="img-responsive" src="assets/images/post/post-10.jpg"
                                        alt="" /> </div>
                                <div class="post-info pt-20 pb-20">
                                    <h3><a href="">8 Colorful Toys
                                            Designed to Spark the Imagination</a></h3>
                                    <h6>April 19, 2014</h6>
                                    <hr>
                                    <a class="readmore" href="#"><span>Read More</span></a>
                                </div>
                            </div>
                        </div>
                        <!--== Post End ==-->

                        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="post">
                                <div class="post-img"> <img class="img-responsive" src="assets/images/post/post-07.jpg"
                                        alt="" /> </div>
                                <div class="post-info pt-20 pb-20">
                                    <h3><a href="">User Experience
                                            Design is one of the most rapidly developing</a></h3>
                                    <h6>Febuary 13, 2018</h6>
                                    <hr>
                                    </span>
                                    <a class="readmore" href="#"><span>Read More</span></a>
                                </div>
                            </div>
                        </div>
                        <!--== Post End ==-->

                        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="post">
                                <div class="post-img"> <img class="img-responsive" src="assets/images/post/post-08.jpg"
                                        alt="" /> </div>
                                <div class="post-info pt-20 pb-20">
                                    <h3><a href="">Top 10 Good SEO
                                            practices to follow while building new website</a></h3>
                                    <h6>November 18, 2016</h6>
                                    <hr>
                                    <a class="readmore" href="#"><span>Read More</span></a>
                                </div>
                            </div>
                        </div>
                        <!--== Post End ==-->
                    </div>
        </div>
    </div>
</div>
</div>
</div>
