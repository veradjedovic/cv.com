
<h3>Vrsta angazmana:</h3>
<form class="form-vertical" action="" method="post" role="form">
	<select class="form-control" onchange="this.form.submit()"  name='sl_angazman'>
	<option value='-1'><b>Izaberite vrstu angazmana</b></option>
<?php 

foreach($this->data["allangazmani"] as $angazman){
	echo "<option " . ($this->data["selectedAngazman"]->vrsta_angazmana_id==$angazman->vrsta_angazmana_id ? "selected" : "") . " value='{$angazman->vrsta_angazmana_id}'>{$angazman->naziv}</option>";
	}
?>
	</select><br />
	<div class="form-group">
	<input class="form-control" type="text" name="tb_angazman" value="<?php echo isset($this->data["selectedAngazman"]->naziv) ? $this->data["selectedAngazman"]->naziv : ''; ?>" />
	</div>
	<div class="checkbox">
	<label>
	<input type="checkbox" name="cb_angazman" <?php echo $this->data["selectedAngazman"]->status ? "checked" : ""; ?> />
	Otcekirajte kvadratic ukoliko ne zelite da se odabrani angazman pojavljuje u formi za prijavu.
	</label>
	</div><br />
	<button class="btn btn-default" type="submit" name="btn_dodaj">Dodaj</button>
	<button class="btn btn-default" type="submit" name="btn_azuriraj">Azuriraj</button>
</form><br />
		<div><i><?php echo isset($this->data['poruka']) ? $this->data['poruka'] : ""; ?> </i></div>


