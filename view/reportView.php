<?php ob_start();?>

<p>Voulez-vous signaler le commentaire suivant de <strong><?= $report['author'];?></strong> ?</p>
<?= $report['comment'];?>
<form method="post" action="">
	<input type="submit" name="flag" value="Signaler"/>
	<input type="submit" name="cancel" value="Annuler"/>
</form>

<?php
if(isset($_POST['cancel']))
{
	header('Location:index.php?action=post&id=' . $_GET['id']);
}
elseif(isset($_POST['flag']))
{
	header('Location:index.php?action=flagged&id=' . $_GET['id']);
}

$content = ob_get_clean();

require 'template.php';