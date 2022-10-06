<style>
.navbar {
    height: 10%;
    width: 100%;
    background: rgb(51, 204, 51);
    position: fixed;
    z-index: 0;
}

.dashboard {
    display: flex;
    top: 10%;
    height: 80%;
    width: 100%;
    position: fixed;

}

.sidebar1 {
  
    display: None;
  
}

.content {
    overflow-y: auto;
    flex: 5;
}

.data {
    font-size: 50px;
}

.btn {
    border: none;
    outline: none;
    padding: 10px 16px;
    background-color: #f1f1f1;
    cursor: pointer;
}

/* Style the active class (and buttons on mouse-over) */
.active,
.btn:hover {
    background-color: #666;
    color: white;
}

.toc-box {
    list-style: none;
}

.toc-title {
    text-align: center;
}

.wrap-toc .toc-title {
    font-size: 1.5rem;
    font-weight: 500;
    margin: 1rem 0;
}

.wrap-toc .toc-box .toc-item-link {
    display: block;
    padding: 4px 1rem;
    color: #333;
}

.wrap-toc .toc-box .toc-item-link:hover {
    background-color: #ebedef;
}

.wrap-toc .toc-box .toc-item.active .toc-item-link {
    color: #007fff;
    background-color: #ebedef;
}

@media (min-width:789px) {
    .sidebar1 {
        display: block;
    }
}
div#myDIV {
    width: 165px!important;
    background-color: #f1f1f1;
    margin-top:90px !important;
}
</style>
@include('head')
<div class="transition-none">
    <section class="title-hero-bg banking-banner" style="background: url('images/portf2.jpg')"
        alt="custom healthcare software development" title="custom healthcare software development">
        <div class="layer container">
            <div class="page-title text-center white-color">
                <h1>Custom Healthcare Software Development for ID Care</h1>
                <h4 class="mt-30" style="margin-top: -5px"> DigiPrima specializes in providing custom healthcare
                    software solutions as a part of hospital management,<br> automating HIPAA compliance using ADAudit
                    Plus and meeting all the requirements. Take a quick look at our ID care case study.
                </h4>
            </div>
        </div>
    </section>
</div>

<div class="sidebar">
</div>

<div class="dashboard">
    <div class="content">
        <div class="data"></div>
    </div>
    <div class="sidebar1">
        <div id="myDIV">
            <div class="sitebar-blog1">
                <a id="test" href='#j' class="sitebar-blog"><button class="btn active">About the Company</button></a>
            </div>
            <br>
            <div class="sitebar-blog1">
                <a id="test1" href='#j1' class="sitebar-blog"><button class="btn ">Business Challenge</button></a>
            </div>
            <br>
            <div class="sitebar-blog1">
                <a id="test2" href='#j2' class="sitebar-blog"><button class="btn ">Solution</button></a>
            </div>
            <br>
            <div class="sitebar-blog1">
                <a id="test3" href='#j3' class="sitebar-blog"><button class="btn ">Our Technical Expertise</button></a>
            </div>
            <br>
            <div class="sitebar-blog1">
                <a id="test4" href='#j4' class="sitebar-blog"><button class="btn ">Key Features</button></a>
            </div>
            <br>
            <div class="sitebar-blog1">
                <a id="test5" href='#j5' class="sitebar-blog"><button class="btn ">Tech Stack</button></a>
            </div>
        </div>
    </div>
