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

	<div class="col-md-5 center-block">

		<form action="dodawanie.php" method="post" role="form">
			<b>Imie:</b>
			<input type="text" name="imie" value="" size="25" class="form-control required"> <br>
			<b>Nazwisko:</b>
			<input type="text" name="nazwisko" value="" size="25" class="form-control required"> <br>
			<b>Nazwa użytkownika:</b>
			<input type="text" name="login" value="" size="25" class="form-control required"> <br>
			<b>Hasło:</b>
			<input type="password" name="haslo" value="" size="25" class="form-control required"> <br>
			<input type="submit" value="Dodaj" class="btn btn-success">
			<input type="reset" value="Wyczyść" class="btn btn-danger">
		</form>



	</div>



</body>
</html>
