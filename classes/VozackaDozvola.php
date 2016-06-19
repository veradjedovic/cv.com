<?php 
class VozackaDozvola extends ActiveRecord{
	public $vozacka_dozvola_id, $naziv, $status;
	
	public static $table="vozacka_dozvola";
	public static $table_id="vozacka_dozvola_id";
}