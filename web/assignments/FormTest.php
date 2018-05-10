<?php
//Check to see if the form has been submitted, if so use php to validate the inputs
//This check sees if the btnSubmitMessage key exists in the POST object, if "true" the form has been submitted
if($_POST['submit']) {

// Create an empty error array to store any found errors
$errors = array();

//Check the name field using using the empty function
if(empty($_POST['txtfName'])) {
$errors['fname'] = 'The first name field is empty, please enter your name';
}

//Check the name field using using the empty function
if(empty($_POST['txtlName'])) {
$errors['lname'] = 'The last name field is empty, please enter your name';
}

//Check the name field using the empty function
if(empty($_POST['rSubject'])) {
$errors['subject'] = 'The subject is not selected, please select a subject.';
}

//Check the message field using the empty function
if(empty($_POST['taMessage'])) {
$errors['message'] = 'The message field is empty, please enter your message';
}

//Check the email field
if(empty($_POST['txtEmail'])) {
$errors['email'] = 'The email field is empty, please enter a email address';
}

//Check the length of the email address -- x@x.xx
$tempEmail = trim($_POST['txtEmail']);
if(strlen($tempEmail) < 6) {
$errors['emaillength'] = 'The email provided is too short, please enter a valid email address';
}

//Check the form of the email address using a regular expression
$checkEmail = '/^[^@]+@[^\s\r\n\'";,@%]+$/';
if(!preg_match($checkEmail,$tempEmail)) {
$errors['invalidform'] = "Please provide a valid email address";
}



//If there are no errors stored in the error array proceed to form and then send the email message
if(!$errors) {
$to = 'camdenc.cornwall@gmail.com';
$txtfName = $_POST['txtfName']."\n";
$txtlName = $_POST['txtlName']."\n";
$txtEmail = $_POST['txtEmail']."\n";
$major = $_POST['major']."\n";
$taMessage = $_POST['taMessage'];

$message = "Hello!

Your contact form has been submitted by:

First Name: $txtfName
Last Name: $txtlName
E-mail: $txtEmail

What is your major? $major

Comments: $taMessage

End of message
";

mail($to, $rSubject, $message);

//	mail($to,$subject,$message);
// After the message is sent create a confirmation message to display
$successmessage = "Your message has been sent. Thank you.";
}
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <title>Form Test</title>
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" href="/css/screen.css" media="screen">
    </head>
    <body>

        <h1>Forum</h1>
        
        <?php
        // This displays the errors array if it is not empty, 
        // if it is empty this does nothing
        if ($errors) {
        echo '<div>';
        echo '<ul class="warning">';
        foreach ($errors as $alert) {
        echo "<li>$alert</li>";
        }
        echo '</ul>';
        echo '</div>';
        } elseif($successmessage) {
        echo "<p class=\"warning\">".$successmessage."</p>";
        }
        ?>
      
            <fieldset>
                <div id="fname"></div>
                <legend>Survey</legend>
                <ul>
                    <li><label for="txtfName">First Name</label>
                        <input type="text" name="txtfName" id="txtfName" size="20" /></li>
                    <li><label for="txtlName">Last Name:</label> 
                        <input type="text" name="txtlName" id="txtlName" size="21" /></li>
                    <li><label for="txtEmail">Email: </label>
                        <input type="text" name="txtEmail" id="txtEmail" size="40" /></li>

                    <li>What is your Major?
                        <br>
                        <input type="radio" name="major" id="CS" value="CS" checked="checked"/>
                        <label for="CS">Computer Science</label>
                        <br>
                        <input type="radio" name="major" id="WDD" value="WDD" />
                        <label for="WDD">Web Design & Development</label>
                       	<br>
                        <input type="radio" name="major" id="CIT" value="CIT" />
                        <label for="CIT">Computer Information</label>
                        <br>
                        <input type="radio" name="major" id="CE" value="CE" />
                        <label for="CE">Computer Engineering</label>
                        <br>
                    </li>
                    <li><label for="taMessage">Questions or Comments?</label></li>
                    <li><textarea name="taMessage" id="taMessage" cols="40" rows="10" onfocus="this.value='';this.onfocus=null">Type your question or comment here</textarea></li>
                    <li><label for="submit">&nbsp;</label><input type="submit" name="submit" id="submit" value="Send"></li>
                </ul>
            </fieldset>

    </body>
</html>