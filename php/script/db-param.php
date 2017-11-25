<?php
$server = "localhost";
$dbname = "ipiteam_aggouneaudemard";
$user = "root";
$pass = "";
$driver = "mysql";
$charset = "utf8";

$connection = new PDO("$driver:host=$server;dbname=$dbname;charset=$charset", $user,$pass);

   
[Sat Nov 25 14:32:13.247745 2017] [php7:error] [pid 605] [client ::1:49458] PHP Fatal error:  Uncaught PDOException: SQLSTATE[HY000] [2002] No such file or directory in /Users/matthieu/Sites/projets/ipiteam/php/script/db-param.php:9\nStack trace:\n#0 /Users/matthieu/Sites/projets/ipiteam/php/script/db-param.php(9): PDO->__construct('mysql:host=loca...', 'root', '')\n#1 /Users/matthieu/Sites/projets/ipiteam/index.html(3): require('/Users/matthieu...')\n#2 {main}\n  thrown in /Users/matthieu/Sites/projets/ipiteam/php/script/db-param.php on line 9


?> 