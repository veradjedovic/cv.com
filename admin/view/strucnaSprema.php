
<h3>Strucna sprema:</h3>
<form class="form-vertical" role="form" action="" method="post">
	<select class="form-control" onchange="this.form.submit()" name='sl_strucna_sprema'>
	<option value='-1'><b>Izaberite strucnu spremu</b></option>
<?php
foreach($this->data["allStrucnaSprema"] as $strucnaSprema){
echo "<option " . ($this->data['selectedStrucnaSprema']->strucna_sprema_id==$strucnaSprema->strucna_sprema_id ? "selected":"") . " value='{$strucnaSprema->strucna_sprema_id}'>{$strucnaSprema->naziv}</option>";
	}		
?>
	</select><br />
	<div class="form-group">
	<input class="form-control" type="text" name="tb_strucna_sprema" value="<?php echo isset($this->data['selectedStrucnaSprema']->naziv) ? $this->data['selectedStrucnaSprema']->naziv : ''; ?>" />
	</div>
	<div class="checkbox">
	<label>
	<input type="checkbox" name="cb_strucna_sprema" <?php echo $this->data['selectedStrucnaSprema']->status ? "checked" : ""; ?> />
	Otcekirajte kvadratic ukoliko ne zelite da se odabrana strucna sprema pojavljuje u formi za prijavu.
	</label>
	</div>
	<button class="btn btn-default" type="submit" name="btn_azuriraj">Azuriraj</button>
</form><br />
		<div><i><?php echo isset($this->data['poruka']) ? $this->data['poruka'] : ""; ?> </i></div>


