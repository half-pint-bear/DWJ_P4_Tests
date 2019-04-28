<?php
namespace App\src\model;

class User {
	private $_id,
			$_login;


	//Object creation required methods
	public function __construct(Array $data){
		$this->hydrate($data);
	}

	public function hydrate(Array $data){
		foreach($data as $key => $value)
		{
			$method = 'setUser' . ucfirst($key);
			if(method_exists($this, $method))
				$this->method($value);
		}
	}

	//Setters
	public function setUserId($userId){
		$this->_id = (int) $userId;
	}

	public function setUserLogin($userLogin){
		if(is_string($userId))
			$this->_login = $userLogin;
	}

	//Getters
	public function getUserId(){
		return $this->_id;
	}

	public function getUserLogin(){
		return $this->_login;
	}
}