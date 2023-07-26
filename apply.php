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
            <!-- <img class="contactpicture" src="assets/UMRFBuildingFront.png" alt=""> -->

            <!-- <div class="contacttextcontent">
                <div class="texttitle">Contact Us</div>
                <div class="textdescription">UMRF Ventures, Inc 4075 Park Avenue Memphis, TN 38111</div>
                <div class="textdescription">Phone: (901) 678-4444</div>
                <div class="textdescription">Email: info@umrfventures.com</div>
            </div> -->

            <div class="applysection">
                <div class="applytext">
                    <div class="applytitle">Technical Support Agent Level 1</div>
                    <div class="applydescription">The Technical Support Agent L1 provides technical Support for FedEx ECS on the phone (other communication channels like chat and email will be added when the venture expands the service). This position consists of being in the first line of contact for users with technical issues.</div>
                </div>

                <div class="wwdcontactlink">
                    <a href="https://apply.jobappnetwork.com/clients/21468/posting/8610430/en" class="contactbutton">Apply Now</a>
                </div>
            </div>

            <div class="applysection">
                <div class="applytext">
                    <div class="applytitle">Communication Services Analyst</div>
                    <div class="applydescription">The Communication Services Analyst is responsible for troubleshooting telecommunication issues. The Analyst provides telecommunication support working in collaboration with the Client Communication Services Team. </div>
                </div>

                <div class="wwdcontactlink">
                    <a href="https://apply.jobappnetwork.com/clients/21468/posting/8579722/en" class="contactbutton">Apply Now</a>
                </div>
            </div>

            <div class="applysection">
                <div class="applytext">
                    <div class="applytitle">Identity Access Management Analyst</div>
                    <div class="applydescription">The Identity Access Management Analyst is responsible for issuing and troubleshooting access issues. The Analyst protects data and systems from unauthorized access while managing the identities and access rights of people both inside and outside the organization of Raymond James.</div>
                </div>

                <div class="wwdcontactlink">
                    <a href="https://apply.jobappnetwork.com/clients/21468/posting/8610199/en" class="contactbutton">Apply Now</a>
                </div>
            </div>

            <div class="applysection">
                <div class="applytext">
                    <div class="applytitle">Sedgwick Support Agent</div>
                    <div class="applydescription">The Sedgwick Support Agent provides customer service support for Sedgwick Claims Management via phone and chat (other communication channels like email might be added when the venture expands the service). This position consists of being the first line of contact for Sedgwick customers with issues accessing claim management applications.</div>
                </div>

                <div class="wwdcontactlink">
                    <a href="https://apply.jobappnetwork.com/clients/21468/posting/8610426/en" class="contactbutton">Apply Now</a>
                </div>
            </div>

            <div class="applysection">
                <div class="applytext">
                    <div class="applytitle">Systems Analytics System Analyst</div>
                    <div class="applydescription">The Systems Analyst completes assigned tasks in the Command Center Systems Analytics environment to meet the overall project objectives.</div>
                </div>

                <div class="wwdcontactlink">
                    <a href="https://apply.jobappnetwork.com/clients/21468/posting/8610400/en#Position-Information" class="contactbutton">Apply Now</a>
                </div>
            </div>

            <div class="contactfooter">

            </div>
        </div>
        
    </body>
</html>