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

            <div class="whowearelinks">
                <a href="whoweare.php" class="whowearelinkitem">About Us</a>
                <a href="students.php" class="whowearelinkitem">Students</a>
                <a href="governance.php" class="whowearelinkitem current">Governance</a>
                <a href="management.php" class="whowearelinkitem">Management</a>
            </div>
            
            <div class="textcontent">
                <div class="texttitle">Governance</div>
                <div class="textdescription">UMRF Ventures was established as a for-profit, C Corporation in 2017. We are affiliated with the University of Memphis, but the University of Memphis Research Foundation owns 100% of the shares of our company. Any profits that Ventures earns are paid back to the Research Foundation in the form of dividends.</div>
                <div class="textdescription">The company has about 10 full-time employees and over 200 part-time student employees.</div>
            </div>

            <img class="defaultpicture" src="assets/GovernanceTomKadien.png" alt="">
            <img class="defaultpicture" src="assets/GovernancePierreLandaiche.png" alt="">
            <img class="defaultpicture" src="assets/GovernanceLanWang.png" alt="">
            <img class="defaultpicture" src="assets/GovernanceJasbirDhaliwal.png" alt="">
            <img class="defaultpicture" src="assets/GovernanceDonHutson.png" alt="">
            <img class="defaultpicture" src="assets/GovernanceRaajKurapati.png" alt="">
            <img class="defaultpicture" src="assets/GovernanceRickSpell.png" alt="">
            <img class="defaultpicture" src="assets/GovernanceMarkFogelman.png" alt="">
            <img class="defaultpicture" src="assets/GovernancePatrickElam.png" alt="">

            <div class="textcontent">
                <div class="texttitle">UMRF Ventures Board Members</div>
            </div>

            <div class="textcontent">
                <div class="texttitle">Tom Kadien Chairman</div>
                <div class="textdescription"></div>
            </div>

            <div class="textcontent">
                <div class="texttitle">Pierre Landaiche CEO (Link)</div>
                <div class="textdescription">Pierre Landaiche joined UMRF Ventures in September 2020.  Prior to joining the company, he led the startup of the Memphis Sports Hall of Fame and for 22 years, managed the Renasant Convention Center – formerly the Memphis Cook Convention Center.  He is a native of Baton Rouge and graduate of Louisiana State University. He is involved in various community boards including the former chairman of the Better Business Bureau Board of Directors, The Hospitality Hub, the Dorothy Day House and the Bridge Street Newspaper among others. He is a member and former President of the Rotary Club of Memphis.  Pierre enjoys spending time with his wife of 31 years, Gay, and his daughter Caroline, a student at Spring Hill College.  He also enjoys duck hunting, fishing, tinkering with his 1967 Mustang convertible, cooking and breaking bread with friends and family. </div>
            </div>

            <div class="textcontent">
                <div class="texttitle">Lan Wang (Link)</div>
                <div class="textdescription">Dr. Wang joined the Department in Fall 2004 after finishing her PhD at UCLA. She was promoted to Associate Professor in 2010 and to Full Professor in 2016. She became the department chair in Feb. 2016. Her research focuses on improving the scalability, reliability, and security of the Internet. She has received multiple major research grants from NSF, NIST, and DoD as well as several grants from the university. Most recently, she is on a team that received over $15 million from NSF for their "Named Data Networking" project. At the University of Memphis, Dr. Wang has taught a variety of courses including Networking and Information Assurance, Advanced Computer Networks, Wireless and Mobile Computing, Models of Computation, Web Services and the Internet, and Data Structures. As an active member of the research community, she has served on the program committee of more than 50 conferences and workshops. She is also interested in promoting female participation in computer science, co-organizing a "Networking Networking Women" panel at ACM SIGCOMM 2008 and an N2Women dinner at ACM SIGCOMM 2019. She started and has been advising the Women in Computing student chapter at the university.</div>
            </div>

            <div class="textcontent">
                <div class="texttitle">Jasbir Dhaliwal (Link)</div>
                <div class="textdescription">Dr. Jasbir Dhaliwal is Professor of Information Systems and Executive Vice-President for Research & Innovation at the University of Memphis. He also serves as Executive Director of the University of Memphis Research Foundation which holds all the equity in UMRF Ventures Inc. He led the innovation team that developed the business model leading to the founding of UMRF Ventures Inc. in 2017 and serving as its founding President. He has significant international experience in leading applied innovation at universities in Canada, Singapore and Norway. He is currently leading the University of Memphis into the top-tier national Carnegie R1 ranking as Tennessee’s second flagship public research university. His other interests include hiking the Wolf River trails of Shelby Farms; canoeing the lakes of Norway and British Columbia, Canada; and being active as an angel investor in technology start-ups from his home in Germantown, Tennessee.</div>
            </div>

            <div class="textcontent">
                <div class="texttitle">Don Hutson (Link)</div>
                <div class="textdescription">Don has been recognized with many honors, most recently the National Speakers Association’s “Master of Influence” Award. He shares this recognition with leaders that include Ken Blanchard, Jack Kemp, Zig Ziglar and Norman Vincent Peale. Don is the author of 14 books, including his latest, Selling Value, and his two Wall Street Journal and New York Times best sellers, The One Minute Entrepreneur and the One Minute Negotiator.</div>
            </div>

            <div class="textcontent">
                <div class="texttitle">Raaj Kurapati (Link)</div>
                <div class="textdescription">Before joining the University of Memphis, Raaj Kurapati previously held the positions of Vice President for Finance and Chief Financial Officer for Texas A&M University -- Kingsville and Associate Vice Chancellor for Financial Services and Business Operations for the University of Alaska in Fairbanks. He also served as Vice President & Chief Financial/Compliance Officer/Vice President & Chief Internal Auditor for the Bank of FSM in Pohnpei, Micronesia and Senior Auditor for Deloitte & Touche in Saipan and Guam/Micronesia. Kurapati earned his bachelor of business administration (BBA) from East Texas Baptist University with a concentration in management and accounting. He is an accredited investment fiduciary as well as an accredited investment fiduciary analyst and serves on various finance and education boards.</div>
            </div>

            <div class="textcontent">
                <div class="texttitle">Rick Spell (Link)</div>
                <div class="textdescription">In 1998, Rick was named Honorary City Councilman in recognition of his “Outstanding Contribution to the City of Memphis”. Rick is currently a member of the University of Memphis Board of Visitors which is “comprised of prominent business and community leaders who serve as advisors to the President” as well as the University of Memphis Foundation Board of Trustees. Rick is the former President of the fundraising board for the University of Memphis Athletic Department and is a lifetime Ambassador Club member representing the highest level of financial contributions to the athletic department.</div>
            </div>

            <div class="textcontent">
                <div class="texttitle">Patrick Elam (Link)</div>
                <div class="textdescription">Patrick began his FedEx career as a package handler in 1993. He was promoted to Managing Director of Hub Operations in 2014 and Vice President of the Memphis Hub in April 2016. After serving over two years as Vice President of the Memphis Hub Night Operations, Patrick made the transition to Vice President/GM, AGFS Southern Region in June 2018. Patrick now serves as Vice President of US Operations, Southeast Region. Patrick is a graduate of the University of Central Arkansas, where he earned a football scholarship and won a National Championship in 1991. He was also inducted into the Arkansas Sports Hall of Fame in October 2017. Patrick is a four–time recipient of the FedEx Five Star Award and a two-time winner of the FedEx Purple Promise Award.</div>
            </div>

            <div class="textcontent">
                <div class="texttitle">Mark Fogelman (Link)</div>
                <div class="textdescription">Mark Fogelman is co-owner and President of Fogelman, a privately held multifamily investment and management company headquartered in Memphis, Tennessee. Mark holds a BSM degree from Tulane University's Freeman School of Business where he was the recipient of the Evelyn and William Burkenroad Award, and currently serves as a Trustee on the Freeman School Council and The Tulane President’s Council. He is past president of the Tennessee Apartment Association, Temple Israel and is on the board of governors of New Memphis Institute, The National Multi-Housing Council and Peak Campus Housing.</div>
            </div>
            <div class="contactfooter">

            </div>
        </div>
    </body>
</html>