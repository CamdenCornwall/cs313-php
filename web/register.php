<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
require_once 'connecttoSQL.php';
$db = connect();
if (isset($_POST['CreateACC'])) {
  ///Check for Username Matches 
  $sql = 'SELECT name FROM my_notes WHERE name = :uname';
  $stmt = $db->prepare($sql);
  $stmt->bindValue(':uname', $_POST['uname'], PDO::PARAM_STR);
  $stmt->execute();
  $matchEmail = $stmt->fetch(PDO::FETCH_NUM);
  $stmt->closeCursor();
  
    if(empty($matchEmail)){
  ///If no user name matches, hash the password   
   $hashedPassword = password_hash($_POST['pass'], PASSWORD_DEFAULT);     
  ///Then create string for the new user      
   $sql = 'INSERT INTO my_notes (id, name, pass, notes) VALUES (DEFAULT, :uname, :passw, NULL)';//////////////////////////////////////////////////////////////////////////////////////
   $statement = $db->prepare($sql);
   //Bind the values
   $statement->bindValue(':uname', $_POST['uname'], PDO::PARAM_STR);
   $statement->bindValue(':passw', $hashedPassword, PDO::PARAM_STR);
   //Run the SQL to create the user
   $statement->execute();////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$_SESSION['message'] = 'Thank you for registering! Please sign in with your new account';
header('location: \login.php');
} 
    else {
      $_SESSION['message'] = 'That account name is already taken, please try another';
      header('location: \register.php');
  }
       

    }
else {//echo 'Failed to Register...';
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
            <h1><u>Create Account</u></h1>
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

