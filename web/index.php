       
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
 $action = 'D8DThere';
}
if($action == NULL){
 $action = 'togetherGames';
}
if($action == NULL){
 $action = 'ListFreeGames';
}
if($action == NULL){
 $action = 'contactUs';
}
if($action == NULL){
 $action = 'fun-Apps';
}

}

switch ($action) {
    
 case 'home':
  include ($_SERVER['DOCUMENT_ROOT'].'/DateGame/views/Home.php');
break;
 
  case 'D8DThere':
     include ($_SERVER['DOCUMENT_ROOT'].'/DateGame/views/D8DTgameList/index.php');
     break;

  case 'OtherHere':
     include ($_SERVER['DOCUMENT_ROOT'].'/DateGame/views/OthergameList/index.php');
     break;
 
   case 'ListFreeGames':
     include ($_SERVER['DOCUMENT_ROOT'].'/DateGame/views/SetupEmu/index.php');
     break;
 
   case 'contactUs':
     include ($_SERVER['DOCUMENT_ROOT'].'/DinoApp/XcontactUs.php');
     break;
 
   case 'fun-Apps':
     include ($_SERVER['DOCUMENT_ROOT'].'/DinoApp/Xindex.php');
     break;
 
}

?>
        
        

        
        <div></div>
    </body>
</html>


