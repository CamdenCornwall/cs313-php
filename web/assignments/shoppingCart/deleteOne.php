<?php
    session_start();
    //unset($_SESSION['myproducts']["rag"]);
    //
    foreach($_SESSION['myproducts'] as $key => $value) {
         if($value == 'fish bones'){
            unset($_SESSION['myproducts'][$key]);
            break;
         }
    }
//    $toDelete = array(0 => "a", 1 => "b", 2 => "c");
//    unset($array[1]);
    
//    $toDelete = ($_SESSION['myproducts']);
//    unset($toDelete[1]);
    //unset($_SESSION['myproducts'][0]);    
    header("Location: cart.php");
?>
