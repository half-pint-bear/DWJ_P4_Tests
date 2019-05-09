<?php
namespace App\src\model;

use PDO;
use Exception;

abstract class Manager{

	private $_db = null;

	protected function queryExecution($sql, $params = null){
		if($params)
		{
			$result = $this->dbConnect()->prepare($sql);
			$result->execute($params);
		}
		else
		{
			$result = $this->dbConnect()->query($sql);
		}

		return $result;
	}

	private function dbConnect(){
		try{
			$this->_db = new PDO(DB_HOST, DB_USER, DB_PASSWORD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

			return $this->_db;
		}
		catch(Exception $e)
		{
			die('Erreur : ' . $e->getMessage());
		}
	}
}