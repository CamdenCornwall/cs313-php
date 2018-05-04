
<?php
/**
* INDEX of ASSIGMNETS!!!!!!!!!!!!!!!!!!!!!
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
if($action == NULL){
 $action = '02';
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
 
}

?>