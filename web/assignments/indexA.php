
<?php
/**
* MAIN HOME INDEX
*/
 $action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
 $action = filter_input(INPUT_GET, 'action');
if($action == NULL){
 $action = 'assignm';
}
if($action == NULL){
 $action = 'hello';
}


}

switch ($action) {
    
  case 'assignm':
     include ($_SERVER['DOCUMENT_ROOT'].'/assignments/assignments.php');
     break;
 
   case 'hello':
     include ($_SERVER['DOCUMENT_ROOT'].'/assignments/hello.html');
     break;
 
}

?>