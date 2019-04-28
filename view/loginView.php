<?php
ob_start();
?>

<form action="" method="post">
	<p>Nom :
		<input type="text" id="login" name="login"/>
		<input type="submit" value="Créer un compte"/> 
		<input type="submit" value="S'dentifier"/>
	</p>
</form>

<?php
$content = ob_get_clean();
require 'template.php';