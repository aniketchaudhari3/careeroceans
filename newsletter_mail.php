<?php

include("modules/connect.php");



    $check = mysqli_query($connect,"SELECT * FROM email");

    while($row = mysqli_fetch_assoc($check)){

$to= $row['email'];

    $subject = "CareerOceans | BestJobs";


    $link = '<html>
    <head>
      <title>CarrerOceans | News Letter</title>
    </head>
    <body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" href="https://www.careeroceans.cf/css/main.css">



<section class="post-area section-gap">
        <div class="container">
            <div class="row justify-content-center d-flex">
                <div class="col-lg-8 post-list">



                    
                    <!-- Job Card goes 1-->



                    <div class="single-post jobcard d-flex flex-row" id="card_1">

                        <div class="details">
                            <div class="title d-flex flex-row justify-content-between">
                                <div class="titles">
                                    <a href="#">
                                        <h4>Sr. PHP Developer</h4>
                                    </a>
                                    <div class="star">
                                                                            </div>
                                    <h6>Growthwell Consulting Pvt Ltd</h6>
                                </div>
                                <ul class="btns">
                                    <li class="save" id="1"><a><span class="lnr lnr-heart danger "></span></a></li>
                                    <li><a href="https://www.indeed.co.in/pagead/clk?mo=r&amp;ad=-6NYlbfkN0ApsOSNOmFuKrTfDHMBfFisNDaTdmZ3_Kk9idP_g_cv6lSlJX5VaOz24LAwO154yPQg0THEGy3eysJObfXPMSsEtyMMvQF-E8cFDQH_qwqPjbNeqBSlAfec2qT2tKincgVwCX2o_M9MxjzC4LZl_k9HD9RzrLGDSfl4UKJIctvf_NwUr7inSdEBJirbxnyqAm2nQqjvCq6wZje9Ct2BaiyhUHO-xjv1zlxEbl2nTMtQ6CgmCjtVii0s1-UGiW3nm0b23xRlWulhTIQh78gpCX1eeaPKjhSU6rN4yI7LFdKAOiSxYOVjiu3npVEvUoqEpPskc6WaqlP5r_wcijXw-aGoeBfaFQhfszEi6Ugv80HfH-eWMClD-P_vQaSPPOCnPrHEyraejO7uAXpZKXlj9PL0z86lkchAyH4=&amp;vjs=3&amp;p=1&amp;sk=&amp;fvj=1" class="generic-btn info">Apply</a></li>
                                </ul>
                            </div>
                            <p>
                                PHP:. Urgently require PHP Programmer. PHP, CODE IGNITER, MYSQL, HTML5, CSS, JQUERY, JAVA SCRIPT, API, WEB SERVICES, WEB APPLICATIONS, BOOTSTRAP, PROTOTYPE,...                            </p>
                            <p class="address"><span class="lnr lnr-map"></span> Mumbai, Maharashtra</p>
                            <p class="address "><span class="lnr lnr-database"></span>₹2,00,000 - ₹4,00,000 a year</p>                        </div>
                    </div>


                    
                    <!-- Job Card goes 1-->



                    <div class="single-post jobcard d-flex flex-row" id="card_2">

                        <div class="details">
                            <div class="title d-flex flex-row justify-content-between">
                                <div class="titles">
                                    <a href="#">
                                        <h4>PHP and Web Application Developer 06</h4>
                                    </a>
                                    <div class="star">
                                                                            </div>
                                    <h6>Paatshala Education</h6>
                                </div>
                                <ul class="btns">
                                    <li class="save" id="2"><a><span class="lnr lnr-heart danger "></span></a></li>
                                    <li><a href="https://www.indeed.co.in/pagead/clk?mo=r&amp;ad=-6NYlbfkN0DF2WBqdRjTXnp2bp7Pd6W7uCazAb-LfbvQarXTEUMmggQO3EO6N0M4SGab2_iowG7svacQTjGpCyMRjvLCzymXMoCHrhxjTfMeTy_ZhJ_Cw1mIBjhqBOiy2jEGqVHnm5axRN7dAniOeeKxvjCIqTfmkz0K3xdfhCrBk8QBbGZ_se97ajFWCrrEIhnUxI5tre0nKoZTnM5HExQuOOJPEEr8eBk0egcrVVNInxAuZGH3xP_QTH-o5JaAhdkqYY3570s3m2CDD5NJcbqX_BD9IUBX0Vi6HW3Djbmx9YZ_bpdtTVI0HuCWiy3aiplAnLQnobroNDqIo7JKElU1suenIvY6mBXRDIOr3MGQBGqb-8VSz05qllhICSJr70RMGNQ9YPwultAMJODTfFCvPYpP0QgpMOnoi4bXLt9fNfAT1Sr9Yq3rGfQlFITchFA9EdH-jTY=&amp;vjs=3&amp;p=2&amp;sk=&amp;fvj=1" class="generic-btn info">Apply</a></li>
                                </ul>
                            </div>
                            <p>
                                PHP:. Core PHP (Required). Should have done course on PHP Development. PHP Coding should be known and candidate should be familiar with latest web technologies....                            </p>
                            <p class="address"><span class="lnr lnr-map"></span> Thane, Maharashtra</p>
                            <p class="address "><span class="lnr lnr-database"></span>₹20,000 - ₹35,000 a month</p>                        </div>
                    </div>


                    
                    <!-- Job Card goes 1-->



                    <div class="single-post jobcard d-flex flex-row" id="card_3">

                        <div class="details">
                            <div class="title d-flex flex-row justify-content-between">
                                <div class="titles">
                                    <a href="#">
                                        <h4>Java, J2EE, Javascript, Mobile Developer (PHP developers can...</h4>
                                    </a>
                                    <div class="star">
                                                                            </div>
                                    <h6>JForce Solutions</h6>
                                </div>
                                <ul class="btns">
                                    <li class="save" id="3"><a><span class="lnr lnr-heart danger "></span></a></li>
                                    <li><a href="https://www.indeed.co.in/pagead/clk?mo=r&amp;ad=-6NYlbfkN0BFBkpdv0tbNNzcqXi9rvTqvybXKhHtMI1wIRkJTA1E0qFM6OZJF4TsynLGN4KDFbDRe7f4D9ybImC5tZC3M1-v2C23z8eEyzcXBNUAq6Oyda4MWpd7aj2rsSslHqsaTOc6_N4Xp-LKJgh_yZEFHleaVT8ilziPknBT03u6Yx8oxwufMvg13E6kD-yjk78syaE4Qt3TCjEV5Ap3XbQtbhyjf3GJ8iAMP4ZhhgzsJOckn-hM5W8tmwr-1FqU5TNKrl2p2McRL1SUdxaQ0GdOJr6J3uhK3RPvpDRuhJsDvZqdhtYxBPHtCbg6rutQ32RUVsIKeQ7CyYewPHWNOKeIXmy-YK5HnANmkEvanYnPj5vqouxs5fZeSMsYm5uAsW7wDKWbvTBiEKTYTw8CRzfbWkrWrSS9FG8L3T2f3CvXJMfVw2F4ulNUxqQNGq68MzVDE3uz9uxjdbjL7k3VXkxJ8AYBMDZf6xNEsuI=&amp;vjs=3&amp;p=3&amp;sk=&amp;fvj=1" class="generic-btn info">Apply</a></li>
                                </ul>
                            </div>
                            <p>
                                PHP. We work on Java, Javascript, Mobile and Salesforce development with ample scope for learning multiple technologies....                            </p>
                            <p class="address"><span class="lnr lnr-map"></span> Mumbai, Maharashtra</p>
                                                    </div>
                    </div>


                    
                    <!-- Job Card goes 1-->



                    <div class="single-post jobcard d-flex flex-row" id="card_4">

                        <div class="details">
                            <div class="title d-flex flex-row justify-content-between">
                                <div class="titles">
                                    <a href="#">
                                        <h4>PHP Full Stack Developer [Male Candidate]</h4>
                                    </a>
                                    <div class="star">
                                                                            </div>
                                    <h6>IIT JEE Edu Institute</h6>
                                </div>
                                <ul class="btns">
                                    <li class="save" id="4"><a><span class="lnr lnr-heart danger "></span></a></li>
                                    <li><a href="https://www.indeed.co.in/pagead/clk?mo=r&amp;ad=-6NYlbfkN0CTL5NikiD3BrJ917AgknKjpsPRP1rgaUvsx_EtrO7iwV8YMv0N9JcVUiPWzemM5iBvnWChf5DhcL6REevNygVqbWdRvk2r5_M0lu0FYp-Z1JqLeGFn7N20Ha42_LSFnOa3WN5fUrLGMNgrWov0GlU2gwk5I3eXZNkOaGxpITNUOIDbD1UEyqaZJIm68qi4PkBYHrIpMowsqQ6NTTh4PfEyxlzczL1C2Ppm-OBV0m455j956rshL5fBgbrgsETI3Ugrrvz5xN__w4po7egcT3rh9Y3CnRm9Y6aHns_BH_BH6XGCf33KrSCR6XBnS4do9SM10zS4OUyE-MdpthufrNxgeHse1jZc91Syql5HliqXFWU0kEqo-dQ4fMblcMSkC3vIR2AuqVTJ1yQ61Pa0X4zdJJE6ZFZF2xva-f7DOexPzFZgOT8jDFKoojWFltLQcFA=&amp;vjs=3&amp;p=4&amp;sk=&amp;fvj=1" class="generic-btn info">Apply</a></li>
                                </ul>
                            </div>
                            <p>
                                Should have done course on PHP Development. PHP Coding should be known and candidate should be familiar with latest web technologies....                            </p>
                            <p class="address"><span class="lnr lnr-map"></span> Thane, Maharashtra</p>
                            <p class="address "><span class="lnr lnr-database"></span>₹20,000 - ₹35,000 a month</p>                        </div>
                    </div>


                    
                    <!-- Job Card goes 1-->



                    <div class="single-post jobcard d-flex flex-row" id="card_5">

                        <div class="details">
                            <div class="title d-flex flex-row justify-content-between">
                                <div class="titles">
                                    <a href="#">
                                        <h4>Tech Lead (LAMP)</h4>
                                    </a>
                                    <div class="star">
                                                                            </div>
                                    <h6>Cleft Solutions</h6>
                                </div>
                                <ul class="btns">
                                    <li class="save" id="5"><a><span class="lnr lnr-heart danger "></span></a></li>
                                    <li><a href="https://www.indeed.co.in/rc/clk?jk=f2e4fdb3372095c5&amp;fccid=640c4a0969da75c9&amp;vjs=3" class="generic-btn info">Apply</a></li>
                                </ul>
                            </div>
                            <p>
                                Hands On knowledge of LAMP, Core PHP, Object oriented PHP, Linux configuration. Working knowledge of any PHP Framework:. More than 4 Years....                            </p>
                            <p class="address"><span class="lnr lnr-map"></span> Mumbai, Maharashtra</p>
                                                    </div>
                    </div>


                    
                    <!-- Job Card goes 1-->



                    <div class="single-post jobcard d-flex flex-row" id="card_6">

                        <div class="details">
                            <div class="title d-flex flex-row justify-content-between">
                                <div class="titles">
                                    <a href="#">
                                        <h4>Tech Lead</h4>
                                    </a>
                                    <div class="star">
                                                                            </div>
                                    <h6>Maharaja Games</h6>
                                </div>
                                <ul class="btns">
                                    <li class="save" id="6"><a><span class="lnr lnr-heart danger "></span></a></li>
                                    <li><a href="https://www.indeed.co.in/rc/clk?jk=435d444382abeb11&amp;fccid=b7eb7dc72a9b3585&amp;vjs=3" class="generic-btn info">Apply</a></li>
                                </ul>
                            </div>
                            <p>
                                Development expertise in Backend /Frontend / Mobile platforms (if backend, experience must include building REST based system using PHP MVC frameworks on Linux...                            </p>
                            <p class="address"><span class="lnr lnr-map"></span> Prabhadevi, Mumbai, Maharashtra</p>
                                                    </div>
                    </div>


                    
                    <!-- Job Card goes 1-->



                    <div class="single-post jobcard d-flex flex-row" id="card_7">

                        <div class="details">
                            <div class="title d-flex flex-row justify-content-between">
                                <div class="titles">
                                    <a href="#">
                                        <h4>Tech lead – Ruby on Rails</h4>
                                    </a>
                                    <div class="star">
                                                                            </div>
                                    <h6>parity cube</h6>
                                </div>
                                <ul class="btns">
                                    <li class="save" id="7"><a><span class="lnr lnr-heart danger "></span></a></li>
                                    <li><a href="https://www.indeed.co.in/rc/clk?jk=3fac9b01b2e3090e&amp;fccid=5631dde78c8df211&amp;vjs=3" class="generic-btn info">Apply</a></li>
                                </ul>
                            </div>
                            <p>
                                Extensive experience developing web applications in Object-Oriented Perl, Phython, PHP or Java can be substituted as long as there is a strong desire to work in...                            </p>
                            <p class="address"><span class="lnr lnr-map"></span> Mumbai, Maharashtra</p>
                                                    </div>
                    </div>


                    
                    <!-- Job Card goes 1-->



                    <div class="single-post jobcard d-flex flex-row" id="card_8">

                        <div class="details">
                            <div class="title d-flex flex-row justify-content-between">
                                <div class="titles">
                                    <a href="#">
                                        <h4>Web Tech Lead</h4>
                                    </a>
                                    <div class="star">
                                                                            </div>
                                    <h6>Maharaja Games</h6>
                                </div>
                                <ul class="btns">
                                    <li class="save" id="8"><a><span class="lnr lnr-heart danger "></span></a></li>
                                    <li><a href="https://www.indeed.co.in/rc/clk?jk=b321e884a01f5075&amp;fccid=b7eb7dc72a9b3585&amp;vjs=3" class="generic-btn info">Apply</a></li>
                                </ul>
                            </div>
                            <p>
                                Strong knowledge of PHP, MySQL, JQuery, AJAX, Memcache/Membased etc. required. To be considered, you must have at least four years experience of PHP, server...                            </p>
                            <p class="address"><span class="lnr lnr-map"></span> Prabhadevi, Mumbai, Maharashtra</p>
                                                    </div>
                    </div>


                    
                    <!-- Job Card goes 1-->



                    <div class="single-post jobcard d-flex flex-row" id="card_9">

                        <div class="details">
                            <div class="title d-flex flex-row justify-content-between">
                                <div class="titles">
                                    <a href="#">
                                        <h4>Team Lead</h4>
                                    </a>
                                    <div class="star">
                                                                            </div>
                                    <h6>big tree</h6>
                                </div>
                                <ul class="btns">
                                    <li class="save" id="9"><a><span class="lnr lnr-heart danger "></span></a></li>
                                    <li><a href="https://www.indeed.co.in/rc/clk?jk=7f87795fcecb1d66&amp;fccid=a30de34d36f4af46&amp;vjs=3" class="generic-btn info">Apply</a></li>
                                </ul>
                            </div>
                            <p>
                                Hands-on experience with PHP and JS frameworks would be an advantage. They should have good hands-on experience in PHP and MySQL as well as jQuery and jQuery-UI...                            </p>
                            <p class="address"><span class="lnr lnr-map"></span> Mumbai, Maharashtra</p>
                                                    </div>
                    </div>


                    
                    <!-- Job Card goes 1-->



                    <div class="single-post jobcard d-flex flex-row" id="card_10">

                        <div class="details">
                            <div class="title d-flex flex-row justify-content-between">
                                <div class="titles">
                                    <a href="#">
                                        <h4>PHP Developer</h4>
                                    </a>
                                    <div class="star">
                                                                            </div>
                                    <h6>Bizipac courier pvt ltd</h6>
                                </div>
                                <ul class="btns">
                                    <li class="save" id="10"><a><span class="lnr lnr-heart danger "></span></a></li>
                                    <li><a href="https://www.indeed.co.in/company/Bizipac-courier-pvt-ltd/jobs/PHP-Developer-9bff5941177bc834?fccid=977658fb17a03e9d&amp;vjs=3" class="generic-btn info">Apply</a></li>
                                </ul>
                            </div>
                            <p>
                                Core PHP (Preferred). We are Urgently Looking for P.H.P Developer (Male Candidate only)....                            </p>
                            <p class="address"><span class="lnr lnr-map"></span> Vile Parle, Mumbai, Maharashtra</p>
                            <p class="address "><span class="lnr lnr-database"></span>₹15,000 - ₹25,000 a month</p>                        </div>
                    </div>


                    
                    <!-- Job Card goes 1-->



                    <div class="single-post jobcard d-flex flex-row" id="card_11">

                        <div class="details">
                            <div class="title d-flex flex-row justify-content-between">
                                <div class="titles">
                                    <a href="#">
                                        <h4>Jr.QA</h4>
                                    </a>
                                    <div class="star">
                                                                            </div>
                                    <h6>LiquiLoans</h6>
                                </div>
                                <ul class="btns">
                                    <li class="save" id="11"><a><span class="lnr lnr-heart danger "></span></a></li>
                                    <li><a href="https://www.indeed.co.in/rc/clk?jk=fe91826675f85083&amp;fccid=f3e1f317fa8978ae&amp;vjs=3" class="generic-btn info">Apply</a></li>
                                </ul>
                            </div>
                            <p>
                                Knowledge of PHP is must and laravel will be plus point. Software Tester duties and responsibilities analyzing users stories....                            </p>
                            <p class="address"><span class="lnr lnr-map"></span> Mumbai, Maharashtra</p>
                                                    </div>
                    </div>


                    
                    <!-- Job Card goes 1-->



                    <div class="single-post jobcard d-flex flex-row" id="card_12">

                        <div class="details">
                            <div class="title d-flex flex-row justify-content-between">
                                <div class="titles">
                                    <a href="#">
                                        <h4>Opening for Junior &amp; Senior PHP Developer</h4>
                                    </a>
                                    <div class="star">
                                                                            </div>
                                    <h6>Ascra Technologies</h6>
                                </div>
                                <ul class="btns">
                                    <li class="save" id="12"><a><span class="lnr lnr-heart danger "></span></a></li>
                                    <li><a href="https://www.indeed.co.in/company/Ascra-Technologies/jobs/Opening-Junior-Senior-PHP-Developer-e4999b363b940319?fccid=a85615645a77410c&amp;vjs=3" class="generic-btn info">Apply</a></li>
                                </ul>
                            </div>
                            <p>
                                *Job Summary  Understand, develop and execute programming and scripting related tasks, and performance. * Implement and support projects using Frameworks...                            </p>
                            <p class="address"><span class="lnr lnr-map"></span> Mumbai, Maharashtra</p>
                            <p class="address "><span class="lnr lnr-database"></span>₹25,000 - ₹60,000 a month</p>                        </div>
                    </div>


                    
                    <!-- Job Card goes 1-->



                    <div class="single-post jobcard d-flex flex-row" id="card_13">

                        <div class="details">
                            <div class="title d-flex flex-row justify-content-between">
                                <div class="titles">
                                    <a href="#">
                                        <h4>Tech Lead</h4>
                                    </a>
                                    <div class="star">
                                                                            </div>
                                    <h6>FreightCrate Technologies</h6>
                                </div>
                                <ul class="btns">
                                    <li class="save" id="13"><a><span class="lnr lnr-heart danger "></span></a></li>
                                    <li><a href="https://www.indeed.co.in/rc/clk?jk=bac98a34c4f8cb20&amp;fccid=2ae7372982524229&amp;vjs=3" class="generic-btn info">Apply</a></li>
                                </ul>
                            </div>
                            <p>
                                PHP &amp; Python. This includes gathering software requirements and taking the lead on operational and technical projects and work with programmers to plan and...                            </p>
                            <p class="address"><span class="lnr lnr-map"></span> Mumbai, Maharashtra</p>
                                                    </div>
                    </div>


                    
                    <!-- Job Card goes 1-->



                    <div class="single-post jobcard d-flex flex-row" id="card_14">

                        <div class="details">
                            <div class="title d-flex flex-row justify-content-between">
                                <div class="titles">
                                    <a href="#">
                                        <h4>Freelance Php Developer</h4>
                                    </a>
                                    <div class="star">
                                                                            </div>
                                    <h6>Mustafa Patel</h6>
                                </div>
                                <ul class="btns">
                                    <li class="save" id="14"><a><span class="lnr lnr-heart danger "></span></a></li>
                                    <li><a href="https://www.indeed.co.in/company/PMS-REALITY/jobs/Freelance-PHP-Developer-d16fa8adf7a16d4f?fccid=28ca682ad2f1e034&amp;vjs=3" class="generic-btn info">Apply</a></li>
                                </ul>
                            </div>
                            <p>
                                Job Summary Working on project basis Responsibilities and Duties Website Development Required Experience, Skills and Qualifications proven...                            </p>
                            <p class="address"><span class="lnr lnr-map"></span> Mumbai, Maharashtra</p>
                                                    </div>
                    </div>


                    
                    <!-- Job Card goes 1-->



                    <div class="single-post jobcard d-flex flex-row" id="card_15">

                        <div class="details">
                            <div class="title d-flex flex-row justify-content-between">
                                <div class="titles">
                                    <a href="#">
                                        <h4>PHP Full Stack Developer [Male Candidates]</h4>
                                    </a>
                                    <div class="star">
                                                                            </div>
                                    <h6>IIT JEE Education</h6>
                                </div>
                                <ul class="btns">
                                    <li class="save" id="15"><a><span class="lnr lnr-heart danger "></span></a></li>
                                    <li><a href="https://www.indeed.co.in/pagead/clk?mo=r&amp;ad=-6NYlbfkN0DF2WBqdRjTXnp2bp7Pd6W7uCazAb-LfbvQarXTEUMmgssLGriCBimLhRAsz36gIz47AKC9AASo85RyqCyCp7oCosJHIsPoRxC2Yh0bLkm_zXy312d7_l8G5xEk1pdRA3vlO79bZ9MWrCs0-r53u0DenGV0jAFRYCBIUf_lFKWOsBtj8759BXT83ybB_P6NSOvcPpK4D1nbIa06JqWMYg3tJ3Q8d3wu662Mpaj111cldBedv9rKZ-QAme1kvFVD9OJ7KYvVUXh9dtsSvzapNljKIMb0WPCZs8n9ZQNQoDDMzPT5YoOcyWdTeZts3Cw7mro73JvLOinngl9maf3YHJYvsSy4GB1bfj0-M8mRBylGkwrTJCrMPQgcLNw41aI1JN4gcTHITUZzkL5u8dTCWNYdxzofruNSRtZDouxvxaSirqyPIWrLQNiqcdj7710rjAE=&amp;vjs=3&amp;p=5&amp;sk=&amp;fvj=1" class="generic-btn info">Apply</a></li>
                                </ul>
                            </div>
                            <p>
                                Should have done course on PHP Development. PHP Coding should be known and candidate should be familiar with latest web technologies....                            </p>
                            <p class="address"><span class="lnr lnr-map"></span> Thane, Maharashtra</p>
                            <p class="address "><span class="lnr lnr-database"></span>₹20,000 - ₹35,000 a month</p>                        </div>
                    </div>


                    
                    <!-- Job Card goes 1-->



                    <div class="single-post jobcard d-flex flex-row" id="card_16">

                        <div class="details">
                            <div class="title d-flex flex-row justify-content-between">
                                <div class="titles">
                                    <a href="#">
                                        <h4>PHP Developer</h4>
                                    </a>
                                    <div class="star">
                                                                            </div>
                                    <h6>Adevole</h6>
                                </div>
                                <ul class="btns">
                                    <li class="save" id="16"><a><span class="lnr lnr-heart danger "></span></a></li>
                                    <li><a href="https://www.freshersworld.com/jobs/php-developer-jobs-in-mumbai-navi-mumbai-adevole-549363" class="generic-btn info">Apply</a></li>
                                </ul>
                            </div>
                            <p>
                                Looking for PHP Developer with knowledge of Laravel Framework would be working on different set of projects and products.&nbsp;Should be go...                            </p>
                            <p class="address"><span class="lnr lnr-map"></span> Mumbai, Navi Mumbai</p>
                                                    </div>
                    </div>


                    
                    <!-- Job Card goes 1-->



                    <div class="single-post jobcard d-flex flex-row" id="card_17">

                        <div class="details">
                            <div class="title d-flex flex-row justify-content-between">
                                <div class="titles">
                                    <a href="#">
                                        <h4>Senior PHP developer</h4>
                                    </a>
                                    <div class="star">
                                                                            </div>
                                    <h6>Transpacific Software pvt ltd</h6>
                                </div>
                                <ul class="btns">
                                    <li class="save" id="17"><a><span class="lnr lnr-heart danger "></span></a></li>
                                    <li><a href="https://www.freshersworld.com/jobs/senior-php-developer-jobs-in-mumbai-navi-mumbai-transpacific-software-pvt-ltd-574117" class="generic-btn info">Apply</a></li>
                                </ul>
                            </div>
                            <p>
                                Job Description:&nbsp;TransPacific Software is In search of PHP open source developer with a lot of passion for coding.&nbsp;The most impor...                            </p>
                            <p class="address"><span class="lnr lnr-map"></span> Mumbai, Navi Mumbai</p>
                                                    </div>
                    </div>


                    
                    <!-- Job Card goes 1-->



                    <div class="single-post jobcard d-flex flex-row" id="card_18">

                        <div class="details">
                            <div class="title d-flex flex-row justify-content-between">
                                <div class="titles">
                                    <a href="#">
                                        <h4>Frontend Web Designer</h4>
                                    </a>
                                    <div class="star">
                                                                            </div>
                                    <h6>Intelligible Solutions</h6>
                                </div>
                                <ul class="btns">
                                    <li class="save" id="18"><a><span class="lnr lnr-heart danger "></span></a></li>
                                    <li><a href="https://www.freshersworld.com/jobs/frontend-web-designer-jobs-in-mumbai-intelligible-solutions-552572" class="generic-btn info">Apply</a></li>
                                </ul>
                            </div>
                            <p>
                                One should be able to design UI/ UX&nbsp; as per the graphical hi/ux and must know php.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &amp;...                            </p>
                            <p class="address"><span class="lnr lnr-map"></span> Mumbai</p>
                                                    </div>
                    </div>


                    
                    <!-- Job Card goes 1-->



                    <div class="single-post jobcard d-flex flex-row" id="card_19">

                        <div class="details">
                            <div class="title d-flex flex-row justify-content-between">
                                <div class="titles">
                                    <a href="#">
                                        <h4>Web Developer</h4>
                                    </a>
                                    <div class="star">
                                                                            </div>
                                    <h6>TRC48</h6>
                                </div>
                                <ul class="btns">
                                    <li class="save" id="19"><a><span class="lnr lnr-heart danger "></span></a></li>
                                    <li><a href="https://www.freshersworld.com/jobs/web-developer-jobs-in-mumbai-navi-mumbai-trc48-553065" class="generic-btn info">Apply</a></li>
                                </ul>
                            </div>
                            <p>
                                We are looking for a PHP Developer(2 nos.) responsible for managing back-end services and the interchange of data between the server and th...                            </p>
                            <p class="address"><span class="lnr lnr-map"></span> Mumbai, Navi Mumbai</p>
                                                    </div>
                    </div>


                    
                    <!-- Job Card goes 1-->



                    <div class="single-post jobcard d-flex flex-row" id="card_20">

                        <div class="details">
                            <div class="title d-flex flex-row justify-content-between">
                                <div class="titles">
                                    <a href="#">
                                        <h4>PHP Developer</h4>
                                    </a>
                                    <div class="star">
                                                                            </div>
                                    <h6>Conexus Netcom Solutions Pvt Ltd</h6>
                                </div>
                                <ul class="btns">
                                    <li class="save" id="20"><a><span class="lnr lnr-heart danger "></span></a></li>
                                    <li><a href="https://www.freshersworld.com/jobs/php-developer-jobs-in-navi-mumbai-conexus-netcom-solutions-pvt-ltd-565375" class="generic-btn info">Apply</a></li>
                                </ul>
                            </div>
                            <p>
                                We require a Web developer who will perform the core operations of our In-Action project.The applicant should be a self starter interested ...                            </p>
                            <p class="address"><span class="lnr lnr-map"></span> Navi Mumbai</p>
                                                    </div>
                    </div>


                    
                    <!-- Job Card goes 1-->



                    <div class="single-post jobcard d-flex flex-row" id="card_21">

                        <div class="details">
                            <div class="title d-flex flex-row justify-content-between">
                                <div class="titles">
                                    <a href="#">
                                        <h4>Front End Developer</h4>
                                    </a>
                                    <div class="star">
                                                                            </div>
                                    <h6>Freelancer</h6>
                                </div>
                                <ul class="btns">
                                    <li class="save" id="21"><a><span class="lnr lnr-heart danger "></span></a></li>
                                    <li><a href="https://www.freshersworld.com/jobs/front-end-developer-jobs-in-navi-mumbai-freelancer-572759" class="generic-btn info">Apply</a></li>
                                </ul>
                            </div>
                            <p>
                                Front End Programmer with knowledge in Java and PHP.&nbsp;Strong in coding and web page development skills.&nbsp;Good in Communication skil...                            </p>
                            <p class="address"><span class="lnr lnr-map"></span> Navi Mumbai</p>
                                                    </div>
                    </div>


                    
                    <!-- Job Card goes 1-->



                    <div class="single-post jobcard d-flex flex-row" id="card_22">

                        <div class="details">
                            <div class="title d-flex flex-row justify-content-between">
                                <div class="titles">
                                    <a href="#">
                                        <h4>PHP Developer</h4>
                                    </a>
                                    <div class="star">
                                                                            </div>
                                    <h6>Aniruddha Telemetry Systems</h6>
                                </div>
                                <ul class="btns">
                                    <li class="save" id="22"><a><span class="lnr lnr-heart danger "></span></a></li>
                                    <li><a href="https://www.freshersworld.com/jobs/php-developer-jobs-in-mumbai-aniruddha-telemetry-systems-575873" class="generic-btn info">Apply</a></li>
                                </ul>
                            </div>
                            <p>
                                JOB DESCRIPTION:Write “clean”, well-designed codeProduce detailed specificationsTroubleshoot, test and maintain the core product softwa...                            </p>
                            <p class="address"><span class="lnr lnr-map"></span> Mumbai</p>
                                                    </div>
                    </div>


                    
                    <!-- Job Card goes 1-->



                    <div class="single-post jobcard d-flex flex-row" id="card_23">

                        <div class="details">
                            <div class="title d-flex flex-row justify-content-between">
                                <div class="titles">
                                    <a href="#">
                                        <h4>PHP Developer</h4>
                                    </a>
                                    <div class="star">
                                                                            </div>
                                    <h6>TalentCode</h6>
                                </div>
                                <ul class="btns">
                                    <li class="save" id="23"><a><span class="lnr lnr-heart danger "></span></a></li>
                                    <li><a href="https://www.freshersworld.com/jobs/php-developer-jobs-in-mumbai-talentcode-558485" class="generic-btn info">Apply</a></li>
                                </ul>
                            </div>
                            <p>
                                Understand, develop and execute programming and scripting related tasks, and performance.Implement and support projects using Frameworks li...                            </p>
                            <p class="address"><span class="lnr lnr-map"></span> Mumbai</p>
                                                    </div>
                    </div>


                    
                    <!-- Job Card goes 1-->



                    <div class="single-post jobcard d-flex flex-row" id="card_24">

                        <div class="details">
                            <div class="title d-flex flex-row justify-content-between">
                                <div class="titles">
                                    <a href="#">
                                        <h4>PHP Developer</h4>
                                    </a>
                                    <div class="star">
                                                                            </div>
                                    <h6>Captainweb LLP</h6>
                                </div>
                                <ul class="btns">
                                    <li class="save" id="24"><a><span class="lnr lnr-heart danger "></span></a></li>
                                    <li><a href="https://www.freshersworld.com/jobs/php-developer-jobs-in-mumbai-captainweb-llp-552554" class="generic-btn info">Apply</a></li>
                                </ul>
                            </div>
                            <p>
                                PHP Web Developer should be presentable and must have good communication skills.Troubleshoot, test and maintain the core product software a...                            </p>
                            <p class="address"><span class="lnr lnr-map"></span> Mumbai</p>
                                                    </div>
                    </div>


                    
                    <!-- Job Card goes 1-->



                    <div class="single-post jobcard d-flex flex-row" id="card_25">

                        <div class="details">
                            <div class="title d-flex flex-row justify-content-between">
                                <div class="titles">
                                    <a href="#">
                                        <h4>PHP Developer</h4>
                                    </a>
                                    <div class="star">
                                                                            </div>
                                    <h6>IResolve services</h6>
                                </div>
                                <ul class="btns">
                                    <li class="save" id="25"><a><span class="lnr lnr-heart danger "></span></a></li>
                                    <li><a href="https://www.freshersworld.com/jobs/php-developer-jobs-in-mumbai-iresolve-services-577865" class="generic-btn info">Apply</a></li>
                                </ul>
                            </div>
                            <p>
                                We are looking for a PHP Developer responsible for managing back-end services and the interchange of data between the server and the users....                            </p>
                            <p class="address"><span class="lnr lnr-map"></span> Mumbai</p>
                                                    </div>
                    </div>


                    
                    <!-- Job Card goes 1-->



                    <div class="single-post jobcard d-flex flex-row" id="card_26">

                        <div class="details">
                            <div class="title d-flex flex-row justify-content-between">
                                <div class="titles">
                                    <a href="#">
                                        <h4>PHP Developer</h4>
                                    </a>
                                    <div class="star">
                                                                            </div>
                                    <h6>Bonvive India Limited</h6>
                                </div>
                                <ul class="btns">
                                    <li class="save" id="26"><a><span class="lnr lnr-heart danger "></span></a></li>
                                    <li><a href="https://www.freshersworld.com/jobs/php-developer-jobs-in-mumbai-bonvive-india-limited-549769" class="generic-btn info">Apply</a></li>
                                </ul>
                            </div>
                            <p>
                                Experience in handling e-commerce projectIntegrating software components into a fully functional software system.&nbsp;Modifying existing W...                            </p>
                            <p class="address"><span class="lnr lnr-map"></span> Mumbai</p>
                                                    </div>
                    </div>


                    

                    <center>
                        <a href="" class="genric-btn info circle arrow">More<span class="lnr lnr-arrow-right"></span></a>
                    </center>

                    <!-- Fob Card Ends 1-->

                    <!-- #job card 2 -->
                </div>
                <!--Top Rated Jobs -->


                              <div class="col-lg-4 sidebar" id="top-rate">

	                    <div class="single-slidebar">
	                        <h4>Top rated job posts</h4>
	                        <div class="active-relatedjob-carusel owl-carousel owl-theme owl-loaded">
								<!-- top jobs placeholder -->
	                            		
			<!-- #end top jobs -->

	                        <div class="owl-stage-outer"><div class="owl-stage"></div></div></div>
	                    </div>




                <!--  Top Rated Job end-->


                <div class="">

                    <style>
div#box-alert-bottom-new {
    background-color: #F9F9F9;
    box-shadow: 0px 0px 5px #ccc;
    padding: 20px;
    position: sticky;
    top: 0px;
    margin-top: 20px;
    width: 310px;
}

.bottom-alert-img-holder img {
    height: 52px;
    float: left;
    position: relative;
    top: 4px;
    margin-top: -8px;
    left: 0px;
}

.bottom-alert-button {
    padding: 9px 30px 9px 30px;
    font-size: 14px;
    border: none;
    background-color: #29ADE4;
    color: white;
    cursor: pointer;
    box-shadow: 0 3px 1px -2px #ccc;
    outline: none;
    width: 100%;
    text-align: center;
    margin-left: 0px;
    margin-top: 20px;
    height: auto;
    box-sizing: border-box;
}

input.bottom-input {
    font-weight: 400;
    width: 100%;
    padding: 8px 10px 8px 10px;
    font-size: 13px;
    border-radius: 2px;
    box-shadow: 0 3px 1px -2px #ccc;
    border: 1px solid #DADADA;
    margin: 0px 5px 0px 0px;
    box-sizing: border-box;
}

.bottom-alert-input-holder {
    display: block;
    margin-top: 11px;
}

.bottom-alert-txt2 {
    font-size: 16px;
    margin-top: 2px;
}
#nv-jobs{
    float:left;
}
.bottom-alert-txt1 {
    font-size: 16px;
}

.bottom-alert-img-holder {
    margin-right: 10px;
}


.bottom-error-text {color: red;font-size: 13px;margin-top: 11px;margin-bottom: -10px;}
.bottom-alert-txt1 b {
    font-size: 16px;
}
.bottom-alert-mobile-txt {
    display:none;
}

.bottom-alert-txt-holder {
    padding-left: 70px;
    padding-bottom: 8px;
}

.bottom-alert-done {
}
.bottom-alert-button a {
    font-size: 14px;
    color: white;
    text-decoration: none;
}
span.bottom-cancel-txt {
    font-size: 13px;
    color: #545454;
}
.bottom-alert-done {
    font-size: 13px;
    margin-top: 11px;
    margin-bottom: -10px;
}
.bottom-alert-txt2 b {
    font-size: 16px;
}
.bottom-alert-txt3 {
    display: none;
}
</style>

    
</div>



</div>
                </div>

            </div>
        </div>
        </div>


    </section>
    </body>
    </html>';

 
$headers .= "Organization: CareerOceans\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "X-Priority: 1\r\n";
$headers .= "X-Mailer: PHP". phpversion() ."\r\n";
$headers .= "From: newsletter@careeroceans.cf";
    
    
        if (mail($to,$subject,$link,$headers))
        {

            echo $to.'Sent check Mail Box. '.$link;
        }else{

    echo "fail".mysqli_error($connect);
  
      }
    




 }
 
?>
