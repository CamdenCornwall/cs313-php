<?php
    session_start();
    unset($_SESSION['myproducts']["rag"]);
    
    header("Location: cart.php");
?>
