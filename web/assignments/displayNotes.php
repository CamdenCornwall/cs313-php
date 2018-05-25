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
        <h1>My Notes!</h1>

<?php
//Make Connection
require_once '../connecttoSQL.php';
$db = connect();
//Draw Data Base
$statement = $db->prepare("SELECT name, notes FROM my_notes");
$statement->execute();
// Go through each result
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	// The variable "row" now holds the complete record for that
	// row, and we can access the different values based on their
	// name
	echo '<h3>' . $row['name'] . "'s Notes!" . '</h3>';
        echo '<textarea rows="25" cols="50">';
	echo $row['notes'];
	echo '</textarea>';
        echo '</main>';
}
?>

</div>
        <br><br>        
<?php include("../HeadandFoot/footer.php"); ?>
</body>
</html>