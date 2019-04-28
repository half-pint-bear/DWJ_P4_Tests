<?php
namespace App\src\model;

class UserManager extends Manager{
	//Users table management methods
	public function createUser($userId, $userLogin){
		$sql = 'INSERT INTO mvc_users(id, login, registration_date) VALUES(?, ?, NOW())';
		$newUser = $this->queryExecution($sql, array($userId, $userLogin));

		return $newUser;
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

		return $updateInfo;
	}

	public function deleteUser($userId){
		$sql = 'DELETE FROM mvc_users WHERE id = ?';
		$removeUser = $this->queryExecution($sql, array($userId));

		return $removeUser;
	}
}