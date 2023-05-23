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
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <!-- - 2. The menu.php file loads at the top of the page for navigation -->
        <?php
            menu()
        ?>
        <div class="scrollableContent">
            <div class="servicessection">
                <div class="servicessectionpicture">
                    <img class="defaultpicture" src="assets/DefaultPicture.png" alt="">
                </div>
                <div class="servicessectiontext">
                    <div class="servicestitle">About Us</div>
                    <div class="servicesdescription">UMRF Ventures is a company staffed by students who attend the University of Memphis.<a href="about.php" class="readmore">Read More</a></div>
                </div>
            <!--Lack of coded white space is taken into account for styling on the line below, do not have tabs, newlines, or white space between the divs-->
            </div><div class="servicessection">
                <div class="servicessectionpicture">
                    <img class="defaultpicture" src="assets/DefaultPicture.png" alt="">
                </div>
                <div class="servicessectiontext">
                    <div class="servicestitle">Our Students</div>
                    <div class="servicesdescription">Description Goes Here  <a href="index.php" class="readmore">Read More</a></div>
                </div>
            </div>
            <!--Allow white space new line here for styling-->
            <div class="servicessection">
                <div class="servicessectionpicture">
                    <img class="defaultpicture" src="assets/DefaultPicture.png" alt="">
                </div>
                <div class="servicessectiontext">
                    <div class="servicestitle">Our Team / Governance</div>
                    <div class="servicesdescription">Description Goes Here  <a href="index.php" class="readmore">Read More</a></div>
                </div>
            <!--Lack of coded white space is taken into account for styling on the line below, do not have tabs, newlines, or white space between the divs-->
            </div><div class="servicessection">
                <div class="servicessectionpicture">
                    <img class="defaultpicture" src="assets/DefaultPicture.png" alt="">
                </div>
                <div class="servicessectiontext">
                    <div class="servicestitle">FAQs</div>
                    <div class="servicesdescription">Description Goes Here  <a href="index.php" class="readmore">Read More</a></div>
                </div>
            </div>
            
            <div>
                <h2>Our Students - Who We Are</h2>
                <img class="defaultpicture" src="assets/TPSpencerP.png" alt="">
                <img class="defaultpicture" src="assets/TPChloeB.png" alt="">
                <img class="defaultpicture" src="assets/TPJacobM.png" alt="">
                <img class="defaultpicture" src="assets/TPAndrewE.png" alt="">
                <img class="defaultpicture" src="assets/TPDylanD.png" alt="">
                <img class="defaultpicture" src="assets/TPMicaelaS.png" alt="">
                <ul>
                    <li>Talent Pipeline</li>
                    <li>Since 2017 more than 70 of our student employees have been employed by our partners. When you hire UMRF Ventures Inc we can become a training ground for your future staff.</li>
                    <li></li>
                </ul>
            </div>
            <div>
                <h2>Our Team and Governance</h2>
                <img class="defaultpicture" src="assets/TeamPierreLandaiche.png" alt="">
                <img class="defaultpicture" src="assets/TeamSheritaJohnson.png" alt="">
                <img class="defaultpicture" src="assets/TeamKeithSisson.png" alt="">
                <img class="defaultpicture" src="assets/TeamJuttaSchneider.png" alt="">
                <img class="defaultpicture" src="assets/TeamJasmineSankhon.png" alt="">
                <img class="defaultpicture" src="assets/TeamLashawnWillingham.png" alt="">
                <img class="defaultpicture" src="assets/TeamKatyHiggins.png" alt="">
                <img class="defaultpicture" src="assets/TeamCruzSeguraRamirez.png" alt="">
                <img class="defaultpicture" src="assets/TeamLaurenBoyette.png" alt="">
                <img class="defaultpicture" src="assets/UMRFFrontLawn.png" alt="">
                <img class="defaultpicture" src="assets/GovernanceTomKadien.png" alt="">
                <img class="defaultpicture" src="assets/GovernancePierreLandaiche.png" alt="">
                <img class="defaultpicture" src="assets/GovernanceLanWang.png" alt="">
                <img class="defaultpicture" src="assets/GovernanceJasbirDhaliwal.png" alt="">
                <img class="defaultpicture" src="assets/GovernanceDonHutson.png" alt="">
                <img class="defaultpicture" src="assets/GovernanceRaajKurapati.png" alt="">
                <img class="defaultpicture" src="assets/GovernanceRickSpell.png" alt="">
                <img class="defaultpicture" src="assets/GovernanceMarkFogelman.png" alt="">
                <img class="defaultpicture" src="assets/GovernancePatrickElam.png" alt="">
                <ul>
                    <li>Pierre Landaiche – CEO</li>
                    <li>Description</li>
                    <li>Sherita Johnson – Managing Director | Business Division A</li>
                    <li>Description</li>
                    <li>Keith Sisson – Managing Director | Business Division B</li>
                    <li>Description</li>
                    <li>Jutta “JT” Schneider – Director | Project Management & Corporate Initiatives</li>
                    <li>Description</li>
                    <li>Jasmine Sankhon – Manager | ECS</li>
                    <li>Description</li>
                    <li>LaShawn Willingham – Manager | Sedgwick</li>
                    <li>Description</li>
                    <li>Katy Higgins – Manager | FedEx Command Center</li>
                    <li>Description</li>
                    <li>Cruz Segura-Ramirez – Manager | Workforce Management</li>
                    <li>Description</li>
                    <li>Lauren Boyette – Manager | Raymond James</li>
                    <li>Description</li>
                    <li>GOVERNANCE STARTS HERE</li>
                    <li>Governance</li>
                    <li>UMRF Ventures was established as a for-profit, C Corporation in 2017. We are affiliated with the University of Memphis, but the University of Memphis Research Foundation owns 100% of the shares of our company. Any profits that Ventures earns are paid back to the Research Foundation in the form of dividends.</li>
                    <li>The company has about 10 full-time employees and over 200 part-time student employees.</li>
                    <li>UMRF Ventures Board Members</li>
                    <li>Tom Kadien Chairman</li>
                    <li>Pierre Lanaiche CEO (Link)</li>
                    <li>Description</li>
                    <li>Lan Wang (Link)</li>
                    <li>Description</li>
                    <li>Jasbir Dhaliwal (Link)</li>
                    <li>Description</li>
                    <li>Don Hutson (Link)</li>
                    <li>Description</li>
                    <li>Raaj Kurapati (Link)</li>
                    <li>Description</li>
                    <li>Rick Spell (Link)</li>
                    <li>Description</li>
                    <li>Patrick Elam (Link)</li>
                    <li>Description</li>
                    <li>Mark Fogelman (Link)</li>
                    <li>Description</li>
                    <li></li>
                </ul>
            </div>
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