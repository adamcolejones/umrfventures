<?php

    // ********************************************************
    // * A DESCRIPTION OF THE FUNCTIONALITY OF THE CODE BELOW *
    // ********************************************************
	// - 
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
        <?php
            menu()
        ?>
        <div class="scrollableContent">
            <div class="employmentcontainer">
                <!-- <div class="welcomebackground"></div> -->
                <video class="employmentvideo" loop autoplay playsinline muted controls>
                    <source src="assets/employmentvideo.mp4" type="video/mp4">    
                </video>
                <div class="employmenttext">
                    <div class="employmenttitle">WE ARE CURRENTLY&nbsp;</div>
                    <div class="employmenttitle">ACCEPTING APPLICATIONS</div>
                    <div class="employmentsubtitle">APPLY NOW!&nbsp;</div>
                    <div class="employmentdescription">Kick-start your career with hands-on experience</div>
                </div>
            </div>

            <div class="textcontent">
                <div class="texttitle">Student success is our goal.</div>
                <div class="textdescription">UMRF Ventures is a company staffed by students. We offer part-time jobs on campus, providing a variety of services to local companies. University of Memphis students have the exclusive opportunity to apply.</div>
                <br>
                <div class="textdescription">#VENTUREWITHUS</div>
            </div>

            <div class="textcontent">
                <div class="texttitle">Join Our Team</div>
                <div class="textdescription">We are always accepting applications! We create unique opportunities for our student employees for professional development, leadership training, and assistance with their career search after graduation.</div>
                <br>
                <div class="textdescription">Our students are serious about their education and their work at UMRF Ventures.</div>
                <br>
                <div class="textdescription">View Positions Button</div>
            </div>

            <div class="textcontent">
                <div class="texttitle">RECRUITMENT FAQS</div>
                <div class="textdescription">How much do you pay?</div>
                <div class="textdescription">We pride ourselves on paying our employees a living wage. Our employees make an average of $15.00 per hour. However, graduate students and students in leadership positions typically earn more.</div>
                <br>
                <div class="textdescription">How many hours do I have to work?</div>
                <div class="textdescription">Our students typically work 10-20 hours per week. We schedule their work hours around their classroom commitments.</div>
            </div>

            <div class="contactfooter">

            </div>
        </div>
    </body>
</html>