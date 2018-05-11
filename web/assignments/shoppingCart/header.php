<?php

$productCount = 3;
$prices = array(1.50, 4.50, 0.50);
$products = array("rag", "log", "twig");

if($products[] == "rag"){
    $prodId = 1;
}
if($products[] == "log"){
    $prodId = 2;
}
if($products[] == "twig"){
    $prodId = 3;
}

echo '<html> 
<header> 
  <link rel="stylesheet" type="text/css" href="snazzy.css"> 


</header>
<body>';
?>