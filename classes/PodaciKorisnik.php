<?php 
class PodaciKorisnik extends ActiveRecord{
	public $korisnik_id,		 	//1
			$ime,					//2
			$prezime,				//3
			$godina, 				//4
			$adresa_stanovanja,		//5
			$opstina, 				//6
			$telefon,				//7
			$email,					//8
			$vozacka_dozvola, 		//9
			$vrsta_angazmana,		//10
			$radno_vreme, 			//11
			$strucna_sprema, 		//12
			$sektor,				//13		
			$datum_prijave,		 	//14
			$dokument,				//15
			$status;				//16
	public static $table="spisak_korisnika";
	public static $table_id = "korisnik_id";
}
	