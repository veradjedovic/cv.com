<?php 
class Database{
	private static $instance=null;
	public $pdo;
	private function __construct(){
		$this->pdo=new PDO('mysql:dbhost=localhost; dbname=cv1; charset=utf8','root','');
	}
	static function getInstance(){
		if(!self::$instance)
			self::$instance=new Database;
		return self::$instance;
	}
}
