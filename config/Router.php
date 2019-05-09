<?php
namespace App\config;
use \App\src\controller\FrontController;
use \App\src\controller\ErrorController;
use Exception;

class Router{

	private $_frontCtrl,
			$_errorCtrl; 

	public function __construct(){
		$this->_frontCtrl = new FrontController();
		$this->_errorCtrl = new ErrorController();
	}

	public function routing()
	{
		try
		{
			if(isset($_GET['action']))
			{
				switch($_GET['action'])
				{
					case 'home':
						$this->_frontCtrl->home();
						break;
					case 'post':
						$this->_frontCtrl->post();
						break;
					case 'login':
						$this->_frontCtrl->login();
						break;
					case 'sign-up':
						$this->_frontCtrl->signUp();
						break;
					case 'logout':
						$this->_frontCtrl->logout();
						break;
					case 'addComment':
						$this->_frontCtrl->addComment($_GET['id'], $_SESSION['login'], $_POST['newComment']);
						break;
					case 'reportComment':
						$this->_frontCtrl->signalComment();
						break;
					default:
						echo '<p>Action non valide</p>';
				}
			}
			else
				$this->_frontCtrl->home();
		}
		catch(Exception $e)
		{
			$this->_errorCtrl->errorDisplay($e->getMessage());
		}
	}
}