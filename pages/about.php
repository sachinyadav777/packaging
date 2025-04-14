<?php

include_once('../init.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Grow Up</title>
    <?php include_once('../includes/view/head.php') ?>

    <link rel="stylesheet" href="<?= get_css() ?>pageAbout.css">
    <link rel="stylesheet" href="<?= get_css() ?>home.css">
    <link rel="stylesheet" href="<?= get_css() ?>pagePolicy.css">
</head>

<body>
    <!-- header here -->
<?php include_once('../includes/view/header.php') ?>

    <div class="about-landing">
        <div class="about-img relative">
            <img class="absolute about-img-in" src="<?= get_img() ?>about-us.jpg" alt="about">
        </div>
        <div class="shadow absolute"></div>

        <div class="about-landing-details z-10 relative">
            <h1>Work with one of the fastest-growing <span class="color-green">digital <br> consultancies in EU</span></h1>
            
            <p class="text-center">We design and develop web and mobile applications for our clients <br>
                worldwide, focusing on outstanding user experience.</p>
            <button class="basic-button">Let's work togather</button>
        </div>
        <div class="absolute half-circle">
            <div class="one-half-circle"></div>
            <div class="two-half-circle"></div>
            <div class="three-half-circle"></div>
        </div>
    </div>


    <!-- Mission vision value -->
    <div class="missionvission section-padding">
        <div class="max-width">
            <div class="missionvission-heading flex color-heading mb-3">
                <!-- <h1 class="mission mission mr-2 background-content relative z-10">Mission</h1> -->
                <h1 class="mission mission missionColor mr-2">Mission</h1>
                <h1 class="vision mission mr-2">Vision</h1>
                <h1 class="values mission mr-2">Values</h1>
            </div>    
            <div class="missionvission-details">
                <div class="mission-details showMission grid grid-2 absolute">
                    <div class="mission-details-text">
                        <h1 class="color-heading">To be forever curious and impactful in revolutionizing technology for our partner</h1>
                        <p class="text-sm color-para mb-3">We aspire to create and deliver the best digital solutions for businesses wanting to acquire a competitive edge in the industry and serve their customers through robust digital channels.</p>
                        <p class="text-sm color-para mb-3">GrowUpNext aims to help startups and organizations recognize their potential and leverage optimum, highly customized solutions for business growth and ROI.</p>
                        <p class="text-sm color-para mb-3">the most preferred workplace in Pakistan, and enter the Fortune 500 club in the next five years.</p>
                    </div>
                    <div class="mission-details-img">
                        <img class="wh-100" src="<?= get_img() ?>mission.png" alt="mission">
                    </div>
                </div>
                <div class="mission-details grid grid-2 absolute">
                    <div class="mission-details-text">
                        <h1 class="color-heading">Transforming the world through technologies that disrupt</h1>
                        
                        <p class="text-sm color-para mb-3">We aspire to create and deliver the best digital solutions for businesses wanting to acquire a competitive edge in the industry and serve their customers through robust digital channels.</p>
                        <p class="text-sm color-para mb-3">Our vision is to help 20 million lives with better education and employment opportunities, acquire ten active ventures, scale five businesses to exit, get listed to Nasdaq.</p>
                        <p class="text-sm color-para mb-3">the most preferred workplace in Pakistan, and enter the Fortune 500 club in the next five years.</p>
                    </div>
                    <div class="mission-details-img">
                        <img class="wh-100" src="<?= get_img() ?>vision.webp" alt="mission">
                    </div>
                </div>
                <div class="mission-details grid grid-2 absolute">
                    <div class="mission-details-text">
                        <h1 class="color-heading">To be forever curious and impactful in revolutionizing technology for our partner</h1>
                        
                        <p class="text-sm color-para mb-3">We aspire to create and deliver the best digital solutions for businesses wanting to acquire a competitive edge in the industry and serve their customers through robust digital channels.</p>
                        <p class="text-sm color-para">GrowUpNext aims to help startups and organizations recognize their potential and leverage optimum, highly customized solutions for business growth and ROI.</p>
                    </div>
                    <div class="mission-details-img">
                        <img class="wh-100" src="<?= get_img() ?>values.webp" alt="mission">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Our Impact -->
    <div class="ourImpact">
        <div class="max-width short-section flex-center-between ourImpact">
            <div class="ourImpact-img">
                <img class="wh-100" src="<?= get_img() ?>ourimpact.webp" alt="impact">
            </div>
            <div class="ourImpact-text">
                <h2 class="mb-3 section-heading background-content relative z-10">Our Impact</h2>
                <p class="mb-3 text-sm">Impact 2024 & Beyond!</p>
                <p class='text-sm'>GrowUpNext vows to continue serving the community with social welfare and CSR efforts for communal betterment and well-being.Our vision to impact 20 million lives through better employment and education opportunities and empowerment marches toward 2023, and we will aggressively pursue the future beyond.</p>
            </div>
        </div>
    </div>


    <!-- conecting -->
    <div class="connectingbusiness section-padding">
        <div class="max-width">
            <h1 class="text-center background-content section-heading relative z-10"><span class="color-green">Connecting</span> Business and Technology</h1>
                <!-- <div class="insights-heading mb-3 text-center">
                    <h3 class="section-heading" style="font-size:55px;"><span class="color-green">Connecting</span> Business and Technology</h3>
                    <h1 class="bg-insight-heading">Publications</h1>
                </div> -->
            <div class="connectingbusiness-detail">
                <div class="connectingbusiness-detail-top flex-center mb-3">
                    <div class="connectingbusiness-img">
                        <img class="wh-100" src="<?= get_img() ?>connect-img.webp" alt="connect">
                    </div>
                    <div class="connectingbusiness-text">
                        <h1 class="section-heading text-start">Scale up and be one step ahead</h1>
                        <p class="text-sm">In the digital era, time and technology are of the essence. Your business can't stop. <b>Your ideas can't wait till tomorrow to be linked with a proper technology solution</b> and put into life</p>
                        <p class="text-sm">To seize market opportunities, you need to use cutting-edge software solutions that allow you to stay always one step ahead of your competitors.</p>
                        <p class="text-sm">You just need <b>a reliable software partner to help scale your growth with technology</b>.</p>
                    </div>
                </div>
                <div class="connectingbusiness-detail-bottom flex-center">
                    <div class="connectingbusiness-text">
                        <h1 class="section-heading text-start">Scale up and be one step ahead</h1>
                        <p class="text-sm">In the digital era, time and technology are of the essence. Your business can't stop. <b>Your ideas can't wait till tomorrow to be linked with a proper technology solution</b> and put into life</p>
                        <p class="text-sm">To seize market opportunities, you need to use cutting-edge software solutions that allow you to stay always one step ahead of your competitors.</p>
                        <p class="text-sm">You just need <b>a reliable software partner to help scale your growth with technology</b>.</p>
                    </div>
                    <div class="connectingbusiness-img">
                        <img class="wh-100" src="<?= get_img() ?>Kasia-i-Agnieszka.webp" alt="connect">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- contact div -->
    <div class="goToContact short-section">
        <div class="max-width flex-center-between goToContact">
            <div class="goToContact-text">
                <h2 class="text-start section-heading">Embark on a conversational journey with us</h2>
                <p class="text-sm">and turn your business ideas into reality with software services</p>
            </div>
            <div class="goToContact-button">
                <button class="basic-button">Contact us</button>
            </div>
        </div>
    </div>


    <!-- coorporation -->
    <div class="coorporation ourImpact-text section-padding">
        <div class="max-width coorporation">
            <h1 class="text-center background-content section-heading relative z-10">Cooperation Built on<span class="color-green"> Values</span></h1>
            <!-- <div class="insights-heading mb-3 text-center">
                <h3 class="section-heading" style="font-size:55px;">Cooperation Built on<span class="color-green"> Values</span></h3>
                <h1 class="bg-insight-heading">Publications</h1>
            </div> -->
            <P class="text-center mb-2 text-sm">We're the team sharing the same truth values. Whether it's everyday work, cooperating with business partners,
            or facing challenges - we know how to act and stay true to ourselves and our principles.</P>
            <div class="coorporation-box grid grid-3">
                <div class="box p-3 mb-3 text-center">
                    <div class="icon p-1 coorporation-img"><img class="" src="<?= get_img() ?>rozwoj.webp" alt="rozwoj" ></div>
                    <h3 class="margin-2 p-1 sub-heading">Product validation sprint</h3>
                    <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                        desirability, usability, feasibility, viability.</p>
                </div>
                <div class="box p-3 mb-3 text-center">
                    <div class="icon p-1 coorporation-img"><img class="" src="<?= get_img() ?>rozwoj.webp" alt="rozwoj" ></div>
                    <h3 class="margin-2 p-1 sub-heading">Product validation sprint</h3>
                    <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                        desirability, usability, feasibility, viability.</p>
                </div>
                <div class="box p-3 mb-3 text-center">
                    <div class="icon p-1 coorporation-img"><img class="" src="<?= get_img() ?>rozwoj.webp" alt="rozwoj" ></div>
                    <h3 class="margin-2 p-1 sub-heading">Product validation sprint</h3>
                    <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                        desirability, usability, feasibility, viability.</p>
                </div>
                <div class="box p-3 mb-3 text-center">
                    <div class="icon p-1 coorporation-img"><img class="" src="<?= get_img() ?>rozwoj.webp" alt="rozwoj" ></div>
                    <h3 class="margin-2 p-1 sub-heading">Product validation sprint</h3>
                    <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                        desirability, usability, feasibility, viability.</p>
                </div>
                <div class="box p-3 mb-3 text-center">
                    <div class="icon p-1 coorporation-img"><img class="" src="<?= get_img() ?>rozwoj.webp" alt="rozwoj" ></div>
                    <h3 class="margin-2 p-1 sub-heading">Product validation sprint</h3>
                    <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                        desirability, usability, feasibility, viability.</p>
                </div>
                <div class="box p-3 mb-3 text-center">
                    <div class="icon p-1 coorporation-img"><img class="" src="<?= get_img() ?>rozwoj.webp" alt="rozwoj" ></div>
                    <h3 class="margin-2 p-1 sub-heading">Product validation sprint</h3>
                    <p class="text-sm margin-2 p-1 overflow-text">A review of product creation essentials such as
                        desirability, usability, feasibility, viability.</p>
                </div>

            </div>
        </div>
    </div>


    <!-- new section -->
    <div class="Opportunities section-padding">
        <div class="max-width grid grid-2 Opportunities">
            <div class="Opportunities-left-text">
                <h1 class="section-heading text-start background-content relative z-10 pb-3">Our Opportunities For Growth & Development</h1>
            </div>

            <div class="Opportunities-right-text">
                <p class="mb-3 text-sm">We are a team of lifelong learners passionate about technology and innovation. At GrowUpNext, we believe hard work and dedication should be recognized and rewarded, which is why we have employed a transparent, yet encouraging that emphasizes attitude, performance, and results.</p>

                <p class="mb-3 text-sm">we believe hard work and dedication should be recognized and rewarded, which is why we have employed a transparent, yet encouraging that emphasizes attitude.</p>

                <p class="text-sm">We offer competitive salary packages, bi-annual performance-based increments, a comprehensive healthcare plan, provident fund facilities with matching contributions, paid time off and holidays, professional development opportunities like training and conferences, employee referral bonuses, employee assistance programs for mental health and well-being, and more!</p>
            </div>
        </div>
    </div>
    

    <!-- core value -->

    <div class="coreValue section-padding ">
        
        <div class="max-width grid grid-2 coreValue">
            <div class="coreValue-left">
                <div class="coreValue-left-inner">
                    <h1>GrowUpNext core values evolved with us as the company grew and <span class="color-green">we learned from our experiences.</span></h1>
                    <p class="text-sm">They epitomise what we want to achieve, and they might change in the future, as we aim higher and higher. We think of those values as important to our culture and individual sense of accomplishment.</p>
                    <button class="basic-button">Download Culture Book</button>
                </div>
            </div>
            <div class="coreValue-right">
                <div class="coreValue-right-box flex mb-3" >
                    <div class="coreValue-right-box-img mr-2">
                        <img class="wh-100" src="<?= get_img() ?>about-one.svg" alt="about-one" srcset="">
                    </div>
                    <div class="coreValue-right-box-text">
                        <h3 class="mb-2">Exceed clients’ and colleagues’ expectations</h3>
                        <p class="text-sm">Never settle for “good enough” when you know you can and should do better.</p>
                    </div>

                </div>
                <div class="coreValue-right-box flex mb-3" >
                    <div class="coreValue-right-box-img mr-2">
                        <img class="wh-100" src="<?= get_img() ?>about-two.svg" alt="about-two" srcset="">
                    </div>
                    <div class="coreValue-right-box-text">
                        <h3 class="mb-2">Exceed clients’ and colleagues’ expectations</h3>
                        <p class="text-sm">Never settle for “good enough” when you know you can and should do better.</p>
                    </div>

                </div>
                <div class="coreValue-right-box flex mb-3" >
                    <div class="coreValue-right-box-img mr-2">
                        <img class="wh-100" src="<?= get_img() ?>about-three.svg" alt="about" srcset="">
                    </div>
                    <div class="coreValue-right-box-text">
                        <h3 class="mb-2">Exceed clients’ and colleagues’ expectations</h3>
                        <p class="text-sm">Never settle for “good enough” when you know you can and should do better.</p>
                    </div>

                </div>
                <div class="coreValue-right-box flex mb-3" >
                    <div class="coreValue-right-box-img mr-2">
                        <img class="wh-100" src="<?= get_img() ?>about-four.svg" alt="aboutOne" srcset="">
                    </div>
                    <div class="coreValue-right-box-text">
                        <h3 class="mb-2">Exceed clients’ and colleagues’ expectations</h3>
                        <p class="text-sm">Never settle for “good enough” when you know you can and should do better.</p>
                    </div>

                </div>
                <div class="coreValue-right-box flex mb-3" >
                    <div class="coreValue-right-box-img mr-2">
                        <img class="wh-100" src="<?= get_img() ?>about-five.svg" alt="aboutOne" srcset="">
                    </div>
                    <div class="coreValue-right-box-text">
                        <h3 class="mb-2">Exceed clients’ and colleagues’ expectations</h3>
                        <p class="text-sm">Never settle for “good enough” when you know you can and should do better.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- counter numbers -->
    <div class="numbercount section-padding">
        <!-- <h1>GrowUpNext in numbers</h1>
        <p>Our Values</p> -->
        <div class="numbercount-box grid grid-3 max-width">
            <div class="counter">
                <h1 class="count" data-target="1000">0</h1>
                <p>New Visiters Every Week</p>
            </div>
            <div class="counter">
                <h1 class="count" data-target="268">0</h1>
                <p>Happy customers every year</p>
            </div>
            <div class="counter">
                <h1 class="count" data-target="172">0</h1>
                <p>Won Amazing Awards</p>
            </div>
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


<script>

    const vision = document.getElementsByClassName('vision')[0]
    const values = document.getElementsByClassName('values')[0]

    let missiondetails = document.getElementsByClassName('mission-details')
    let mission = document.getElementsByClassName('mission')
    for(let i = 0; i < mission.length; i++){
        mission[i].addEventListener('click', function(){
            mission[i].classList.add('missionColor')
            missiondetails[i].classList.add('showMission')
            
            
            for(let a=0; a<mission.length; a++){
                if(a != i){
                    mission[a].classList.remove('missionColor')
                    missiondetails[a].classList.remove('showMission')
                }
            }
        })
    }


    

    
    
    
    function numberStart(){
        if(pageYOffset > 4790){
            const counts = document.querySelectorAll('.count')
            const speed = 97
            counts.forEach((counter) => {
                function upDate(){
                    const target = Number(counter.getAttribute('data-target'))
                    const count = Number(counter.innerText)
                    const inc = target / speed        
                    if(count < target){
                        counter.innerText = Math.floor(inc + count) 
                        setTimeout(upDate, 500)
                    }else{
                        counter.innerText = target+'+'
                    }
                }
                upDate()
            })
        }
    }
    window.addEventListener('scroll', numberStart)

    


    console.log(window.scrollY)
// 4714
</script>
</body>
</html>