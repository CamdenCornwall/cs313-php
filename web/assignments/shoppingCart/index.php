
<?php
/**
* INDEX of SHOPPING!!!!!!!!!!!!!!!!!!!!!
*/
session_start();

 $action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
 $action = filter_input(INPUT_GET, 'action');
if($action == NULL){
 $action = 'shop';
}

}

switch ($action) {
    
  case 'shop':
     include ($_SERVER['DOCUMENT_ROOT'].'/assignments/shoppingCart/SC-shopping.php');
     break;
 

 
}

?>