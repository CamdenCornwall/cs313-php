<?php
    session_start();
    //unset($_SESSION['myproducts']["rag"]);
    //
//     foreach($_SESSION as $key => $value) {
//         if($value == 'rag'){
//            unset($_SESSION[$key]);
//         }
//    }
    $_SESSION->remove('rag');
        
    header("Location: cart.php");
?>
