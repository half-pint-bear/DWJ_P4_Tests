<?php
namespace App\src\model;

require_once 'Manager.php';

class CommentManager extends Manager{
	public function getComments($postId){
		$sql = 'SELECT * FROM mvc_comments WHERE post_id = ?';
		$comments = $this->queryExecution($sql, array($postId));

		return $comments;
	}
}