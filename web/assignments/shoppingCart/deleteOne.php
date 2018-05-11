<?php
    session_start();
    unset($_SESSION['myproducts'][[1]]);
    
    header("Location: cart.php");
?>
