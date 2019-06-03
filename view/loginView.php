<?php
ob_start();


if(isset($_POST['login']) && isset($_POST['password']))
{
	$user = $userManager->readUser($_POST['login']);
	if($user['login'] == $_POST['login'] && $user['password'] == $_POST['password'])
	{
		session_start();
		$_SESSION['login'] = $user['login'];
		header('Location:index.php');
	}
	else
	{
		echo '<p>Erreur d\'authentification. Veuillez recommencer</p>';
	}
}
?>
<p><a href="index.php?action=home">Retour à l'accueil</a></p>
<br><br>

<form method="post" action="">
	<label for="login">Nom :</label>
	<input type="text" id="login" name="login" required/>
	<br><br>
	<label for="password">Mot de passe :</label>
	<input type="password" id="password" name="password" required/>
	<br><br>
	<input type="submit" value="S'identifier" name="sign-in"/>
</form>

<?php
$content = ob_get_clean();
require 'template.php';