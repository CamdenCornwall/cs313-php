<?php
    session_start();
    unset($_SESSION['myproducts']["prodId" - 1]);
    
    header("Location: cart.php");
?>
