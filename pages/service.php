<?php

include_once('../init.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>

    <?php include_once('../includes/view/head.php') ?>

    <link rel="stylesheet" href="<?= get_css() ?>pageService.css">
    <link rel="stylesheet" href="<?= get_css() ?>home.css">
    <link rel="stylesheet" href="<?= get_css() ?>pageAbout.css">
</head>
<body>
    <!-- Header Section -->
    <?php include_once('../includes/view/header.php') ?>

    <!-- Service Landing Section -->
    <div class="about-landing">
        <div class="about-img relative">
            <img class="absolute about-img-in" src="<?= get_img() ?>service-landing-bg.avif" alt="service">
        </div>
        <div class="shadow absolute"></div>

        <div class="about-landing-details z-10 relative">
            <h1>Digital acceleration services for <span class="color-green">digital <br> business growth</span></h1>
            
            <p class="text-center">Design. Development. Consulting.<br>
            15 years and counting.</p>
            <!-- <button class="basic-button">Let's work togather</button> -->
        </div>
        <div class="absolute half-circle">
            <div class="one-half-circle"></div>
            <div class="two-half-circle"></div>
            <div class="three-half-circle"></div>
        </div>
    </div>
    <!-- ******************************* -->
    <!-- <div class="service-landing"> -->
        <!-- <div class="service-img">
            <img class="" src="<?= get_img() ?>about-landing.webp">
        </div> -->
        <!-- <div class="overlay-ser absolute"></div> -->
        <!-- <div class="service-landing-content absolute">
            <div class="content-A">
                <h1>What We Do</h1>
                <p class="py-2">We turn your idea into a fully fledged business success .</p>
                <div><a class="project-discuss-btn basic-button mt-3">LET'S CONNECT!</a></div>
            </div>
            <div class="content-B">
                <img class="" src="<?= get_img() ?>service-trust-section.png" alt="about">
            </div>
        </div> -->
    <!-- </div> -->

    <!-- Why Trust Us Section -->
    <div class="Why-Trust-Us-Section section-padding">
        <div class="Why-Trust-Us-Section-A">
            <!-- <div class="insights-heading">
                <h3 class="section-heading">Why Trust Us</h3>
                <h1 class="bg-insight-heading">Publications</h1>
            </div> -->
            <h2 class="section-heading background-content relative z-10 text-start">Why Trust Us</h2>
            <div class="trust-content-A">
                <p class="pb-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae nisi,  atque cum, consectetur ullam architecto.</p>
                <div class="trust-ser-points grid grid-2">
                    <div class="trust-ser-point"><p>Protect Your Business</p></div>
                    <div class="trust-ser-point"><p>Network Security</p></div>
                    <div class="trust-ser-point"><p>Data Security</p></div>
                    <div class="trust-ser-point"><p>Running Your Bussiness</p></div>
                    <div class="trust-ser-point"><p>Landing Pages</p></div>
                    <div class="trust-ser-point"><p>Small Your Business</p></div>
                </div>
            </div>
        </div>    
        <div class="service-trust-img">
            <img class="" src="<?= get_img() ?>5102941_2691166.jpg" alt="about">
        </div>
    </div>

    <!-- Main Service Section -->
    <div class="service-div">
        <ul class=" ser-ul-li flex-center">
            <li><a href="#service-type-1" id="Design" class="ser-li-link active">Ideation</a></li>
            <li><a href="#service-type-2" id="Design" class="ser-li-link">Product design</a></li>
            <li><a href="#service-type-3" id="Design" class="ser-li-link">Web development</a></li>
            <li><a href="#service-type-4" id="Design" class="ser-li-link">Mobile development</a></li>
            <li><a href="#service-type-5" id="Design" class="ser-li-link">Low-code development</a></li>
            <li><a href="#service-type-6" id="Design" class="ser-li-link">Machine learning</a></li>
            <li><a href="#service-type-7" id="Design" class="ser-li-link">Support</a></li>
        </ul>
    </div>
    <div class="">
        <!-- Service 1 -->
        <div id="service-type-1" class="ser-li-section">
            <div class="grid grid-2 section-padding">
                <div class="service-main-heading-1"><h2 class="section-heading background-content relative z-10">Ideation and evaluation <span class="color-green">services</span></h2></div>
                <div class="case-para"><p class="w-70">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius sit ut nulla magni ipsa architecto, sequi sunt mollitia blanditiis sed beatae omnis. Quae est similique totam accusantium, quod exercitationem minima.</p></div>
            </div>
            <div class="case-container flex-center-center section-padding">
                <div class="case-sub-head">
                    <div class="text-center"><h1 class="">Ideation and evaluation <span class="color-green">services</span></h1></div>
                    <div class="text-center w-80"><p class="case-para py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius sit ut nulla magni ipsa architecto, sequi sunt mollitia blanditiis.</p></div>
                </div>
                <div class="grid grid-3">
                    <div class="case-img-cont">
                        <div class="case-img"><img class="" src="<?= get_img() ?>ser-case-1.webp" alt="case-1"></div>
                        <div><h3 class="case-img-cont-heading">A Unique Place - creating Volkswagen Home concept</h3></div>
                        <div><p class="case-img-cont-para text-sm">Volkswagen's ambition was to build a first-in-the-world boutique, a place where customers would be compelled by a combination of coziness and luxury. Netguru provided consulting services to design a c...</p></div>
                    </div>
                    <div class="case-img-cont">
                        <div class="case-img"><img class="" src="<?= get_img() ?>ser-case-2.webp" alt="case-1"></div>
                        <div><h3 class="case-img-cont-heading">A Unique Place - creating Volkswagen Home concept</h3></div>
                        <div><p class="case-img-cont-para text-sm">Volkswagen's ambition was to build a first-in-the-world boutique, a place where customers would be compelled by a combination of coziness and luxury. Netguru provided consulting services to design a c...</p></div>
                    </div>
                    <div class="case-img-cont">
                        <div class="case-img"><img class="" src="<?= get_img() ?>ser-case-3webp.webp" alt="case-1"></div>
                        <div><h3 class="case-img-cont-heading">A Unique Place - creating Volkswagen Home concept</h3></div>
                        <div><p class="case-img-cont-para text-sm">Volkswagen's ambition was to build a first-in-the-world boutique, a place where customers would be compelled by a combination of coziness and luxury. Netguru provided consulting services to design a c...</p></div>
                    </div>
                </div>
            </div>
            <!-- Sachin Wala Section -->
            <!-- service-section -->
            <div class="section-service text-center section-padding">
            <div class="service-about">
            <h2 class="section-heading background-content relative z-10">Ideation and evaluation <span class="color-green">services</span></h2>
            <p class="text p-2 margin-2 ">Find a way forward for your business with our services focused on idea
                evaluation. Learn how to
                accelerate the first steps ofI the innovation process.</p>
            </div>
            <div class="box-container">
            <div class="box p-3 mb-3">
                <div class="icon p-1"><img src="<?= get_img() ?>service-icon-1.png" alt="" srcset=""></div>
                <h3 class="margin-2 p-1 sub-heading">Product validation sprint</h3>
                <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                    desirability, usability, feasibility, viability and
                    product/market fit aimed at reducing the risk of bringing a product to the market.</p>
                <a href="http://">Learn more</a>
            </div>
            <div class="box p-3 mb-3">
                <div class="icon p-1"><img src="<?= get_img() ?>service-icon-2.png" alt="" srcset=""></div>
                <h3 class="margin-2 p-1 sub-heading">Product design sprint</h3>
                <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                    desirability, usability, feasibility, viability and
                    product/market fit aimed at reducing the risk of bringing a product to the market.</p>
                <a href="http://">Learn more</a>
            </div>
            <div class="box p-3 mb-3">
                <div class="icon p-1"><img src="<?= get_img() ?>service-icon-3.png" alt="" srcset=""></div>
                <h3 class="margin-2 p-1 sub-heading">UX review</h3>
                <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                    desirability, usability, feasibility, viability and
                    product/market fit aimed at reducing the risk of bringing a product to the market.</p>
                <a href="http://">Learn more</a>
            </div>
            <div class="box p-3 mb-3">
                <div class="icon p-1"><img src="<?= get_img() ?>service-icon-4.png" alt="" srcset=""></div>
                <h3 class="margin-2 p-1 sub-heading">Research & development</h3>
                <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                    desirability, usability, feasibility, viability and
                    product/market fit aimed at reducing the risk of bringing a product to the market.</p>
                <a href="http://">Learn more</a>
            </div>
            <div class="box p-3 mb-3">
                <div class="icon p-1"><img src="<?= get_img() ?>service-icon-5.png" alt="" srcset=""></div>
                <h3 class="margin-2 p-1 sub-heading">User research</h3>
                <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                    desirability, usability, feasibility, viability and
                    product/market fit aimed at reducing the risk of bringing a product to the market.</p>
                <a href="http://">Learn more</a>

            </div>
            <div class="box p-3 mb-3">
                <div class="icon p-1"><img src="<?= get_img() ?>service-icon-5.png" alt="" srcset=""></div>
                <h3 class="margin-2 p-1 sub-heading">User research</h3>
                <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                    desirability, usability, feasibility, viability and
                    product/market fit aimed at reducing the risk of bringing a product to the market.</p>
                <a href="http://">Learn more</a>

            </div>
            </div>
            </div>
        </div>

        <!-- Service 2 -->
        <div id="service-type-2" class="ser-li-section">
            <div class="grid grid-2 section-padding">
                <div class="service-main-heading-2"><h2 class="section-heading background-content relative z-10">Product design<span class="color-green">services</span></h2></div>
                <div class="case-para"><p class="w-70">Craft delightful user experiences that stand out. Solve real problems and improve your vital business metrics through beautiful interfaces.</p></div>
            </div>
            <div class="case-container flex-center-center section-padding">
                <div class="case-sub-head">
                    <div class="text-center"><h1 class="">Product design case studies<span class="color-green">services</span></h1></div>
                    <div class="text-center w-80"><p class="case-para py-3">Great design is an iterative process of resolving problems and continuously looking for improvements. Discover how we work with our clients.</p></div>
                </div>
                <div class="grid grid-3">
                    <div class="case-img-cont">
                        <div class="case-img"><img class="" src="<?= get_img() ?>ser-2-case-1.webp" alt="case-2"></div>
                        <div><h3 class="case-img-cont-heading">A Unique Place - creating Volkswagen Home concept</h3></div>
                        <div><p class="case-img-cont-para text-sm">Volkswagen's ambition was to build a first-in-the-world boutique, a place where customers would be compelled by a combination of coziness and luxury. Netguru provided consulting services to design a c...</p></div>
                    </div>
                    <div class="case-img-cont">
                        <div class="case-img"><img class="" src="<?= get_img() ?>ser-2-case-2.webp" alt="case-3"></div>
                        <div><h3 class="case-img-cont-heading">A Unique Place - creating Volkswagen Home concept</h3></div>
                        <div><p class="case-img-cont-para text-sm">Volkswagen's ambition was to build a first-in-the-world boutique, a place where customers would be compelled by a combination of coziness and luxury. Netguru provided consulting services to design a c...</p></div>
                    </div>
                    <div class="case-img-cont">
                        <div class="case-img"><img class="" src="<?= get_img() ?>ser-2-case-3.webp" alt="case-3"></div>
                        <div><h3 class="case-img-cont-heading">A Unique Place - creating Volkswagen Home concept</h3></div>
                        <div><p class="case-img-cont-para text-sm">Volkswagen's ambition was to build a first-in-the-world boutique, a place where customers would be compelled by a combination of coziness and luxury. Netguru provided consulting services to design a c...</p></div>
                    </div>
                </div>
            </div>
            <!-- Sachin Wala Section -->
            <!-- service-section -->
            <div class="section-service text-center section-padding">
            <div class="service-about">
            <!-- <div class="insights-heading">
                <h3 class="section-heading">Ideation and evaluation services</h3>
                <h1 class="bg-insight-heading">Publications</h1>
            </div> -->
            <h2 class="section-heading background-content relative z-10">Ideation and evaluation <span class="color-green">services</span></h2>
            <p class="text p-2 margin-2 ">Find a way forward for your business with our services focused on idea
                evaluation. Learn how to
                accelerate the first steps ofI the innovation process.</p>
            </div>
            <div class="box-container">
            <div class="box p-3 mb-3">
                <div class="icon p-1"><img src="<?= get_img() ?>service-icon-1.png" alt="" srcset=""></div>
                <h3 class="margin-2 p-1 sub-heading">Product validation sprint</h3>
                <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                    desirability, usability, feasibility, viability and
                    product/market fit aimed at reducing the risk of bringing a product to the market.</p>
                <a href="http://">Learn more</a>
            </div>
            <div class="box p-3 mb-3">
                <div class="icon p-1"><img src="<?= get_img() ?>service-icon-2.png" alt="" srcset=""></div>
                <h3 class="margin-2 p-1 sub-heading">Product design sprint</h3>
                <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                    desirability, usability, feasibility, viability and
                    product/market fit aimed at reducing the risk of bringing a product to the market.</p>
                <a href="http://">Learn more</a>
            </div>
            <div class="box p-3 mb-3">
                <div class="icon p-1"><img src="<?= get_img() ?>service-icon-3.png" alt="" srcset=""></div>
                <h3 class="margin-2 p-1 sub-heading">UX review</h3>
                <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                    desirability, usability, feasibility, viability and
                    product/market fit aimed at reducing the risk of bringing a product to the market.</p>
                <a href="http://">Learn more</a>
            </div>
            <div class="box p-3 mb-3">
                <div class="icon p-1"><img src="<?= get_img() ?>service-icon-4.png" alt="" srcset=""></div>
                <h3 class="margin-2 p-1 sub-heading">Research & development</h3>
                <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                    desirability, usability, feasibility, viability and
                    product/market fit aimed at reducing the risk of bringing a product to the market.</p>
                <a href="http://">Learn more</a>
            </div>
            <div class="box p-3 mb-3">
                <div class="icon p-1"><img src="<?= get_img() ?>service-icon-5.png" alt="" srcset=""></div>
                <h3 class="margin-2 p-1 sub-heading">User research</h3>
                <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                    desirability, usability, feasibility, viability and
                    product/market fit aimed at reducing the risk of bringing a product to the market.</p>
                <a href="http://">Learn more</a>

            </div>
            <div class="box p-3 mb-3">
                <div class="icon p-1"><img src="<?= get_img() ?>service-icon-5.png" alt="" srcset=""></div>
                <h3 class="margin-2 p-1 sub-heading">User research</h3>
                <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                    desirability, usability, feasibility, viability and
                    product/market fit aimed at reducing the risk of bringing a product to the market.</p>
                <a href="http://">Learn more</a>

            </div>
            </div>
            </div>
        </div>

        <!-- Service 3 -->
        <div id="service-type-3" class="ser-li-section">
            <div class="grid grid-2 section-padding">
                <div class="service-main-heading-2"><h2 class="section-heading background-content relative z-10">Web development <span class="color-green">services</span></h2></div>
                <div class="case-para"><p class="w-70">Create user-friendly, light and secure web applications faster. Find the path of least resistance toward your product with our battle-tested lean development processes and methodologies.</p>
            </div>
            </div>
            <div class="case-container flex-center-center section-padding">
                <div class="case-sub-head">
                    <div class="text-center"><h1 class="">Web development case studies<span class="color-green">services</span></h1></div>
                    <div class="text-center w-80"><p class="case-para py-3">Choosing the right partner can make or break your product. Explore our footprint in web apps.</p></div>
                </div>
                <div class="grid grid-3">
                    <div class="case-img-cont">
                        <div class="case-img"><img class="" src="<?= get_img() ?>ser-3-case-1.webp" alt="case-1"></div>
                        <div><h3 class="case-img-cont-heading">A Unique Place - creating Volkswagen Home concept</h3></div>
                        <div><p class="case-img-cont-para text-sm">Volkswagen's ambition was to build a first-in-the-world boutique, a place where customers would be compelled by a combination of coziness and luxury. Netguru provided consulting services to design a c...</p></div>
                    </div>
                    <div class="case-img-cont">
                        <div class="case-img"><img class="" src="<?= get_img() ?>ser-3-case-2.webp" alt="case-2"></div>
                        <div><h3 class="case-img-cont-heading">A Unique Place - creating Volkswagen Home concept</h3></div>
                        <div><p class="case-img-cont-para text-sm">Volkswagen's ambition was to build a first-in-the-world boutique, a place where customers would be compelled by a combination of coziness and luxury. Netguru provided consulting services to design a c...</p></div>
                    </div>
                    <div class="case-img-cont">
                        <div class="case-img"><img class="" src="<?= get_img() ?>ser-3-case-3.webp" alt="case-3"></div>
                        <div><h3 class="case-img-cont-heading">A Unique Place - creating Volkswagen Home concept</h3></div>
                        <div><p class="case-img-cont-para text-sm">Volkswagen's ambition was to build a first-in-the-world boutique, a place where customers would be compelled by a combination of coziness and luxury. Netguru provided consulting services to design a c...</p></div>
                    </div>
                </div>
            </div>
            <!-- Sachin Wala Section -->
            <!-- service-section -->
            <div class="section-service text-center section-padding">
            <div class="service-about">
            <!-- <div class="insights-heading">
                <h3 class="section-heading">Ideation and evaluation services</h3>
                <h1 class="bg-insight-heading">Publications</h1>
            </div> -->
            <h2 class="section-heading background-content relative z-10">Ideation and evaluation <span class="color-green">services</span></h2>
            <p class="text p-2 margin-2 ">Find a way forward for your business with our services focused on idea
                evaluation. Learn how to
                accelerate the first steps ofI the innovation process.</p>
            </div>
            <div class="box-container">
            <div class="box p-3 mb-3">
                <div class="icon p-1"><img src="<?= get_img() ?>service-icon-1.png" alt="" srcset=""></div>
                <h3 class="margin-2 p-1 sub-heading">Product validation sprint</h3>
                <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                    desirability, usability, feasibility, viability and
                    product/market fit aimed at reducing the risk of bringing a product to the market.</p>
                <a href="http://">Learn more</a>
            </div>
            <div class="box p-3 mb-3">
                <div class="icon p-1"><img src="<?= get_img() ?>service-icon-2.png" alt="" srcset=""></div>
                <h3 class="margin-2 p-1 sub-heading">Product design sprint</h3>
                <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                    desirability, usability, feasibility, viability and
                    product/market fit aimed at reducing the risk of bringing a product to the market.</p>
                <a href="http://">Learn more</a>
            </div>
            <div class="box p-3 mb-3">
                <div class="icon p-1"><img src="<?= get_img() ?>service-icon-3.png" alt="" srcset=""></div>
                <h3 class="margin-2 p-1 sub-heading">UX review</h3>
                <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                    desirability, usability, feasibility, viability and
                    product/market fit aimed at reducing the risk of bringing a product to the market.</p>
                <a href="http://">Learn more</a>
            </div>
            <div class="box p-3 mb-3">
                <div class="icon p-1"><img src="<?= get_img() ?>service-icon-4.png" alt="" srcset=""></div>
                <h3 class="margin-2 p-1 sub-heading">Research & development</h3>
                <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                    desirability, usability, feasibility, viability and
                    product/market fit aimed at reducing the risk of bringing a product to the market.</p>
                <a href="http://">Learn more</a>
            </div>
            <div class="box p-3 mb-3">
                <div class="icon p-1"><img src="<?= get_img() ?>service-icon-5.png" alt="" srcset=""></div>
                <h3 class="margin-2 p-1 sub-heading">User research</h3>
                <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                    desirability, usability, feasibility, viability and
                    product/market fit aimed at reducing the risk of bringing a product to the market.</p>
                <a href="http://">Learn more</a>

            </div>
            <div class="box p-3 mb-3">
                <div class="icon p-1"><img src="<?= get_img() ?>service-icon-5.png" alt="" srcset=""></div>
                <h3 class="margin-2 p-1 sub-heading">User research</h3>
                <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                    desirability, usability, feasibility, viability and
                    product/market fit aimed at reducing the risk of bringing a product to the market.</p>
                <a href="http://">Learn more</a>

            </div>
            </div>
            </div>
        </div>

        <!-- Service 4 -->
        <div id="service-type-4" class="ser-li-section">
            <div class="grid grid-2 section-padding">
                <div class="service-main-heading-4"><h2 class="section-heading background-content relative z-10">Mobile development<span class="color-green">services</span></h2></div>
                <div class="case-para"><p class="w-70">Supercharge app delivery with our team of mission-driven mobile engineers. Enjoy optimized custom mobile solutions with next-gen UX for both iOS and Android.</p></div>
            </div>
            <div class="case-container flex-center-center section-padding">
                <div class="case-sub-head">
                    <div class="text-center"><h1 class="">Mobile development case studies<span class="color-green">services</span></h1></div>
                    <div class="text-center w-80"><p class="case-para py-3">We’re after engaging digital experiences and top-notch performance. Check the case studies to see our impact.</p></div>
                </div>
                <div class="grid grid-3">
                    <div class="case-img-cont">
                        <div class="case-img"><img class="" src="<?= get_img() ?>ser-4-case-1.webp" alt="case-1"></div>
                        <div><h3 class="case-img-cont-heading">A Unique Place - creating Volkswagen Home concept</h3></div>
                        <div><p class="case-img-cont-para text-sm">Volkswagen's ambition was to build a first-in-the-world boutique, a place where customers would be compelled by a combination of coziness and luxury. Netguru provided consulting services to design a c...</p></div>
                    </div>
                    <div class="case-img-cont">
                        <div class="case-img"><img class="" src="<?= get_img() ?>ser-4-case-2.webp" alt="case-2"></div>
                        <div><h3 class="case-img-cont-heading">A Unique Place - creating Volkswagen Home concept</h3></div>
                        <div><p class="case-img-cont-para text-sm">Volkswagen's ambition was to build a first-in-the-world boutique, a place where customers would be compelled by a combination of coziness and luxury. Netguru provided consulting services to design a c...</p></div>
                    </div>
                    <div class="case-img-cont">
                        <div class="case-img"><img class="" src="<?= get_img() ?>ser-4-case-3.webp" alt="case-3"></div>
                        <div><h3 class="case-img-cont-heading">A Unique Place - creating Volkswagen Home concept</h3></div>
                        <div><p class="case-img-cont-para text-sm">Volkswagen's ambition was to build a first-in-the-world boutique, a place where customers would be compelled by a combination of coziness and luxury. Netguru provided consulting services to design a c...</p></div>
                    </div>
                </div>
            </div>
            <!-- Sachin Wala Section -->
            <!-- service-section -->
            <div class="section-service text-center section-padding">
            <div class="service-about">
            <!-- <div class="insights-heading">
                <h3 class="section-heading">Ideation and evaluation services</h3>
                <h1 class="bg-insight-heading">Publications</h1>
            </div> -->
            <h2 class="section-heading background-content relative z-10">Ideation and evaluation <span class="color-green">services</span></h2>
            <p class="text p-2 margin-2 ">Find a way forward for your business with our services focused on idea
                evaluation. Learn how to
                accelerate the first steps ofI the innovation process.</p>
            </div>
            <div class="box-container">
            <div class="box p-3 mb-3">
                <div class="icon p-1"><img src="<?= get_img() ?>service-icon-1.png" alt="" srcset=""></div>
                <h3 class="margin-2 p-1 sub-heading">Product validation sprint</h3>
                <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                    desirability, usability, feasibility, viability and
                    product/market fit aimed at reducing the risk of bringing a product to the market.</p>
                <a href="http://">Learn more</a>
            </div>
            <div class="box p-3 mb-3">
                <div class="icon p-1"><img src="<?= get_img() ?>service-icon-2.png" alt="" srcset=""></div>
                <h3 class="margin-2 p-1 sub-heading">Product design sprint</h3>
                <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                    desirability, usability, feasibility, viability and
                    product/market fit aimed at reducing the risk of bringing a product to the market.</p>
                <a href="http://">Learn more</a>
            </div>
            <div class="box p-3 mb-3">
                <div class="icon p-1"><img src="<?= get_img() ?>service-icon-3.png" alt="" srcset=""></div>
                <h3 class="margin-2 p-1 sub-heading">UX review</h3>
                <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                    desirability, usability, feasibility, viability and
                    product/market fit aimed at reducing the risk of bringing a product to the market.</p>
                <a href="http://">Learn more</a>
            </div>
            <div class="box p-3 mb-3">
                <div class="icon p-1"><img src="<?= get_img() ?>service-icon-4.png" alt="" srcset=""></div>
                <h3 class="margin-2 p-1 sub-heading">Research & development</h3>
                <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                    desirability, usability, feasibility, viability and
                    product/market fit aimed at reducing the risk of bringing a product to the market.</p>
                <a href="http://">Learn more</a>
            </div>
            <div class="box p-3 mb-3">
                <div class="icon p-1"><img src="<?= get_img() ?>service-icon-5.png" alt="" srcset=""></div>
                <h3 class="margin-2 p-1 sub-heading">User research</h3>
                <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                    desirability, usability, feasibility, viability and
                    product/market fit aimed at reducing the risk of bringing a product to the market.</p>
                <a href="http://">Learn more</a>

            </div>
            <div class="box p-3 mb-3">
                <div class="icon p-1"><img src="<?= get_img() ?>service-icon-5.png" alt="" srcset=""></div>
                <h3 class="margin-2 p-1 sub-heading">User research</h3>
                <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                    desirability, usability, feasibility, viability and
                    product/market fit aimed at reducing the risk of bringing a product to the market.</p>
                <a href="http://">Learn more</a>

            </div>
            </div>
            </div>
        </div>

        <!-- Service 5 -->
        <div id="service-type-5" class="ser-li-section">
            <div class="grid grid-2 section-padding">
                <div class="service-main-heading-5"><h2 class="section-heading background-content relative z-10">Low-code development<span class="color-green">services</span></h2></div>
                <div class="case-para"><p class="w-70">Rapid innovation requires unprecedented speed and hassle-free solutions. Fast-track development and make the most of low-code platforms.</p></div>
            </div>
            <div class="case-container flex-center-center section-padding">
                <div class="case-sub-head">
                    <div class="text-center"><h1 class="">Low-code case studies<span class="color-green">services</span></h1></div>
                    <div class="text-center w-80"><p class="case-para py-3">Building custom applications can be much easier when you have the right tools. See how we accelerate product development.</p></div>
                </div>
                <div class="grid grid-3">
                    <div class="case-img-cont">
                        <div class="case-img"><img class="" src="<?= get_img() ?>ser-5-case-1.webp" alt="about"></div>
                        <div><h3 class="case-img-cont-heading">A Unique Place - creating Volkswagen Home concept</h3></div>
                        <div><p class="case-img-cont-para text-sm">Volkswagen's ambition was to build a first-in-the-world boutique, a place where customers would be compelled by a combination of coziness and luxury. Netguru provided consulting services to design a c...</p></div>
                    </div>
                    <div class="case-img-cont">
                        <div class="case-img"><img class="" src="<?= get_img() ?>ser-5-case-2.webp" alt="about"></div>
                        <div><h3 class="case-img-cont-heading">A Unique Place - creating Volkswagen Home concept</h3></div>
                        <div><p class="case-img-cont-para text-sm">Volkswagen's ambition was to build a first-in-the-world boutique, a place where customers would be compelled by a combination of coziness and luxury. Netguru provided consulting services to design a c...</p></div>
                    </div>
                    <div class="case-img-cont">
                        <div class="case-img"><img class="" src="<?= get_img() ?>ser-5-case-3.webp" alt="about"></div>
                        <div><h3 class="case-img-cont-heading">A Unique Place - creating Volkswagen Home concept</h3></div>
                        <div><p class="case-img-cont-para text-sm">Volkswagen's ambition was to build a first-in-the-world boutique, a place where customers would be compelled by a combination of coziness and luxury. Netguru provided consulting services to design a c...</p></div>
                    </div>
                </div>
            </div>
            <!-- Sachin Wala Section -->
            <!-- service-section -->
            <div class="section-service text-center section-padding">
            <div class="service-about">
            <!-- <div class="insights-heading">
                <h3 class="section-heading">Ideation and evaluation services</h3>
                <h1 class="bg-insight-heading">Publications</h1>
            </div> -->
            <h2 class="section-heading background-content relative z-10">Ideation and evaluation <span class="color-green">services</span></h2>
            <p class="text p-2 margin-2 ">Find a way forward for your business with our services focused on idea
                evaluation. Learn how to
                accelerate the first steps ofI the innovation process.</p>
            </div>
            <div class="box-container">
            <div class="box p-3 mb-3">
                <div class="icon p-1"><img src="<?= get_img() ?>service-icon-1.png" alt="" srcset=""></div>
                <h3 class="margin-2 p-1 sub-heading">Product validation sprint</h3>
                <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                    desirability, usability, feasibility, viability and
                    product/market fit aimed at reducing the risk of bringing a product to the market.</p>
                <a href="http://">Learn more</a>
            </div>
            <div class="box p-3 mb-3">
                <div class="icon p-1"><img src="<?= get_img() ?>service-icon-2.png" alt="" srcset=""></div>
                <h3 class="margin-2 p-1 sub-heading">Product design sprint</h3>
                <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                    desirability, usability, feasibility, viability and
                    product/market fit aimed at reducing the risk of bringing a product to the market.</p>
                <a href="http://">Learn more</a>
            </div>
            <div class="box p-3 mb-3">
                <div class="icon p-1"><img src="<?= get_img() ?>service-icon-3.png" alt="" srcset=""></div>
                <h3 class="margin-2 p-1 sub-heading">UX review</h3>
                <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                    desirability, usability, feasibility, viability and
                    product/market fit aimed at reducing the risk of bringing a product to the market.</p>
                <a href="http://">Learn more</a>
            </div>
            <div class="box p-3 mb-3">
                <div class="icon p-1"><img src="<?= get_img() ?>service-icon-4.png" alt="" srcset=""></div>
                <h3 class="margin-2 p-1 sub-heading">Research & development</h3>
                <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                    desirability, usability, feasibility, viability and
                    product/market fit aimed at reducing the risk of bringing a product to the market.</p>
                <a href="http://">Learn more</a>
            </div>
            <div class="box p-3 mb-3">
                <div class="icon p-1"><img src="<?= get_img() ?>service-icon-5.png" alt="" srcset=""></div>
                <h3 class="margin-2 p-1 sub-heading">User research</h3>
                <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                    desirability, usability, feasibility, viability and
                    product/market fit aimed at reducing the risk of bringing a product to the market.</p>
                <a href="http://">Learn more</a>

            </div>
            <div class="box p-3 mb-3">
                <div class="icon p-1"><img src="<?= get_img() ?>service-icon-5.png" alt="" srcset=""></div>
                <h3 class="margin-2 p-1 sub-heading">User research</h3>
                <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                    desirability, usability, feasibility, viability and
                    product/market fit aimed at reducing the risk of bringing a product to the market.</p>
                <a href="http://">Learn more</a>

            </div>
            </div>
            </div>
        </div>

        <!-- Service 6 -->
        <div id="service-type-6" class="ser-li-section">
            <div class="grid grid-2 section-padding">
                <div class="service-main-heading-6"><h2 class="section-heading background-content relative z-10">AI, ML, and data science <span class="color-green">services</span></h2></div>
                <div class="case-para"><p class="w-70">AI-powered solutions might soon upend entire industries. For now, we are testing how far this digital acceleration leads and turning data science into art. Make data your competitive advantage.</p></div>
            </div>
            <div class="case-container flex-center-center section-padding">
                <div class="case-sub-head">
                    <div class="text-center"><h1 class="">AI & ML case studies<span class="color-green">services</span></h1></div>
                    <div class="text-center w-80"><p class="case-para py-3">From preliminary exploration to full-scale implementation, we're here to tackle your challenges. See how we boost efficiency and drive change.</p></div>
                </div>
                <div class="grid grid-3">
                    <div class="case-img-cont">
                        <div class="case-img"><img class="" src="<?= get_img() ?>ser-6-case-1.webp" alt="about"></div>
                        <div><h3 class="case-img-cont-heading">A Unique Place - creating Volkswagen Home concept</h3></div>
                        <div><p class="case-img-cont-para text-sm">Volkswagen's ambition was to build a first-in-the-world boutique, a place where customers would be compelled by a combination of coziness and luxury. Netguru provided consulting services to design a c...</p></div>
                    </div>
                    <div class="case-img-cont">
                        <div class="case-img"><img class="" src="<?= get_img() ?>ser-6-case-2.webp" alt="about"></div>
                        <div><h3 class="case-img-cont-heading">A Unique Place - creating Volkswagen Home concept</h3></div>
                        <div><p class="case-img-cont-para text-sm">Volkswagen's ambition was to build a first-in-the-world boutique, a place where customers would be compelled by a combination of coziness and luxury. Netguru provided consulting services to design a c...</p></div>
                    </div>
                    <div class="case-img-cont">
                        <div class="case-img"><img class="" src="<?= get_img() ?>ser-6-case-3.webp" alt="about"></div>
                        <div><h3 class="case-img-cont-heading">A Unique Place - creating Volkswagen Home concept</h3></div>
                        <div><p class="case-img-cont-para text-sm">Volkswagen's ambition was to build a first-in-the-world boutique, a place where customers would be compelled by a combination of coziness and luxury. Netguru provided consulting services to design a c...</p></div>
                    </div>
                </div>
            </div>
            <!-- Sachin Wala Section -->
            <!-- service-section -->
            <div class="section-service text-center section-padding">
            <div class="service-about">
            <!-- <div class="insights-heading">
                <h3 class="section-heading">Ideation and evaluation services</h3>
                <h1 class="bg-insight-heading">Publications</h1>
            </div> -->
            <h2 class="section-heading background-content relative z-10">Ideation and evaluation <span class="color-green">services</span></h2>
            <p class="text p-2 margin-2 ">Find a way forward for your business with our services focused on idea
                evaluation. Learn how to
                accelerate the first steps ofI the innovation process.</p>
            </div>
            <div class="box-container">
            <div class="box p-3 mb-3">
                <div class="icon p-1"><img src="<?= get_img() ?>service-icon-1.png" alt="" srcset=""></div>
                <h3 class="margin-2 p-1 sub-heading">Product validation sprint</h3>
                <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                    desirability, usability, feasibility, viability and
                    product/market fit aimed at reducing the risk of bringing a product to the market.</p>
                <a href="http://">Learn more</a>
            </div>
            <div class="box p-3 mb-3">
                <div class="icon p-1"><img src="<?= get_img() ?>service-icon-2.png" alt="" srcset=""></div>
                <h3 class="margin-2 p-1 sub-heading">Product design sprint</h3>
                <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                    desirability, usability, feasibility, viability and
                    product/market fit aimed at reducing the risk of bringing a product to the market.</p>
                <a href="http://">Learn more</a>
            </div>
            <div class="box p-3 mb-3">
                <div class="icon p-1"><img src="<?= get_img() ?>service-icon-3.png" alt="" srcset=""></div>
                <h3 class="margin-2 p-1 sub-heading">UX review</h3>
                <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                    desirability, usability, feasibility, viability and
                    product/market fit aimed at reducing the risk of bringing a product to the market.</p>
                <a href="http://">Learn more</a>
            </div>
            <div class="box p-3 mb-3">
                <div class="icon p-1"><img src="<?= get_img() ?>service-icon-4.png" alt="" srcset=""></div>
                <h3 class="margin-2 p-1 sub-heading">Research & development</h3>
                <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                    desirability, usability, feasibility, viability and
                    product/market fit aimed at reducing the risk of bringing a product to the market.</p>
                <a href="http://">Learn more</a>
            </div>
            <div class="box p-3 mb-3">
                <div class="icon p-1"><img src="<?= get_img() ?>service-icon-5.png" alt="" srcset=""></div>
                <h3 class="margin-2 p-1 sub-heading">User research</h3>
                <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                    desirability, usability, feasibility, viability and
                    product/market fit aimed at reducing the risk of bringing a product to the market.</p>
                <a href="http://">Learn more</a>

            </div>
            <div class="box p-3 mb-3">
                <div class="icon p-1"><img src="<?= get_img() ?>service-icon-5.png" alt="" srcset=""></div>
                <h3 class="margin-2 p-1 sub-heading">User research</h3>
                <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                    desirability, usability, feasibility, viability and
                    product/market fit aimed at reducing the risk of bringing a product to the market.</p>
                <a href="http://">Learn more</a>

            </div>
            </div>
            </div>
        </div>

        <!-- Service 7 -->
        <div id="service-type-7" class="ser-li-section">
            <div class="grid grid-2 section-padding">
                <div class="service-main-heading-7"><h2 class="section-heading background-content relative z-10">Support and management <span class="color-green">services</span></h2></div>
                <div class="case-para"><p class="w-70">The project may be completed, but the product is never finished. We're here to safeguard product quality and support incremental improvements.</p></div>
            </div>
            <div class="case-container flex-center-center section-padding">
                <div class="case-sub-head">
                    <div class="text-center"><h1 class="">Support and management case studies<span class="color-green">services</span></h1></div>
                    <div class="text-center w-80"><p class="case-para py-3">We know the importance of a seamless, end-to-end process in successful product consulting and management. See how we help our clients.</p></div>
                </div>
                <div class="grid grid-3">
                    <div class="case-img-cont">
                        <div class="case-img"><img class="" src="<?= get_img() ?>ser-7-case-1.webp" alt="about"></div>
                        <div><h3 class="case-img-cont-heading">A Unique Place - creating Volkswagen Home concept</h3></div>
                        <div><p class="case-img-cont-para text-sm">Volkswagen's ambition was to build a first-in-the-world boutique, a place where customers would be compelled by a combination of coziness and luxury. Netguru provided consulting services to design a c...</p></div>
                    </div>
                    <div class="case-img-cont">
                        <div class="case-img"><img class="" src="<?= get_img() ?>ser-7-case-2.webp" alt="about"></div>
                        <div><h3 class="case-img-cont-heading">A Unique Place - creating Volkswagen Home concept</h3></div>
                        <div><p class="case-img-cont-para text-sm">Volkswagen's ambition was to build a first-in-the-world boutique, a place where customers would be compelled by a combination of coziness and luxury. Netguru provided consulting services to design a c...</p></div>
                    </div>
                    <div class="case-img-cont">
                        <div class="case-img"><img class="" src="<?= get_img() ?>ser-7-case-3.webp" alt="about"></div>
                        <div><h3 class="case-img-cont-heading">A Unique Place - creating Volkswagen Home concept</h3></div>
                        <div><p class="case-img-cont-para text-sm">Volkswagen's ambition was to build a first-in-the-world boutique, a place where customers would be compelled by a combination of coziness and luxury. Netguru provided consulting services to design a c...</p></div>
                    </div>
                </div>
            </div>
            <!-- Sachin Wala Section -->
            <!-- service-section -->
            <div class="section-service text-center section-padding">
            <div class="service-about">
            <!-- <div class="insights-heading">
                <h3 class="section-heading">Ideation and evaluation services</h3>
                <h1 class="bg-insight-heading">Publications</h1>
            </div> -->
            <h2 class="section-heading background-content relative z-10">Ideation and evaluation <span class="color-green">services</span></h2>
            <p class="text p-2 margin-2 ">Find a way forward for your business with our services focused on idea
                evaluation. Learn how to
                accelerate the first steps ofI the innovation process.</p>
            </div>
            <div class="box-container">
            <div class="box p-3 mb-3">
                <div class="icon p-1"><img src="<?= get_img() ?>service-icon-1.png" alt="" srcset=""></div>
                <h3 class="margin-2 p-1 sub-heading">Product validation sprint</h3>
                <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                    desirability, usability, feasibility, viability and
                    product/market fit aimed at reducing the risk of bringing a product to the market.</p>
                <a href="http://">Learn more</a>
            </div>
            <div class="box p-3 mb-3">
                <div class="icon p-1"><img src="<?= get_img() ?>service-icon-2.png" alt="" srcset=""></div>
                <h3 class="margin-2 p-1 sub-heading">Product design sprint</h3>
                <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                    desirability, usability, feasibility, viability and
                    product/market fit aimed at reducing the risk of bringing a product to the market.</p>
                <a href="http://">Learn more</a>
            </div>
            <div class="box p-3 mb-3">
                <div class="icon p-1"><img src="<?= get_img() ?>service-icon-3.png" alt="" srcset=""></div>
                <h3 class="margin-2 p-1 sub-heading">UX review</h3>
                <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                    desirability, usability, feasibility, viability and
                    product/market fit aimed at reducing the risk of bringing a product to the market.</p>
                <a href="http://">Learn more</a>
            </div>
            <div class="box p-3 mb-3">
                <div class="icon p-1"><img src="<?= get_img() ?>service-icon-4.png" alt="" srcset=""></div>
                <h3 class="margin-2 p-1 sub-heading">Research & development</h3>
                <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                    desirability, usability, feasibility, viability and
                    product/market fit aimed at reducing the risk of bringing a product to the market.</p>
                <a href="http://">Learn more</a>
            </div>
            <div class="box p-3 mb-3">
                <div class="icon p-1"><img src="<?= get_img() ?>service-icon-5.png" alt="" srcset=""></div>
                <h3 class="margin-2 p-1 sub-heading">User research</h3>
                <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                    desirability, usability, feasibility, viability and
                    product/market fit aimed at reducing the risk of bringing a product to the market.</p>
                <a href="http://">Learn more</a>

            </div>
            <div class="box p-3 mb-3">
                <div class="icon p-1"><img src="<?= get_img() ?>service-icon-5.png" alt="" srcset=""></div>
                <h3 class="margin-2 p-1 sub-heading">User research</h3>
                <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                    desirability, usability, feasibility, viability and
                    product/market fit aimed at reducing the risk of bringing a product to the market.</p>
                <a href="http://">Learn more</a>

            </div>
            </div>
            </div>
        </div>
    </div>

    <!-- Banner Section -->
    <div class="banner-section relative flex-center-center">
        <img class="" src="<?= get_img() ?>service-banner-bg.jpg" alt="about">
        <div class="banner-content section-padding">
            <h1>Have a project in mind ?</h1>
            <p class="py-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. ipsum dolor sit, amet consectetur adipisicing  Quod commodi qui, blanditiis porro.</p>
            <a class="project-discuss-btn basic-button mt-3">LET'S CONNECT!</a>
        </div>
    </div>

    <!-- We Adapt to your Needs -->
    <div class="we-adapt-section section-padding grid">
        <div class="adapt-side-img">
            <img class="" id="adapt-img-rotate" src="<?= get_img() ?>adap-main-side.avif" alt="about">
        </div>
        <div class="adapt-content">
            <h2 class="section-heading background-content relative z-10 text-start">We adapt to yours need.</h2>
            <div class="adapt-point-content">
                <div class="flex-center adapt-point">
                    <div>
                        <img class="" src="<?= get_img() ?>web-design.png" width= "60px" alt="about">
                    </div>
                    <div>
                        <h3>Full Flexibility</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi laudantium rem esse cumque quos,</p>
                    </div>
                </div>
                <div class="flex-center adapt-point">
                    <div>
                        <img class="" src="<?= get_img() ?>bar-chart.png" width= "60px" alt="about">
                    </div>
                    <div>
                        <h3>Instant impact</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi laudantium rem esse cumque esse cumque  umque  quos,</p>
                    </div>
                </div>
                <div class="flex-center adapt-point">
                    <div>
                        <img class="" src="<?= get_img() ?>time-zone.png" width= "60px" alt="about">
                    </div>
                    <div class="adapt-point-content">
                        <h3>Time zone aligned</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi laudantium rem esse cumque quos,</p>
                    </div>
                </div>
                <div class="flex-center adapt-point">
                    <div>
                        <img class="" src="<?= get_img() ?>expanded.png" width= "60px" alt="about">
                    </div>
                    <div>
                        <h3>Ease of scalability</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi laudantium rem  quos,</p>
                    </div>
                </div>
            </div>
            <div class="mt-2">
                <button class="basic-button header-btn">Get in Touch</button>
            </div>
            
        </div>
    </div>

    <!-- Footer Section -->
    <?php include_once('../includes/view/footer.php') ?>
    <script>
        const serLiLink = document.querySelectorAll('.ser-li-link');
        const serLiSection = document.querySelectorAll('.ser-li-section');

        let currentSection = 'service-type-1'
        window.addEventListener('scroll', () => {
            serLiSection.forEach(serLiSec => {
                if(window.scrollY >= serLiSec.offsetTop - serLiSec.clientHeight / 2){
                    currentSection = serLiSec.id;
                }
                
            });
            serLiLink.forEach(serLiLi => {
                if(serLiLi.href.includes(currentSection)){
                    document.querySelector('.active').classList.remove('active');
                    serLiLi.classList.add('active');
                }
            });
        })
    </script>
</body>
</html>