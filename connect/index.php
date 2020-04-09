<?php 

// $link = mysqli_connect("localhost", "root", "root", "thelocalgraphicdesigner");

// if (!$link) {
//     echo "Error: Unable to connect to MySQL." . PHP_EOL;
//     echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
//     echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
//     exit;
// }

// echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
// echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

// mysqli_close($link);

if(isset($_POST)){
    print_r($_POST);
}

?>

<?php require_once("../header.php")?>

<div class="container-fluid nav-banner connect-banner">
    <?php require_once("../navigation.php")?>

    <div class="opening">
        <div class="opening-title">
            <h1 class="bebas-neue loose">Working <span class="sofia-sb">Together</span></h1>
        </div>
        <div class="opening-text">
            <p class="sofia">I’m excited to get to know your business a
                little better. Responses to inquiries are within
                48 business hours.</p>
        </div>
    </div>
</div>

<div class="connect-form">
    <form action="/connect" method="post">
        <h2 class="sofia-sb">Please fill out the form below</h2>

        <div>
            <input type="text" placeholder="Full Name" name="fullname">
            <input type="text" placeholder="Business Email" name="businessemail">
        </div>

        <input type="text" placeholder="Business Name" name="businessname">
        <input type="text" placeholder="Business Industry" name="businessindustry">

        <div>
            <input type="text" placeholder="Business Website" name="businesswebsite">
            <input type="text" placeholder="Business Instagram" name="businessinstagram">
        </div>

        <select name="interested" id="">
            <option value="" disabled selected>I am interested in...</option>
        </select>

        <input type="text" placeholder="Budget..." name="budget">

        <textarea name="notes" id="" cols="30" rows="6" placeholder="Other notes"></textarea>

        <button class="sofia">Submit</button>

    </form>
</div>


<div class="two-text-col connect-col">
    <div class="title-col">

        <h3 class="freight-i">stay</h3>
        <h2 class="bebas-neue loose">In<BR>Contact</h2>
        <!-- <h2 class="plantin-i">the</h2>
            <h3 class="sofia-sb">Design <br> Studio</h3> -->
    </div>
    <div class="text-col">
        <p class="business sofia">BUSINESS HOURS</p>
        <p class="sofia">MONDAY - FRIDAY</p>
        <p class="sofia">9am-4:30pm (CENTRAL TIME)</p>
        <p class="connect-email sofia">EMAIL</p>
        <a href="mailto:hi@thelocalgraphicdesigner.com" class="sofia">HI@THELOCALGRAPHICDESIGNER.COM</a>
        <p class="plantin-i">responses to inquiries are within 48 hours</p>
    </div>
</div>

<div class="instagram">
    <!-- <p class="sofia-sb">Instagram</p> -->

    <div class="gallery">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>

<?php require_once("../footer.php") ?>