<p>Hello?</p>      
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
 $action = 'Assignments';
}


}

switch ($action) {
    
 case 'home':
  include ($_SERVER['DOCUMENT_ROOT'].'/web/home.php');
break;
 
  case 'Assignments':
     include ($_SERVER['DOCUMENT_ROOT'].'/DateGame/views/D8DTgameList/index.php');
     break;
 
}

?>
        


        
        <div></div>
    </body>
</html>


