<?php

    // ********************************************************
    // * A DESCRIPTION OF THE FUNCTIONALITY OF THE CODE BELOW *
    // ********************************************************
	// - 1. This is the landing page for umrfventures.com
	// - 2. The menu.php file loads at the top of the page for navigation
    // - 3. The Home video will autoplay on most browsers if it's muted on start
    // - 4. Value Titles and Descriptions
    // - 5. Content Slide show
	// - 6. Partner Logos
	// - 7. Social Media Links
    // - 8. Contact Footer
    // ********************************************************



    // - 1. This is the landing page for umrfventures.com
    // - 2. The menu.php file loads at the top of the page for navigation
	require 'menu.php';
    
?>

<!-- - 1. This is the landing page for umrfventures.com -->
<!DOCTYPE html>
<html>
    <?php include 'head.php'; ?>
    <body>
        <!-- - 2. The menu.php file loads at the top of the page for navigation -->
        <?php
            menu()
        ?>
        <div class="scrollableContent">
        <!-- - 3. The Home video will autoplay on most browsers if it's muted on start -->
            <div class="welcomecontainer">
                <!-- <div class="welcomebackground"></div> -->
                <video class="welcomevideo" loop autoplay playsinline muted controls>
                    <source src="assets/homevideo.mp4" type="video/mp4">    
                </video>
                <div class="welcometext">
                    <div class="welcometitle">A UNIQUE MODEL&nbsp;</div>
                    <div class="welcometitle">WITH UNIQUE SOLUTIONS</div>
                    <br>
                    <br>
                    <div class="welcomesubtitle">BUILDING YOUR&nbsp;</div>
                    <div class="welcomesubtitle">TALENT PIPELINE</div>
                    <div class="welcomedescription">UMRF Ventures is a managed service and contact center provider employing University students to meet your needs.</div>
                </div>
            </div>
            <!-- - 4. Value Titles and Descriptions -->

            <div class="wwacontacttext">
                <div class="wwacontactsubtitle">Partner With Us</div>
                <a href="contact.php" class="wwacontactdescription">Contact UMRF Ventures</a><div class="wwacontactdescription"> for pricing and how this model can meet your company's needs.</div>
            </div>

            <!-- <div class="hometextcontent">
                <div class="texttitle">Partner With Us</div>
                <a href="contact.php" class="textdescription">Contact UMRF Ventures</a> 
                <div class="textdescription"> for pricing and how this model can meet your company's needs.</div>
            </div> -->

            <div class="partnershowcasecontainer">
                <!-- <img class="partnershowcase" src="assets/PartnerShowcase.png"> -->
                    <div class="partnershowcasetop">
                    <!-- The Background images for these have specific dimensions.  1/4 the size of 1920 x 1080 -->
                    <div class="partnershowcasetopleft"></div>
                    <div class="partnershowcasetopright"></div>
                </div>
                <div class="partnershowcasebottom">
                    <!-- The Background images for these have specific dimensions.  1/4 the size of 1920 x 1080 -->
                    <div class="partnershowcasebottomleft"></div>
                    <div class="partnershowcasebottomright"></div>
                </div>
            </div>

            <div class="joincontainer">
                <div class="homejoincontent">
                    <div class="texttitle">Join Our Team!</div>
                    <a href="employment.php" class="textdescription">Employing university students,</a> 
                    <div class="textdescription"> building career focused experiences.</div>
                </div>
            </div>

            <!-- 5. CONTENT SLIDESHOW -->
            <!-- Images will need to have the exact same dimensions to keep page from resizng. -->
            

            <!-- - 6. Partner Logos -->

            <!-- - 7. Social Media Links -->
            <div class="sociallinks">
                <a href="https://www.facebook.com/umrfventures/"><img class="facebooklogo" src="assets/Facebook Logo.png" alt=""></a>
                <a href="https://www.linkedin.com/company/umrfventures/mycompany/"><img class="linkedinlogo" src="assets/Linkedin Logo.png" alt=""></a>
                <a href="https://twitter.com/umrfventures"><img class="twitterlogo" src="assets/Twitter Logo.png" alt=""></a>
                <a href="https://www.instagram.com/umrfventures/"><img class="instagramlogo" src="assets/Instagram Logo.png" alt=""></a>
            </div>
            <!-- - 8. Contact Footer -->
            <div class="contactfooter">
        
            </div>
        </div>
        
    </body>
</html>