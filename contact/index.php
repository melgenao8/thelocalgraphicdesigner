<?php 

// $link = mysqli_connect("localhost", "root", "root", "thelocalgraphicdesigner");

// if(isset($_POST['submit'])){

//     $fullname = mysqli_real_escape_string($link, $_POST['fullname']);
//     $email = mysqli_real_escape_string($link, $_POST['businessemail']);
//     $businessname = mysqli_real_escape_string($link, $_POST['businessname']);
//     $industry = mysqli_real_escape_string($link, $_POST['businessindustry']);
//     $website = mysqli_real_escape_string($link, $_POST['businesswebsite']);
//     $instagram = mysqli_real_escape_string($link, $_POST['businessinstagram']);
//     $interested = mysqli_real_escape_string($link, $_POST['interested']);
//     $budget = mysqli_real_escape_string($link, $_POST['budget']);
//     $notes = mysqli_real_escape_string($link, $_POST['notes']);
    

//     $sql = "INSERT INTO inquiries (fullname, email, businessname, industry, website, interested, instagram, budget, notes) VALUES('{$fullname}', '{$email}', '{$businessname}', '{$industry}', '{$website}', '{$interested}', '{$instagram}', '{$budget}', '{$notes}')";

//     if (mysqli_query($link, $sql)) {
//         echo "New record created successfully";
//     } else {
//         echo "Error: " . $sql . "<br>" . mysqli_error($link);
//     }

//     mysqli_close($link);
// }

?>

<?php require_once("../header-no-pricing.php")?>

<div class="container-fluid nav-banner process-banner nav-banner-2">
    <?php require_once("../navigation.php") ?>


    <!-- LANDING IMAGE -->
    <div class="opening fade-in">
        <div class="opening-title">
            
        </div>
    </div>

    <!-- <div class="opening-text">
            <div class="bounce-in-top-slower">
                <p class="sofia-light">I’m excited to get to know your business a
                    little better. Responses to inquiries are within
                    48 business hours.</p>
            </div>
        </div> -->
</div>

<div class="connect-form">
    <form action="" method="post">
        <h3>please fill out form below</h3>
        <h2>i'm so excited to learn more about your project</h2>
        <div class="bc">Responses are within 48 hours</div>

        <div>
            <input type="text" placeholder="First Name*" name="firstname" required>
            <input type="text" placeholder="Last Name*" name="lastname" required>
            <input type="text" placeholder="Business Email*" name="businessemail" required>
        </div>

        <input type="text" placeholder="Business Name*" name="businessname">
        <input type="text" placeholder="Business Industry*" name="businessindustry">

        <div>
            <input type="text" placeholder="Business Website" name="businesswebsite">
            <input type="text" placeholder="Business Instagram" name="businessinstagram">
        </div>

        <select name="interested" id="">

            <option value="" selected>$2000-$4000</option>
            <option value="" selected>$4000-$6000</option>
            <option value="" selected>$6000-$8000</option>
            <option value="" selected>$8000-$10k</option>
            <option value="" selected>$10k+</option>
            <option value="" disabled selected>My Budget Is...</option>
            
            </select>
        
        <div>    
            
            I'm interested in...(Select all that apply)
            <span style="white-space:nowrap; display:inline-block;line-height:2em;">
                <input type="checkbox" name="type" value="branding" />&nbsp; Branding &nbsp;&nbsp;</span>
                <span style="white-space:nowrap; display:inline-block">
                <input type="checkbox" name="type" value="website" />&nbsp; Website &nbsp;&nbsp;</span>
                <span style="white-space:nowrap; display:inline-block">
                <input type="checkbox" name="type" value="social media" />&nbsp; Social Media &nbsp;&nbsp;</span>
                <span style="white-space:nowrap; display:inline-block">
                <input type="checkbox" name="type" value="add-on services" />&nbsp; Add-On Services &nbsp;&nbsp;</span>
                <span style="white-space:nowrap; display:inline-block">
                <input type="checkbox" name="type" value="other" />&nbsp; Other</span>
        </div>


        <textarea name="notes" id="" cols="30" rows="6" placeholder="Other notes"></textarea>

        <button class="simplon-mono-bold">Submit</button>

    </form>
</div>

<!-- <input type="text" placeholder="Budget..." name="budget"> -->

<div class="stay-connected">
    <div class="col-title-dark-2">
    <h3> stay connected</h3>
    <h4>Business Hours</h4>
    <div class="sub-title">Monday- Friday 9am-4:30pm central</div>
    <h4>Email</h4>
    <div class="sub-title">melissa (at) the local graphic designer (dot) com</div>
</div>
</div>

<!-- <div class="two-text-col connect-col">
    <div class="title-col">
    
        <h3 class="freight-i">stay connected</h3>
        
       <h2 class="plantin-i">the</h2>
            <h3 class="sofia-sb">Design <br> Studio</h3>
     </div>
    <div class="text-col">
        <p class="business sofia">BUSINESS HOURS</p>
        <p class="sofia">MONDAY - FRIDAY</p>
        <p class="sofia">9am-4:30pm central</p>
        <p class="connect-email sofia">EMAIL</p>
        <a href="mailto:hi@thelocalgraphicdesigner.com" class="sofia">HI@THELOCALGRAPHICDESIGNER.COM</a>
        <p class="plantin-i">responses to inquiries are within 48 hours</p>
    </div>
</div> -->


    <?php require_once("../footer.php") ?>