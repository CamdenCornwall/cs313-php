<?php
$places = $_POST["places"];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>Your Places: <?php=$places ?></p>
        <?php
            foreach ($places as $place){
                $placeList = ($place);
                echo "<p>$placList</p>";
            }
        ?>
    </body>
</html>
