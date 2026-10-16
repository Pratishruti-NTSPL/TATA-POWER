<?php include_once 'page_initialization.php'; ?>

<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="Description" content="" />
    <meta name="Keywords" content="" />
    <title>Tata Advance System Limited</title>
    <?php include_once "include/css_script.php"; ?>

</head>

<body class="home-page">
    <?php include_once "include/header.php"; ?>

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>
                <section class="banner-wraper">
                    <!-- Rounded Banner Card -->
                    <div class="banner-inner">
                        <!-- Background Image Swiper Slider (Only Slides, No Pagination) -->
                        <div class="banner-bg swiper banner-hero-swiper">
                            <div class="swiper-wrapper">
                                <!-- Slide 1 -->
                                <div class="swiper-slide">
                                    <img src="images/Banner/Layer 1 copy.png" alt="Hero Slide 1" class="banner-img">
                                </div>
                                <!-- Slide 2 -->
                                <div class="swiper-slide">
                                    <img src="images/Banner/Cinematic Helicopter Over Misty Forest.png"
                                        alt="Hero Slide 2" class="banner-img">
                                </div>
                                <!-- Slide 3 -->
                                <div class="swiper-slide">
                                    <img src="images/Banner/Military Transport Over Alpine Valley.png"
                                        alt="Hero Slide 3" class="banner-img">
                                </div>
                            </div>
                        </div>

                        <!-- Banner Content (Bottom Aligned) -->
                        <!-- Banner Bottom Content: Single Flex Div (Justify Between) -->
                        <div class="banner-container">
                            <div class="d-flex align-items-end justify-content-between w-100">

                                <!-- Left: Headline Text -->
                                <div class="banner-caption">
                                    <span class="banner-subtitle has_fade_anim" data-fade-from="left">Advanced Aerospace
                                        Technology</span>
                                    <h1 class="banner-title has_char_anim">
                                        Engineering
                                        <span>The <strong>India's Future</strong></span>
                                        of Aerospace & Defence
                                    </h1>
                                </div>

                                <!-- Right: Swiper News Slider & Pagination Dots -->
                                <div class="banner-side-box d-flex flex-column align-items-end">

                                    <!-- 1. Pagination Dots (Aligned above the News Card) -->
                                    <div class="banner-news-pagination swiper-pagination"></div>

                                    <!-- 2. Swiper News Card Slider -->
                                    <div class="swiper banner-news-swiper">
                                        <div class="swiper-wrapper">

                                            <!-- Slide 1 -->
                                            <div class="swiper-slide">
                                                <div class="banner-news-card d-flex align-items-center">
                                                    <div class="news-card-thumb flex-shrink-0">
                                                        <img src="<?php echo $base_url; ?>images/Banner/Layer 952.png"
                                                            alt="News Thumbnail 1" class="news-thumb-img">
                                                    </div>
                                                    <div class="news-card-content flex-grow-1">
                                                        <p class="news-card-title mb-1">
                                                            Tata Advanced Systems <br> Wins Major 1,577 Crore <br>
                                                            Indian Army Drone ...
                                                        </p>
                                                        <a href="#"
                                                            class="news-card-link d-inline-flex align-items-center gap-1">
                                                            Read More <span>&rarr;</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Slide 2 -->
                                            <div class="swiper-slide">
                                                <div class="banner-news-card d-flex align-items-center">
                                                    <div class="news-card-thumb flex-shrink-0">
                                                        <img src="<?php echo $base_url; ?>images/Banner/Layer 952.png"
                                                            alt="News Thumbnail 2" class="news-thumb-img">
                                                    </div>
                                                    <div class="news-card-content flex-grow-1">
                                                        <p class="news-card-title mb-1">
                                                            Tata Advanced Systems <br> Delivers 100th Fuselage <br> for
                                                            Boeing AH-64 Apache ...
                                                        </p>
                                                        <a href="#"
                                                            class="news-card-link d-inline-flex align-items-center gap-1">
                                                            Read More <span>&rarr;</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Slide 3 -->
                                            <div class="swiper-slide">
                                                <div class="banner-news-card d-flex align-items-center">
                                                    <div class="news-card-thumb flex-shrink-0">
                                                        <img src="<?php echo $base_url; ?>images/Banner/Layer 952.png"
                                                            alt="News Thumbnail 2" class="news-thumb-img">
                                                    </div>
                                                    <div class="news-card-content flex-grow-1">
                                                        <p class="news-card-title mb-1">
                                                            Tata Advanced Systems <br> Delivers 100th Fuselage <br> for
                                                            Boeing AH-64 Apache ...
                                                        </p>
                                                        <a href="#"
                                                            class="news-card-link d-inline-flex align-items-center gap-1">
                                                            Read More <span>&rarr;</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Slide 4 -->
                                            <div class="swiper-slide">
                                                <div class="banner-news-card d-flex align-items-center">
                                                    <div class="news-card-thumb flex-shrink-0">
                                                        <img src="<?php echo $base_url; ?>images/Banner/Layer 952.png"
                                                            alt="News Thumbnail 2" class="news-thumb-img">
                                                    </div>
                                                    <div class="news-card-content flex-grow-1">
                                                        <p class="news-card-title mb-1">
                                                            Tata Advanced Systems <br> Delivers 100th Fuselage <br> for
                                                            Boeing AH-64 Apache ...
                                                        </p>
                                                        <a href="#"
                                                            class="news-card-link d-inline-flex align-items-center gap-1">
                                                            Read More <span>&rarr;</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- At a glance section -->
                <section class="section at-a-glance-wrapper position-relative">
                    <div class="container ">
                        <div class="row align-items-start">

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="section-tag">
                                    TASL At A Glance
                                </div>
                                <h2 class="section-main-heading has_fade_anim has_char_anim" data-fade-from="left"
                                    data-fade-offset="30">
                                    <span>Built on Strength</span> Driven by Numbers
                                </h2>
                                <p data-aos="fade-up" data-aos-duration="1200"
                                    data-aos-delay="300">
                                    Tata Advanced Systems Limited is one of the country's leading private
                                    players for advanced defence and aerospace solutions and aspires to be
                                    the 'Partner of Choice', especially for the government's 'Make in India'
                                    programme.
                                </p>
                                <a href="javascript:void(0)"
                                    class="d-inline-flex align-items-center gap-2 rounded-0 read-more-btn">
                                    <span class="read-more-text">
                                        <span class="text-current">Read More</span>
                                        <span class="text-hover">Read More</span>
                                    </span>
                                    <div class="arrow-box">
                                        <span class="arrow-current"></span>
                                        <span class="arrow-hover">

                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div
                                            class="number-card bg-white  flex-fill  d-flex flex-column cut-part strength-card">
                                            <div class="mb-5 d-flex justify-content-end align-items-start ">
                                                <div class="image-part">
                                                    <img class="image" src="images/Strength Section-2/coronavirus.png"
                                                        alt="Global supply chain">
                                                </div>
                                            </div>
                                            <div class="">
                                                <h2>120+</h2>
                                                <hr class="hr-white">
                                                <p class="">
                                                    Countries <span class="d-block">Global Supply Chain</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row mt-6">
                            <div class="col-lg-6 col-md-6">
                                <div class="row">

                                    <div class="col-lg-6 col-md-6">
                                        <div class="number-card vehicle-card d-flex flex-column strength-card ">
                                            <div class="mb-5 d-flex justify-content-end align-items-start ">
                                                <div class="image-part">
                                                    <img class="image"
                                                        src="<?php echo $base_url; ?>images/Strength Section-2/airo.png"
                                                        alt="vehicle-supplied">
                                                </div>
                                            </div>
                                            <div class="">
                                                <h2>1.7 Lakh+</h2>
                                                <hr class="hr-sky">
                                                <p class="mb-0">
                                                    Vehicles supplied to <span class="d-block">Indian Armed
                                                        Forces</span>

                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div
                                            class="number-card bg-white flex-fill d-flex flex-column cut-part strength-card ">
                                            <div class="mb-5 d-flex justify-content-end align-items-start ">
                                                <div class="image-part">
                                                    <img class="image"
                                                        src="<?php echo $base_url; ?>images/Strength Section-2/maximize.png"
                                                        alt="manufacturing area">
                                                </div>
                                            </div>
                                            <div class="">
                                                <h2>3 Million+</h2>
                                                <hr class="hr-white">
                                                <p class=" mb-0">
                                                    Sq.ft. manufacturing area
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="row justify-content-end">
                                    <div class="col-lg-6 col-md-6">
                                        <div
                                            class="number-card talented-global text-white flex-fill  d-flex flex-column strength-card">
                                            <div class="mb-5 d-flex justify-content-end align-items-start ">
                                                <div class="image-part">
                                                    <img class="image"
                                                        src="<?php echo $base_url; ?>images/Strength Section-2/integrity.png"
                                                        alt="Talented global workforce">
                                                </div>
                                            </div>
                                            <div class="">
                                                <h2 class="text-light">6500+</h2>
                                                <hr class="hr-navy">
                                                <p class="mb-0">
                                                    Our Talented Global<span class="d-block">Workforce</span>

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="back-image"></div>
                </section>

                <!-- division wrapper part -->
                <section class="section division-wraper p-0">
                    <div class="container-fluid px-0">
                        <div class="row g-0">

                            <!-- Card 1: Aerostructures -->
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="division-card">
                                    <div class="division-thumbnail">
                                        <img src="<?php echo $base_url; ?>images/division/Aerostruct.png"
                                            alt="Aerostructures And Aero – Engines" class="division-bg-img">
                                    </div>
                                    <div class="division-base-overlay"></div>
                                    <div class="division-hover-overlay"></div>

                                    <div class="division-content">
                                        <h3 class="division-title  has_fade_anim has_char_anim" data-fade-from="left"
                                            data-fade-offset="30" data-aos-delay="200">
                                            <a href="javascript:void(0)">Aerostructures And Aero – Engines</a>
                                        </h3>
                                        <div class="division-description">
                                            <p>
                                                Delivering world-class aerostructures and aero-engine components with
                                                precision manufacturing.
                                            </p>
                                        </div>
                                        <div class="division-footer">
                                            <a href="javascript:void(0)" class="division-button">
                                                <span class="division-link-text train-line">Explore More</span>
                                                <span class="division-arrow">
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2.5 9.5L9.5 2.5M9.5 2.5H4M9.5 2.5V8"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2: Airborne Platforms -->
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="division-card">
                                    <div class="division-thumbnail">
                                        <img src="<?php echo $base_url; ?>images/division/Airborne Plat.png"
                                            alt="Airborne Platforms and Systems" class="division-bg-img">
                                    </div>

                                    <div class="division-base-overlay"></div>
                                    <div class="division-hover-overlay"></div>

                                    <div class="division-content">

                                        <h3 class="division-title  has_fade_anim has_char_anim" data-fade-from="left"
                                            data-fade-offset="30" data-aos-delay="400">
                                            <a href="javascript:void(0)">Airborne Platforms and Systems</a>

                                        </h3>

                                        <div class="division-description">
                                            <p>
                                                Advanced mission systems, UAVs, and airborne platforms engineered
                                                for
                                                operational superiority.
                                            </p>
                                        </div>

                                        <div class="division-footer">
                                            <a href="javascript:void(0)" class="division-button">
                                                <span class="division-link-text train-line">Explore More</span>
                                                <span class="division-arrow">
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2.5 9.5L9.5 2.5M9.5 2.5H4M9.5 2.5V8"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <!-- Card 3: Defence And Security -->
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="division-card">

                                    <div class="division-thumbnail">
                                        <img src="<?php echo $base_url; ?>images/division/Defence &S.png"
                                            alt="Defence And Security" class="division-bg-img">
                                    </div>

                                    <div class="division-base-overlay"></div>
                                    <div class="division-hover-overlay"></div>

                                    <div class="division-content">

                                        <h3 class="division-title  has_fade_anim has_char_anim" data-fade-from="left"
                                            data-fade-offset="30" data-aos-delay="600">
                                            <a href="javascript:void(0)">Defence And Security</a>

                                        </h3>
                                        <div class="division-description">
                                            <p>
                                                Delivering advanced, mission-ready solutions that safeguard borders,
                                                protect forces, and strengthen national security.
                                            </p>
                                        </div>
                                        <div class="division-footer">
                                            <a href="javascript:void(0)" class="division-button">
                                                <span class="division-link-text train-line">Explore More</span>
                                                <span class="division-arrow">
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2.5 9.5L9.5 2.5M9.5 2.5H4M9.5 2.5V8"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- Card 4: Land Mobility -->
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="division-card">
                                    <div class="division-thumbnail">
                                        <img src="<?php echo $base_url; ?>images/division/Land Mobility.png"
                                            alt="Land Mobility" class="division-bg-img">
                                    </div>
                                    <div class="division-base-overlay"></div>
                                    <div class="division-hover-overlay"></div>

                                    <div class="division-content">

                                        <h3 class="division-title  has_fade_anim has_char_anim" data-fade-from="left"
                                            data-fade-offset="30" data-aos-delay="800">
                                            <a href="javascript:void(0)">Land Mobility</a>

                                        </h3>
                                        <div class="division-description">
                                            <p>
                                                Heavy mobility combat vehicles and tactical solutions built for extreme
                                                battle terrains.
                                            </p>
                                        </div>
                                        <div class="division-footer">
                                            <a href="javascript:void(0)" class="division-button">

                                                <span class="division-link-text train-line">Explore More</span>
                                                <span class="division-arrow">
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2.5 9.5L9.5 2.5M9.5 2.5H4M9.5 2.5V8"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>

                <!-- CEO-SECTION -->
                <section class="section ceo-wraper pb-0">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12">
                                <div class="ceo-heading-left">
                                    <div class="section-tag">
                                        Chairperson & CEO
                                    </div>
                                    <h2 class="section-main-heading has_fade_anim has_char_anim" data-fade-from="right">
                                        <span>Engineering Excellence</span> Through Leadership
                                    </h2>
                                    <a href="javascript:void(0)"
                                        class="d-inline-flex align-items-center gap-2 rounded-0 read-more-btn">
                                        <span class="read-more-text">
                                            <span class="text-current">Read More</span>
                                            <span class="text-hover">Read More</span>
                                        </span>
                                        <div class="arrow-box">
                                            <span class="arrow-current"></span>
                                            <span class="arrow-hover">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
                                <div class="ceo-description" data-aos="fade-up" data-aos-duration="1200"
                                    data-aos-delay="300">
                                    <div class="ceo-quote">
                                        <img src="images/ceo/cd-icon.png" alt="quote head icon">
                                    </div>
                                    <p>
                                        At Tata Advanced Systems Limited, we believe that progress is built on
                                        innovation, precision, collaboration, and unwavering commitment to
                                        excellence. As India continues to strengthen its capabilities in aerospace
                                        and defence, our focus remains on developing advanced solutions that meet
                                        evolving...
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
                                <div class="ceo-left">
                                    <div class="ceo-smsll-slider-wrapper swiper" id="ceoRightSwiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="ceo-svg-box">
                                                    <img src="<?php echo $base_url; ?>images/ceo/sub bw1.jpg"
                                                        alt="ceo-small-img1">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="ceo-svg-box">
                                                    <img src="<?php echo $base_url; ?>images/ceo/sub bw2.jpg"
                                                        alt="ceo-small-img2">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="ceo-svg-box">
                                                    <img src="<?php echo $base_url; ?>images/ceo/Image3.jpg"
                                                        alt="ceo-small-img1">
                                                </div>
                                            </div>
                                            <!-- <div class="swiper-slide">
                                                <div class="ceo-svg-box">
                                                    <img src="<?php echo $base_url; ?>images/ceo/sub bw1.jpg"
                                                        alt="ceo-small-img2">
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12">
                                <div class=ceo-rt>
                                    <div class="ceo-slider-wrapper swiper" id="ceoRightSwiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="ceo-wrapper ceo-right">
                                                    <div class="ceo-info">
                                                        <div class="ceo-name">
                                                            <h2>Banamali Agrawala</h2>
                                                        </div>
                                                        <div class="ceo-pos">
                                                            <span>
                                                                Chairman
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="ceo-blue-shape">
                                                        <!-- <img src="<?php echo $base_url; ?>images/leadership-vector.svg"
                                                        alt="Chairperson"> -->
                                                        <div class="ceo-person">
                                                            <img src="<?php echo $base_url; ?>images/ceo/Banamli.png"
                                                                alt="Chairperson">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="swiper-slide">
                                                <div class="ceo-wrapper ceo-right">
                                                    <div class="ceo-info">
                                                        <div class="ceo-name">
                                                            <h2>NAK Browne</h2>
                                                        </div>
                                                        <div class="ceo-pos">
                                                            <span>Air Chief Marshal (Retd.)</span>
                                                            <span>Director</span>
                                                        </div>
                                                    </div>
                                                    <div class="ceo-blue-shape">
                                                        <!-- <img src="<?php echo $base_url; ?>images/leadership-vector.svg"
                                                        alt="Chairperson"> -->
                                                        <div class="ceo-person">
                                                            <img src="<?php echo $base_url; ?>images/ceo/image-2.png"
                                                                alt="Chairperson">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="swiper-slide">
                                                <div class="ceo-wrapper ceo-right">
                                                    <div class="ceo-info">
                                                        <div class="ceo-name">
                                                            <h2>Sukaran Singh</h2>
                                                        </div>
                                                        <div class="ceo-pos">
                                                            <span>CEO &amp; Managing Director</span>
                                                        </div>
                                                    </div>
                                                    <div class="ceo-blue-shape">
                                                        <!-- <img src="<?php echo $base_url; ?>images/leadership-vector.svg"
                                                        alt="Chairperson"> -->
                                                        <div class="ceo-person">
                                                            <img src="<?php echo $base_url; ?>images/ceo/image-1.png"
                                                                alt="Chairperson">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="nav-buttons">
                                        <button type="button" class="nav-btn button-next">
                                            <div class="cebt">
                                                <img src="images/ceo/arrow-left copy.png" class="svg-ceo" alt="Next">
                                            </div>
                                        </button>

                                        <button type="button" class="nav-btn button-prev">
                                            <div class="cebt">
                                                <img src="images/ceo/arrow-right copy.png" class="svg-ceo" alt="Previous">
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="jamsed-tata">
                        <img src="<?php echo $base_url; ?>images/ceo/Jamsed TATA.png" alt="Jamsed Tata">
                    </div>
                </section>

                <!-- Innovation -->
                <section class="section innovation-wraper">
                    <div class="innovation-inner">

                        <!-- Background Overlays -->
                        <div class="inno-bg-overlay">
                            <!-- 1. Left Top Black Transparent Shadow (Fading downwards) -->
                            <img src="<?php echo $base_url; ?>images/innovation/bg (7)-BE1DFD-y.png" alt=""
                                class="inno-bg-shape-topleft">

                            <!-- 2. Top Right Stars: 100% Natural Individual Raining Stars -->
                            <div class="inno-stars-cluster">
                                <!-- Individual Star Points (Different speeds & timings) -->
                                <span class="inno-star s1"></span>
                                <span class="inno-star s2"></span>
                                <span class="inno-star s3"></span>
                                <span class="inno-star s4"></span>
                                <span class="inno-star s5"></span>
                                <span class="inno-star s6"></span>
                                <span class="inno-star s7"></span>
                                <span class="inno-star s8"></span>
                                <span class="inno-star s9"></span>
                                <span class="inno-star s10"></span>
                                <span class="inno-star s11"></span>
                                <span class="inno-star s12"></span>
                                <span class="inno-star s13"></span>
                                <span class="inno-star s14"></span>



                            </div>

                            <!-- 3 & 4. Left Window Dots (Dark Upper & Pure White Lower) -->
                            <img src="<?php echo $base_url; ?>images/innovation/Left topdots.png" alt=""
                                class="inno-dots-left-1">
                            <img src="<?php echo $base_url; ?>images/innovation/Left topdots.png" alt=""
                                class="inno-dots-left-2">

                            <!-- 5 & 6. Right Window Dots (Both Pure White) -->
                            <img src="<?php echo $base_url; ?>images/innovation/Bottom right dots.png" alt=""
                                class="inno-dots-right-1">
                            <img src="<?php echo $base_url; ?>images/innovation/Bottom right dots.png" alt=""
                                class="inno-dots-right-2">
                        </div>

                        <div class="container-fluid inno-container">
                            <!-- Section Header -->
                            <div class="text-center">
                                <div class="section-tag-inno has_fade_anim has_char_anim" data-fade-from="left">
                                    INNOVATION THAT LEADS</div>
                                <h2 class="section-main-heading-inno has_fade_anim has_char_anim" data-fade-from="left">
                                    <strong>Creating Impact Through</strong> <span>Smarter Innovation</span>
                                </h2>
                            </div>

                            <!-- Central Stage -->
                            <div class="inno-stage">
                                <!-- Protractor 180 (Radar Lines) -->
                                <img src="<?php echo $base_url; ?>images/innovation/Protactor 180.png" alt=""
                                    class="inno-protractor">

                                <!-- Central Helicopter Rig -->
                                <div class="inno-helicopter-rig">
                                    <!-- 2 Light Lines beside Helicopter -->
                                    <div class="inno-heli-guideline inno-guideline-left"></div>
                                    <div class="inno-heli-guideline inno-guideline-right"></div>

                                    <!-- Helicopter Fuselage -->
                                    <img src="<?php echo $base_url; ?>images/innovation/Helicaptor rel (2).png"
                                        alt="Helicopter" class="inno-heli-body">
                                    <!-- Rotor Assembly (Anchored on Center Nut) -->
                                    <div class="inno-roter-box">

                                        <img src="<?php echo $base_url; ?>images/innovation/roter.png" alt="Rotor"
                                            class="inno-roter-img" id="gsapHelicopterRotor">


                                        <div class="inno-roter-center-pin"></div>
                                    </div>
                                </div>

                                <!-- 4 Feature Cards (Inward-aligned + 4 L-Corners) -->
                                <div class="inno-cards-grid">
                                    <!-- Card 1: Top Left (Right-aligned) -->
                                    <div class="inno-card inno-card-top-left">
                                        <div class="inno-viewfinder">
                                            <img src="<?php echo $base_url; ?>images/innovation/Gemi Star.png"
                                                alt="AI & Autonomy" class="inno-card-icon-img">
                                        </div>
                                        <h4 class="inno-card-title">Ai & Autonomy</h4>
                                        <p class="inno-card-desc">Intelligent technologies enabling smarter decisions,
                                            automation, and autonomous operations across complex environments.</p>
                                    </div>

                                    <!-- Card 2: Bottom Left (Right-aligned) -->
                                    <div class="inno-card inno-card-bottom-left">
                                        <div class="inno-viewfinder">
                                            <img src="<?php echo $base_url; ?>images/innovation/Advanced Material.png"
                                                alt="Advanced Materials" class="inno-card-icon-img">
                                        </div>
                                        <h4 class="inno-card-title">Advanced Materials</h4>
                                        <p class="inno-card-desc">Innovative materials engineered for greater strength,
                                            durability, performance, and next-generation applications.</p>
                                    </div>

                                    <!-- Card 3: Top Right (Left-aligned) -->
                                    <div class="inno-card inno-card-top-right">
                                        <div class="inno-viewfinder">
                                            <img src="<?php echo $base_url; ?>/images/innovation/Digital Eng.png"
                                                alt="Systems & Cybersecurity" class="inno-card-icon-img">
                                        </div>
                                        <h4 class="inno-card-title">Digital Engineering</h4>
                                        <p class="inno-card-desc">Advanced digital solutions transforming design,
                                            development, simulation, and engineering processes for greater efficiency.
                                        </p>
                                    </div>

                                    <!-- Card 4: Bottom Right (Left-aligned) -->
                                    <div class="inno-card inno-card-bottom-right">
                                        <div class="inno-viewfinder">
                                            <img src="<?php echo $base_url; ?>images/innovation/System & Cyber sec.png"
                                                alt="Systems & Cybersecurity" class="inno-card-icon-img">
                                        </div>
                                        <h4 class="inno-card-title">Systems & Cybersecurity</h4>
                                        <p class="inno-card-desc">Integrated secure systems ensuring resilience,
                                            connectivity, reliability, and protection across critical operations.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Press-release-wrapper section -->
                <section class="section press-release-wraper">
                    <div class="container">

                        <!-- Heading row -->
                        <div class="row align-items-end mb-4">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="press-release-wraper-header">
                                    <div>

                                        <p class="section-tag">Updates from TASL</p>
                                        <h2 class="section-main-heading has_fade_anim has_char_anim"
                                            data-fade-from="left" data-fade-offset="30"><span>Latest</span> News &amp;
                                            Media</h2>
                                    </div>

                                    <div>
                                        <a href="javascript:void(0)"
                                            class="d-inline-flex align-items-center gap-2 rounded-0 read-more-btn">
                                            <span class="read-more-text">
                                                <span class="text-current">Explore All</span>
                                                <span class="text-hover">Explore All</span>
                                            </span>
                                            <div class="arrow-box">
                                                <span class="arrow-current"></span>
                                                <span class="arrow-hover">

                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <!-- Cards -->
                        <div class="row  g-4">

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 press-news-card">
                                <div class="ratio news-img mb-3">
                                    <img src="<?php echo $base_url; ?>images/News&Media/first.png"
                                        alt="Tata High Mobility Vehicle">
                                </div>
                                <span class="news-date badge rounded-pill  px-3 py-2 mb-3 press-card-date">
                                    <img class="me-1 date-icon"
                                        src="<?php echo $base_url; ?>images/News&Media/calenderpart.png" alt="calender">
                                    10th Sep 2026
                                </span>
                                <h3 class="news-title mb-3 press-card-title">From 4×4 to 12×12 configurations, the Tata
                                    High Mobility Vehicle range brings together a versatile </h3>
                                <a href="javascript:void(0)" class="news-link text-decoration-none press-card-link">Read
                                    More <i class="fa-solid fa-long-arrow-right ms-2"></i></a>
                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 press-news-card">
                                <div class="ratio news-img mb-3">
                                    <img src="<?php echo $base_url; ?>images/News&Media/second.png"
                                        alt="Tata Boeing Aerospace Apache Fuselages">
                                </div>
                                <span class="news-date badge rounded-pill fw-medium px-3 py-2 mb-3 press-card-date">
                                    <img class="me-1 date-icon"
                                        src="<?php echo $base_url; ?>images/News&Media/calenderpart.png" alt="calender">
                                    7th Sep 2026
                                </span>
                                <h3 class="news-title mb-3 press-card-title">Tata Boeing Aerospace Delivers 400 “Made in
                                    India” Apache Fuselages Tata Boeing Aerospace Limited</h3>
                                <a href="javascript:void(0)" class="news-link text-decoration-none press-card-link">Read
                                    More <i class="fa-solid fa-long-arrow-right ms-2"></i></a>
                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 press-news-card">
                                <div class="ratio news-img mb-3">
                                    <img src="<?php echo $base_url; ?>images/News&Media/Third.png"
                                        alt="Pinaka Multi Barrel Rocket Launcher">
                                </div>
                                <span class="news-date badge rounded-pill fw-medium px-3 py-2 mb-3 press-card-date">
                                    <img class="me-1 date-icon"
                                        src="<?php echo $base_url; ?>images/News&Media/calenderpart.png" alt="calender">
                                    3rd Sep 2026
                                </span>
                                <div></div>
                                <h3 class="news-title mb-3 press-card-title">The Pinaka Multi Barrel Rocket Launcher
                                    brings together advanced engineering, precision and firepower</h3>
                                <a href="javascript:void(0)" class="news-link text-decoration-none press-card-link">Read
                                    More<i class="fa-solid fa-long-arrow-right ms-2"></i></a>
                            </div>

                        </div>

                    </div>

                </section>



                <!-- jv-wrapper part  -->



                <section class="jv-wraper">
                    <div class="container">
                        <div class="jv-card position-relative  overflow-hidden">

                            <img src="<?php echo $base_url; ?>images/adv/banner.png" alt="Joint Ventures">

                            <h2 class="section-main-heading position-absolute jv-title has_fade_anim has_char_anim text-light"
                                data-fade-from="left" data-fade-offset="30">
                                <span>Building Stronger</span> Partnerships for Advanced Aerospace Solutions.
                            </h2>

                            <div class="jv-footer position-absolute start-0 end-0 bottom-0 d-flex align-items-center">

                                <p class="jv-lead">
                                    Trusted by strategic<br>
                                    joint ventures.
                                </p>

                                <span class="jv-sep"></span>

                                <div class="swiper jv-logo-swiper">
                                    <div class="swiper-wrapper">

                                        <div class="swiper-slide d-flex align-items-center justify-content-center">
                                            <img src="<?php echo $base_url; ?>images/adv/siko.png" alt="Sikorsky"
                                                class="jv-logo-sikorsky">
                                        </div>

                                        <div class="swiper-slide d-flex align-items-center justify-content-center">
                                            <img src="<?php echo $base_url; ?>images/adv/boe.png" alt="Boeing"
                                                class="jv-logo-boeing pt-4">
                                        </div>

                                        <div class="swiper-slide d-flex align-items-center justify-content-center">
                                            <img src="<?php echo $base_url; ?>images/adv/lock.png" alt="Lockheed Martin"
                                                class="jv-logo-lockheed">
                                        </div>

                                        <div class="swiper-slide d-flex align-items-center justify-content-center">
                                            <img src="<?php echo $base_url; ?>images/adv/siko.png" alt="Sikorsky"
                                                class="jv-logo-sikorsky">
                                        </div>

                                        <div class="swiper-slide d-flex align-items-center justify-content-center">
                                            <img src="<?php echo $base_url; ?>images/adv/boe.png" alt="Boeing"
                                                class="jv-logo-boeing pt-4">
                                        </div>

                                        <div class="swiper-slide d-flex align-items-center justify-content-center">
                                            <img src="<?php echo $base_url; ?>images/adv/lock.png" alt="Lockheed Martin"
                                                class="jv-logo-lockheed">
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </section>





                <!-- Social-Impact Section -->
                <section class="section social-impact-wraper">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="social-impact-visual" data-aos="fade-up" data-aos-duration="1200"
                                    data-aos-delay="100">
                                    <div class="social-impact-circle">
                                        <img src="<?php echo $base_url; ?>images/Section Social Impact/Charity BG.png"
                                            alt="Charity BG">
                                    </div>
                                    <div class="social-impact-charity">
                                        <img src="<?php echo $base_url; ?>images/Section Social Impact/Charity.png"
                                            alt="Charity">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="social-impact-content">
                                    <span class="section-tag">
                                        SOCIAL IMPACT
                                    </span>
                                    <h2 class="section-main-heading has_fade_anim has_char_anim" data-fade-from="left">
                                        <span>
                                            Building a More Inclusive, Healthy and Sustainable Tomorrow
                                        </span>
                                    </h2>
                                    <div class="section-description">
                                        <div class="ceo-description" data-aos="fade-up" data-aos-duration="1200"
                                            data-aos-delay="300">
                                            At TASL, we believe progress is measured not only by what we build,
                                            but by the difference we create. Through community development,
                                            education, sustainability, and skill-building initiatives,
                                        </div>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)"
                                            class="d-inline-flex align-items-center gap-2 rounded-0 social-imp-btn">
                                            <span class="read-more-text">
                                                <span class="text-current">Explore CSR</span>
                                                <span class="text-hover">Explore CSR</span>
                                            </span>
                                            <div class="arrow-box">
                                                <span class="arrow-current"></span>
                                                <span class="arrow-hover">

                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="impact-list">
                                        <div class="impact-item" data-aos="fade-up" data-aos-duration="800"
                                            data-aos-delay="100">
                                            <div class="impact-icon">
                                                <img src="<?php echo $base_url; ?>images/Section Social Impact/unnd.png"
                                                    alt="Conservation & Rural Development">
                                            </div>
                                            <div class="impact-text">
                                                Conservation & Rural Development
                                            </div>
                                        </div>
                                        <div class="impact-item" data-aos="fade-up" data-aos-duration="800"
                                            data-aos-delay="100">
                                            <div class="impact-icon">
                                                <img src="<?php echo $base_url; ?>images/Section Social Impact/amed.webp"
                                                    alt="Preventive Healthcare">
                                            </div>
                                            <div class="impact-text">
                                                Preventive Healthcare
                                            </div>
                                        </div>
                                        <div class="impact-item" data-aos="fade-up" data-aos-duration="800"
                                            data-aos-delay="100">
                                            <div class="impact-icon">
                                                <img src="<?php echo $base_url; ?>images/Section Social Impact/light-bulb.png"
                                                    alt="Education & Livelihood Enhancement">
                                            </div>

                                            <div class="impact-text">
                                                Education & Livelihood
                                            </div>
                                        </div>
                                        <div class="impact-item" data-aos="fade-up" data-aos-duration="800"
                                            data-aos-delay="100">
                                            <div class="impact-icon">
                                                <img src="<?php echo $base_url; ?>images/Section Social Impact/Care for the Underprivileged.png"
                                                    alt="Care for the Underprivileged">
                                            </div>

                                            <div class="impact-text active">
                                                Care for the Underprivileged
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="white-circle"></div>-->
                    </div>
                </section>









                <!-- achyuta - start -->
                <section class="section tmr-banner vmb-fixed-wrapper">
                    <div class="vmb-fixed-container">
                        <div class="vmb-fixed-bg"></div>
                    </div>
                    <img src="<?php echo $base_url; ?>images/Solution/before-cut.png" alt="" class="tmr-top-cut">
                    <img src="<?php echo $base_url; ?>images/Solution/Lady Engineer.png"
                        alt="Tata Advanced Systems engineer" class="tmr-lady">
                    <div class="container-fluid tmr-container position-relative">
                        <div class="row align-items-center tmr-row">
                            <div class="col-lg-5 d-none d-lg-block"></div>

                            <div class="col-12 col-lg-7">
                                <div class="tmr-content">
                                    <h2 class="tmr-title has_fade_anim has_char_anim ">
                                        <span class="tmr-title-line">Find Solutions For</span>
                                        <span class="tmr-title-line">Tomorrow</span>
                                    </h2>

                                    <p class="tmr-text has_fade_anim has_char_anim">
                                        Join us in revolutionizing the industry to help build <br>
                                        a
                                        safer, cleaner, and smarter future.
                                    </p>
                                    <a href="javascript:void(0)"
                                        class="d-inline-flex align-items-center gap-2 rounded-0 tmr-cta-btn">
                                        <span class="tmr-cta-text">Read More</span>
                                        <span class="tmr-cta-arrow" aria-hidden="true">
                                            <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3 13L13 3M5 3h8v8" stroke="currentColor" stroke-width="1.6"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <!-- achyuta - end -->
                <?php include_once "include/footer.php"; ?>