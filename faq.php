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
            <div><a href="employment.php" class="back">Back</a></div>
            <div>
                <h2>FAQ</h2>
                <ul>
                    <li>What is UMRF Ventures, Inc. ?</li>
                    <li>UMRF Ventures is a company staffed by students; we offer good paying, part-time jobs on campus, providing valued services to local companies. Our Mission is to provide as many of these jobs as we can, and to help place our graduating students into full-time careers with our partner companies after they graduate.</li>
                    <li>Are you hiring?</li>
                    <li>UMRF Ventures is a fast growing company and we are hiring students every few months. If you are interested in interviewing, please visit http://umrfventures.com/apply/</li>
                    <li>How much do you pay?</li>
                    <li>We pride ourselves on paying our employees a living wage. Our employees make an average of $15.00 per hour. However, graduate students and students in leadership positions typically earn more.</li>
                    <li>How many hours do I have to work?</li>
                    <li>Our students typically work 10-20 hours per week. We schedule their work hours around their classroom commitments.</li>
                    <li>How can my company partner with UMRF Ventures?</li>
                    <li>Contact our CEO at pierre@umrfventures.com</li>
                    <li>Can I visit your facility?</li>
                    <li>UMRF Ventures has operations on the main campus in the FedEx Institute Building, on the South Campus at 4075 Park Avenue, and on the Lambuth Campus in Hyde Hall. All facilities have secured access, and an appointment is required to visit our facilities</li>
                    <li></li>
                </ul>
            </div>
            <div class="contactfooter">

            </div>
        </div>
    </body>
</html>