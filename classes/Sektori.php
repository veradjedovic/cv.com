<?php 
class Sektori extends ActiveRecord{
	public $sektor_id, $naziv, $status;
	
	public static $table="sektori";
	public static $table_id="sektor_id";
}
