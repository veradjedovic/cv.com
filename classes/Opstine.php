<?php 
class Opstine extends ActiveRecord{
	public $opstina_id;
	public $naziv;
	public $status;

	public static $table="opstine";
	public static $table_id = "opstina_id";
}