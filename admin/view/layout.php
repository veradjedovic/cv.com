<!Doctype html>
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
		<base href="/cv.com/admin/" />
	<meta charset="UTF-8" />
</head>
<body>
<div class="container" style="background:white">
	<div class="row">
		<div class="col-md-3">
			<img src="../images/hr3.jpg" class="img-thumbnail" />
		</div><!-- end admin -->
		<div class="col-md-7">
				<h1>CV Web Aplikacija<br /><small>Dobrodosli u deo za administraviju</small></h1>
		</div>
		<div class="col-md-2" id="logout">
			<a class="btn btn-warning form-control" href="view/logout.php">Odjavi se</a>
		</div>
		<!-- end izvestaji-->
	</div><!-- end header -->
	<div class="row">
		<div class="col-md-3 navbar navbar-default navbar-inverse">
			<p class="h3" style="margin:0px; height:47px; line-height:47px; color:white">Odaberite stavku</p>
		</div>
		<div class="col-md-9">
			<nav class="navbar navbar-default navbar-inverse">
				<div class="container">
				<?php 
					include "view/nav.php";
				?>
				</div><!-- end nav-->
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3 navbar-inverse" style="height:1000px; padding-top:5px">
				<?php 
					include "view/vidzeti.php";
				?>
		</div><!-- end sidebar -->
		<div class="col-md-9"> 
			      
					[VIEW]
				
		</div><!-- end main --> 
	</div>
</div><!-- end wrapper -->
</body>
</html>