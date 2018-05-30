<!DOCTYPE html>
<html>
    <head>
        <title>My Notes!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
         <link rel="icon" href="http://d8dt.com/favicon.ico" type="image/x-icon" />
         
         <link href="../CSS/313.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
<?php include("../HeadandFoot/header.php"); ?>
<div>
    <main>
        <h1><u>My Notes!</u></h1>

<?php
session_start();
//Make Connection
require_once '../connecttoSQL.php';
$db = connect();
//Get user
$username = $_SESSION['uname'];
$password = $_SESSION['pass'];
//Draw Data Base
//$statement = $db->prepare("SELECT name, notes FROM my_notes");
$statementU = $db->prepare("SELECT * FROM my_notes WHERE name = '$username'");
$statementU->execute();
$statementP = $db->prepare("SELECT pass FROM my_notes WHERE pass = '$password'");
$statementP->execute();
$elPaso = $statementP->fetch(PDO::FETCH_ASSOC);
$row = $statementU->fetch(PDO::FETCH_ASSOC);

    if(empty($elPaso)){
        session_destroy();
        session_start();
        $_SESSION['message'] = 'Please provide a valid password.';
        header('location: ../login.php'); 
    }
    else if(empty($row)){
        session_destroy();
        session_start();
        $_SESSION['message'] = 'Please provide a valid username.';
        header('location: ../login.php'); 
    }

        $yournotes = $row['notes'];
        $_SESSION['yournotes'] = $yournotes;
	// The variable "row" now holds the complete record for that
	// row, and we can access the different values based on their
	// name
        echo '<form method="POST">';
	echo '<div id="nameSucc"><div id="notesName">' . $row['name'] . "'s Notes!" . '</div><div id="updatetext">'. $_SESSION['didupdate'] .'</div></div>';
        echo '<textarea rows="25" cols="50" name="yournotes" value="<?php echo $yournotes;?>">';
	//echo $row['notes'];
	echo '</textarea>';
        echo '<br><br><input type="submit" name="upNotes" value="Update Notes"></form>';

////////////////////////////////////////////////UPDATE NOTES/////////  
//$didupdate = '';

if (isset($_POST['upNotes'])) {
    $newnotes = $_POST['yournotes'];
    $id = $row['id'];
    $statementX = $db->prepare("UPDATE my_notes SET notes = '$newnotes' WHERE id = '$id'");
    $statementX->execute();
        $didupdate = 'Notes successfully updated!';
        $_SESSION['didupdate'] = $didupdate;
        header('location: \assignments\displayNotes.php');
        exit;
    }
else {$didupdate = 'Notes failed to update.';
        $_SESSION['didupdate'] = $didupdate; 
}

        
?>  
    
    </main>
    
</div>
        <br><br>        
<?php include("../HeadandFoot/footer.php"); ?>
</body>
</html>