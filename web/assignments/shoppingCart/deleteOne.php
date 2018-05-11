<?php
    session_start();
    //unset($_SESSION['myproducts']["rag"]);
     foreach($_SESSION as $key => $value)
    {
        if (strpos($key, 'rag') === 0)
        {
          unset($_SESSION[$key]); //add this line
        }
    }
    header("Location: cart.php");
?>
