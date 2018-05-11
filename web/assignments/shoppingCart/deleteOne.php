<?php
    session_start();
    unset($_SESSION['myproducts'][$_REQUEST["product"] - 1]);
    
    header("Location: cart.php");
?>
