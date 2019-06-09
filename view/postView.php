<?php

ob_start();?>
<p><a href="index.php">Retour à l'accueil</a></p>
<?php
echo '<h2>' . $post['title'] . ':</h2>';
echo '<br>' . $post['content'] . '<br><br><br>	';

foreach($comments as $comment)
{
	echo '<strong>' . $comment['author'] . ' a dit :</strong><br>' . $comment['comment'] . '<br>';
	echo 'Commentaire n°' . $comment['id'];
	echo '<br>';
	if(isset($_SESSION['login']))
	{
	?>
		
		<form method="post" action="index.php?action=reportComment&amp;id=<?=$comment['id'];?>">
			<input type="submit" name="flag" value="Signaler"/>
		</form>
		<br>
	<?php
		if($_SESSION['login'] == $comment['author'])
		{
		?>
			<form method='post' action="">
				<input type="submit" name="modify" value="Modifier"/>
			</form>
		<?php
		}
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
	var_dump($newComment);
	?>
<form method="post" action="index.php?action=addComment&amp;id=<?=$post['id']?>">
	
	<label for="newComment">Commentaire :</label>
	<input type="textarea" id="newComment" name="newComment" required/>
	<input type="submit" value="Envoyer"/>
</form>
<?php
}
$content = ob_get_clean();

require 'template.php';