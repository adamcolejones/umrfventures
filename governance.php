<?php

    // ********************************************************
    // * A DESCRIPTION OF THE FUNCTIONALITY OF THE CODE BELOW *
    // ********************************************************
	// - This is for the "who we are" page, in the "governance" section
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
            menu()
        ?>
        <div class="scrollableContent">

            <div class="wwalinks">
                <a href="whoweare.php" class="wwalinkitem">About Us</a>
                <a href="students.php" class="wwalinkitem">Students</a>
                <a href="management.php" class="wwalinkitem">Management</a>
                <a href="governance.php" class="wwalinkitem current">Governance</a>
            </div>

            <div class="governancetextcontent">
                <div class="texttitle">UMRF Ventures Board Members</div>
                <div class="textdescription">UMRF Ventures was established as a for-profit, C Corporation in 2017. We are affiliated with the University of Memphis, but the University of Memphis Research Foundation owns 100% of the shares of our company. Any profits that Ventures earns are paid back to the Research Foundation in the form of dividends.</div>
                <div class="textdescription">The company has about 10 full-time employees and over 200 part-time student employees.</div>
            </div>

            <div class="governancelist">
                <div>
                    <a class="governanceinfo">
                        <div class="governancename">Tom Kadien</div>
                        <div class="governancetitle">Chairman</div>
                    </a>
                    <div class="governancepicture" style="background-image: url('assets/GovernanceTomKadien.png');" ></div>
                </div>

                <div>
                    <a class="governanceinfo" href="info/PierreLandaiche.php">
                        <div class="governancename">Pierre Landaiche</div>
                        <div class="governancetitle">Board Member</div>
                    </a>
                    <div class="governancepicture" style="background-image: url('assets/GovernancePierreLandaiche.png');" ></div>
                </div>

                <div>
                    <a class="governanceinfo" href="info/LanWang.php">
                        <div class="governancename">Lan Wang</div>
                        <div class="governancetitle">Board Member</div>
                    </a>
                    <div class="governancepicture" style="background-image: url('assets/GovernanceLanWang.png');" ></div>
                </div>

                <div>
                    <a class="governanceinfo" href="info/JasbirDhaliwal.php">
                        <div class="governancename">Jasbir Dhaliwal</div>
                        <div class="governancetitle">Board Member</div>
                    </a>
                    <div class="governancepicture" style="background-image: url('assets/GovernanceJasbirDhaliwal.png');" ></div>
                </div>

                <div>
                    <a class="governanceinfo" href="info/DonHutson.php">
                        <div class="governancename">Don Hutson</div>
                        <div class="governancetitle">Board Member</div>
                    </a>
                    <div class="governancepicture" style="background-image: url('assets/GovernanceDonHutson.png');" ></div>
                </div>

                <div>
                    <a class="governanceinfo" href="info/RaajKurapati.php">
                        <div class="governancename">Raaj Kurapati</div>
                        <div class="governancetitle">Board Member</div>
                    </a>
                    <div class="governancepicture" style="background-image: url('assets/GovernanceRaajKurapati.png');" ></div>
                </div>

                <div>
                    <a class="governanceinfo" href="info/PatrickElam.php">
                        <div class="governancename">Patrick Elam</div>
                        <div class="governancetitle">Board Member</div>
                    </a>
                    <div class="governancepicture" style="background-image: url('assets/GovernancePatrickElam.png');" ></div>
                </div>

                <div>
                    <a class="governanceinfo" href="info/MarkFogelman.php">
                        <div class="governancename">Mark Fogelman</div>
                        <div class="governancetitle">Board Member</div>
                    </a>
                    <div class="governancepicture" style="background-image: url('assets/GovernanceMarkFogelman.png');" ></div>
                </div>

            </div>

            <div class="contactfooter">

            </div>
        </div>
    </body>
</html>