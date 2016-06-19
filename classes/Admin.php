<?php 
class Admin extends ActiveRecord{
	public static $table="administratori";
	public static $table_id="admin_id";
	
	public function setSessions($username,$password){
		Session::set("status",$this->status);
	}
	public static function logout(){
		Session::stop();
	}
	public static function login($username,$password){
		$admins=self::getAll("WHERE username='{$username}' and password='{$password}' LIMIT 1");
		if(count($admins)==1){
			$admins[0]->setSessions();
			return $admins[0];
		} else {
			return false;
		}
	}
}


