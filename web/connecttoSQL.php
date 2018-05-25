<?php
function connect(){
$server = "ec2-107-21-103-146.compute-1.amazonaws.com";
$database = "dfu4ugpnl0g4u6";
$user = "wxpfcgdwrtkeuu";
$password = "5d735d5b276a613f73e567f2e5eebc8e6c5d28151e1097cb243723957bd61442";
$dbPort = '5432';
$dsn = "mysql:host=$server;dbname=$database";
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

try {
    
    $db = new PDO("pgsql:host=$server;port=$dbPort;dbname=$database", $user, $password);
	// this line makes PDO give us an exception when there are problems, and can be very helpful in debugging!
    $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    //$conn_string = "host=$server dbname=$database user=$user password=$password";
    //$dbconn4 = pg_connect($conn_string);
    //$acmeLink = new PDO($dsn, $user, $password, $options);
    echo 'Connection worked';
    echo "Error connecting to DB. Details: $ex";
    //echo $db;
    return $db;
} catch (PDOException $ex) {
	// If this were in production, you would not want to echo
	// the details of the exception.
	echo "Error connecting to DB. Details: $ex";
	die();
//    header('location: \acme\index.php'); 
}
}

