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
    <body class="titleBackground">
        <!--light header to match background color of body-->
        <header class="lightHeader">
            <nav class="navBarLight">
                <div class="navDiv">
                    <div class="icon">
                        <a href="home.php">
                            <img src="Images/SDG.png" height="80" width="80">
                        </a>
                        <!--welcome, name-->
                        <p class="lightIcon">
                            <span class="spanIconLight">Welcome,</span>
                            <!--php code for printing variables from login page-->
                            <?php
                                session_start();
                                echo $_SESSION['firstName'] . " " . $_SESSION['lastName'];
                            ?>
                        </p>
                        <!--logout using forms to make it simple-->
                        <form action="index.php" method="POST">
                            <button type="submit" name="submit" class="lightLogout">Log Out</button>
                        </form>
                    </div>
                    <!--site navigation-->
                    <ul>
                        <li class="lightNav"><a href="developers.php">The Developers</a></li>
                        <li class="lightNav"><a href="project.php">Projects</a></li>
                        <li class="lightButton"><button><a href="contact.php">Contact Us</a></button></li>
                    </ul>
                </div>
            </nav>
        </header>    
        <main>
            <!--title container for SDG name-->
            <div class="divTitle">
                <div class="divTitleContainer">
                    <p class="pTitle">SDG 14</p>
                    <div class="titleContainer">
                        <span class="spanTitle">Life Below</span>
                        <span class="spanTitle">Water</span>
                        
                        <!--using href to div id to have auto scroll button-->
                        <a href="#contentId" id="spanReadMore">Read More
                            <img id="learnMore" src="Images/down-arrow.png" height="15px">
                        </a>
                    </div>
                </div>
            </div>        

            <!--content for why we chose this goal, this is where the read more scrolls to-->
            <div class="content" id="contentId">
                <div class="whyContainer">
                <h1 class="pWhy">WHY WE CHOSE THIS GOAL</h1>
                <p class="whyContent">The ocean covers 70% of the surface of the earth. In this vastly unexplored world, we have fish as our food source, ocean habitats that protect us from storms, and planktons that produce our oxygen. Together, we have to protect them to sustain our livelihood and protect marine life.
                </p>
                </div>
                <!--goals content container-->
                <div class="goalsContainer">
                    <h2 class="pGoal">What we can do</h2>
                    <div class="goalsRow">
                        <p class="goal"><strong>Fish Responsibly:</strong> Fishing is a major cause of our oceans decline in population. Although it does not mean fishing is bad, it becomes a problem once we fish more than we need, or what we call overfishing, because it massively decreases the ocean's fish population, according to the <abbr title="World Wildlife Fund for Nature">WWF</abbr>.
                        </p>
                        <p class="goal"><strong>Reduce Waste:</strong> Currently, there are about 50-75 trillion pieces of plastic and microplastics in the ocean. Most of which are ingestible plastics by marine life mistaking them for food. Reducing waste is the easiest way we could start cleaning our oceans. Cutting down on single-use plastic can help reduce marine pollution.
                        </p>    
                    </div>
                    <div class="goalsRow">
                        <p class="goal"><strong>Conserve Habitats:</strong> This goal correlates with the others because our ocean habitats are affected by the things that we do upshore. Restoring previously damaged ecosystems helps replenish the ocean population, leading to a healthy environment.
                        </p>
                        <p class="goal"><strong>Conserve Water:</strong> The water that we use goes directly downstream to the shores. Otherwise called wastewater, this has a high risk of affecting our ocean's ecosystem. Therefore, we have to conserve our water usage because this can affect its water quality flowing to the ocean. 
                        </p>    
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