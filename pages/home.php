<?php

include_once('../init.php');
// include_once('../includes/view/header.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="robots" content="noindex, nofollow">
    <link rel="icon" href="<?= get_img() ?>favicon.webp">
    <title>Home</title>

    <?php include_once('../includes/view/head.php') ?>
    <!-- AOS animation css -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= get_css() ?>home.css">
    <link rel="stylesheet" href="<?= get_css() ?>viewFooter.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap');

        .news-content {
            display: flex;
        }

        .news-content>img {
            width: 150px;
            height: auto;
        }

        .box .icon>img {
            width: 45px;
        }
    </style>

</head>

<style>


</style>

<body>

    <?php include_once('../includes/view/header.php') ?>

    <!-- Landing Section -->
    <div class="section-1">
        <div class="video">
            <video id="bg_video" autoplay loop muted plays-inline class="back-video">
                <source src="<?= get_video() ?>4477603-hd_1920_1080_30fps.mp4">
            </video>
            <div class="div-kla">

            </div>
        </div>
        <div class="section-text section-padding z-10 ">
            <div class="main-text">
                <div class="color-green">Get Instant</div>
                E-Commerce Packaging & Cosmetics Packaging
            </div>
            <div class="sub-text">
                With E-Commerce Packaging and Cosmetics Packaging, you can create the perfect brand experience. You can
                expect
                complete
                customization, immediate quotes, and a quick turnaround from us!
            </div>
            <div class="powerdBy flex-center pt-3 cursor-event">
                <p class="mr-2">Trusted By:</p>
                <div class=" powerdTop">
                    <div class="powerdImg">
                        <img class="wh-100" src="<?= get_img() ?>ikea.svg" alt="trust">
                        <img class="wh-100" src="<?= get_img() ?>olx.svg" alt="trust">
                        <img class="wh-100" src="<?= get_img() ?>ubs.svg" alt="trust">
                        <img class="wh-100" src="<?= get_img() ?>volkswagen.svg" alt="trust">
                        <img class="wh-100" src="<?= get_img() ?>ikea.svg" alt="trust">
                        <img class="wh-100" src="<?= get_img() ?>olx.svg" alt="trust">
                        <img class="wh-100" src="<?= get_img() ?>ubs.svg" alt="trust">
                        <img class="wh-100" src="<?= get_img() ?>volkswagen.svg" alt="trust">
                    </div>
                </div>
            </div>
        </div>
        <a href="#second" class="second absolute z-10 cursor-event" data-aos="fade-left">
            <div class="me">
                <img src="<?= get_img() ?>UBS.jpg" alt="down">
            </div>
            <div class="down-b">
                <img src="<?= get_img() ?>ubs.svg" class="mb-3" alt="logo">
                <h4 class="mb-3">Mobile-first banking app</h4>
                <div class="button-down flex-center">
                    <i class="fa-solid fa-arrow-down mr-1"></i>SEE ALL
                </div>
            </div>
        </a>
    </div>

    <!-- <div class="logos-parent section-padding" data-aos="fade-up">
        <div class="logos">
            <div class="logos-slide">
                <div class="first-slide">
                    <div class="company-img margin-b-2">
                        <img class="wh-100" src="<?= get_img() ?>company-1.png" alt="company">
                    </div>
                    <h3 class="mb-2">Top Rated</h3>
                    <p>Top App Development <br> Companies</p>
                </div>
                <div class="first-slide">
                    <div class="company-img margin-b-2">
                        <img class="wh-100" src="<?= get_img() ?>company-3.png" alt="company">
                    </div>
                    <h3 class="mb-2">Top Rated</h3>
                    <p>Top App Development <br> Companies</p>
                </div>
                <div class="first-slide">
                    <div class="company-img margin-b-2">
                        <img class="wh-100" src="<?= get_img() ?>company-4.png" alt="company">
                    </div>
                    <h3 class="mb-2">Top Rated</h3>
                    <p>Top App Development <br> Companies</p>
                </div>
                <div class="first-slide">
                    <div class="company-img margin-b-2">
                        <img class="wh-100" src="<?= get_img() ?>company-5.png" alt="company">
                    </div>
                    <h3 class="mb-2">Top Rated</h3>
                    <p>Top App Development <br> Companies</p>
                </div>
                <div class="first-slide">
                    <div class="company-img margin-b-2">
                        <img class="wh-100" src="<?= get_img() ?>company-6.png" alt="company">
                    </div>
                    <h3 class="mb-2">Top Rated</h3>
                    <p>Top App Development <br> Companies</p>
                </div>
                <div class="first-slide">
                    <div class="company-img margin-b-2">
                        <img class="wh-100" src="<?= get_img() ?>company-3.png" alt="company">
                    </div>
                    <h3 class="mb-2">Top Rated</h3>
                    <p id="second">Top App Development <br> Companies</p>
                </div>
            </div>
        </div>
    </div> -->

    <!-- service-section -->
    <div class="section-service section-padding text-center" data-aos="fade-up">
        <div class="service-about">
            <!-- <div class="insights-heading">
                <h3 class="section-heading">Ideation and evaluation services</h3>
                <h1 class="bg-insight-heading">Publications</h1>
            </div> -->
            <h2 class="section-heading background-content relative z-10 ">Explore Our E-Commerce Packaging<span
                    class="color-green"> services</span></h2>
            <p class="text p-2 margin-2 overflow-text">Start designing unique boxes with different styles, sizes, and
                choices. Custom rigid boxes or Kraft boxes for retail
                products and many more? We can help, Custom printing and packaging services ideas abound.</p>
        </div>
        <div class="row max-width">
            <div class="box col-lg-3 p-3 mb-3">
                <div class="service_image p-1 cursor-event"><img src="<?= get_img() ?>service_image.webp" alt=""
                        srcset="">
                </div>
                <h3 class="margin-2 p-1 sub-heading ">Product validation sprint</h3>
            </div>
            <div class="box col-lg-3 p-3 mb-3">
                <div class="service_image p-1 cursor-event"><img src="<?= get_img() ?>service_image.webp" alt=""
                        srcset="">
                </div>
                <h3 class="margin-2 p-1 sub-heading ">Product validation sprint</h3>
            </div>
            <div class="box col-lg-3 p-3 mb-3">
                <div class="service_image p-1 cursor-event"><img src="<?= get_img() ?>service_image.webp" alt=""
                        srcset="">
                </div>
                <h3 class="margin-2 p-1 sub-heading ">Product validation sprint</h3>
            </div>
            <div class="box col-lg-3 p-3 mb-3">
                <div class="service_image p-1 cursor-event"><img src="<?= get_img() ?>service_image.webp" alt=""
                        srcset="">
                </div>
                <h3 class="margin-2 p-1 sub-heading ">Product validation sprint</h3>
            </div>
        </div>
        <a class="basic-button margin-t-2 cursor-event">View More PRODUCTS</a>
    </div>

    <!-- contact div -->
    <div class="goToContact short-section">
        <div class="max-width flex-center-between goToContact">
            <div class="goToContact-text">
                <h2 class="text-start section-heading">Embark on a packaging journey with us.</h2>
                <p class="text-sm">And bring your packaging ideas to life with our expert solutions.</p>
            </div>
            <div class="goToContact-button">
                <button class="basic-button">Contact us</button>
            </div>
        </div>
    </div>

    <!-- service-section -->
    <div class="section-service section-padding text-center" data-aos="fade-up">
        <div class="service-about">
            <!-- <div class="insights-heading">
                    <h3 class="section-heading">Ideation and evaluation services</h3>
                    <h1 class="bg-insight-heading">Publications</h1>
                </div> -->
            <h2 class="section-heading background-content relative z-10 ">Explore Our Cosmetics
                Packaging<span class="color-green"> services</span></h2>
            <p class="text p-2 margin-2 overflow-text">Start designing unique boxes with different styles, sizes, and
                choices. Custom rigid boxes or Kraft boxes for retailRODUCTs and many more? We can help, Custom printing
                and packaging services ideas abound.</p>
        </div>
        <div class="row max-width">
            <div class="box col-lg-3 p-3 mb-3">
                <div class="service_image p-1 cursor-event"><img src="<?= get_img() ?>service_image.webp" alt=""
                        srcset="">
                </div>
                <h3 class="margin-2 p-1 sub-heading ">Product validation sprint</h3>
            </div>
            <div class="box col-lg-3 p-3 mb-3">
                <div class="service_image p-1 cursor-event"><img src="<?= get_img() ?>service_image.webp" alt=""
                        srcset="">
                </div>
                <h3 class="margin-2 p-1 sub-heading ">Product validation sprint</h3>
            </div>
            <div class="box col-lg-3 p-3 mb-3">
                <div class="service_image p-1 cursor-event"><img src="<?= get_img() ?>service_image.webp" alt=""
                        srcset="">
                </div>
                <h3 class="margin-2 p-1 sub-heading ">Product validation sprint</h3>
            </div>
            <div class="box col-lg-3 p-3 mb-3">
                <div class="service_image p-1 cursor-event"><img src="<?= get_img() ?>service_image.webp" alt=""
                        srcset="">
                </div>
                <h3 class="margin-2 p-1 sub-heading ">Product validation sprint</h3>
            </div>
        </div>
        <a class="basic-button margin-t-2 cursor-event">View More PRODUCTS</a>
    </div>

    <!-- portfolio-section -->
    <!-- <div class="section-portfolio" data-aos="fade-up">
        <div id="carouselExampleRide" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item carousel-box-1  active w-100 section-padding">
                    <div class="grid grid-2 max-width">
                        <div class="porfolio-img flex-center-center">
                            <img class="cursor-event" src="<?= get_img() ?>porfolio-1.webp" alt="" srcset="">
                        </div>
                        <div class="portfolio-content">
                            <div class="portfolio-logo margin-b-2 cursor-event"><img
                                    src="<?= get_img() ?>portfolio-logo-1.webp" alt="" srcset="">
                            </div>
                            <h3 class="p-c-heading margin-b-2 section-heading ">OZ Leasing</h3>
                            <p class="text-sm margin-b-2 ">OZ Leasing, a disruptive tech start-up, aims to
                                simplify car
                                leasing in the automotive
                                industry. Our team developed a comprehensive web and mobile app solution,
                                streamlining
                                the leasing process for users.</p>
                            <h4 class="margin-b-2 ">Challenges Faced</h4>
                            <ul>
                                <li class="text-sm ">Limited online presence impacting sales</li>
                                <li class="text-sm ">Inefficient and outdated e-commerce platform</li>
                            </ul>
                            <h4 class="">Challenges Faced</h4>
                            <ul class="">
                                <li class="text-sm ">Limited online presence impacting sales</li>
                                <li class="text-sm ">Inefficient and outdated e-commerce platform</li>
                            </ul>
                            <div class="p-c-a"><a class="basic-button margin-t-2 cursor-event">View More Project</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carousel-box-2 w-100 section-padding">
                    <div class="grid grid-2 max-width">
                        <div class="porfolio-img flex-center-center">
                            <img class="cursor-event" src="<?= get_img() ?>porfolio-1.webp" alt="" srcset="">
                        </div>
                        <div class="portfolio-content">
                            <div class="portfolio-logo margin-b-2 cursor-event"><img
                                    src="<?= get_img() ?>portfolio-logo-1.webp" alt="" srcset="">
                            </div>
                            <h3 class="p-c-heading margin-b-2 section-heading ">OZ Leasing</h3>
                            <p class="text-sm margin-b-2 ">OZ Leasing, a disruptive tech start-up, aims to
                                simplify car
                                leasing in the automotive
                                industry. Our team developed a comprehensive web and mobile app solution,
                                streamlining
                                the leasing process for users.</p>
                            <h4 class="margin-b-2 ">Challenges Faced</h4>
                            <ul>
                                <li class="text-sm ">Limited online presence impacting sales</li>
                                <li class="text-sm ">Inefficient and outdated e-commerce platform</li>
                            </ul>
                            <h4 class="">Challenges Faced</h4>
                            <ul>
                                <li class="text-sm ">Limited online presence impacting sales</li>
                                <li class="text-sm ">Inefficient and outdated e-commerce platform</li>
                            </ul>
                            <div class="p-c-a"><a class="basic-button m cursor-eventargin-t-2 cursor-event">View More
                                    Project</a></div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carousel-box-3 w-100 section-padding">
                    <div class="grid grid-2 max-width">
                        <div class="porfolio-img flex-center-center">
                            <img class="cursor-event" src="<?= get_img() ?>porfolio-1.webp" alt="" srcset="">
                        </div>
                        <div class="portfolio-content">
                            <div class="portfolio-logo margin-b-2 cursor-event"><img
                                    src="<?= get_img() ?>portfolio-logo-1.webp" alt="" srcset="">
                            </div>
                            <h3 class="p-c-heading margin-b-2 section-heading cursor-event">OZ Leasing</h3>
                            <p class="text-sm margin-b-2 ">OZ Leasing, a disruptive tech start-up, aims to
                                simplify car
                                leasing in the automotive
                                industry. Our team developed a comprehensive web and mobile app solution,
                                streamlining
                                the leasing process for users.</p>
                            <h4 class="margin-b-2 ">Challenges Faced</h4>
                            <ul>
                                <li class="text-sm ">Limited online presence impacting sales</li>
                                <li class="text-sm ">Inefficient and outdated e-commerce platform</li>
                            </ul>
                            <h4 class="">Challenges Faced</h4>
                            <ul>
                                <li class="text-sm ">Limited online presence impacting sales</li>
                                <li class="text-sm ">Inefficient and outdated e-commerce platform</li>
                            </ul>
                            <div class="p-c-a"><a class="basic-button m cursor-eventargin-t-2 cursor-event">View More
                                    Project</a></div>
                        </div>
                    </div>
                </div>


            </div>
            <button class="carousel-control-prev button cursor-event" type="button"
                data-bs-target="#carouselExampleRide" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next button cursor-event" type="button"
                data-bs-target="#carouselExampleRide" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div> -->
    <!-- award-section -->
    <!-- <div class="section-award section-padding" data-aos="fade-up">
        <div class="grid grid-2 max-width">

            <div class="const">
                <h2 class="margin-b-3 background-content relative z-10 section-heading text-start">Awards & Recognitions
                </h2>
                <p class="text-sm margin-b-3 ">We thrive on accelerating the path to disruption and implementing
                    agile
                    methodology to build
                    feature-rich, user-friendly mobile apps that end users love. Our user-centric,
                    quality-driven, and
                    future-oriented mobile app development services are the reason why we have bagged these
                    notorious
                    awards and recognitions.</p>
                <div class="p-c-a"><a class="basic-button cursor-event" href="">Check Reviews</a></div>

            </div>
            <div class=" award-reviews">
                <h3 class="">65+ reviews on Clutch</h3>
                <h1 class="">4.9</h1>
                <div class="award-star ">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
            </div>
        </div>
        <div class="award-slider">
            <div class="award-container">
                <i id="left" class="fa-solid fa-angle-left button cursor-event"></i>
                <div class="carausel">
                    <div class="review-box text-center ">
                        <div><img class="margin-b-3" src="<?= get_img() ?>company-1.png" alt="" srcset=""></div>
                        <h4 class="margin-b-3">Horizon Award</h4>
                        <h5 class="margin-b-3">Top Entertainment App Developers</h5>
                    </div>
                    <div class="review-box text-center ">
                        <div><img class="margin-b-3" src="<?= get_img() ?>company-1.png" alt="" srcset=""></div>
                        <h4 class="margin-b-3">Horizon Award</h4>
                        <h5 class="margin-b-3">Top Entertainment App Developers</h5>
                    </div>
                    <div class="review-box text-center ">
                        <div><img class="margin-b-3" src="<?= get_img() ?>company-1.png" alt="" srcset=""></div>
                        <h4 class="margin-b-3">Horizon Award</h4>
                        <h5 class="margin-b-3">Top Entertainment App Developers</h5>
                    </div>
                    <div class="review-box text-center ">
                        <div><img class="margin-b-3" src="<?= get_img() ?>company-1.png" alt="" srcset=""></div>
                        <h4 class="margin-b-3">Horizon Award</h4>
                        <h5 class="margin-b-3">Top Entertainment App Developers</h5>
                    </div>
                    <div class="review-box text-center ">
                        <div><img class="margin-b-3" src="<?= get_img() ?>company-1.png" alt="" srcset=""></div>
                        <h4 class="margin-b-3">Horizon Award</h4>
                        <h5 class="margin-b-3">Top Entertainment App Developers</h5>
                    </div>
                    <div class="review-box text-center ">
                        <div><img class="margin-b-3" src="<?= get_img() ?>company-1.png" alt="" srcset=""></div>
                        <h4 class="margin-b-3">Horizon Award</h4>
                        <h5 class="margin-b-3">Top Entertainment App Developers</h5>
                    </div>

                </div>
                <i id="right" class="fa-solid fa-angle-right button cursor-event"></i>
            </div>
        </div>
    </div> -->

    <!-- Need a Consult Section -->
    <div class="section-9 section-padding  w-100" data-aos="fade-up">
        <div class="max-width flex">
            <div class="getTouch">
                <h2 class="section-heading text-start margin-b-3 ">Need a Consultation?</h2>
                <p class="">Drop us a line! We are here to answer your questions 24/7.</p>
                <form class="form">
                    <textarea class="w-100" id="textarea" cols="30" rows="4" placeholder="Text here"></textarea>
                    <p class="mb-3"><i class="fa-solid fa-cloud-arrow-up"></i> Drag and drop or <label
                            for="upload_input_files">browse</label>
                        to
                        upload your file(s)</p>
                    <input type="file" name="me" id="upload_input_files" data-max-size-mb="20mb"
                        data-valid-extensions="['jpg','png','webp','jpeg','doc','ppt']">
                    <div class="form-input flex w-100">
                        <input class="w-100" type="text" placeholder="Enter Your Name">
                        <input class="w-100" type="email" placeholder="Enter Your Email">
                    </div>
                    <div class="form-input flex w-100 my-3">
                        <input class="w-100" type="number" placeholder="Enter Your Number">
                        <input class="w-100" type="text" placeholder="Enter Your city">
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
                        <button class="basic-button text-center cursor-event">Send me</button>
                    </div>
                </form>
            </div>
            <div class="getTouch-links relative flex justify">
                <div class="">
                    <h3 class="mb-2">Get in touch instantly</h3>
                    <div class="getTouch-links-img">
                        <ul>
                            <li class="mb-2 flex-center cursor-event"><img class="font-img"
                                    src="<?= get_img() ?>call-us.svg"><a href="#">call us</a></li>
                            <li class="mb-2 flex-center cursor-event"><img class="font-img"
                                    src="<?= get_img() ?>email-us.svg"><a href="#">Live chat</a></li>
                            <li class="mb-2 flex-center cursor-event"><img class="font-img"
                                    src="<?= get_img() ?>whats-app.svg"><a href="#">whatsapp</a></li>
                            <li class="mb-2 flex-center cursor-event"><img class="font-img"
                                    src="<?= get_img() ?>live-chat.svg"><a href="#">Email us</a></li>
                        </ul>
                    </div>
                </div>
                <img class="contect-img absolute" src="<?= get_img() ?>contect-img.svg" alt="" srcset="">
            </div>
        </div>
    </div>

    <!-- Insights Section -->
    <!-- <div class="insights section-padding" data-aos="fade-up">
        <h2 class=" section-heading background-content relative z-10 text-start ">Insights</h2>
        <div class="insights-news">
            <div class="news-content flex-center-center">
                <div class="img">
                    <img class="cursor-event" src="<?= get_img() ?>monitoring.png" width="60px" alt="" srcset="">
                </div>
                <div>
                    <p class="overflow-text text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit
                        voluptates
                        soluta beatae utsapiente
                        voluptatibus sunt temporibus pariatur Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Dolor
                        architecto perspiciatis hic modi facilis nesciunt repellat necessitatibus. Tempore doloremque
                        facilis distinctio dolor sapiente aliquam ipsa nam fugit ullam, laborum nobis.</p>
                    <p class="news-date">December<span>1,2023</span></p>
                </div>
            </div>
            <div class="news-content flex-center-center">
                <div class="img">
                    <img class="cursor-event" src="<?= get_img() ?>consumer.png" width="60px" alt="" srcset="">
                </div>
                <div>
                    <p class="overflow-text text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit
                        voluptates
                        soluta beatae utsapiente
                        voluptatibus sunt temporibus pariatur Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Dolor
                        architecto perspiciatis hic modi facilis nesciunt repellat necessitatibus. Tempore doloremque
                        facilis distinctio dolor sapiente aliquam ipsa nam fugit ullam, laborum nobis.</p>
                    <p class="news-date">December<span>1,2023</span></p>
                </div>
            </div>
            <div class="news-content flex-center-center">
                <div class="img">
                    <img class="cursor-event" src="<?= get_img() ?>actionable.png" width="60px" alt="" srcset="">
                </div>
                <div>
                    <p class="overflow-text text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit
                        voluptates
                        soluta beatae utsapiente
                        voluptatibus sunt temporibus pariatur Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Dolor
                        architecto perspiciatis hic modi facilis nesciunt repellat necessitatibus. Tempore doloremque
                        facilis distinctio dolor sapiente aliquam ipsa nam fugit ullam, laborum nobis.</p>
                    <p class="news-date">December<span>1,2023</span></p>
                </div>
            </div>
            <div class="news-content flex-center-center">
                <div class="img">
                    <img class="cursor-event" src="<?= get_img() ?>behavior.png" width="60px" alt="" srcset="">
                </div>
                <div>
                    <p class="overflow-text text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit
                        voluptates
                        soluta beatae utsapiente
                        voluptatibus sunt temporibus pariatur Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Dolor
                        architecto perspiciatis hic modi facilis nesciunt repellat necessitatibus. Tempore doloremque
                        facilis distinctio dolor sapiente aliquam ipsa nam fugit ullam, laborum nobis.</p>
                    <p class="news-date">December<span>1,2023</span></p>
                </div>
            </div>
            <div class="news-content flex-center-center">
                <div class="img">
                    <img class="cursor-event" src="<?= get_img() ?>consumer-behavior.png" width="60px" alt="" srcset="">
                </div>
                <div>
                    <p class="overflow-text text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit
                        voluptates
                        soluta beatae utsapiente
                        voluptatibus sunt temporibus pariatur Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Dolor
                        architecto perspiciatis hic modi facilis nesciunt repellat necessitatibus. Tempore doloremque
                        facilis distinctio dolor sapiente aliquam ipsa nam fugit ullam, laborum nobis.</p>
                    <p class="news-date">December<span>1,2023</span></p>
                </div>
            </div>
            <div class="news-content flex-center-center">
                <div class="img">
                    <img class="cursor-event" src="<?= get_img() ?>initiative.png" width="60px" alt="" srcset="">
                </div>
                <div>
                    <p class="overflow-text text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit
                        voluptates
                        soluta beatae utsapiente
                        voluptatibus sunt temporibus pariatur Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Dolor
                        architecto perspiciatis hic modi facilis nesciunt repellat necessitatibus. Tempore doloremque
                        facilis distinctio dolor sapiente aliquam ipsa nam fugit ullam, laborum nobis.</p>
                    <p class="news-date">December<span>1,2023</span></p>
                </div>
            </div>
        </div>
        <div class="insights-btn text-center mt-3 pt-3"><a class="basic-button"><i
                    class="fa-solid fa-arrow-right"></i></a></div>
    </div> -->

    <!-- review section... -->
    <div class="review-section section-padding" data-aos="fade-up">
        <div class="p-3 margin-2">
            <!-- <h5 class="text">Testimonials</h5> -->
            <h2 class="section-heading text-start background-content relative z-10">What Our Clients Say</h2>
        </div>
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item  active w-100 ">
                    <div class="grid-center-column max-width">
                        <div class="review-section-img">
                            <img class="cursor-event" src="<?= get_img() ?>review_girl.png" alt="" srcset="">
                        </div>
                        <div class="flex-center">
                            <div class="review-about" data-aos="flip-up">
                                <div class="star margin-b-1">
                                    <i class="fa-solid fa-star" style="color: #ffc600;"></i>
                                    <i class="fa-solid fa-star" style="color: #ffc600;"></i>
                                    <i class="fa-solid fa-star" style="color: #ffc600;"></i>
                                    <i class="fa-solid fa-star" style="color: #ffc600;"></i>
                                    <i class="fa-solid fa-star" style="color: #ffc600;"></i>
                                </div>
                                <h3 class="sub-heading">Strong knowladge of Android Sdk</h3>
                                <p class="text-sm overflow-text">Lorem ipsum dolor sit, amet consectetur adipisicing
                                    elit. Expedita
                                    quasi
                                    totam
                                    fuga dolor autem
                                    cum
                                    necessitatibus, ducimus natus corrupti maiores tempora, earum vel laudantium sunt et
                                    illum
                                    laborum?
                                    Eligendi, nam.
                                </p>
                                <div class="flex-center">
                                    <img class="cursor-event" src="<?= get_img() ?>members-icon-2.png" alt="" srcset="">
                                    <div class="margin-l-3">
                                        <h5>Mr. Halim Dawn</h5>
                                        <h6>Founder, TrashTheme</h6>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item  w-100 ">
                    <div class="grid-center-column max-width">
                        <div class="review-section-img">
                            <img class="cursor-event" src="<?= get_img() ?>review_man_2.png" alt="" srcset="">
                        </div>
                        <div class="flex-center">
                            <div class="review-about" data-aos="flip-up">
                                <div class="star margin-b-1">
                                    <i class="fa-solid fa-star" style="color: #ffc600;"></i>
                                    <i class="fa-solid fa-star" style="color: #ffc600;"></i>
                                    <i class="fa-solid fa-star" style="color: #ffc600;"></i>
                                    <i class="fa-solid fa-star" style="color: #ffc600;"></i>
                                    <i class="fa-solid fa-star" style="color: #ffc600;"></i>
                                </div>
                                <h3 class="sub-heading">Strong knowladge of Android Sdk</h3>
                                <p class="text-sm overflow-text">Lorem ipsum dolor sit, amet consectetur adipisicing
                                    elit. Expedita
                                    quasi
                                    totam
                                    fuga dolor autem
                                    cum
                                    necessitatibus, ducimus natus corrupti maiores tempora, earum vel laudantium sunt et
                                    illum
                                    laborum?
                                    Eligendi, nam.
                                </p>
                                <div class="flex-center">
                                    <img class="cursor-event" src="<?= get_img() ?>members-icon-2.png" alt="" srcset="">
                                    <div class="margin-l-3">
                                        <h5>Mr. Halim Dawn</h5>
                                        <h6>Founder, TrashTheme</h6>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item  w-100 ">
                    <div class="grid-center-column max-width">
                        <div class="review-section-img">
                            <img class="cursor-event" src="<?= get_img() ?>review-img-1.png" alt="" srcset="">
                        </div>
                        <div class="flex-center">
                            <div class="review-about" data-aos="flip-up">
                                <div class="star margin-b-1">
                                    <i class="fa-solid fa-star" style="color: #ffc600;"></i>
                                    <i class="fa-solid fa-star" style="color: #ffc600;"></i>
                                    <i class="fa-solid fa-star" style="color: #ffc600;"></i>
                                    <i class="fa-solid fa-star" style="color: #ffc600;"></i>
                                    <i class="fa-solid fa-star" style="color: #ffc600;"></i>
                                </div>
                                <h3 class="sub-heading">Strong knowladge of Android Sdk</h3>
                                <p class="text-sm overflow-text">Lorem ipsum dolor sit, amet consectetur adipisicing
                                    elit. Expedita
                                    quasi
                                    totam
                                    fuga dolor autem
                                    cum
                                    necessitatibus, ducimus natus corrupti maiores tempora, earum vel laudantium sunt et
                                    illum
                                    laborum?
                                    Eligendi, nam.
                                </p>
                                <div class="flex-center">
                                    <img class="cursor-event" src="<?= get_img() ?>members-icon-2.png" alt="" srcset="">
                                    <div class="margin-l-3">
                                        <h5>Mr. Halim Dawn</h5>
                                        <h6>Founder, TrashTheme</h6>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Let Discuss Project Section -->
    <div class="project-discuss-section section-padding flex-center-center">
        <h3>Have something to discuss</h3>
        <h1>We Are Ready</h1>
        <div><a class="project-discuss-btn basic-button mt-3 cursor-event">LET'S CONNECT!</a></div>
    </div>

    <!-- for cursor animation -->
    <div class="cursor"></div>
    <!-- Footer Section -->
    <?php include_once('../includes/view/footer.php') ?>
    <!-- bootstrap js.... -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    <script src="<?= get_js() ?>header.js"></script>
    <script src="<?= get_js() ?>home.js"></script>


    <script>
        var copy = document.querySelector(".powerdImg").cloneNode(true);
        document.querySelector(".powerdTop").appendChild(copy);


        // var copy = document.querySelector(".logos-slide").cloneNode(true);
        // document.querySelector(".logos").appendChild(copy);

        window.onload = function () {
            setTimeout(() => {
                document.getElementsByClassName('powerdImg')[0].classList.add('added')
                document.getElementsByClassName('powerdImg')[1].classList.add('added')
                // document.getElementsByClassName('powerdImg')[2].classList.add('added')


            }, 1000);
        }
        //  document.getElementsByClassName('logos-slide')[0].classList.add('added')
        //  document.getElementsByClassName('logos-slide')[1].classList.add('added')
    </script>
    <!-- AOS animation script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init({
            duration: 1000,
        });
    </script>

    <script>
        document.getElementById("bg_video").playbackRate = 0.5; // Adjust the speed (0.5 means half speed)
    </script>
</body>

</html>