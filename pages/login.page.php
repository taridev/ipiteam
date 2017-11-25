<?php

$errors = [];

if(isset($_POST['login-submit'])) {
  if(!isset($_POST['username']) or !isset($_POST['password'])) {
    $errors[] = 'Formulaire incorrect';
  }
  else {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $statement = $connection->prepare('SELECT * FROM users WHERE name = ?');
    $results = $connection->execute([$name]);
    if(sizeof($results) > 0) {
      print_r($results);
    }
    else {
      $errors[] = 'Nom d\'utilisateur ou mot de passe incorrect';
    }
  }
}

if(!isset($_SEESION['login'])) {

?>
<div class="row text-center">
<h2>Connexion / Enregistrement</h2>
</div>
</div>
<br>  
<br>
<div class="container">
<div class="row">
<div class="col-md-4 col-md-offset-4">
<div class="form-body">
<ul class="nav nav-tabs final-login">
    <li class="active"><a data-toggle="tab" href="#sectionA">Se connecter</a></li>
    <li><a data-toggle="tab" href="#sectionB">Rejoindre</a></li>
</ul>
<div class="tab-content">
    <div id="sectionA" class="tab-pane fade in active">
    <div class="innter-form">
        <form class="sa-innate-form" method="post" action="?page=login">
        <label for="login-username">Adresse Email</label>
        <input type="text" name="username" id="login-username" required autofocus>
        <label for="login-password">Mot de passe</label>
        <input type="password" name="password" id="login-password" required>
        <button type="submit">se connecter</button>
        <a href="">Oublie mdp ?</a>
        </form>
        </div>
        <div class="social-login">
        <p>- - - - - - - - - - - - - Sign In With - - - - - - - - - - - - - </p>
    <ul>
        <li><a href=""><i class="fa fa-facebook"></i> Facebook</a></li>
        <li><a href=""><i class="fa fa-google-plus"></i> Google+</a></li>
        <li><a href=""><i class="fa fa-twitter"></i> Twitter</a></li>
        </ul>
        </div>
        <div class="clearfix"></div>
    </div>
    <div id="sectionB" class="tab-pane fade">
  <div class="innter-form" method="post" action="?page=login">
        <form class="sa-innate-form" method="post">
        <label for="registration-username">Nom</label>
        <input type="text" name="registration-username" id="registration-username" required>
        <label for="email">Adresse Email</label>
        <input type="email" name="email" id="email" required>
        <label for="registration-password" >Mot de passe</label>
        <input type="password" name="password" id="registration-password" required>
        <label for="password-verification">Vérification</label>
        <input type="password" name="password-verification" id="password-verification" required>
        <button type="submit" name="login-submit">Nous rejoindre</button>
        <p>En cliquant sur nous rejoindre, vous acceptez les conditions d'utilisation, la politique de confidentialité et la politique en matière de cookies.</p>
        </form>
        </div>
        <div class="social-login">
        <p>- - - - - - - - - - - - - Register With - - - - - - - - - - - - - </p>
  <ul>
        <li><a href=""><i class="fa fa-facebook"></i> Facebook</a></li>
        <li><a href=""><i class="fa fa-google-plus"></i> Google+</a></li>
        <li><a href=""><i class="fa fa-twitter"></i> Twitter</a></li>
        </ul>
        </div>
    </div>
</div>
</div>
</div>

<?php
}
?>