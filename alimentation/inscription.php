<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ANGE ALIM</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min1.css">
	<link rel="stylesheet" type="text/css" href="css/style">
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

</head>
<body style="background-image: url('img/bg.png');">

	<?php require_once("entete.php");?>


<br>
<br>
<br>
<br>
<br><br>
<br><br>
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-lg-2 col-md-2 col-sm-2"></div>
		<div class="col-lg-8 col-md-8 col-sm-12">
			<div class=" card chic">
      	
		      	<form class="form-group">
		      		<h4><b><center>Je m'inscris</center></b>
		      		</h4><br>
		      		<label>Nom:</label>
		      		<input type="text" name="nom" class="form-control" placeholder="nom">
					<br>
					<label>Quartier ou Commune:</label>
		      		<input type="text" name="quartier" class="form-control" placeholder="Commune">
					<br>

		      		<label>Prénom</label>
		      		<input type="text" name="prenom" class="form-control" placeholder="prénom">
						<br>
		      		<label>Mon Email:</label><br>
		      		<input type="email" name="email" class="form-control" placeholder="email"><br>
						<br>
		      		<label>Password:</label>
		      		<input type="password" name="password" placeholder="password" class="form-control"><br>

		      		<center><input type="submit" name="" value="M'INSCRIRE"></center><br>

		      		

		      	</form>
			</div>
					<div class="col-lg-2 col-md-2 col-sm-2"></div>

		</div>
	</div>
</div>
<br><br><br>
	<?php require_once("footer.php");?>

</body>
</html>