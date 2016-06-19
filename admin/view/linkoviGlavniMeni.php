<h3>Linkovi Glavni Meni:</h3>
<form class="form-vertical" action="" method="post" role="form">
	<select class="form-control" onchange="this.form.submit()" name='sl_glavniMeni'>
	<option value='-1'><b>Izaberite link</b></option>
	
<?php

foreach($this->data['allGlavniMeni'] as $glavniMeni){
	echo "<option " . ($this->data['selectedGlavniMeni']->strana_id==$glavniMeni->strana_id ? "selected":"") . " value='{$glavniMeni->strana_id}'>{$glavniMeni->naziv}</option>";
	}
	
?>

	</select><br />
	<div class="form-group">
	<label for="glavniMeni">Naziv linka</label>
	<input  class="form-control" type="text" name="tb_glavniMeni" value="<?php echo isset($this->data['selectedGlavniMeni']->naziv) ? $this->data['selectedGlavniMeni']->naziv : ''; ?>" />
	</div>
	<div class="form-group">
	<label for="glavniMeni">Naziv strane</label>
	<input class="form-control" type="text" name="tb_glavniMeniMvc" value="<?php echo isset($this->data['selectedGlavniMeni']->mvcname) ? $this->data['selectedGlavniMeni']->mvcname : ''; ?>" />
	</div>
	<div class="checkbox">
	<label>
	<input type="checkbox" name="cb_glavniMeni" <?php echo $this->data['selectedGlavniMeni']->status ? "checked" : ""; ?> />
	Otcekirajte kvadratic ukoliko ne zelite da se link pojavljuje u glavnom meniju za navigaciju.
	</label>
	</div></br />
	<button class="btn btn-default" type="submit" name="btn_dodaj">Dodaj</button>
	<button class="btn btn-default" type="submit" name="btn_azuriraj">Azuriraj</button>
</form><br />
		<div><i><?php echo isset($this->data['poruka']) ? $this->data['poruka'] : ""; ?> </i></div>


