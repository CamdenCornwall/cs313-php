<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();

if (isset($_POST['Submit'])) {
        $_SESSION['uname'] = $_POST['uname'];
        echo 'Totally Logged IN';
    }
else {echo 'Not Logged in......';}
?>
<html>
    <head>
        <title>Log In</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" href="http://d8dt.com/favicon.ico" type="image/x-icon" />

        <link href="CSS/313.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php include("HeadandFoot/header.php"); ?>
        <main>
            <form method="POST">
                <label for="uname"><h3>Username</h3></label>
                <input type="text" placeholder="Enter Username" name="uname" required>
                <br>
                <label for="pass"><h3>Password</h3></label>
                <input type="password" placeholder="Enter Password" name="pass" required>
                <br><br>
                <input type="submit" name="Submit" value='Login!'/>
                <!--<input type="hidden" name="action" value="LoggedIn">-->
            </form>
            <br><br>
        </main>
        <?php include("HeadandFoot/footer.php"); ?>
    </body>
    <?php
    
    ?>
</html>
