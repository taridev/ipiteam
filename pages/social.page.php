<?php
if(isset($_SESSION['login'])) {
?>
<iframe id="chat" src="<?php echo "http://{$_SERVER['SERVER_NAME']}:3000/?username={$_SESSION['login']}"; ?>" style="width: 100%; height="800px" scrolling="yes"  height="450px" frameborder=0 scrolling="yes"></iframe>
<?php
}
else {
    echo '<p>Vous devez <a href="?page=login">être indentifié</a> pour utiliser le chat</p>';
}
?>
