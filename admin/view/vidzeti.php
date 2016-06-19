<table class="table navbar-inverse" id="vidzet" style="border:1px solid black">
	<?php 	
	
		$allStrane=Strane::getAll("WHERE status =" . STRANESIDEBAR);
		foreach($allStrane as $strana){
			echo "<tr><td><a class='btn' id='vidzeti' href='Admin/$strana->mvcname'>$strana->naziv</a></td></tr>";
		}
	?>
</table>