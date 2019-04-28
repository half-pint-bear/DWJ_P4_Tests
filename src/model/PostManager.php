<?php
namespace App\src\model;

class PostManager extends Manager{
	public function getAllPosts(){
		$sql = 'SELECT * FROM mvc_posts ORDER BY id';
		$posts = $this->queryExecution($sql);

		return $posts;
	}

	public function getOnePost($postId){
		$sql = 'SELECT * FROM mvc_posts WHERE id = ?';
		$req = $this->queryExecution($sql, array($postId));

		$post = $req->fetch(\PDO::FETCH_ASSOC);
		return $post;
	}
}