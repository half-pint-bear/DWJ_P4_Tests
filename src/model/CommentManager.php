<?php
namespace App\src\model;

class CommentManager extends Manager{
	public function getComments($postId){
		$sql = 'SELECT * FROM mvc_comments WHERE post_id = ?';
		$comments = $this->queryExecution($sql, array($postId));

		return $comments;
	}

	public function postComment($postId, $author, $comment){
		$sql = 'INSERT INTO mvc_comments(post_id, author, comment) VALUES(?, ?, ?)';
		$newComment = $this->queryExecution($sql, array($postId, $author, $comment));

		return $newComment;
	}

}