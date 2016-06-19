<?php 
class Strane extends ActiveRecord{
	public $strana_id, $naziv, $mvcname, $status;
	
	public static $table="strane";
	public static $table_id="strana_id";
}