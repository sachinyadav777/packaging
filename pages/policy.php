<?php

include_once('../init.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Policy</title>

    <?php include_once('../includes/view/head.php') ?>

    <link rel="stylesheet" href="<?= get_css() ?>pagePolicy.css">
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
            <img class="absolute about-img-in" src="<?= get_img() ?>policy-bg.jpg" alt="about">
        </div>
        <div class="shadow absolute"></div>

        <div class="about-landing-details z-10 relative">
            <h1>You need to check <span class="color-green">Our <br> policy.</span></h1>
            
            <p class="text-center">Before we start, we would like to better understand your needs.</p>
            <button class="basic-button">Let's work togather</button>
        </div>
        <div class="absolute half-circle">
            <div class="one-half-circle"></div>
            <div class="two-half-circle"></div>
            <div class="three-half-circle"></div>
        </div>
    </div>


    <!-- start policy -->

    <div class="policy section-padding grid grid-2">
        <div class="policy-img">
            <img class="wh-100" src="<?= get_img() ?>policy-img-icon.jpg" alt="policy">
        </div>
        <div class="policy-details">
            <h1 class="mb-3">Privacy Policy</h1>
            <p class="mb-3">Last updated October 1 2021.</p>
            <p class="mb-3">We at GrowUpNext are concerned about the privacy and security of the personal information of all visitors to this website. Please read the following to learn more about our privacy policy, and how we treat information collected from our visitors and users. Please note that by visiting this site or using Metro App or any other Application and Website you agree to be bound by the terms and conditions of this Privacy Policy which is a legal agreement between you and us.</p>
            <p>Our privacy policy is subject to change at any time, without notice. To make sure you are aware of any changes, kindly review this policy periodically.</p>
        </div>
    </div>

    <!-- personal information only text -->
    <div class="all-policy section-padding">
        <div class="all-policy-inside">
            <h1>Personal Information</h1>
            <p>We do not collect any personal information from our users.</p>
            <p>None of personal information is shared with any third party.</p>
            <p>You can visit the website without revealing any personal information. However, once you register yourself on our website to avail our services, you will be sharing your personal information with us.</p>
            <p>This helps us provide you a safe and customized experience on our site.</p>
            <p>We may automatically track certain information about you based upon your behavior on our Site.</p>
            <p>We will not use or share any information collected at this page for direct marketing purposes.</p>
            <span>If you e-mail us or filling contact us form on our website, you are voluntarily releasing information to us. Your e-mail address will be used by us to respond to you.</span>
            <p>By entering this website you are consenting to the terms of our information privacy policy. By submitting your personal information to us, you will be treated as having given your permission for the processing of your personal data as set out in this policy.</p>

            <h1>Information placed on your computer</h1>
            <p>We may store some information such as cookies on your computer when you look at our website. Cookies are pieces of information that a website transfers to the hard drive of a visitor’s computer for record-keeping purposes. This information facilitates your use of our website and ensures that you do not need to re-enter your details every time you visit it. You can erase or choose to block this information from your computer if you want to; please refer to your browser settings to do so. Erasing or blocking such information may limit the range of features available to the visitor on our website. We also use such information to provide visitors a personalized experience on our website. We may use such information to allow visitors to use the website without logging on upon returning, to auto-populate email forms, to make improvements and to better tailor our website to our visitors’ needs. This information can verify that visitors meet the criteria required to process their requests.</p>
        </div>
    </div>

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