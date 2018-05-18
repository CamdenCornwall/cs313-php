<?php
function connect(){
$server = "ec2-107-21-103-146.compute-1.amazonaws.com";
$database = "dfu4ugpnl0g4u6";
$user = "wxpfcgdwrtkeuu";
$password = "5d735d5b276a613f73e567f2e5eebc8e6c5d28151e1097cb243723957bd61442";
$dsn = "mysql:host=$server;dbname=$database";
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

try {
    $acmeLink = new PDO($dsn, $user, $password, $options);
    echo 'Connection worked';
    return $acmeLink;
} catch (PDOException $ex) {
    echo 'Connection failed';
    header('location: \acme\acmeError.php'); 
//    header('location: \acme\index.php'); 
}
}
