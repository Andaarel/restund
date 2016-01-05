<?php
// Set Time Zone location
date_default_timezone_set('UTC');

// Declare Database Variables

$serverName = "localhost";
$dbUsername = "restund";
$dbPassword = "restundfoo147";
$dbName = "restund";

// Declare Hash Variables
$username = 'eric';
$secret = '';
$realm = '4080218913';
$usrnSecDom = '';
$hash = '';


//
//Obtain todays date
$secret = string date('d m Y')

//Concatenate the string
$usrnSecDom = $username . $secret . $domain;

//Calculate md5 string
$hash = md5($usrnSecDom);


$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);
if (!$conn) {
    die( "Connection failed: " . mysqli_connect_error());
}
echo "Connected Successfully";

$sql = "INSERT INTO credential (realm, auth_username, ha1)
		VALUES ($realm, $username, $hash)"

if ($conn->($sql) === TRUE){
	echo "New record created successfully";
} else{
	echo "Error: " . $sql . $conn->error;
}
?>