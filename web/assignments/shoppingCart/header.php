<?php

$productCount = 3;
$prices = array(1.50, 4.50, 0.50);
$products = array("rag", "log", "twig");

if($products[1] == "rag"){
    $prodId = 1;
}
if($products[2] == "log"){
    $prodId = 2;
}
if($products[2] == "twig"){
    $prodId = 3;
}

echo '<html> 
<header> 
  <link rel="stylesheet" type="text/css" href="snazzy.css"> 


</header>
<body>';
?>