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
            <div><a href="whoweare.php" class="back">Back</a></div>
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
            <div class="contactfooter">

            </div>
        </div>
    </body>
</html>