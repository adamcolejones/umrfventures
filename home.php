<?php

    // ********************************************************
    // * A DESCRIPTION OF THE FUNCTIONALITY OF THE CODE BELOW *
    // ********************************************************
	// + This is the landing page for umrfventures.com
	// + The menu.php file loads at the top of the page for navigation
    // + The Home video will autoplay on most browsers if it's muted on start
    // + Value Titles and Descriptions
    // + Content Slide show
	// + Partner Logos
	// + Social Media Links
    // + Contact Footer
    // ********************************************************



    // - 1. This is the landing page for umrfventures.com
    // - 2. The menu.php file loads at the top of the page for navigation
	require 'menu.php';
    
?>

<!DOCTYPE html>
<html>
    <?php include 'head.php'; ?>
    <body>
        <!-- - 2.  -->
        <?php
            menu()
        ?>
        <div class="scrollableContent">
        <!-- - 3.  -->
            <div class="welcomecontainer">
                <video class="welcomevideo" loop autoplay playsinline muted controls>
                    <source src="assets/homevideo.mp4" type="video/mp4">    
                </video>
                <div class="welcometext">
                    <div class="welcometitle">A UNIQUE MODEL&nbsp;</div>
                    <div class="welcometitle">WITH UNIQUE SOLUTIONS</div>
                    <br>
                    <div class="welcomesubtitle">BUILDING YOUR&nbsp;</div>
                    <div class="welcomesubtitle">TALENT PIPELINE</div>
                    <div class="welcomedescription">UMRF Ventures is a managed service and contact center provider employing University students to meet your needs.</div>
                </div>
            </div>
            <!-- - 4.  -->

            <div class="homeservicecontainer">
                <div class="homejoincontent">
                    <div class="dyktitle">What We Do</div>
                    <br>
                    <div class="textdescription">See our </div>
                    <a href="whatwedo.php" class="textdescription">Provided Services</a>
                    <div class="textdescription"> and the impact we've made with our existing partners.</div>
                </div>
            </div>

            <div class="partnershowcasefix"></div>

            <div class="partnershowcasecontainer">
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

            <div class="homepartnercontainer">
                <div class="homejoincontent">
                    <div class="dyktitle">Partner With Us</div>
                    <br>
                    <a href="contact.php" class="textdescription">Contact UMRF Ventures</a> 
                    <div class="textdescription"> for pricing and how this model can meet your company's needs.</div>
                </div>
            </div>

            <div class="homejoincontainer">
                <div class="homejoincontent">
                    <div class="dyktitle">Join Our Team!</div>
                    <br>
                    <a href="employment.php" class="textdescription">Employing university students,</a> 
                    <div class="textdescription"> building career focused experiences.</div>
                </div>
            </div>

            <div class="dykcontainer">
                <div class="dyktop"><div class="dyktitle">Did you know?</div><button class="dykbutton" onclick="changeString()">Next</button></div>
                <div id="displayedString" class="textdescription">Click here to see the next fact!</div>
            </div>

            <!-- 5.  -->
            

            <!-- - 6.  -->

            <!-- - 7.-->
            <div class="sociallinks">
                <a href="https://www.facebook.com/umrfventures/"><img class="facebooklogo" src="assets/Facebook Logo.png" alt=""></a>
                <a href="https://www.linkedin.com/company/umrfventures/mycompany/"><img class="linkedinlogo" src="assets/Linkedin Logo.png" alt=""></a>
                <a href="https://twitter.com/umrfventures"><img class="twitterlogo" src="assets/Twitter Logo.png" alt=""></a>
                <a href="https://www.instagram.com/umrfventures/"><img class="instagramlogo" src="assets/Instagram Logo.png" alt=""></a>
            </div>

            <script>
                function getRandomString() {
                    const stringsList = [
                        "Since our incorporation in 2017, UMRF Ventures has paid nearly $8 million dollars in student wages.",
                        "More than 750 University of Memphis students have worked for UMRF Ventures.",
                        "Since 2017, our active student-employee population has grown by more than 920%.",
                        "We have placed 38 student employees in full-time positions with our company or current partners.",
                        "We manage all Level 1 customer service calls for a national waterfowl gear and duck hunting company.",
                        "In 2021, we handled 214,643 customer facing chats for Sedgwick Claims Management.",
                        "Ten University of Memphis faculty members have received UMRF Ventures Professorship grants valued at $10,000 each.",
                        "Efficiencies discovered in Google Cloud Platform queries, by our InfoSec team, saves FedEx $60,000 a month.",
                        "Health Sciences students placed more than 130,000 calls to 80,000 Memphians on behalf of the City of Memphis as part of their COVID Vaccine Advocacy Program.",
                        "UMRF Ventures' agents are responsible for all Level 2 tasks for the FedEx Enterprise Common Services IT help desk.",
                        "The 35 students on our Raymond James team work directly with systems that dictate the flow of money between RJ branches and firms."
                        // Add more strings here as needed
                    ];

                    const randomIndex = Math.floor(Math.random() * stringsList.length);
                    return stringsList[randomIndex];
                }

                // Function to change the displayed string on button click
                function changeString() {
                    const displayedElement = document.getElementById("displayedString");
                    const randomString = getRandomString();
                    displayedElement.textContent = randomString;
                }
                document.addEventListener("DOMContentLoaded", function() {
                    changeString();
                });
            </script>

            <!-- - 8.  -->
            <div class="contactfooter">
        
            </div>
        </div>
        
    </body>
</html>