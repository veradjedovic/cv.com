
<h3>Sektori:</h3>
<form class="form-vertical" action="" method="post" role="form">
	<select class="form-control" onchange="this.form.submit()" name='sl_sektor'>
	<option value='-1'><b>Izaberite sektor</b></option>
<?php

foreach($this->data["allSektori"] as $sektor){
	echo "<option " . ($this->data["selectedSektor"]->sektor_id==$sektor->sektor_id?"selected":"") . " value='{$sektor->sektor_id}'>{$sektor->naziv}</option>";
	}		
?>
	</select><br />
	<div class="form-group">
	<input class="form-control" type="text" name="tb_sektor" value="<?php echo $this->data["selectedSektor"]->naziv; ?>" />
	</div>
	<div class="checkbox">
	<label>
	<input type="checkbox" name="cb_status" <?php echo $this->data["selectedSektor"] ->status ? "checked" : ""; ?> />
	Otcekirajte kvadratic ukoliko ne zelite da se odabrani sektor pojavljuje u formi za prijavu.
	</label>
	</div><br />
	<button type="submit" class="btn btn-default" name="btn_dodaj">Dodaj</button>
	<button type="submit" class="btn btn-default" name="btn_azuriraj">Azuriraj</button>
</form><br />
		<div><i><?php echo isset($this->data['poruka']) ? $this->data['poruka'] : ""; ?> </i></div>
