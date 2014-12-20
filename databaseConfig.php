<?php
/////// Update your database login details here /////
$dbhost_name = "localhost"; // Your host name 
$database = "khcy3nti_g5-Airlines";       // Your database name
$username = "khcy3nti_vic";            // Your login userid 
$password = "V7ba2oPhQrkM";            // Your password 
//////// End of database details of your server //////

//////// Do not Edit below /////////
try {
$dbo = new PDO('mysql:host='.$dbhost_name.';dbname='.$database, $username, $password);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}
?> 