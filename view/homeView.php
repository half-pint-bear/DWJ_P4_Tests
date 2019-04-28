<?php ob_start();?>

<p><a href="index.php?action=login">Se connecter</a></p>
<br><br>
<?php
foreach($posts as $post)
{
	echo 'Lien vers le <a href="index.php?action=post&id=' . $post['id'] .'">' . $post['title'] . '</a><br>';
}

$content = ob_get_clean();

require 'template.php';