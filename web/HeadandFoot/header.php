
 

        <div id="nav">
        
        <img id="logo" src="/images/cool-pic.gif" alt="cool-pic"/>
        <a href="/index.php?action=home" title="Back to Home">Home</a>
        <a href="/index.php?action=assignm" title="">Assignments</a>
        <?php
        if(empty($_SESSION['uname'])){
        echo '<a href="/index.php?action=LogIn" title="">Log In</a>';
        }
        else{
        echo '<a href="/index.php?action=LogOut" title="">Log Out</a>'; 
        }
        ?>
        </div>
        <br>

