<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Inscription</title>
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<?php
require('db.php');
if (isset($_REQUEST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>Whoosh ! L'inscription s'est bien passée</h3>
<br/>Cliquez ici pour vous <a href='login.php'>connecter</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Inscription</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Pseudo" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Mot de passe" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php } ?>
</body>
</html>