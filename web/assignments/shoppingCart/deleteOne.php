<?php
    session_start();
    unset($_SESSION['myproducts'][product[1]]);
    
    header("Location: cart.php");
?>
