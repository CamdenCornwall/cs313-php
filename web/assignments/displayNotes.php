<?php
require_once '../connecttoSQL.php';
$db = connect();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>My Notes!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
         <link rel="icon" href="http://d8dt.com/favicon.ico" type="image/x-icon" />
         
         <link href="CSS/313.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
<?php include("HeadandFoot/header.php"); ?>
<div>

<h1>My Notes!</h1>

<?php
$statement = $db->prepare("SELECT book, chapter, verse, content FROM scriptures");
$statement->execute();
// Go through each result
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	// The variable "row" now holds the complete record for that
	// row, and we can access the different values based on their
	// name
	echo '<p>';
	echo '<strong>' . $row['book'] . ' ' . $row['chapter'] . ':';
	echo $row['verse'] . '</strong>' . ' - ' . $row['content'];
	echo '</p>';
}
?>




</div>
<?php include("HeadandFoot/footer.php"); ?>
</body>
</html>