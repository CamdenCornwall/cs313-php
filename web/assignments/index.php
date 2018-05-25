
<?php
/**
* INDEX of ASSIGMNETS!!!!!!!!!!!!!!!!!!!!!
*/
session_start();
require_once '../connecttoSQL.php';
//
//connect();


 $action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
 $action = filter_input(INPUT_GET, 'action');
if($action == NULL){
 $action = 'assignm';
}
if($action == NULL){
 $action = 'hello';
}
if($action == NULL){
 $action = '02';
}
if($action == NULL){
 $action = 'form';
}
if($action == NULL){
 $action = 'shop';
}
if($action == NULL){
 $action = 'BOM';
}
}

switch ($action) {
    
  case 'assignm':
     include ($_SERVER['DOCUMENT_ROOT'].'/assignments/assignments.php');
     break;
 
   case 'hello':
     include ($_SERVER['DOCUMENT_ROOT'].'/assignments/hello.html');
     break;
 
    case '02':
     include ($_SERVER['DOCUMENT_ROOT'].'/assignments/T-02-313.html');
     break;
 
     case 'form':
     include ($_SERVER['DOCUMENT_ROOT'].'/assignments/FormTest.html');
     break;

     case 'BOM':
     include ($_SERVER['DOCUMENT_ROOT'].'/assignments/accessDBscriptures.php');
     break; 
//     case 'shop':
//     include ($_SERVER['DOCUMENT_ROOT'].'/assignments/shoppingCart/index.php');
//     break;
 
}

?>