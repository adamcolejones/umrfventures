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
    <?php include 'head.php'; ?>
    <body>
        <?php
            menu();
        ?>
        <div class="scrollableContent">

            <div class="wwacontacttext">
                <div class="wwacontactsubtitle">Student success is our goal.</div>
                <div class="wwacontactdescription">UMRF Ventures is a company staffed by students. We offer part-time jobs on campus, providing a variety of services to local companies. University of Memphis students have the exclusive opportunity to apply.</div>
                <div class="wwacontactdescription">#VENTUREWITHUS</div>
            </div>

            <div class="employmentcontainer">
                <!-- <div class="welcomebackground"></div> -->
                <video class="employmentvideo" loop autoplay playsinline muted controls>
                    <source src="assets/employmentvideo.mp4" type="video/mp4">    
                </video>
                <div class="employmenttext">
                    <div class="employmenttitle">WE ARE CURRENTLY&nbsp;</div>
                    <div class="employmenttitle">ACCEPTING APPLICATIONS</div>
                    <br>
                    <div class="employmentsubtitle">APPLY NOW!&nbsp;</div>
                    <div class="employmentdescription">Kick-start your career with hands-on experience</div>
                </div>
            </div>

            <div class="employmentcontacttext">
                <div class="wwacontactsubtitle">Join Our Team</div>
                <div class="wwacontactdescription">We are always accepting applications! We create unique opportunities for our student employees for professional development, leadership training, and assistance with their career search after graduation.</div>
                <div class="wwacontactdescription">Our students are serious about their education and their work at UMRF Ventures.</div>
                <br><br>
                <a href="apply.php" class="viewpositionsbutton">View Positions</a>
            </div>

            <div class="employmentcontacttext">
                <div class="wwacontactsubtitle">Recruitment FAQs</div>
                <div class="wwacontactdescription">How much do you pay?</div>
                <div class="wwacontactdescription">We pride ourselves on paying our employees a living wage. Our employees make an average of $15.00 per hour. However, graduate students and students in leadership positions typically earn more.</div>
                <div class="wwacontactdescription">How many hours do I have to work?</div>
                <div class="wwacontactdescription">Our students typically work 10-20 hours per week. We schedule their work hours around their classroom commitments.</div>
            </div>

            <div class="contactfooter">

            </div>
        </div>
    </body>
</html>