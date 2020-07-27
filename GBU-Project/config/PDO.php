<?php
/**
this class is for connecting to database and other related stuff
* 
*/
error_reporting(0);
session_start();
class DB
{
	private static $_connection = null;
	private $_pdo,
			$_query,
			$_results,
			$_count;

	private function __construct()
	{
		try
		{
			$this->_pdo = new PDO('mysql:host=localhost;dbname=gbu-database','root','');
		}
		catch(PDOException $e)
		{
			die($e->getMessage());
		}
	}

	public static function connect()
	{
		if (!isset(self::$_connection)) {
			self::$_connection = new DB();
		}
		return self::$_connection;
	}

	public function query($sql, $params= array()){
		$this-> _error =false;
		if($this->_query= $this ->_pdo->prepare($sql)){
			$x=1;
		    if(count($params)){
			    foreach($params as $param){
				    $this->_query->bindValue($x,$param);
				    $x++;
			    }
		    }
		    if($this->_query->execute()){
			    $this->results=$this->_query->fetchAll(PDO::FETCH_OBJ);
			    $this->_count= $this->_query->rowCount();
		    }
		}
		return $this;
	}




	public function results(){
		return $this->results;
	}
	public function first(){
		return $this->results[0];
	}
	public function error(){
		return $this->_error;
	}
	public function count(){
		return $this->_count;
	}
}

