<?php
if(isset($_SESSION['login'])){
	echo '<br><p>Bienvenue ' . $_SESSION['login'] . ' !</p><br>';
	?>
	<p><a href="index.php?action=logout">Déconnexion</a></p>
	<?php
}
else{
?>
	<p><a href="index.php?action=login">Se connecter</a></p>
	<p><a href="index.php?action=sign-up">S'inscrire</a></p>
	<br><br>
<?php
}

echo $content;