<p>This is the index page</p>
       
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
else if($action == 'assignm'){
 $action = 'assignm';
}


}

switch ($action) {
    
 case 'home':
  include ($_SERVER['DOCUMENT_ROOT'].'/web/home.php');
break;
 
  case 'assignm':
     include ($_SERVER['DOCUMENT_ROOT'].'/web/hello.html');
     break;

 
}

?>
    
        <div></div>
    </body>
</html>


