<?php require_once("../header-pricing.php")?>
<div class="container-fluid nav-banner services-banner nav-banner-2">
    <?php require_once("../navigation.php") ?>


    <!-- LANDING IMAGE -->
    <div class="opening fade-in">
        <div class="opening-title">
            <div class="bounce-in-top">
                <!-- <h1 class="bebas-neue lrg-outline">DESIGN <span class="bebas-neue lrg-outline">Services</span></h1> -->
            </div>
        </div>
    </div>
</div>




<!-- * ----------------------------------------
 * instant download
 * ---------------------------------------- -->



<div class="pricing-guide">
    <div class="download-form">
        
        <div class="title-headers">
            <div class="header-2">instant access</div>
            <div class="header-1">Pricing Guide
            </div>
        </div>

        <form action="" method="post">
            <input id="full-name" required type="text" placeholder="FIRST NAME">
            <input id="full-name" required type="text" placeholder="LAST NAME">
            <input id="email" required type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
            placeholder="EMAIL">
            <input id="download" onclick='making()' type="submit" value="VIEW PRICES">
        </form>

    </div>
</div>
<script>
    const making = function(){
        localStorage.setItem('subscribed', 'This person has subscribed');
    }
</script>







</div>




<!-- NAVIGATION CARDS : SECTION -->
<?php require_once("../navigation-cards.php")?>
</div>


<?php require_once("../footer.php") ?>