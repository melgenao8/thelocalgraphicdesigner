<?php require_once("../header.php")?>

<div class="container-fluid nav-banner about-banner">
    <?php require_once("../navigation.php")?>

    <div class="opening">
    <div class="opening-title">
            <div class="bounce-in-top">     
                <h1 class="bebas-neue">DESIGN <span class="sofia-sb-i">Process</span></h1>
            </div>
        </div>


        <div class="opening-text">
        <div class="bounce-in-top-slower">
            <p class="sofia-light">Get acquianted with the branding
                process so that you feel confident in
                your decision to create an effective
                impression on your audience.</p>
        </div>
        </div>
    </div>


    
    </div>
</div>

<div class="process">
    <div class="process-title">
        <div class="process-step">
            <h2 class="bebas-neue" id="process-step">01</h2>
        </div>
        <div class="process-content">
            <h3 class="plantin-i">the <span class="sofia" id="process-title">Discovery</span></h3>
            <p id="process-text">Lorem ipsum dolor sit amet, consectetuer
                adipiscing elit, sed diam nonummy nibh
                euismod tincidunt ut laoreet dolore magna
                aliquam erat volutpat. Ut wisi enim ad minim </p>
        </div>
    </div>

    <div class="arrow">
        <img src="img/yellow-right-arrow.png" alt="Right Arrow">
    </div>

    <!-- Slider main container -->
    <div class="swiper-container process-swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide"><img src="img/search-btns-bg-TEST-03.jpg" alt=""></div>
            <div class="swiper-slide"><img src="img/search-btns-bg-TEST-03.jpg" alt=""></div>
            <div class="swiper-slide"><img src="img/search-btns-bg-TEST-03.jpg" alt=""></div>
            <div class="swiper-slide"><img src="img/search-btns-bg-TEST-03.jpg" alt=""></div>
            <div class="swiper-slide"><img src="img/search-btns-bg-TEST-03.jpg" alt=""></div>
            ...
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
    </div>


</div>


<!-- * ----------------------------------------
 * let's work together + 3 column nav cards
 * ---------------------------------------- -->

 <div class="about-nav">
    <div class="two-col">
        <div class="two-col-box">
            <div class="box">

                <div class="contact-headers">
                <div class="contact-header-1 freight-i">let's work <span class="bebas-neue contact-header-2">TOGETHER</span>
                </div>
                </div>

    
            </div>
            <a href="/connect" class="btn-wide sofia">INQUIRE ABOUT YOUR PROJECT</a>
        </div>
    </div>

    <!-- ==== formerly "CORE VALUES" ==== -->
    <div class="core-values">

        <!-- links to DESIGN PROCESS page -->
        <div class="cards core-cards">

            <a class="card" id="design-process-bg" href="/process">
                <!-- <img src="img/process-bg-TEST.jpg" alt="The Design Process Picture"> -->
                <!-- <h3 class="freight-i ">understanding</h3>
            <h3 class="bebas-neue loose">THE</h3> -->

                <h2 class="sofia-sb-i" id="search-design-text">design<BR></h2>
                <h2 class="bebas-neue xtra-loose" id="processh2">PROCESS</h2>
            </a>
            <!-- links to SERVICES page -->
            <a class="card" id="services-process-bg" href="/services">
                <h2 class="bebas-neue loose">DESIGN</h2>
                <h2 class="sofia-sb-i">SERVICES <BR></h2>
                <!-- <h3 class="freight-i ">what we offer</h3> -->
            </a>

            <!-- links to ABOUT page -->
            <a class="card" id="studio-process-bg" href="#">
                <!-- <h3 class="freight-i ">who</h3>
            <h3 class="bebas-neue loose">WE ARE</h3> -->
                <h2 class="sofia-sb-i" id="the-small"> THE<BR></h2>
                <h2 class="bebas-neue loose">STUDIO</h2>
            </a>
            <!-- 
            <img src="img/search-btns-bg-TEST-03.jpg" alt="Search BG pic"> -->
        </div>
    </div>
</div>



<?php require_once("../footer.php");?>