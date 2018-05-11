<?php
    session_start();
    unset($_SESSION['myproducts']["$prodId"]);
    
    header("Location: cart.php");
?>
