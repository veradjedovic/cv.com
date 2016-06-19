<table class="table bg-success table-bordered table-striped table-hover">
<thead>
	<tr class="red">
		<th>Ime</th><th>Prezime</th><th>CV</th><th>Info</th><th></th>
	</tr>
</thead>
<tbody>
		<?php 
		foreach($this->data['allKorisniciKategorije'] as $korisnik){
		echo "<tr><td>$korisnik->ime</td>
				<td>$korisnik->prezime</td>
				<td><a class='text-success' href='../documents/{$korisnik->dokument}.pdf' target='_blank'>Pogledaj</a></td>
				<td><a href='Admin/podaciOKorisniku/$korisnik->korisnik_id'><img class='reload' src='../images/info.png'></a></td>
				<td><a class='text-success' href='index.php?mvccontroler=Admin&mvcmethod=remove_user_sektori&podaci=$korisnik->korisnik_id&sektorId=" . $this->data['sektorNaziv']->sektor_id . "'><img class='reload' src='../images/remove.png'></a></td>
			</tr>";
		}
		?>
</tbody>
</table>
<h4>Sektor: <?php echo $this->data['sektorNaziv']->naziv; ?></h4>