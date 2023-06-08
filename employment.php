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
            <div>
                <video width="100%" height="auto" controls loop autoplay playsinline muted>
                    <source src="assets/employmentvideo.mp4" type="video/mp4">    
                </video>
            </div>
            <h2>Employment</h2>
            <img class="defaultpicture" src="assets/ChristmasParty.png" alt="">
            <ul>
                <li>Student success is our goal.</li>
                <li>UMRF Ventures is a company staffed by students. We offer part-time jobs on campus, providing a variety of services to local companies. University of Memphis students have the exclusive opportunity to apply.</li>
                <li>#VENTUREWITHUS</li>
                <li>Learn, Work, Save + Logos</li>
                <li>Join Our Team</li>
                <li>We are always accepting applications! We create unique opportunities for our student employees for professional development, leadership training, and assistance with their career search after graduation.</li>
                <li>View Positions Button</li>
                <li>Photo</li>
                <li>Our students are serious about their education and their work at UMRF Ventures.</li>
                <li>RECRUITMENT FAQS</li>
                <li>How much do you pay?</li>
                <li>We pride ourselves on paying our employees a living wage. Our employees make an average of $15.00 per hour. However, graduate students and students in leadership positions typically earn more.</li>
                <li>How many hours do I have to work?</li>
                <li>Our students typically work 10-20 hours per week. We schedule their work hours around their classroom commitments.</li>
                <li></li>
            </ul>
            <div class="servicessection">
                <div class="servicessectionpicture">
                    <img class="defaultpicture" src="assets/DefaultPicture.png" alt="">
                </div>
                <div class="servicessectiontext">
                    <div class="servicestitle">FAQs</div>
                    <div class="servicesdescription">Description Goes Here<a href="faq.php" class="readmore">Read More</a></div>
                </div>
            </div>
            <div class="contactfooter">

            </div>
        </div>
    </body>
</html>