<!DOCTYPE html>
<html>
    <head>
        <!--Webpage title-->
        <title>SDG 14: Life Below Water</title>
        <link rel="icon" href="Images/webIcon.png">

        <!--Embedded Font from google fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        
        <!--linked stylesheet-->
        <link rel="stylesheet" href="styles.css">
    </head>
    <body class="main">
        <header>
            <!--header navigation container-->
            <nav class="navBar">
                <div class="navDiv">
                    <div class="icon">
                        <a href="home.php">
                            <img src="Images/SDG.png" height="80" width="80">
                        </a>
                        <!--welcome, name-->
                        <p class="icon">
                            <span class="spanIcon">Welcome,</span>
                            <!--print session vars from login page-->
                            <?php
                                session_start();
                                echo $_SESSION['firstName'] . " " . $_SESSION['lastName'];
                            ?>
                        </p>
                        <!--forms for logout to make it simple-->
                        <form action="index.php" method="POST">
                            <button type="submit" name="submit" class="logout">Log Out</button> <!-- Logout button -->
                        </form>
                    </div>
                    <!--site navigation-->
                    <ul>
                        <li class="home"><a href="developers.php">The Developers</a></li>
                        <li class="home"><a href="project.php">Projects</a></li>
                        <li class="home"><button><a href="contact.php">Contact Us</a></button></li>
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <!--project images container-->
            <div class="projectContainer">
                <!--first column-->
                <div id="firstColumn">
                    <a href="https://www.rappler.com/environment/city-gentle-people-fights-save-coastal-life-dumaguete-reclamation/" target="_blank" class="hoverOverlay">
                        <img src="Images/NOTO174.png">
                        <!--content when hovered-->
                        <div class="contentHover">
                            <h3 class="eachProjectTitle">Dumaguete: ‘City of Gentle People’ fights to save coastal life</h3>
                            <p class="projectDesc">(1st UPDATE) A proposed 174-hectare Smart City reclamation is threatening to alter the life of locals. In this tight-knit community, a people’s movement has emerged to oppose the joint venture between the city government and a private developer.</p>
                        </div>
                    </a>
                </div>
                
                <!--second column-->
                <div id="secondColumn">
                    <!--top content-->
                    <div id="secondColumnTop">
                        <a href="https://www.sunstar.com.ph/dumaguete/feature/coastal-clean-up-held-in-dumaguete" target="_blank" class="hoverOverlay">
                            <img src="Images/SunstarCoastalCleanUpDumaguete.png">
                            <!--content when hovered-->
                            <div class="contentHover">
                                <h3 class="eachProjectTitle">Coastal clean-up held in Dumaguete by Binhi Youth Champions</h3>
                                <p class="projectDesc">GEOTHERMAL leader Energy Development Corporation's (EDC) Binhi Youth Champions recently held their coastal cleanup and waste audit activity at Barangay Calindagan in Dumaguete City, Negros Oriental.</p>
                            </div>
                        </a>
                    </div>
                    <!--bottom content-->
                    <div id="secondColumnBot">
                        <a href="https://www.facebook.com/share/p/19UcKSBTon/" target="_blank" class="hoverOverlay">
                            <img src="Images/PROOCEAN.jpg">
                            <!--content when hovered-->
                            <div class="contentHover">
                                <h3 class="eachProjectTitle">A Day of Beach Cleanup: Silliman and Docum Bacong</h3>
                                <p class="projectDesc">Today October 22, 2024 we tackled two sites: Silliman Beach and Docum Bacong. Our first stop was Silliman Beach where the low tide revealed a vast expanse of trash. After Silliman, we moved on to Docum Bacong. In total, we collected a whopping 312kg of trash today.</p>
                            </div>
                        </a>
                    </div>
                </div>
                
                <!--third column-->
                <div id="thirdColumn">
                    <!--top content-->
                    <div id="thirdColumnTop">
                        <a href="https://www.gridmagazine.ph/news-feed/in-dumaguete-city-locals-stand-against-proposed-reclamation-project" target="_blank" class="hoverOverlay">
                            <img src="Images/defenseOfMarineProtectedAreas.jpeg">
                            <!--content when hovered-->
                            <div class="contentHover">
                                <h3 class="eachProjectTitle">In Dumaguete city, locals stand in defense of marine protected areas</h3>
                                <p class="projectDesc">On the afternoon of July 11, concerned citizens from Dumaguete city staged a peaceful rally along Rizal Boulevard, protesting the city’s plans to reclaim 174 hectares of land along the iconic waterfront.</p>
                            </div>
                        </a>
                    </div>
                    <!--bottom content-->
                    <div id="thirdColumnBot">
                        <a href="https://www.pna.gov.ph/articles/1207011" target="_blank" class="hoverOverlay">
                            <img src="Images/dumaguete-reef-dome-.png">
                            <!--content when hovered-->
                            <div class="contentHover">
                                <h3 class="eachProjectTitle">Dumaguete's artificial reef project a triple-win program</h3>
                                <p class="projectDesc">A five-year artificial reef deployment project that enhances the marine biodiversity of this capital city’s four marine protected areas (MPAs)</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <!--footer content container-->
            <div class="footerContainer">

                <!--SDG main site href-->
                <a href="https://sdgs.un.org/goals">
                    <img src="Images/SDGlogo.png" height="80" width="147">
                </a>

                <!--navigation-->
                <ul>
                    <label class="footerLabel">Explore</label><br>
                    <li class="footerLink"><a href="home.php">Home</a></li>
                    <li class="footerLink"><a href="developers.php">The Developers</a></li>
                    <li class="footerLink"><a href="project.php">Projects</a></li>
                    <li class="footerLink"><a href="contact.php">Contact Us</a></li>
                </ul>
                <!--contact info-->
                <address>
                    <label class="footerLabel">Contact Us</label><br>
                    <img src="Images/phone-call.png" class="contactIcons">8631-0966<br>
                    <img src="Images/gmailfooter.png" class="contactIcons"><a href="mailto:sdg@neda.gov.ph">sdg@neda.gov.ph</a><br>
                    <img src="Images/location.png" class="contactIcons">12 St. J.Escriva Drive,<br>
                    Ortigas Center, Pasig City
                </address>
            </div>
            <div class="copyright">
                <p>&copy;copyright 2024; designed by 
                    <span class="designer">KEITH JUSTIN C. MANDAL | ETHAN MARIO T. ABALAHIN</span>
                </p>
            </div>
        </footer>
    </body>
<html>