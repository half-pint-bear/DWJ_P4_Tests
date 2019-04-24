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
				if($_GET['action'] == 'home')
					$this->_frontCtrl->home();
				elseif($_GET['action'] == 'post')
				{
					if(isset($_GET['id']) && $_GET['id'] > 0)
						$this->_frontCtrl->post();
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