<?php ob_start();?>

<p>Le commentaire a bien été signalé.</p>
<p><a href="index.php">Retour à l'accueil</a></p>

<?php

$content = ob_get_clean();

require 'template.php';