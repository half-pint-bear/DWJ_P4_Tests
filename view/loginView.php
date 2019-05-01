<?php
ob_start();

if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST))
{
	$loginError = null;
	$login = htmlentities(trim($_POST['login']));

	$valid = true;

	if(empty($login))
	{
		$loginError = 'SVP, identifiez-vous!';
		$valid = false;
	}

	if($valid)
	{
		if($userInfo['login'] == $login)
		{
			session_start();
			$_SESSION['login'] = $userInfo['login'];

		}
		else
		{
			echo '<p>Une erreur d\'authentification est survenue.</p>
			<p>Cliquez <a href="index.php?action=login">ici</a> pour vous identifier à nouveau.</p>';
		}
	}
}
?>
<p><a href="index.php?action=home">Retour à l'accueil</a></p>
<br><br>

<form method="post" action="">
	<p>Nom :
		<input type="text" id="login" name="login" required/>
		<?php
		if(!empty($loginError))
			echo $loginError;
		?>
		<input type="submit" value="Créer un compte" name="sign-up"/> 
		<input type="submit" value="S'identifier" name="sign-in"/>
	</p>
</form>

<?php
$content = ob_get_clean();
require 'template.php';