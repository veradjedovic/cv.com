<?php 
class Korisnici extends ActiveRecord{
	public $korisnik_id,		 	//1
			$ime,					//2
			$prezime,				//3
			$godina_rodjenja, 		//4
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
	public static $table="korisnici";
	public static $table_id = "korisnik_id";
	
	public static function PoSektoru($sektor, $status){
		$db=Database::getInstance();
		$pdo=$db->pdo;
		$r=$pdo->prepare("SELECT korisnik_id, ime, prezime, datum_prijave, dokument
						FROM korisnici 
						WHERE korisnici.status='{$status}' and sektor= {$sektor} 
						order by datum_prijave");
		$r->execute();
		$r=$r->fetchAll(PDO::FETCH_CLASS, get_called_class());
		return $r;
        if (count($r) > 0) {
            return $r;
        } else {
            return false;
        }
	}
}