</div>
<div class="container mt-pag-sec">
    <div class="row">
        <div class="new-sec">
          <div id="j">
          <br>
            <br>
            <h3  name="" class=" ">About the Company</h3>
            <p>ID Care is a leading healthcare organization based in New Jersey, recognized globally for providing
                infectious disease speciality services. With over 50 certified physicians onboard, ID care delivers
                customized solutions to each patient. The clinical leaders, researchers, and expert physicians focus on
                identifying, treating, and preventing infectious diseases.
            </p>
            </div>

            <div id="j1">
            <br>
            <br>
            <h3  name="" class=" ">Business Challenge </h3>
            <p>ID care provides comprehensive solutions to its patients and specializes in treating infectious diseases.
                With a growing team of clinical experts and patients, they have faced quite a few challenges over time.
                DigiPrima focuses on providing Custom Healthcare Software Development solutions. </p>

            <p>The HIPAA act is in itself a challenge. Additionally, there is a need to create user accounts for the
                management, patients and doctors. It is quite impossible to manually keep track of all patients,
                medicines and experts. Thus, there is a need to Build HIPAA Compliant Software.
            </p>
            <p>Therefore, ID care decided to build a hospital management software that can help keep track of patient
                records, medicines, inventory status, physicians, generate reports as per HIPAA guidelines, etc. They
                needed cost-effective software, a simple user interface, and extra tools to help manage the overall
                organization.
            </p>
            </div>
            <div id="j2">
              <br><br>
            <h3 >Solution</h3>
            
            <p>With the need to comply with HIPAA guidelines and resolve the challenges immediately, Digiprima took up
                the HIPAA Compliant Software Development process.
                The CRM HIPAA Compliant software has certain features which make it easy to create, modify and handle
                multiple accounts simultaneously. It includes login facilities not just for the admin but for the staff
                and physicians as well.
                Digiprima successfully managed to implement the following in the HIPAA Compliant Software Solution.</p>
            <ul class="new-sec-list">
                <li>Patient and hospital records were computerized.</li>
                <li> Checking the availability of MD Stewards and Provider MD.</li>
                <li>Scheduling appointments.</li>
                <li>Inventory Management.</li>
                <li> Generating Reports on patients, medicines and stocks. </li>
                <li>Updated information. </li>
            </ul>
            <br>
            <center>
                <img src="images/dashboard-2---ed.jpg" alt="healthcare data management software dashboard
" class="study-img" title="healthcare data management software dashboard
">
            </center>
            </div>
            <div id="j3">
              <br><br>
            <h3 >Our Technical Expertise</h3>
            <p>Our approach allowed us to provide our client with:</p>
            <ul class="new-sec-list">
                <li> An optimized, transparent and predictable development process with defined roles and iterations.
                </li>
                <li> A continuous delivery model and timely product deployment.</li>
                <li> Superior quality of code due to continuous integration practices that control defects during build
                    and integration sprint cycles.</li>
                <li> A maintainable and scalable product thanks to a properly designed architecture and properly
                    refactored code.</li>
                <li> Enhanced collaboration between product owners and development teams.</li>
                <li> A quality assurance competency lead who is responsible for setting up all test case tools.</li>
            </ul>
            </div>
<div id="j4">
  <br><br>
            <h3 >Key Features</h3>
            <p>Privacy of patient’s Healthcare data:<br>The data privacy requirement covers patient personal information
                as well as clinical history, laboratory reports, medication and other payment-related information that
                should not be disclosed.</p>
            <p>Safeguard Patient’s electronic data:<br>PHI must be stored securely and various encryption methods must
                be used to transport data over a secure channel. Database encryption and file storage must also use
                encryption</p>
            <p>Secure Administrative Structure:<br>This requirement is to reduce paperwork and make information clear
                and easily accessible, securely in a centralized repository.</p>
            <ul class="new-sec-list">
                <li>Transmission of Electronic data</li>
                <li> Structured Classification</li>
                <li>Preventing Health Care Fraud and Abuse</li>
                <li>With an additional set of safety rules, HIPAA empowers to prevent health care fraud, breach of
                    information and personal abuse.</li>
                <li>Medical Saving accounts</li>
            </ul>
            <ul>
            </div>
            <div id="j5">
              <br><br>
                <h3>Tech Stack</h3>
                <ul class="new-sec-list">
                    <li> Laravel 5.2</li>
                    <li> My SQLi</li>
                    <li>HTML5, CSS3</li>
                    <li> JS, Jquery</li>
                    <li>Adobe Photoshop, Illustrator</li>
                </ul>
                </div>
                @include('call_to_action')
        </div>
    </div>
</div>
</div>
@include('case_study_section')
<script>
// Add active class to the current button (highlight it)
var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });
}
</script>