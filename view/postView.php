<?php

ob_start();


echo $post['content'] . '<br><br>';

foreach($comments as $comment){
	echo $comment['author'] . '<br>';
}

$content = ob_get_clean();

require 'template.php';