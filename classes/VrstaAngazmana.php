<?php 
class VrstaAngazmana extends ActiveRecord{
	public $vrsta_angazmana_id, $naziv, $status;
	
	public static $table="vrste_angazmana";
	public static $table_id="vrsta_angazmana_id";
}