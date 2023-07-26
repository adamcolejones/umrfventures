<?php

    // ********************************************************
    // * A DESCRIPTION OF THE FUNCTIONALITY OF THE CODE BELOW *
    // ********************************************************
	// - This is for the "who we are" page
	// - 
    // -
    // -
	// -
	// -

	require 'menu.php';
    
?>

<!DOCTYPE html>
<html>
    <?php include 'head.php'; ?>
    <body>
        <?php
            menu()
        ?>
        <div class="scrollableContent">

            <div class="wwalinks">
                <a href="whoweare.php" class="wwalinkitem">About Us</a>
                <a href="students.php" class="wwalinkitem current">Students</a>
                <a href="management.php" class="wwalinkitem">Management</a>
                <a href="governance.php" class="wwalinkitem">Governance</a>
            </div>

            <div class="wwacontacttext">
                <div class="wwacontactsubtitle">Talent Pipeline</div>
                <div class="wwacontactdescription">Since 2017 more than 70 of our student employees have been employed by our partners. When you hire UMRF Ventures Inc we can become a training ground for your future staff.</div>
            </div>

            <!-- <div class="textcontent">
                <div class="texttitle">Talent Pipeline</div>
                <div class="textdescription">Since 2017 more than 70 of our student employees have been employed by our partners. When you hire UMRF Ventures Inc we can become a training ground for your future staff.</div>
            </div> -->

            <div class="studentContainer">
                <img class="studentPicture" src="assets/TPSpencerP.png" alt="">
                <img class="studentPicture" src="assets/TPChloeB.png" alt="">
                <img class="studentPicture" src="assets/TPJacobM.png" alt="">
                <img class="studentPicture" src="assets/TPAndrewE.png" alt="">
                <img class="studentPicture" src="assets/TPDylanD.png" alt="">
                <img class="studentPicture" src="assets/TPMicaelaS.png" alt="">
            </div>

            <div class="contactfooter">

            </div>
        </div>
    </body>
</html>