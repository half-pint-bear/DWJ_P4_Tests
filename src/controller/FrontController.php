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

	public function addComment($postId, $author, $comment){
		$commentManager = new CommentManager();
		$newComment = $commentManager->postComment($postId, $author, $comment);

		if($newComment === false)
		{
			throw new Exception('Impossible d\'ajouter le commentaire');
		}
		else
		{
			header('Location:index.php?action=post&id=' . $postId);
		}
	}

	public function login(){
		$userManager = new UserManager();

		require 'view/loginView.php';
	}

	public function signUp(){
		$userManager = new UserManager();

		require 'view/signUpView.php';
	}

	public function logout(){
		require 'view/logOutView.php';
	}
}