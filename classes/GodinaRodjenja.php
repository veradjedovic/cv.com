<?php 
class GodinaRodjenja extends ActiveRecord{
	public $godina_id, $naziv, $status;
	
	public static $table="godine";
	public static $table_id="godina_id";
}