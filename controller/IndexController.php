<?php 
class IndexController extends Controller{
	public $layout="IndexLayout";
	
	public function prijava(){
		
		$selectedSektor=new Sektori;
		$selectedGodina=new GodinaRodjenja;
		$selectedOpstina=new Opstine;
		$selectedDozvola=new VozackaDozvola;
		$selectedAngazman=new VrstaAngazmana;
		$selecteRVreme=new RadnoVreme;
		$selecteStruka=new StrucnaSprema;
		$korisnik=new Korisnici;
		$date = new DateTime('now');

		if(isset($_POST['tb_sektor'])&& $_POST['tb_sektor']!=-1){
				$s=Sektori::get($_POST['tb_sektor']); 
				if($s) { $selectedSektor = $s; }
			}
		if(isset($_POST['tb_godina'])&& $_POST['tb_godina']!=-1){
				$g=GodinaRodjenja::get($_POST['tb_godina']); 
				if($g) { $selectedGodina = $g; }
			}
		if(isset($_POST['tb_opstina'])&& $_POST['tb_opstina']!=-1){
				$o=Opstine::get($_POST['tb_opstina']); 
				if($o) { $selectedOpstina = $o; }
			}
		if(isset($_POST['tb_dozvola'])&& $_POST['tb_dozvola']!=-1){
				$d=VozackaDozvola::get($_POST['tb_dozvola']); 
				if($d) { $selectedDozvola = $d; }
			}
		if(isset($_POST['tb_angazman'])&& $_POST['tb_angazman']!=-1){
				$a=VrstaAngazmana::get($_POST['tb_angazman']); 
				if($a) { $selectedAngazman = $a; }
			}
		if(isset($_POST['tb_rvreme'])&& $_POST['tb_rvreme']!=-1){
				$v=RadnoVreme::get($_POST['tb_rvreme']); 
				if($v) { $selectedRVreme = $v; }
			}
		if(isset($_POST['tb_ssprema'])&& $_POST['tb_ssprema']!=-1){
				$p=StrucnaSprema::get($_POST['tb_ssprema']); 
				if($p) { $selectedRVreme = $p; }
			}

		if(isset($_POST['tb_submit'])){	

		$korisnik->ime=htmlspecialchars(trim($_POST['tb_ime']));
		$korisnik->prezime=htmlspecialchars(trim($_POST['tb_prezime']));
		$korisnik->godina_rodjenja=$_POST['tb_godina'];
		$korisnik->adresa_stanovanja=htmlspecialchars(trim($_POST['tb_adresa']));
		$korisnik->opstina=$_POST['tb_opstina'];
		$korisnik->telefon=htmlspecialchars(trim($_POST['tb_telefon']));
		$korisnik->email=htmlspecialchars(trim($_POST['tb_email']));
		$korisnik->vozacka_dozvola=$_POST['tb_dozvola'];
		$korisnik->vrsta_angazmana=$_POST['tb_angazman']; 
		$korisnik->radno_vreme=$_POST['tb_rvreme'];
		$korisnik->strucna_sprema=$_POST['tb_ssprema']; 
		$korisnik->sektor=$_POST['tb_sektor'];         
		$korisnik->datum_prijave=$date->format('Y-m-d H:i:s');

			if (isset($_FILES['fUpload']) && $_FILES['fUpload']['size'] > 0) {
				
				$tmp_putanja=$_FILES['fUpload']['tmp_name'];
				move_uploaded_file($tmp_putanja, "documents/" . md5( time()). $korisnik->ime . ".pdf");
			}
			$korisnik->dokument = md5( time()). $korisnik->ime ;
				

		$korisnik->status = KORISNICINEVIDLJIVO;
			
			if(!empty($korisnik->ime) && 
			   !empty($korisnik->prezime) && 
			   !empty($korisnik->adresa_stanovanja) && 
			   !empty($korisnik->telefon) && 
			   !empty($korisnik->email) &&
			   $korisnik->godina_rodjenja != -1 &&
			   $korisnik->opstina != -1 &&
			   $korisnik->vozacka_dozvola != -1 &&
			   $korisnik->vrsta_angazmana != -1 &&
			   $korisnik->radno_vreme != -1 &&
			   $korisnik->strucna_sprema != -1 &&
			   $korisnik->sektor != -1 &&
			   isset($_FILES['fUpload']) && $_FILES['fUpload']['size'] > 0){				   
				    $korisnik->insert();
					header("location: poslato");
			} else {
				header("location: obavestenje");
			}				
		}
		
		$allGodine=GodinaRodjenja::getAll("WHERE status =" . GODINEVIDLJIVO);
		$allOpstine=Opstine::getAll("WHERE status =" . OPSTINAVIDLJIVO);
		$allDozvole=VozackaDozvola::getAll("WHERE status =" . VDOZVOLAVIDLJIVO);
		$allAngazmani=VrstaAngazmana::getAll("WHERE status =" . ANGAZMANVIDLJIVO);
		$allRVreme=RadnoVreme::getAll("WHERE status =" . RVREMEVIDLJIVO);
		$allStruka=StrucnaSprema::getAll("WHERE status =" . STR_SPREMAVIDLJIVO);
		$allSektori=Sektori::getAll("WHERE status =" . SEKTORIVIDLJIVO);
		
		$this->loadView("prijava", array(
			
			"selectedSektor" => $selectedSektor,
			"selectedGodina" => $selectedGodina,
			"selectedOpstina" => $selectedOpstina,
			"selectedDozvola" => $selectedDozvola,
			"selectedAngazman" => $selectedAngazman,
			"selecteRVreme" => $selecteRVreme,
			"selecteStruka" => $selecteStruka,
			"korisnik" => $korisnik,
			"date" => $date,
			"allGodine" => $allGodine,
			"allOpstine" => $allOpstine,
			"allDozvole" => $allDozvole,
			"allAngazmani" => $allAngazmani,
			"allRVreme" => $allRVreme,
			"allStruka" => $allStruka,
			"allSektori" => $allSektori
		));
	}
}