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

            <div class="textcontent">
                <div class="texttitle">Services We Offer</div>
                <div class="textdescription">Our student employees are diverse, talented, and hard-working. What they can do is almost limitless. We currently operate basic and advanced call center operations, data mining and analytical services, telephone sales support, ticket sales, event support, and donor solicitation.</div>
            </div>

            <div class="textcontent">
                <div class="texttitle">Custom Ventures</div>
                <div class="textdescription">We develop custom ventures with our business partners, then hire the right students to support them. Need Computer Science students to support your automation efforts? UMRF Ventures can do that!  If you need our help to support your business, please contact us and we can begin to develop a custom venture.</div>
            </div>

            <div class="textcontent">
                <div class="texttitle">Call Center</div>
                <div class="textdescription">Student employees at the support center will handle technical support calls including "first level" technical support, like phone configuration and basic application and computing device troubleshooting.</div>
            </div>

            <div class="textcontent">
                <div class="texttitle">Analytics</div>
                <div class="textdescription">The students, primarily in science, technology, engineering and mathematics work with command center teams, using advanced software technologies to dig into operational and network performance data and look for possible system improvements.</div>
            </div>

            <div class="textcontent">
                <div class="texttitle">Much More...</div>
                <div class="textdescription">We have the unique opportunity to have our student employees assist with any need your company may have. From accounting to marketing, we can offer student employees who are constantly learning the newest practices in their trade.</div>
            </div>

            <div class="textcontent">
                <div class="texttitle">Next Steps...</div>
                <div class="textdescription">Do you want to establish a talent pipeline for your future hiring needs? Come work with UMRF Ventures and our talented students!</div>
            </div>

            <div class="contactfooter">

            </div>
        </div>
    </body>
</html>