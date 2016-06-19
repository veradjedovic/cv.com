<?php 
class AdminController extends Controller{
	public $layout="layout";
	
	public function novePrijave(){
		$allKorisnici=Korisnici::getAll("WHERE status =" . KORISNICINEVIDLJIVO);
		$this->loadView("novePrijave", $allKorisnici);
	}
	public function prijavePoKategorijama(){
		
		$allSektori=Sektori::getAll();
		$this->loadView("prijavePoKategorijama", $allSektori);
	}
	public function listaKorisnikaPoKategorijama(){	
	$sektorNaziv=new Sektori;
		
		$sektor = isset($_GET['sektorId'])&&is_numeric($_GET['sektorId'])?$_GET['sektorId']:"";
		$s=Sektori::get($sektor); 
		if($s) { $sektorNaziv = $s; }
		
		$allKorisniciKategorije=Korisnici::PoSektoru($sektor, KORISNICIVIDLJIVO);
		$this->loadView("listaKorisnikaPoKategorijama", array(
			"allKorisniciKategorije"=>$allKorisniciKategorije,
			"sektorNaziv"=>$sektorNaziv,
			"sektor"=>$sektor
		));
	}
	public function podaciOKorisniku(){
		
		$podaci = isset($_GET['podaci'])&&is_numeric($_GET['podaci'])?$_GET['podaci']:"";
		$allPodaci=PodaciKorisnik::get($podaci);
		/*if($allPodaci) { $podaciKorisnik = $allPodaci; }*/
		$this->loadView("podaciOKorisniku", $allPodaci);	
	}
	public function sektori(){
		
	$selectedSektor=new Sektori;
	$poruka=false;
	
		 if(isset($_POST['sl_sektor'])&& $_POST['sl_sektor']!=-1){
				$s=Sektori::get($_POST['sl_sektor']); 
				if($s) { $selectedSektor = $s; }
			}
		 
		if(isset($_POST['btn_dodaj'])){
			$selectedSektor->naziv=htmlspecialchars(trim($_POST['tb_sektor']));
			$selectedSektor->status=isset($_POST['cb_status']) ? SEKTORIVIDLJIVO : SEKTORINEVIDLJIVO;
				if(!empty($selectedSektor->naziv)){
					$selectedSektor->insert(); 
					header("location:sektori");
				} else {
					$poruka="Morate popuniti polje!";
				} 
			
		}
		if(isset($_POST['btn_azuriraj'])){
			$selectedSektor->naziv=htmlspecialchars(trim($_POST['tb_sektor']));
			$selectedSektor->status=isset($_POST['cb_status']) ? SEKTORIVIDLJIVO : SEKTORINEVIDLJIVO;
				if(!empty($selectedSektor->naziv)){
					$selectedSektor->save(); 
					header("location:sektori");
				} else {
					$poruka="Morate popuniti polje!";
				}
			
		}
			$allSektori=Sektori::getAll();
			$this->loadView("sektori", array(
				'selectedSektor'=>$selectedSektor,
				'allSektori'=>$allSektori,
				'poruka'=>$poruka			
			));
	}
	public function vrstaAngazmana(){
		
		$selectedAngazman=new VrstaAngazmana;
		$poruka=false;

		if(isset($_POST['sl_angazman'])&& $_POST['sl_angazman']!=-1){
				$a=VrstaAngazmana::get($_POST['sl_angazman']); 
				if($a) { $selectedAngazman = $a; }
			}
		if(isset($_POST['btn_dodaj'])){
			$selectedAngazman->naziv=htmlspecialchars(trim($_POST['tb_angazman']));
			$selectedAngazman->status=isset($_POST['cb_angazman']) ? ANGAZMANVIDLJIVO : ANGAZMANNEVIDLJIVO;
				if(!empty($selectedAngazman->naziv)){
					$selectedAngazman->insert(); 
					header("location:vrstaAngazmana");
				} else{
					$poruka="Morate popuniti polje!";
				}	
		}
		if(isset($_POST['btn_azuriraj'])){
			$selectedAngazman->naziv=htmlspecialchars(trim($_POST['tb_angazman']));
			$selectedAngazman->status=isset($_POST['cb_angazman']) ? ANGAZMANVIDLJIVO : ANGAZMANNEVIDLJIVO;
				if(!empty($selectedAngazman->naziv)){
					$selectedAngazman->save(); 
					header("location:vrstaAngazmana");
				} else{
					$poruka="Morate popuniti polje!";
				}
		}
		$allangazmani=VrstaAngazmana::getAll();
		$this->loadView("vrstaAngazmana", array(
			'selectedAngazman'=>$selectedAngazman,
			'allangazmani'=>$allangazmani,
			'poruka'=>$poruka
		));
	}
	public function strucnaSprema(){
		
		$selectedStrucnaSprema=new StrucnaSprema;
		$poruka=false;

		if(isset($_POST['sl_strucna_sprema'])&& $_POST['sl_strucna_sprema']!=-1){
				$r=StrucnaSprema::get($_POST['sl_strucna_sprema']); 
				if($r) { $selectedStrucnaSprema = $r; }
		}
		if(isset($_POST['btn_azuriraj'])){
			$selectedStrucnaSprema->naziv=htmlspecialchars(trim($_POST['tb_strucna_sprema']));
			$selectedStrucnaSprema->status=isset($_POST['cb_strucna_sprema']) ? SSPREMAVIDLJIVO : SSPREMANEVIDLJIVO;
				if(!empty($selectedStrucnaSprema->naziv)){
					$selectedStrucnaSprema->save(); 
					header("location:strucnaSprema");
				} else {
					$poruka="Morate popuniti polje!";
				}
		}
		$allStrucnaSprema=StrucnaSprema::getAll();
		$this->loadView("strucnaSprema", array(
			"selectedStrucnaSprema"=>$selectedStrucnaSprema,
			"allStrucnaSprema"=>$allStrucnaSprema,
			'poruka'=>$poruka
		));
	}
	public function linkoviGlavniMeni(){
		
		$selectedGlavniMeni=new Strane;
		$poruka=false;

		if(isset($_POST['sl_glavniMeni'])&& $_POST['sl_glavniMeni']!=-1){
				$g=Strane::get($_POST['sl_glavniMeni']); 
				if($g) { $selectedGlavniMeni = $g; }
		}
		if(isset($_POST['btn_dodaj'])){
			$selectedGlavniMeni->naziv=htmlspecialchars(trim($_POST['tb_glavniMeni']));
			$selectedGlavniMeni->mvcname=htmlspecialchars(trim($_POST['tb_glavniMeniMvc']));
			$selectedGlavniMeni->status=isset($_POST['cb_glavniMeni']) ? STRANENAV : STRANENEVIDLJIVO;
				if(!empty($selectedGlavniMeni->naziv) && !empty($selectedGlavniMeni->mvcname)){
					$selectedGlavniMeni->insert(); 
					header("location:linkoviGlavniMeni");
				} else {
					$poruka="Morate popuniti sva polja!";
				}
		}
		  
		if(isset($_POST['btn_azuriraj'])){
			$selectedGlavniMeni->naziv=htmlspecialchars(trim($_POST['tb_glavniMeni']));
			$selectedGlavniMeni->mvcname=htmlspecialchars(trim($_POST['tb_glavniMeniMvc']));
			$selectedGlavniMeni->status=isset($_POST['cb_glavniMeni']) ? STRANENAV : STRANENEVIDLJIVO;
				if(!empty($selectedGlavniMeni->naziv) && !empty($selectedGlavniMeni->mvcname)){
					$selectedGlavniMeni->save(); 
					header("location:linkoviGlavniMeni");
				} else {
					$poruka="Morate popuniti sva polja!";
				}
		}
				$allGlavniMeni=Strane::getAll("WHERE status!=". STRANESIDEBAR);
				$this->loadView("linkoviGlavniMeni", array(
					"selectedGlavniMeni"=>$selectedGlavniMeni,
					"allGlavniMeni"=>$allGlavniMeni,
					'poruka'=>$poruka
				));
	}
	public function linkoviSidebar(){
		
		$selectedSidebar=new Strane;
		$poruka=false;

		if(isset($_POST['sl_sidebar'])&& $_POST['sl_sidebar']!=-1){
				$v=Strane::get($_POST['sl_sidebar']); 
				if($v) { $selectedSidebar = $v; }
		}
		if(isset($_POST['btn_dodaj'])){
			$selectedSidebar->naziv=htmlspecialchars(trim($_POST['tb_sidebar']));
			$selectedSidebar->mvcname=htmlspecialchars(trim($_POST['tb_sidebarMvc']));
			$selectedSidebar->status=isset($_POST['cb_sidebar']) ? STRANESIDEBAR : STRANENEVIDLJIVO;
				if(!empty($selectedSidebar->naziv) && !empty($selectedSidebar->mvcname)){
					$selectedSidebar->insert(); 
					header("location:linkoviSidebar");
				} else {
					$poruka="Morate popuniti sva polja!";
				}
		}
		  
		if(isset($_POST['btn_azuriraj'])){
			$selectedSidebar->naziv=htmlspecialchars(trim($_POST['tb_sidebar']));
			$selectedSidebar->mvcname=htmlspecialchars(trim($_POST['tb_sidebarMvc']));
			$selectedSidebar->status=isset($_POST['cb_sidebar']) ? STRANESIDEBAR : STRANENEVIDLJIVO;
				if(!empty($selectedSidebar->naziv) && !empty($selectedSidebar->mvcname)){
					$selectedSidebar->save(); 
					header("location:linkoviSidebar");
				} else {
					$poruka="Morate popuniti sva polja!";
				}
		}
			$allSidebar=Strane::getAll("WHERE status!=". STRANENAV);
			$this->loadView("linkoviSidebar", array(
				"selectedSidebar"=>$selectedSidebar,
				"allSidebar"=>$allSidebar,
				'poruka'=>$poruka
			));
	}
	public function opstine(){
		
		$selectedOpstine=new Opstine;
		$poruka=false;

		if(isset($_POST['sl_opstina'])&& $_POST['sl_opstina']!=-1){
				$o=Opstine::get($_POST['sl_opstina']); 
				if($o) { $selectedOpstine = $o; }
		}
		if(isset($_POST['btn_dodaj'])){
			$selectedOpstine->naziv=htmlspecialchars(trim($_POST['tb_opstina']));
			$selectedOpstine->status=isset($_POST['cb_opstina']) ? OPSTINAVIDLJIVO : OPSTINANEVIDLJIVO;
				if(!empty($selectedOpstine->naziv)){
					$selectedOpstine->insert(); 
					header("location:opstine");
				} else {
					$poruka="Morate popuniti polje!";
				}
		}
		  
		if(isset($_POST['btn_azuriraj'])){
			$selectedOpstine->naziv=htmlspecialchars(trim($_POST['tb_opstina']));
			$selectedOpstine->status=isset($_POST['cb_opstina']) ? OPSTINAVIDLJIVO : OPSTINANEVIDLJIVO;
				if(!empty($selectedOpstine->naziv)){
					$selectedOpstine->save(); 
					header("location:opstine");
				} else {
					$poruka="Morate popuniti polje!";
				}
		}
		$allOpstine=Opstine::getAll();
		$this->loadView("opstine", array(
			"selectedOpstine"=>$selectedOpstine,
			"allOpstine"=>$allOpstine,
			'poruka'=>$poruka	
		));
	}
	public function remove_user(){
		
		$korisnici=new Korisnici;	
		$id = isset($_GET['podaci'])&&is_numeric($_GET['podaci'])?$_GET['podaci']:"";
		$korisnikId =  Korisnici::get($id);
		if($korisnikId){ $korisnici = $korisnikId; }
		
		if(isset($_GET['podaci'])&&is_numeric($_GET['podaci'])){
			$korisnici->status=KORISNICIOBRISANO;
			$korisnici->save(); 
				header( "location:index.php?mvccontroller=Admin&mvcmethod=novePrijave" );
		}
		$this -> loadView("remove_user");
	} 
	public function remove_user_sektori(){
		
		$korisnici=new Korisnici;	
		$sektorNaziv=new Sektori;
		
		$id = isset($_GET['podaci'])&&is_numeric($_GET['podaci'])?$_GET['podaci']:"";
		$korisnikId =  Korisnici::get($id);
		if($korisnikId){ $korisnici = $korisnikId; }
		
		$sektor = isset($_GET['sektorId'])&&is_numeric($_GET['sektorId'])?$_GET['sektorId']:"";
		$s=Sektori::get($sektor); 
		if($s) { $sektorNaziv = $s; }
		
		if(isset($_GET['podaci'])&&is_numeric($_GET['podaci'])){
			$korisnici->status=KORISNICIOBRISANO;
			$korisnici->save(); 
				header( "location:index.php?mvccontroller=Admin&mvcmethod=listaKorisnikaPoKategorijama&sektorId=". $sektor. "");
		}
		$this -> loadView("remove_user_sektori");
	} 
	public function edit_status(){
		
		$korisnici=new Korisnici;	
		$id = isset($_GET['podaci'])&&is_numeric($_GET['podaci'])?$_GET['podaci']:"";
		$korisnikId =  Korisnici::get($id);
		if($korisnikId){ $korisnici = $korisnikId; }
		
		if(isset($_GET['podaci'])&&is_numeric($_GET['podaci'])){
			$korisnici->status=KORISNICIVIDLJIVO;
			$korisnici->save(); 
			header( "location:index.php?mvccontroller=Admin&mvcmethod=novePrijave" );
		}
		$this -> loadView("edit_status");
	} 
}