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

	public function countFlags($commentId){
		$sql = 'SELECT flags FROM reported_comments WHERE comment_id = ?';
		$req = $this->queryExecution($sql, array($commentId));
		$totalFlags = $req->fetch(\PDO::FETCH_ASSOC);

		return $totalFlags;
	}

	public function createFlag($commentId){
		$sql = 'INSERT INTO reported_comments(flags, comment_id) VALUES(1, ?)';
		$req = $this->queryExecution($sql, array($commentId));
		$newFlag = $req->fetch(\PDO::FETCH_ASSOC);

		return $newFlag;
	}
	
	public function updateFlag($flags, $commentId){
		$sql = 'UPDATE reported_comments SET flags = ? WHERE comment_id = ?';
		$req= $this->queryExecution($sql, array($flags, $commentId));
		$newTotalFlags = $req->fetch(\PDO::FETCH_ASSOC);

		return $newTotalFlags;
	}

}