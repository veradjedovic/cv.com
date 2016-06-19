<table class="table bg-success table-bordered table-striped table-hover">
<thead>
	<tr class="red">
		<th>Ime</th><th>Prezime</th><th>CV</th><th>Premesti</th><th>Info</th><th></th>
	</tr>
</thead>
<tbody>
		<?php 
		foreach($this->data as $korisnik){
		echo "<tr>
				<td>$korisnik->ime</td>
				<td>$korisnik->prezime</td>
				<td><a class='text-success' href='../documents/{$korisnik->dokument}.pdf' target='_blank'>Pogledaj</a></td>
				<td><a class='text-success' href='index.php?mvccontroler=Admin&mvcmethod=edit_status&podaci=$korisnik->korisnik_id'>Premesti u sektor</a></td>
				<td><a class='text-success' href='Admin/podaciOKorisniku/$korisnik->korisnik_id'><img class='reload' src='../images/info.png'></a></td>
				<td><a class='text-success' href='index.php?mvccontroler=Admin&mvcmethod=remove_user&podaci=$korisnik->korisnik_id'><img class='reload' src='../images/remove.png'></a></td>
			</tr>";
		}
		?>
</tbody>
</table>



