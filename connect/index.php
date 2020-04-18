<?php 

$link = mysqli_connect("localhost", "root", "root", "thelocalgraphicdesigner");

if(isset($_POST['submit'])){

    $fullname = mysqli_real_escape_string($link, $_POST['fullname']);
    $email = mysqli_real_escape_string($link, $_POST['businessemail']);
    $businessname = mysqli_real_escape_string($link, $_POST['businessname']);
    $industry = mysqli_real_escape_string($link, $_POST['businessindustry']);
    $website = mysqli_real_escape_string($link, $_POST['businesswebsite']);
    $instagram = mysqli_real_escape_string($link, $_POST['businessinstagram']);
    $interested = mysqli_real_escape_string($link, $_POST['interested']);
    $budget = mysqli_real_escape_string($link, $_POST['budget']);
    $notes = mysqli_real_escape_string($link, $_POST['notes']);
    

    $sql = "INSERT INTO inquiries (fullname, email, businessname, industry, website, interested, instagram, budget, notes) VALUES('{$fullname}', '{$email}', '{$businessname}', '{$industry}', '{$website}', '{$interested}', '{$instagram}', '{$budget}', '{$notes}')";

    if (mysqli_query($link, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($link);
    }

    mysqli_close($link);
}

?>

<?php require_once("../header.php")?>

<div class="container-fluid nav-banner connect-banner">
    <?php require_once("../navigation.php")?>

    <div class="opening">
        <div class="opening-title">
            <div class="bounce-in-top">

                <h1 class="bebas-neue">WORKING <span class="sofia-sb-i">Together</span></h1>

            </div>
        </div>

        <div class="opening-text">
            <div class="bounce-in-top-slower">
                <p class="sofia-light">I’m excited to get to know your business a
                    little better. Responses to inquiries are within
                    48 business hours.</p>
            </div>
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
            <option value="" selected=true>I am interested in...</option>
            <option value="test">Test</option>
        </select>

        <input type="text" placeholder="Budget..." name="budget">

        <textarea name="notes" id="" cols="30" rows="6" placeholder="Other notes"></textarea>

        <button class="sofia" name="submit">Submit</button>

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

<!------------------------------------------
 * instagram plugin
 * ---------------------------------------- -->

<!-- <?php require_once("instagram.php")?> -->

<?php require_once("../footer.php") ?>