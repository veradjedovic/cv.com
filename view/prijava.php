<center><p class="h3">Popunite ispravno Vase podatke</p></center><br/>
<form action="" method="post" enctype="multipart/form-data">
<table class="table table-striped table-hover">
<tr><td>Ime:</td>
	<td><input type='text' name='tb_ime' class="form-control" data-validate="required" /></td>
</tr>
<tr><td>Prezime:</td>
	<td><input type='text' name='tb_prezime' class="form-control" data-validate="required" /></td>
</tr>
<tr><td>Godina rodjenja:</td>
	<td>
		<select name='tb_godina' class="form-control">
		<option value="-1">Izaberite godinu</option>
	<?php
		
		foreach($this -> data['allGodine'] as $godina){
		echo "<option ".($this->data['selectedGodina'] -> godina_id == $godina->godina_id ? "selected" : ""). " value = '{$godina->godina_id}'>{$godina->naziv}</option>"; 
		}
	?>
	</select>
	</td>
</tr>	
<tr><td>Adresa:</td>
	<td><input type='text' name='tb_adresa' class="form-control" data-validate="required" /></td>
</tr>
<tr><td>Opstina stanovanja:</td>
	<td>
		<select name='tb_opstina' class="form-control">
		<option value="-1">Izaberite opstinu</option>
	<?php
		
		foreach($this -> data['allOpstine'] as $opstina){
		echo "<option ".($this->data['selectedOpstina'] -> opstina_id == $opstina->opstina_id ? "selected" : ""). " value = '{$opstina->opstina_id}'>{$opstina->naziv}</option>"; 
		}
	?>
	</select>
	</td>
</tr>	
<tr><td>Telefon:</td>
	<td><input type='text' name='tb_telefon' class="form-control" data-validate="required" /></td>
</tr>
<tr><td>E-mail adresa:</td>
	<td><input type='text' name='tb_email' class="form-control" data-validate="required" /></td>
</tr>
<tr><td>Vozacka dozvola:</td>
	<td>
		<select name='tb_dozvola' class="form-control">
		<option value="-1">Izaberite stavku</option>
	<?php
		
		foreach($this -> data['allDozvole'] as $dozvola){
		echo "<option ".($this->data['selectedDozvola'] -> vozacka_dozvola_id == $dozvola -> vozacka_dozvola_id ? "selected":""). " value = '{$dozvola->vozacka_dozvola_id}'>{$dozvola->naziv}</option>"; 
		}
	?>
	</select>
	</td>
</tr>
<tr><td>Zeljena vrsta angazmana:</td>
	<td>
		<select name='tb_angazman' class="form-control">
		<option value="-1">Izaberite angazman</option>
	<?php
		
		foreach($this -> data['allAngazmani'] as $angazman){
		echo "<option ".($this->data['selectedAngazman'] -> vrsta_angazmana_id == $angazman->vrsta_angazmana_id ? "selected":""). " value = '{$angazman->vrsta_angazmana_id}'>{$angazman->naziv}</option>"; 
		}
	?>
	</select>
	</td>
</tr>
<tr><td>Radno vreme:</td>
	<td>
		<select name='tb_rvreme' class="form-control">
		<option value="-1">Izaberite radno vreme</option>
	<?php
		
		foreach($this -> data['allRVreme'] as $rVreme){
		echo "<option ".($this->data['selecteRVreme'] -> radno_vreme_id == $rVreme -> radno_vreme_id ? "selected" : ""). " value = '{$rVreme->radno_vreme_id}'>{$rVreme->naziv}</option>"; 
		}
	?>
	</select>
	</td>
</tr>
<tr><td>Strucna sprema:</td>
	<td>
		<select name='tb_ssprema' class="form-control">
		<option value="-1">Izaberite strucnu spremu</option>
	<?php
		
		foreach($this -> data['allStruka'] as $struka){
		echo "<option ".($this->data['selecteStruka'] -> strucna_sprema_id == $struka->strucna_sprema_id ? "selected":""). " value = '{$struka->strucna_sprema_id}'>{$struka->naziv}</option>"; 
		}
	?>
	</select>
	</td>
</tr>
<tr><td>Oblast interesovanja:</td>
	<td>
		<select name='tb_sektor' class="form-control">
		<option value="-1">Izaberite sektor</option>
	<?php
		
		foreach($this -> data['allSektori'] as $sektor){
		echo "<option ".($this->data['selectedSektor'] -> sektor_id == $sektor->sektor_id ? "selected" : ""). " value = '{$sektor->sektor_id}'>{$sektor->naziv}</option>"; 
		}
	?>
	</select>
	</td>
</tr>	
<tr><td>Vas CV u PDF formatu:</td>
	<td><input type='file' name='fUpload' data-validate="required" /></td>
</tr>
</table>
<center><button id="dugme" type="submit" name="tb_submit" class="btn btn-danger">Posalji prijavu</button></center><br />
</form>