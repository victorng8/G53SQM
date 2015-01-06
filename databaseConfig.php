<?php
/////// Update your database login details here /////
$dbhost_name = "localhost"; // Your host name 
$database = "khcy3nti_g5-Airlines";       // Your database name
$username = "khcy3nti_vic";            // Your login userid 
$password = "V7ba2oPhQrkM";            // Your password 
//////// End of database details of your server //////

$con = mysqli_connect("localhost","khcy3nti_vic","V7ba2oPhQrkM","khcy3nti_g5-Airlines");

if (mysqli_connect_errno($con))
{
    echo "Connection failed" . mysqli_connect_error();
}
 
else
{
    //echo "Connection successful";
}

//////// Do not Edit below /////////
try {
$dbo = new PDO('mysql:host='.$dbhost_name.';dbname='.$database, $username, $password);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}
?> 