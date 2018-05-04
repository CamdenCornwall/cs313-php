
<?php
/**
* MAIN HOME INDEX
*/
 $action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
 $action = filter_input(INPUT_GET, 'action');
if($action == NULL){
 $action = 'home';
}
if($action == NULL){
 $action = 'assignm';
}


}

switch ($action) {
    
 case 'home':
  include ($_SERVER['DOCUMENT_ROOT'].'/home.php');
break;
 
  case 'assignm':
     include ($_SERVER['DOCUMENT_ROOT'].'/assignments/indexA.php');
     break;
 
}

?>