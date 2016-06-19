<table class="table table-bordered table-striped table-hover bg-success">
<?php 
	
	foreach($this->data as $sektor){
		echo "<tr><td><a class='text-success' href='index.php?mvccontroler=Admin &mvcmethod=listaKorisnikaPoKategorijama&sektorId=$sektor->sektor_id'>$sektor->naziv</a></td></tr>";
							//<a href='Admin/listaKorisnikaPoKategorijama/$sektor->sektor_id'> - ne prihvata link
	}
?>
</table>


