<?php
    session_start();
    unset($_SESSION['myproducts']);
    
    header("Location: cart.php");
?>
