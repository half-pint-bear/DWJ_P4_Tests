<?php
ob_start();
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