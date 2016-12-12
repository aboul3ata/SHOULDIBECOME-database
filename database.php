<?php
$server = 'localhost';
$username = 'aboulatt_ali';
$password = '@Aboul3ata';
$database = 'aboulatt_login';

try{
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}