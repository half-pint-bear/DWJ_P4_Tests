<?php
namespace App\src\model;

require_once 'Manager.php';

class UserManager{
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

	//Users table management methods
	public function createUser($userId, $userLogin){
		$sql = 'INSERT INTO mvc_users(id, login, registration_date) VALUES(?, ?, NOW())';
		$newUser = $this->queryExecution($sql, array($userId, $userLogin));
	}

	public function readUser($userId){
		$sql = 'SELECT id, login FROM mvc_users WHERE id = ?';
		$req = $this->queryExecution($sql, array($userId));

		$userInfo = $req->fetch(\PDO::FETCH_ASSOC);
		return $userInfo;
	}

	public function updateUser($userId, $userLogin){
		$sql = 'UPDATE mvc_users SET login = ? WHERE id = ?';
		$updateInfo = $this->queryExecution($sql, array($userLogin, $userId));
	}

	public function deleteUser($userId){
		$sql = 'DELETE FROM mvc_users WHERE id = ?';
		$removeUser = $this->queryExecution($sql, array($userId));
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