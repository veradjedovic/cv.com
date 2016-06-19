<h3>Vidzeti:</h3>
<form class="form-vertical" action="" method="post">
	<select class="form-control" onchange="this.form.submit()" name='sl_sidebar'>
	<option value='-1'><b>Izaberite vidzet</b></option>
	
<?php

foreach($this->data['allSidebar'] as $sidebar){
	echo "<option " . ($this->data['selectedSidebar']->strana_id==$sidebar->strana_id ? "selected":"") . " value='{$sidebar->strana_id}'>{$sidebar->naziv}</option>";
	}	
	
?>

	</select><br />
	<div class="form-group">
	<label for="sidebar">Naziv linka</label><br/>
	<input class="form-control" type="text" name="tb_sidebar" value="<?php echo isset($this->data['selectedSidebar']->naziv) ? $this->data['selectedSidebar']->naziv : ''; ?>" />
	</div>
	<div class="form-group">
	<label for="sidebar">Naziv strane</label><br/>
	<input class="form-control" type="text" name="tb_sidebarMvc" value="<?php echo isset($this->data['selectedSidebar']->mvcname) ? $this->data['selectedSidebar']->mvcname : ''; ?>" />
	</div>
	<div class="checkbox">
	<label>
	<input class="check" type="checkbox" name="cb_sidebar" <?php echo $this->data['selectedSidebar'] ->status ? "checked" : ""; ?> />
	Otcekirajte kvadratic ukoliko ne zelite da se vidzet pojavljuje u sidebaru.
	</label>
	</div><br />
	<button class="btn btn-default" type="submit" name="btn_dodaj">Dodaj</button>
	<button class="btn btn-default" type="submit" name="btn_azuriraj">Azuriraj</button>
</form><br />
		<div><i><?php echo isset($this->data['poruka']) ? $this->data['poruka'] : ""; ?> </i></div>
</div>

