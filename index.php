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
    <?php
        session_start(); // Start the session

        // logout
        if (isset($_POST['submit'])) {

            //stops and removes session
            session_unset();
            session_destroy();
            
            //head back to login page
            header("Location: index.php"); 
            exit();
        }

        // Handle login
        if (isset($_POST['firstName']) && isset($_POST['lastName'])) {

            //set session variable for all pages with the post variable from forms
            $_SESSION['firstName'] = $_POST['firstName'];
            $_SESSION['lastName'] = $_POST['lastName'];

            //after variables are set, redirect to home page
            header("Location: home.php"); 
            exit();
        }
    ?>
        <!--login form container-->
        <div class="login">
            <!--action is set to this page so that session variables can be assigned-->
            <form action="index.php" method="POST">
            <label id="login">Welcome!</label><br>
            <label class="loginForm">First Name:</label><br>
            <input class="loginInput" type="text" name="firstName" placeholder="ex. Juan..." required><br>
            <label class="loginForm">Last Name:</label><br>
            <input class="loginInput" type="text" name="lastName" placeholder="ex. Dela Cruz..." required><br>
            <label class="loginForm">Password:</label><br>
            <input class="loginInput" type="password" name="password" required><br>
            <input class="loginSubmit" type="submit" value="Login">
            </form>
        </div>
    </body>
</html>