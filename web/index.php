
<?php
/**
* MAIN HOME INDEX
*/

session_start();
// Get the database connection file
require_once 'connecttoSQL.php';

connect();

 $action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
 $action = filter_input(INPUT_GET, 'action');
if($action == NULL){
 $action = 'home';
}
if($action == NULL){
 $action = 'assignm';
}
if($action == NULL){
 $action = 'Regis';
}
if($action == NULL){
 $action = 'LogIn';
}
if($action == NULL){
 $action = 'LogOut';
}
if($action == NULL){
 $action = 'deleteAcc';
}


}

switch ($action) {
    
 case 'home':
  include ($_SERVER['DOCUMENT_ROOT'].'/home.php');
break;
 
  case 'assignm':
     include ($_SERVER['DOCUMENT_ROOT'].'/assignments/index.php');
     break;
    case 'Regis':
        $_SESSION['message'] = '';
     include ($_SERVER['DOCUMENT_ROOT'].'/register.php');
     break;
   case 'LogIn':
       $_SESSION['message'] = '';
     include ($_SERVER['DOCUMENT_ROOT'].'/login.php');
     break;
    case 'LogOut':
     include ($_SERVER['DOCUMENT_ROOT'].'/logout.php');
     break;
 
 case 'deleteAcc':
     $_SESSION['message'] = '';
     include ($_SERVER['DOCUMENT_ROOT'].'/confirmDel.php');
     break;
  case 'delete':
      $_SESSION['message'] = '';
     include ($_SERVER['DOCUMENT_ROOT'].'/delete.php');
     break;

}

?>