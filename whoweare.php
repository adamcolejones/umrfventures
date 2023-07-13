<?php

    // ********************************************************
    // * A DESCRIPTION OF THE FUNCTIONALITY OF THE CODE BELOW *
    // ********************************************************
	// - 1. This is the about page for umrfventures.com
	// - 2. The menu.php file loads at the top of the page for navigation
	// - 
    // -
    // -
	// -
	// -

	require 'menu.php';
    
?>

<!DOCTYPE html>
<html>
	<head>
        <title>UMRF</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Default Style Sheet, keep this to prevent white flashes on screen resizing -->
        <link rel="stylesheet" href="style.css">
        <!-- - #. Check if screen height or width is bigger, display content accordingly -->
        <style id="style-sheet"></style>
        <script>
            function setStylesheet() {
                var screenWidth = window.innerWidth;
                var screenHeight = window.innerHeight;
                var styleSheet = document.getElementById('style-sheet');

                // If screen is wider than its height, apply "style.css"
                if (screenWidth > screenHeight) {
                    styleSheet.innerHTML = '@import "style.css";';
                }
                // Otherwise, apply "mobile.css"
                else {
                    styleSheet.innerHTML = '@import "mobile.css";';
                }
            }

            window.addEventListener('resize', setStylesheet);
            window.addEventListener('load', setStylesheet);
        </script>
    </head>
    <body>
        <!-- - 2. The menu.php file loads at the top of the page for navigation -->
        <?php
            menu()
        ?>
        <div class="scrollableContent">

            <div class="wwalinks">
                <a href="whoweare.php" class="wwalinkitem current">About Us</a>
                <a href="students.php" class="wwalinkitem">Students</a>
                <a href="governance.php" class="wwalinkitem">Governance</a>
                <a href="management.php" class="wwalinkitem">Management</a>
            </div>

            <div class="wwacontainer">
                <img class="wwaphoto" src="assets/WorkRoomAttentive.png" alt="">
                <div class="wwatext">
                    <div class="wwasubtitle">About Us</div>
                    <div class="wwadescription">UMRF Ventures is a company staffed by students who attend the University of Memphis. Today’s students have to successfully balance life with their school commitments. Many students take on significant debt to further their education and work multiple jobs while they go to school to meet their financial obligations. UMRF Ventures mission is to help our students succeed by providing good-paying, part-time jobs, scheduled around their classroom commitments, and conveniently located on campus.</div>
                    <!-- <br> -->
                    <div class="wwadescription">Today we have over 200 undergraduate and graduate students working at UMRF Ventures for our partner companies, who frequently hire our students as full-time employees after they graduate.</div>
                </div>
            </div>

            <div class="wwacontainerbottom">
                <div class="wwatextleft">
                    <div class="wwasubtitle">Students</div>
                    <div class="wwadescription">Our student employees work in a variety of different ventures, providing paid services to our partner companies. We operate both inbound and outbound Call Centers, on the Memphis and Lambuth campuses. We have student internship programs with partner companies. Our students provide services to both for-profit and nonprofit companies in Memphis.  Our employees are both undergraduate and graduate students from a variety of academic curriculums. They work approximately 10-20 hours per week; after training, they earn approximately $15/per hour to $25/hour. Many earn more in supervisory positions.</div>
                </div>
                <img class="wwaphoto" src="assets/DeskSpaces.png" alt="">
            </div>

            <div class="textcontent">
                <div class="texttitle">Want to reach out?</div>
                <div class="textdescription">UMRF Ventures is always open to talking about our work, but we do request that any visits be scheduled through the manager. Service centers are off limits unless explicitly approved.</div>
            </div>
            
            <div class="contactfooter">

            </div>
        </div>
    </body>
</html>