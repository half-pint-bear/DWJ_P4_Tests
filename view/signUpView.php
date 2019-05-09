<?php
ob_start();

if(isset($_POST['login']))
{
	if($_POST['password'] == $_POST['confirm'])
	{
		$user = $userManager->createUser($_POST['login']);
		session_start();
		$_SESSION['login'] = $_POST['login'];
		header('Location:index.php');
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
	<label for="confirm">Confirmer mot de passe :</label>
	<input type="password" id="confirm" name="confirm"/>
	<br><br>
	<input type="submit" value="Créer un compte" name="sign-up"/>
	
</form>

<?php
$content = ob_get_clean();
require 'template.php';