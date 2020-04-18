<?php require_once("../header.php")?>

<div class="container-fluid nav-banner nav-banner-2">
    <?php require_once("../navigation.php") ?>

    <!-- * ----------------------------------------
 * opening title
 * ---------------------------------------- -->

    <div class="opening fade-in">
        <div class="opening-title">
            <div class="bounce-in-top">

                <h1 class="bebas-neue lrg-outline">DESIGN <span class="bebas-neue lrg-outline">PROCESS</span></h1>

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

        <!-- If we need navigation buttons
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

         If we need scrollbar -->
        <!-- <div class="swiper-scrollbar"></div> -->
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
                    <div class="contact-header-1 freight-i">let's work <span
                            class="bebas-neue contact-header-2">TOGETHER</span>
                    </div>
                </div>


            </div>
            <a href="/connect" class="btn-wide sofia">INQUIRE ABOUT YOUR PROJECT</a>
        </div>
    </div>

    <!-- ==== formerly "CORE VALUES" ==== -->
    <?php require_once("../navigation-cards.php");?>
</div>



<?php require_once("../footer.php");?>