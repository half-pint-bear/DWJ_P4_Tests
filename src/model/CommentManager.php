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

	public function updateComment($comment, $commentId){
		$sql = 'UPDATE mvc_comments SET comment = ? WHERE id = ?';
		$changedComment = $this->queryExecution($sql, array($comment, $commentId));

		return $changedComment;
	}

	public function getFlags($commentId){
		$sql = 'SELECT flags FROM reported_comments WHERE comment_id = ?';
		$req = $this->queryExecution($sql, array($commentId));
		$flags = $req->fetch(\PDO::FETCH_ASSOC);

		return $flags;
	}

	public function createFlag($commentId)
	{
		$sql = 'INSERT INTO reported_comments(flags, comment_id) VALUES(1, ?)';
		$newFlag = $this->queryExecution($sql, array($commentId));
		

		return $newFlag;
	}

	public function updateFlag($flags, $commentId){
		$sql = 'UPDATE reported_comments SET flags = ? WHERE comment_id = ?';
		$totalFlags = $this->queryExecution($sql, array($flags, $commentId));

		return $totalFlags;
	}
}