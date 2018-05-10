<?php
// First let's process all the input
// using constants for the names of the elements in the form would be better...
// It would also be better to use an ID of some sort for the
// value that is submitted such as "cs" as opposed to "Computer Science",
// then in PHP we could process that value and determine the exact
// presentation text to render.
$name = ($_POST["name"]);
$lname = ($_POST["lname"]);
$email = ($_POST["email"]);
$major = ($_POST["major"]);
$places = $_POST["places"];
$taMessage = ($_POST["taMessage"]);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Forum Submit</title>
</head>

<body>
	<h1>Forum Submit</h1>

	<p>Your name is: <?=$name." ".$lname ?></p>
	<p>Your email is: <a href="mailto:<?=$email?>"><?=$email?></a></p>
	<p>Your major is: <?=$major?></p>
	<p>You have been to the following places:</p>
	<ul>

<?php
foreach ($places as $place)
{
	$place_clean = htmlspecialchars($place);
	echo "<li><p>$place_clean</p></li>";
}
?>		

	</ul>

	<p>Comments or Questions?: <?=$taMessage?></p>

</body>


</html>