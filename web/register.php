<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
$db = connect();
if (isset($_POST['CreateACC'])) {
        $unameit =  $_POST['uname'];
        $passit = $_POST['pass'];
$statement = $db->prepare("INSERT INTO my_notes (name, pass) VALUES ('$unameit', '$passit')");
echo 'This';
$statement->execute();
echo 'This far?';
$_SESSION['message'] = 'Sign in with your new account!';
echo 'This far?...';
header('location: \login.php');
echo 'This far?............';
    }
else {echo 'Failed to Register...';
}
?>
<html>
    <head>
        <title>Register an Account</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" href="http://d8dt.com/favicon.ico" type="image/x-icon" />

        <link href="CSS/313.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php include("HeadandFoot/header.php"); ?>
        <main>
            <?php echo $_SESSION['message']; ?>
            <form method="POST">
                <label for="uname"><h3>New Username</h3></label>
                <input type="text" placeholder="Enter Username" name="uname" required <?php if(isset($unameit)){echo "value='$unameit'";} ?>>
                <br>
                <label for="pass"><h3>New Password</h3></label>
                <input type="password" placeholder="Enter Password" name="pass" required>
                <br><br>
                <input type="submit" name="CreateACC" value='Register'/>
                <!--<input type="hidden" name="action" value="LoggedIn">-->
            </form>
            <br><br>
        </main>
        <?php include("HeadandFoot/footer.php"); ?>
    </body>
    <?php
    
    ?>
</html>
