<?php
$server = "127.0.0.1";
$dbname = "ipiteam_aggouneaudemard";
$user = "ipimanager";
$pass = "ipiteam";
$driver = "mysql";
$charset = "utf8";

$connection = new PDO("$driver:host=$server;dbname=$dbname;charset=$charset", $user,$pass);

   



?> 