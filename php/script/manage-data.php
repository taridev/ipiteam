<?php
$server = "localhost";
$dbname = "ipiteam";
$user = "root";
$pass = "";
$driver = "mysql";
$charset = "utf8";

$connection = new PDO("$driver:host=$server;dbname=$dbname;charset=$charset", $user, $pass);
// $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



?>