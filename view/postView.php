<?php

ob_start();?>
<p><a href="index.php">Retour à l'accueil</a></p>
<?
echo '<br><br>' . $post['content'] . '<br><br>';

foreach($comments as $comment){
	echo $comment['author'] . ' a dit :<br>' . $comment['comment'];
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