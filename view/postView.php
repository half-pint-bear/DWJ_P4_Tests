<?php

ob_start();?>
<p><a href="index.php">Retour à l'accueil</a></p>
<?php
echo '<h2>' . $post['title'] . ':</h2>';
echo '<br>' . $post['content'] . '<br><br>';

echo '<br><br>';
foreach($comments as $comment)
{
	echo '<strong>' . $comment['author'] . ' a dit :</strong><br>' . $comment['comment'];
	if(isset($_SESSION['login']))
	{
	?>
		<br><br>
		<form method="post" action="index.php?action=reportComment&amp;id=<?=$comment['id'];?>">
			<input type="submit" name="flag<?=$comment['id'];?>" value="Signaler"/>
		</form>
	<?php
	}
}
?>
<br><br>
<h4>Laisser un commentaire</h4>
<?php
if(!isset($_SESSION['login']))
{
	?>
	<p>Vous devez vous connecter pour laisser un commentaire.</p>
	<?php
}
else{
	?>
<form method="post" action="index.php?action=addComment&amp;id=<?=$post['id']?>">
	
	<label for="newComment">Commentaire :</label>
	<input type="textarea" id="newComment" name="newComment"/>
	<input type="submit" value="Envoyer"/>
</form>
<?php
}
$content = ob_get_clean();

require 'template.php';