<?php
	session_start();
	if(isSet($_SESSION['log'])){
		header('location: admin.php');
		exit;
	}else if(isset($_POST['login']) && isset($_POST['haslo'])){

		require_once "connect.php";

		$polaczenie = @mysqli_connect($host, $user, $password);

		@mysqli_select_db($polaczenie, $database);

		$login = $_POST['login'];
		$haslo = $_POST['haslo'];

		$login = htmlentities($login, ENT_QUOTES, "UTF-8" );
		$haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8" );

		$zapytanie = "SELECT * from users where login='$login' and haslo='$haslo'";
		$sprawdzenie = @mysqli_fetch_array(mysqli_query($polaczenie, $zapytanie));

		if($sprawdzenie==0) {
			echo '<div class="alert alert-warning"> Nieprawidłowe dane logowania </div>';
		}else{
			$_SESSION['log'] = $login;
			header('location: admin.php');
			exit;
		}
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
  		<a href="index.php" class="btn btn-primary">Strona Główna</a>
		</div>
	</div>

	<div class="jumbotron">
		<h1 align="center"> PORTAL<strong style="color:red;">4X</strong>.pl</h1>
	</div>

	<div class="col-sm-3 center-block" >

		<h3>Logowanie do panelu admina</h3>
		<form action="logowanie.php" method="post" role="form">
			LOGIN:
			<input type="text" min="0" name="login" required class="form-control"/>
			<br/><br/>

			HASŁO:
			<input type="password" min="0" name="haslo" required class="form-control"/>
			<br/><br/>

			<input type="submit" value="Zaloguj" class="btn btn-success" />

		</form>
	</div>

</body>
</html>
