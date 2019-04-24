<?php

ob_start();
?>
<form action="home" method="post">
	<p>Nom :
		<input type="text" id="login" name="login"/>
		<input type="submit" value="Créer"/>
	</p>
</form>
<?php

foreach($posts as $post)
{
	echo 'Lien vers le <a href="index.php?action=post&id=' . $post['id'] .'">' . $post['title'] . '</a><br>';
}

$content = ob_get_clean();

require 'template.php';