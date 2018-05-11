<?php
    session_start();
    unset($_SESSION['myproducts'][$_REQUEST["item"] - 1]);
?>
