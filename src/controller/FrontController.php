<?php
namespace App\src\controller;

use App\src\model\PostManager;
use App\src\model\CommentManager;
use \App\src\model\UserManager;

class FrontController{
	public function home(){
		$postManager = new PostManager();
		$posts = $postManager->getAllPosts();

		require 'view/homeView.php';
	}

	public function post(){
		$onePost = new PostManager();
		$post = $onePost->getOnePost($_GET['id']);

		$comm = new CommentManager();
		$comments = $comm->getComments($_GET['id']);

		require 'view/postView.php';
	}

	public function login(){
		
	}
}