<?php
ob_start();
?>
<p><a href="index.php?action=home">Retour à l'accueil</a></p>
<br><br>

<form method="post" action="loginView.php">
	<p>Nom :
		<input type="text" id="login" name="login"/>
		<?php
		if(!empty($loginError))
			echo $loginError;
		?>
		<input type="submit" value="Créer un compte"/> 
		<input type="submit" value="S'dentifier"/>
	</p>
</form>

<?php
$content = ob_get_clean();
require 'template.php';