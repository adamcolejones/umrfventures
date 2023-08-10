<?php

    // ********************************************************
    // * A DESCRIPTION OF THE FUNCTIONALITY OF THE CODE BELOW *
    // ********************************************************
	// + This page is a found in the sub menu of the whoweare.php page
	// + The menu.php file loads at the top of the page for navigation
    // + head.php handles all of the head tag details to reduce repetitive information
    // + the scrollableContent Class contains all the information on the page adjusting height based on the window and the menu bar above
	// + wwalinks is a submenu for the Who We Are navigation Tab.  This allows user to click through and find UMRF people
	// + A short Description to define the content below
	// + Each member has their own container with their name, picture, and title
	// + 

// + The menu.php file loads at the top of the page for navigation
	require 'menu.php';
    
?>

<!DOCTYPE html>
<html>
<!-- // + head.php handles all of the head tag details to reduce repetitive information -->
    <?php include 'head.php'; ?>
    <body>
<!-- // + The menu.php file loads at the top of the page for navigation -->
        <?php menu() ?>
<!-- // + the scrollableContent Class contains all the information on the page adjusting height based on the window and the menu bar above -->
        <div class="scrollableContent">
<!-- // + wwalinks is a submenu for the Who We Are navigation Tab.  This allows user to click through and find UMRF people -->
            <div class="wwalinks">
                <a href="whoweare" class="wwalinkitem">About Us</a>
                <a href="students" class="wwalinkitem">Students</a>
                <a href="management" class="wwalinkitem">Management</a>
                <a href="governance" class="wwalinkitem current">Governance</a>
            </div>
<!-- // + A short Description to define the content below -->
            <div class="governancetextcontent">
                <div class="texttitle">UMRF Ventures Board Members</div>
                <div class="textdescription">UMRF Ventures was established as a for-profit, C Corporation in 2017. We are affiliated with the University of Memphis, but the University of Memphis Research Foundation owns 100% of the shares of our company. Any profits that Ventures earns are paid back to the Research Foundation in the form of dividends.</div>
                <div class="textdescription">The company has about 10 full-time employees and over 200 part-time student employees.</div>
            </div>
<!-- // + Each member has their own container with their name, picture, and title -->
            <div class="governancelist">
                <div>
                    <a class="governanceinfo">
                        <div class="governancename">Tom Kadien</div>
                        <div class="governancetitle">Chairman</div>
                    </a>
                    <div class="governancepicture" style="background-image: url('assets/GovernanceTomKadien.png');" ></div>
                </div>
<!-- // + Each member has their own container with their name, picture, and title -->
                <div>
                    <a class="governanceinfo" href="info/PierreLandaiche">
                        <div class="governancename">Pierre Landaiche</div>
                        <div class="governancetitle">CEO</div>
                    </a>
                    <div class="governancepicture" style="background-image: url('assets/GovernancePierreLandaiche.png');" ></div>
                </div>
<!-- // + Each member has their own container with their name, picture, and title -->
                <div>
                    <a class="governanceinfo" href="info/LanWang">
                        <div class="governancename">Lan Wang</div>
                        <div class="governancetitle">Board Member</div>
                    </a>
                    <div class="governancepicture" style="background-image: url('assets/GovernanceLanWang.png');" ></div>
                </div>
<!-- // + Each member has their own container with their name, picture, and title -->
                <div>
                    <a class="governanceinfo" href="info/JasbirDhaliwal">
                        <div class="governancename">Jasbir Dhaliwal</div>
                        <div class="governancetitle">Board Member</div>
                    </a>
                    <div class="governancepicture" style="background-image: url('assets/GovernanceJasbirDhaliwal.png');" ></div>
                </div>
<!-- // + Each member has their own container with their name, picture, and title -->
                <div>
                    <a class="governanceinfo" href="info/DonHutson">
                        <div class="governancename">Don Hutson</div>
                        <div class="governancetitle">Board Member</div>
                    </a>
                    <div class="governancepicture" style="background-image: url('assets/GovernanceDonHutson.png');" ></div>
                </div>
<!-- // + Each member has their own container with their name, picture, and title -->
                <div>
                    <a class="governanceinfo" href="info/RaajKurapati">
                        <div class="governancename">Raaj Kurapati</div>
                        <div class="governancetitle">Board Member</div>
                    </a>
                    <div class="governancepicture" style="background-image: url('assets/GovernanceRaajKurapati.png');" ></div>
                </div>
<!-- // + Each member has their own container with their name, picture, and title -->
                <div>
                    <a class="governanceinfo" href="info/PatrickElam">
                        <div class="governancename">Patrick Elam</div>
                        <div class="governancetitle">Board Member</div>
                    </a>
                    <div class="governancepicture" style="background-image: url('assets/GovernancePatrickElam.png');" ></div>
                </div>
<!-- // + Each member has their own container with their name, picture, and title -->
                <div>
                    <a class="governanceinfo" href="info/MarkFogelman">
                        <div class="governancename">Mark Fogelman</div>
                        <div class="governancetitle">Board Member</div>
                    </a>
                    <div class="governancepicture" style="background-image: url('assets/GovernanceMarkFogelman.png');" ></div>
                </div>
            </div>

            <div class="contactfooter"></div>
        </div>
    </body>
</html>