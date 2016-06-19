<h3>Opstine:</h3>
<form class="form-vertical" action="" method="post" role="form">
	<select  class="form-control"onchange="this.form.submit()" name='sl_opstina'>
	<option value='-1'><b>Izaberite opstinu</b></option>
	
<?php

foreach($this->data['allOpstine'] as $opstina){
	echo "<option " . ( $this->data['selectedOpstine'] -> opstina_id == $opstina->opstina_id ? "selected" : "" ) . " value='{$opstina->opstina_id}'>{$opstina->naziv}</option>";
	}
	
?>

	</select><br />
	<div class="form-group">
	<input class="form-control" type="text" name="tb_opstina" value="<?php echo isset( $this->data['selectedOpstine'] -> naziv ) ? $this->data['selectedOpstine'] -> naziv : ''; ?>" />
	</div>
	<div class="checkbox">
	<label>
	<input type="checkbox" name="cb_opstina" <?php echo $this->data['selectedOpstine'] ->status ? "checked" : ""; ?> />
	Otcekirajte kvadratic ukoliko ne zelite da se odabrana opstina pojavljuje u formi za prijavu.
	</label>
	</div>
	<br />
	<button class="btn btn-default" type="submit" name="btn_dodaj">Dodaj</button>
	<button class="btn btn-default" type="submit" name="btn_azuriraj">Azuriraj</button>
</form><br />
		<div><i><?php echo isset($this->data['poruka']) ? $this->data['poruka'] : ""; ?> </i></div>


