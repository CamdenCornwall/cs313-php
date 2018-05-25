<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
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
    <div class="container">
      <label for="name"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="name" required>

      <label for="pass"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pass" required>
        
      <button type="submit" name="Submit">Login</button>
    </div>
    <?php include("HeadandFoot/footer.php"); ?>
    </body>
    <?php
        if (isset($_POST['Submit'])) {
            $_SESSION['name'] = $_POST['name'];
        }
    ?>
</html>
