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

            <div class="serviceoptionscontainer">
                <div class="serviceoption">
                    <!-- Images downloaded from google materials - https://fonts.google.com/icons?icon.style=Rounded&icon.platform=web -->
                    <img class="serviceoptionsphoto" src="assets/headset.png" alt="">
                    <div class="servicecontent">
                        <div class="servicetitle">Call Center</div>
                        <div class="servicedescription">UMRF Ventures collaborates with partner companies, including FedEx, Sedgwick, Raymond James, the City of Memphis, and Banded/Avery Outdoors. They employ University of Memphis students and provide them with part-time jobs on campus. Their goal is to help students succeed and create potential career paths with their partner companies after graduation.</div>
                    </div>
                </div>

                <div class="serviceoption">
                    <!-- Images downloaded from google materials - https://fonts.google.com/icons?icon.style=Rounded&icon.platform=web -->
                    <img class="serviceoptionsphoto" src="assets/analytics.png" alt="">
                    <div class="servicecontent">
                        <div class="servicetitle">Analytics</div>
                        <div class="servicedescription">The students, primarily in science, technology, engineering and mathematics work with command center teams, using advanced software technologies to dig into operational and network performance data and look for possible system improvements.</div>
                    </div>
                </div>

                <div class="serviceoption">
                    <!-- Images downloaded from google materials - https://fonts.google.com/icons?icon.style=Rounded&icon.platform=web -->
                    <img class="serviceoptionsphoto" src="assets/megaphone.png" alt="">
                    <div class="servicecontent">
                        <div class="servicetitle">Much More...</div>
                        <div class="servicedescription">We have the unique opportunity to have our student employees assist with any need your company may have. From accounting to marketing, we can offer student employees who are constantly learning the newest practices in their trade.</div>
                    </div>
                </div>
            </div>

            <div class="wwdcontainer">
                <div class="wwdsubject">
                    <div class="wwdtext" style="background-image: url('assets/wwdtemp1.png'); border-radius: 10px;   background-repeat: no-repeat;   background-position: center;   background-size: cover;">
                        <div class="wwdtitle">IT Help Desks</div>
                        <div class="wwddescription">Our IT Help Desk team provides top-notch technical support to resolve computer hardware, software, and network issues. With exceptional problem-solving skills, we ensure smooth technology operations and offer excellent customer service.</div>
                    </div>
                </div>
                <div class="wwdsubject">
                    <div class="wwdtext" style="background-image: url('assets/wwdtemp2.png'); border-radius: 10px;   background-repeat: no-repeat;   background-position: center;   background-size: cover;">
                        <div class="wwdtitle">Information Security Analysis</div>
                        <div class="wwddescription">Our Information Security Analysts protect sensitive data by assessing systems, implementing security measures, and monitoring for potential threats. With extensive cybersecurity knowledge, we safeguard information and maintain confidentiality.</div>
                    </div>
                </div>
            </div>

            <div class="wwdcontainer">
                <div class="wwdsubject">
                    <div class="wwdtext" style="background-image: url('assets/wwdtemp3.png'); border-radius: 10px;   background-repeat: no-repeat;   background-position: center;   background-size: cover;">
                        <div class="wwdtitle">Inbound & Outbound Call Centers</div>
                        <div class="wwddescription">Our Inbound and Outbound Call Center professionals deliver exceptional customer service through phone interactions. Whether handling inquiries or making proactive calls, we provide solutions, build rapport, and ensure a positive customer experience.</div>
                    </div>
                </div>
                <div class="wwdsubject">
                    <div class="wwdtext" style="background-image: url('assets/wwdtemp4.png'); border-radius: 10px;   background-repeat: no-repeat;   background-position: center;   background-size: cover;">
                        <div class="wwdtitle">Customer Service Centers</div>
                        <div class="wwddescription">At our Customer Service Center, we prioritize customer satisfaction and efficient issue resolution. With excellent problem-solving skills, we address inquiries, complaints, and requests to exceed expectations and leave a positive impression.</div>
                    </div>
                </div>
            </div>

            <div class="wwdcontainer">
                <div class="wwdsubject">
                    <div class="wwdtext" style="background-image: url('assets/wwdtemp5.png'); border-radius: 10px;   background-repeat: no-repeat;   background-position: center;   background-size: cover;">
                        <div class="wwdtitle">Email and Chat Response Services</div>
                        <div class="wwddescription">Our Email and Chat Response team delivers efficient and accurate customer support through written channels. We provide timely solutions, handle multiple interactions, and ensure exceptional service through effective written communication.</div>
                    </div>
                </div>
                <div class="wwdsubject">
                    <div class="wwdtext" style="background-image: url('assets/wwdtemp6.png'); border-radius: 10px;   background-repeat: no-repeat;   background-position: center;   background-size: cover;">
                        <div class="wwdtitle">Custom Ventures</div>
                        <div class="wwddescription">Through Custom Ventures, we offer innovative and tailored solutions to meet clients' unique business needs. With expertise in problem-solving and industry knowledge, we develop customized strategies that drive success and create value.</div>
                    </div>
                </div>
            </div>

            

            <div class="wwdcontact">
                <div class="wwdcontacttext">
                    <div class="wwdcontactsubtitle">Next Steps...</div>
                    <div class="wwdcontactdescription">Do you want to establish a talent pipeline for your future hiring needs? Come work with UMRF Ventures and our talented students!</div>
                </div>

                <div class="wwdcontactlink">
                    <a href="contact.php" class="contactbutton">Contact Us</a>
                </div>
            </div>

            <div class="contactfooter">

            </div>
        </div>
    </body>
</html>