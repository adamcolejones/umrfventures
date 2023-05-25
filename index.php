<?php

    // ********************************************************
    // * A DESCRIPTION OF THE FUNCTIONALITY OF THE CODE BELOW *
    // ********************************************************
	// - 1. This is the landing page for umrfventures.com
	// - 2. The menu.php file loads at the top of the page for navigation
    // - 3. The Home video will autoplay on most browsers if it's muted on start
    // - 4. Value Titles and Descriptions
	// - 5. Partner Logos
	// - 6. Social Media Links
    // - 7. News, Media Room, testing links
    // - 8. Contact Footer
    // ********************************************************



    // - 1. This is the landing page for umrfventures.com
    // - 2. The menu.php file loads at the top of the page for navigation
	require 'menu.php';
    
?>

<!-- - 1. This is the landing page for umrfventures.com -->
<!DOCTYPE html>
<html>
	<head>
		<title>UMRF</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <!-- - 2. The menu.php file loads at the top of the page for navigation -->
        <?php
            menu()
        ?>
        <div class="scrollableContent">
        <!-- - 3. The Home video will autoplay on most browsers if it's muted on start -->
            <div>
                <video width="100%" height="auto" controls loop autoplay playsinline muted>
                    <source src="assets/homevideo.mp4" type="video/mp4">    
                </video>
            </div>
            <!-- - 4. Value Titles and Descriptions -->
            <div class="textcontent">
                <div class="texttitle">A Unique Solution</div>
                <div class="textdescription">A managed service provider employing University students to meet your needs</div>
            </div>
            <div class="textcontent">
                <div class="texttitle">A Unique Model</div>
                <div class="textdescription">One of the only private companies in America owned by a public university – doing what we do</div>
            </div>
            <div class="textcontent">
                <div>
                    <span class="inlinetexttitle">A Unique</span>
                    <a class="inlinetextlink" href="">Talent Pipeline</a>
                </div>
                <div class="textdescription">When our students graduate,  you have trained and qualified candidates for jobs in your organization</div>
            </div>
            <!-- - 5. Partner Logos -->
            <div class="partnerrow">
                <img class="fedexlogo" src="assets/FedEx Logo.png" alt="">
                <img class="raymondjameslogo" src="assets/Raymond James Logo.png" alt="">
                <img class="sedgwicklogo" src="assets/Sedgwick Logo.png" alt="">
            </div>
            <br>
            <!-- - 6. Social Media Links -->
            <div class="sociallinks">
                <img class="facebooklogo" src="assets/Facebook Logo.png" alt="">
                <img class="linkedinlogo" src="assets/Linkedin Logo.png" alt="">
                <img class="instagramlogo" src="assets/Instagram Logo.png" alt="">
                <img class="twitterlogo" src="assets/Twitter Logo.png" alt="">
            </div>
            <!-- - 7. News, Media Room, testing links -->
            <h2>Media Room</h2>
            <ul>
                <li>Carousell of Most Recent News Stories</li>
                <li>Older Stories listed below</li>
                <li>UMRF Logo</li>
                <li>Title</li>
                <li>Description</li>
                <li>Read More Link</li>
                <li>Repeat Per Story</li>
                <li></li>
            </ul>
            <a href="todo.php">To Do List</a>
            <a href="test.php">Test</a>
            <!-- - 8. Contact Footer -->
            <div class="contactfooter">
        
            </div>
        </div>
        
    </body>
</html>