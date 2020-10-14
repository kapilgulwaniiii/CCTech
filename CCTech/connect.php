<?php

$host='localhost';
$db = 'cctech';
$username = 'root';
$password = '';
try{

	$dbo = new PDO("mysql:host=$host;dbname=$db", $username, $password);

	if($dbo){
	//echo "Connected Succesfully";
	}
}
catch (PDOException $e){
echo $e->getMessage();
}
?>