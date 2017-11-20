<?php
session_start();
if(!isSet($_SESSION['log'])){
	header('location: logowanie.php');
	exit;
}
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="UTF-8"/>
<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="style_MY.css" type="text/css"/>
<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style>
		.center-block
		{
			float:none;
		}

	</style>
</head>
<body>

	<div class="well well-sm">
		<div class="btn-group">
			<a href="admin.php" class="btn btn-primary">Panel admina</a>

		</div>
	</div>

	<div class="jumbotron">
		<h1 align="center"> PORTAL<strong style="color:red;">4X</strong>.pl</h1>
	</div>

	<div class="col-md-7 center-block">

		<?php


			if(is_uploaded_file($_FILES['plik']['tmp_name'])){
				if($_FILES['plik']['size'] > 1048576){
					echo '<div class="alert alert-warning"> Błąd! Za duży plik! </div>';
				}
				else if($_FILES['plik']['type'] == 'image/jpeg' || $_FILES['plik']['type'] == 'image/png'){
						echo '<div class="alert alert-success"> Odebrano plik! Początkowa nazwa: '.$_FILES['plik']['name'].'</div> <br>';
						if(isset($_FILES['plik']['type'])){
							echo '<div class="alert alert-success">Typ: '.$_FILES['plik']['type'].'</div><br>';
						}
						move_uploaded_file($_FILES['plik']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/MY/Foto/'.$_FILES['plik']['name'] );
					}else{
						echo '<div class="alert alert-warning">Zły format pliku! Dopuszczalne formaty: jpg, jpeg, png</div>';
					}
				}
			else{
				echo '<div class="alert alert-warning"> Błąd przy przesyłaniu danych! <a href="dodajplik.php"> Powrót</a> </div>';
			}
		?>





	</div>



</body>
</html>
