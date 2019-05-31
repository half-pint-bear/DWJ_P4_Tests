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

	public function reportComment($commentId){
		$sql = 'SELECT * FROM mvc_comments WHERE id = ?';
		$req = $this->queryExecution($sql, array($commentId));

		$report = $req->fetch(\PDO::FETCH_ASSOC);
		return $report;
	}

	public function countFlags($commentId){
		$sql = 'SELECT COUNT(flags) FROM reported_comments WHERE comment_id = ?';
		$totalFlags = $this->queryExecution($sql, array($commentId))->fetchColumn();
		
		return $totalFlags;
	}

	public function createFlag($flags, $commentId){
		$sql = 'INSERT INTO reported_comments(flags, comment_id) VALUES(?, ?)';
		$newFlag = $this->queryExecution($sql, array($flags, $commentId));

		return $newFlag;
	}

	public function updateFlag($flags, $commentId){
		$sql = 'UPDATE reported_comments SET flags = ? WHERE comment_id = ?';
		$plusOneFlag = $this->queryExecution($sql, array($flags, $commentId));

		return $plusOneFlag;
	}
}