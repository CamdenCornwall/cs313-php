<?php
    session_start();
    unset($_SESSION['myproducts'][$_REQUEST["prodId"] - 1]);
    
    header("Location: cart.php");
?>
