
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Shopping Item List</h1>
    <form  method="POST" action="yourcart">
        <input type="checkbox" name="places[]" id="place-na" value="North America"><label for="place-na">North America</label><br>
	<input type="checkbox" name="places[]" id="place-sa" value="South America"><label for="place-sa">South America</label><br>
	<input type="checkbox" name="places[]" id="place-asia" value="Asia"><label for="place-asia">Asia America</label><br>
	<input type="checkbox" name="places[]" id="place-eu" value="Europe"><label for="place-eu">Europe</label><br>
	<input type="checkbox" name="places[]" id="place-af" value="Africa"><label for="place-af">Africa</label><br>
	<input type="checkbox" name="places[]" id="place-aus" value="Australia"><label for="place-aus">Australia</label><br>
	<input type="checkbox" name="places[]" id="place-ant" value="Antarctica"><label for="place-ant">Antarctica</label><br>
        <br><label for="submit">&nbsp;</label><input type="submit" value="Add to Cart">
    </form>
        <?php

        ?>
    </body>
</html>
