<html>
    <head>
        <title>Camden's Home Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
         <link rel="icon" href="http://d8dt.com/favicon.ico" type="image/x-icon" />
         
         <link href="DateCSS/datestyle.css" rel="stylesheet" type="text/css"/>

    </head>
    
    <body>
        <?php include("HeadandFoot/header.php"); ?>
        
        <main>
            
        </main>
        
        <?php include("HeadandFoot/footer.php"); ?>
    </body>
</html>

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
  include ($_SERVER['DOCUMENT_ROOT'].'/index.php');
break;
 
  case 'D8DThere':
     include ($_SERVER['DOCUMENT_ROOT'].'/assignments/indexA.php');
     break;
 
}

?>