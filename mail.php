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
	<script src="ckeditor/ckeditor.js"></script>
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

	<div class="col-md-7 center-block" >
		<h3> Napisz wiadomość </h3>
		<form action="mail2.php" method="post">
			Adres e-mail: <br>
			<input type="text" name="email" required class="form-control" />
			<br><br>
			Temat: <br>
			<input type="text" name="temat" required class="form-control" />
			<br><br>
			Treść: <br>
			<textarea type="text" name="wiadomosc" required rows="6" cols="50" class="form-control ckeditor" ></textarea>
			<br><br>

			<input type="submit" value="Wyślij maila" class="btn btn-success" />
			<input type="reset" value="Wyczyść" class="btn btn-danger"/>
		</form>

	</div>




</body>
</html>
