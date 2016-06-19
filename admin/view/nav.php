<html>
<head>
	<title>Administrator</title>
	<link href="../css/bootstrap.css" type="text/css" rel="stylesheet" />
	<link href="../css/bootstrap.css.map" type="text/css" rel="stylesheet" />
	<link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet" />
	<link href="../css/bootstrap-theme.css" type="text/css" rel="stylesheet" />
	<link href="../css/bootstrap-theme.css.map" type="text/css" rel="stylesheet" />
	<link href="../css/bootstrap-theme.min.css" type="text/css" rel="stylesheet" />
	<link href="../css/style.css" type="text/css" rel="stylesheet" />
	<meta charset="UTF-8" />
</head>
<body>

	<?php 	
	
		$allStrane=Strane::getAll("WHERE status =" . STRANENAV);
		foreach($allStrane as $strana){
			echo "<a class='btn btn-success navbar-btn' href='Admin/$strana->mvcname'>$strana->naziv</a>";
		}
	?>

</body>
</html>