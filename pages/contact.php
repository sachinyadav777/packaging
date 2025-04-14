<?php

include_once('../init.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>

    <?php include_once('../includes/view/head.php') ?>

    <link rel="stylesheet" href="<?= get_css() ?>pageContact.css">
    <link rel="stylesheet" href="<?= get_css() ?>pageAbout.css">
    <link rel="stylesheet" href="<?= get_css() ?>home.css">
</head>
<body>
    <!-- header here -->
    <?php include_once('../includes/view/header.php') ?>

    <!-- Landing Page -->
    <div class="about-landing">
        <div class="about-img relative">
            <img class="absolute about-img-in" src="<?= get_img() ?>contact-us.jpg" alt="about">
        </div>
        <div class="shadow absolute"></div>

        <div class="about-landing-details z-10 relative">
            <h1>You need a partner. <span class="color-green">digital <br> We're here to help.</span></h1>
            
            <p class="text-center">Before we start, we would like to better understand your needs. We'll review <br> your application and schedule a free estimation call.</p>
            <button class="basic-button">Let's work togather</button>
        </div>
        <div class="absolute half-circle">
            <div class="one-half-circle"></div>
            <div class="two-half-circle"></div>
            <div class="three-half-circle"></div>
        </div>
    </div>

    <!-- contact-form -->

    <div class="contact-details-box section-padding grid grid-3">
        <div class="box p-3 mb-3 text-center">
            <div class="icon p-1 coorporation-img"><img class="" src="<?= get_img() ?>Users.svg" alt=""srcset=""></div>
            <h3 class="margin-2 p-1 sub-heading">Mail Here</h3>
            <p class="text-sm margin-2 p-1 overflow-text">
                Example@mail.com <br>
                Example@mail.com
            </p>
        </div>
        <div class="box p-3 mb-3 text-center">
            <div class="icon p-1 coorporation-img"><img class="" src="<?= get_img() ?>Users.svg" alt=""srcset=""></div>
            <h3 class="margin-2 p-1 sub-heading">Location Here</h3>
            <p class="text-sm margin-2 p-1 overflow-text"><b>India:</b> 95, Y Block, Kidwai Nagar, Kanpur, Uttar Pradesh 208021, India <br>
            </p>
        </div>
        <div class="box p-3 mb-3 text-center">
            <div class="icon p-1 coorporation-img"><img class="" src="<?= get_img() ?>Users.svg" alt=""srcset=""></div>
            <h3 class="margin-2 p-1 sub-heading">Call Here</h3>
            <p class="text-sm margin-2 p-1 overflow-text">India: +91-8318763120 <br>
            USA: +1 (954) 667 - 8581
            </p>
        </div>
    </div>


    <!-- Need a Consult Section -->
    <div class="section-9 section-padding Contact-ka-form  w-100 relative flex">
    <div class="bgimg absolute">
                <img class="wh-100" src="<?= get_img() ?>cuf.svg" alt="bg">
                <!-- <img class="" id="conactgirl" src="<?= get_img() ?>contect2nd-img.svg" alt="bg"> -->
            </div>
        <div class="max-width Contact-ka-form  w-100 relative flex section-9">
            <!-- <div class="bgimg absolute">
                
                <img class="" id="conactgirl" src="<?= get_img() ?>contect2nd-img.svg" alt="bg">
            </div> -->
            
            
            <div class="max-width relative z-10 flex">

            <div class="form-left-details z-10 relative">
                <div class="form-left-details-year flex-center">
                    <!-- <img class="mr-2" src="<?= get_img() ?>Users.svg" alt=""srcset=""> -->
                    <i class="fa-solid fa-briefcase icoon mr-2 color-heading"></i>
                    <div class="form-left-details-year-text">
                        <h2 class="color-heading">34 year in IT</h2>
                        <p class="text-sm">to deliver value that lasts</p>
                    </div>
                </div>
                <div class="form-left-details-year flex-center">
                    <!-- <img class="mr-2" src="<?= get_img() ?>Users.svg" alt=""srcset=""> -->
                    <i class="fa-solid fa-medal icoon mr-2 color-heading"></i>
                    <div class="form-left-details-year-text">
                        <h2 class="color-heading">Over 3,600 success</h2>
                        <p class="text-sm">including projects for Walmart</p>
                    </div>
                </div>
                <div class="form-left-details-year flex-center">
                    <!-- <img class="mr-2" src="<?= get_img() ?>Users.svg" alt=""srcset=""> -->
                    <i class="fa-solid fa-user-group icoon color-heading mr-2"></i>
                    <!-- <i class="fa-regular fa-user-group icoon color-heading mr-2"></i> -->
                    <div class="form-left-details-year-text">
                        <h2 class="color-heading">Over 750 specialists</h2>
                        <p class="text-sm">to deliver value that lasts</p>
                    </div>
                </div>
                <div class="form-left-details-year flex-center">
                    <!-- <img class="mr-2" src="<?= get_img() ?>Users.svg" alt=""srcset=""> -->
                    <i class="fa-regular fa-file icoon color-heading mr-2"></i>
                    <div class="form-left-details-year-text">
                        <h2 class="color-heading">ISO 9001 and ISO certified</h2>
                        <p class="text-sm">to guarantee service quality </p>
                    </div>
                </div>

                
                <!-- auto play  -->

                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="<?= get_img() ?>company-5.png" alt="down">
                            
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?= get_img() ?>company-4.png" alt="down">
                            
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?= get_img() ?>company-3.png" alt="down">
                            
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <!-- <i class="fa-solid fa-arrow-left " aria-hidden="true"></i> -->
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <!-- <i class="fa-solid fa-arrow-right" aria-hidden="true"></i> -->
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <!-- auto play  -->

            </div>


                <div class="getTouch">
                    <h1 class="section-heading">Let's talk</h1>
                    <form class="form mt-2">
                        <textarea class="w-100" id="textarea" cols="30" rows="4" placeholder="Text here"></textarea>
                        <p class="mb-3"><i class="fa-solid fa-cloud-arrow-up"></i> Drag and drop or <label for="upload_input_files">browse</label>
                            to
                            upload your file(s)</p>
                        <input type="file" name="me" id="upload_input_files" data-max-size-mb="20mb" data-valid-extensions="['jpg','png','webp','jpeg','doc','ppt']" >
                        <div class="form-input flex w-100">
                            <input class="w-100" type="text" placeholder="Enter Your Name">
                            <input class="w-100" type="email" placeholder="Enter Your Email">
                        </div>
                        <div class="form-input flex w-100 my-3">
                            <input class="w-100" type="text" placeholder="Enter Your Name">
                            <input class="w-100" type="email" placeholder="Enter Your Email">
                        </div>
                        <div class="form-checkbox">
                            <div class="checkbox flex">
                                <input type="checkbox" class="mr-1" id="checkbox">
                                <p> I agree to have growUpNext contact me via
                                    email,
                                    phone, messengers.</p>
                            </div>
                            <div class="checkbox flex">
                                <input type="checkbox" class="mr-1" id="checkbox">
                                <p>I agree to have growUpNext provide my
                                    request information to growUpNext affiliated development center.</p>
                            </div>
                        </div>
                        <div class="form-privacy mt-1">
                            <p>In compliance with GDPR, your personal information will be collected and stored for ten
                                years on
                                servers located in the United States. After this term is expired, your information will
                                be
                                erased. We will share your information with our development center, which will handle
                                your
                                request. At our headquarters and our development center we apply the same level of care
                                in
                                respect of your information as prescribed with GDPR rules. For more information, please
                                refer to
                                our Privacy Policy.</p>
                        </div>
                        <div class="form-button text-center">
                            <button class="basic-button text-center">Send me</button>
                        </div>
                    </form>
                </div>
                <div class="getTouch-links contact-getTouch relative">
                    <h3 class="mb-2">Get in touch instantly</h3>
                    <div class="getTouch-links-img">
                        <ul>
                            <li class="mb-2 flex-center"><img class="font-img" src="<?= get_img() ?>call-us.svg"><a href="#">call us</a></li>
                            <li class="mb-2 flex-center"><img class="font-img" src="<?= get_img() ?>email-us.svg"><a href="#">Live chat</a></li>
                            <li class="mb-2 flex-center"><img class="font-img" src="<?= get_img() ?>whats-app.svg"><a href="#">whatsapp</a></li>
                            <li class="mb-2 flex-center"><img class="font-img" src="<?= get_img() ?>live-chat.svg"><a href="#">Email us</a></li>
                        </ul>
                    </div>
                    <img class="contect-img absolute" id="girlcont" src="<?= get_img() ?>contect-img.svg" alt="" srcset="">
                </div>
            </div>
        </div>
    </div>

    <!-- maps -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3573.0405266644557!2d80.31486647297137!3d26.422168730062467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c47aac2697495%3A0xdcb335186f93b1d4!2s128%2F95%2C%20Y%20Block%2C%20Kidwai%20Nagar%2C%20Kanpur%2C%20Uttar%20Pradesh%20208011!5e0!3m2!1sen!2sin!4v1707136154410!5m2!1sen!2sin" width="100%" height="450" style="border:2px solid #1c74bb;  margin-bottom: -6px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <!-- footer ke uper -->
    <div class="project-discuss-section section-padding flex-center-center">
        <h3>Have a Porject To Discuss</h3>
        <h1>We Are Ready</h1>
        <div><a class="project-discuss-btn basic-button mt-3 cursor-event">LET'S CONNECT!</a></div>
    </div>
    
    <!-- Footer Section -->
    <?php include_once('../includes/view/footer.php') ?> 
</body>
</html>