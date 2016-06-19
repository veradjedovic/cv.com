<?php 
class RadnoVreme extends ActiveRecord{
	public $radno_vreme_id, $naziv, $status;
	
	public static $table="radno_vreme";
	public static $table_id="radno_vreme_id";
}