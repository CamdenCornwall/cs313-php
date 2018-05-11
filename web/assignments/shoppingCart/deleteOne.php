<?php
    session_start();
    //unset($_SESSION['myproducts']["rag"]);
     foreach($_SESSION as $key => $value) {
         if($key == 'rag'){
            unset($_SESSION[$key]);
         }
    }
        
    header("Location: cart.php");
?>
