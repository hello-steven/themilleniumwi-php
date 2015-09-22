<?php

$section = "Contact";
include_once ('inc/brand-assets.php');
include ('inc/header.php'); 

?>

<h2 class='page-title' id="title-icons">Contact</h2>

<div class="title-icons">

    <?php foreach($social_assets as $social_id => $social_asset) { 
                            echo icon_assets($social_id,$social_asset);
                        }
    ?>

</div><!-- .title-icons -->
		
<aside id="ContactWrapper">

    <h3>Message Us</h3>

    <div class="form-wrapper">

        <form method="post" action="sendmail.asp">

            <label>Name:</label><input type="text" size="30" name="fullname" id="fullname"><br>
            <label>Email:</label><input type="text" size="30" name="email" id="email"><br>
            <label>Message:</label><textarea rows="5" cols="32" name="comments" id="comments"></textarea><br><br>
            <input type="submit" name="submit" id="submit" value="SEND">

        </form>

    </div><!-- .form-wrapper -->

    <h3>Band Booking Inquiries</h3>
    Max Dvorak | greenroommax@gmail.com<br><br>

    <h3>Press</h3>
    James Lloyd | james@carrythe4.com<br>
    Kyle Culver | themilleniumwi@gmail.com<br>

</aside><!--ContactWrapper-->

<?php include('inc/footer.php'); ?>