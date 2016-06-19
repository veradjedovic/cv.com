<?php 
class StrucnaSprema extends ActiveRecord{
	public $strucna_sprema_id, $naziv, $status;
	
	public static $table="strucna_sprema";
	public static $table_id="strucna_sprema_id";
}