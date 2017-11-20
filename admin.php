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
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="ckeditor/ckeditor.js"></script>

	<link rel="stylesheet" href="style_MY.css" type="text/css"/>

</head>
<body>

	<div class="well well-sm">
		<div class="btn-group">
  		<a href="index.php" class="btn btn-primary">Strona Główna</a>
			<a href="rejestracja.php" class="btn btn-primary">Dodaj użytkownika</a>
			<a href="mail.php" class="btn btn-primary">Wyślij maila</a>
  		<a href="edytuj_e12.php" class="btn btn-primary">Edycja Postów E12</a>
  		<a href="edytuj_e13.php" class="btn btn-primary">Edycja Postów E13</a>
  		<a href="edytuj_e14.php" class="btn btn-primary">Edycja Postów E14</a>
  		<a href="dodajplik.php" class="btn btn-primary">Dodaj plik</a>
			<a href="wyloguj.php" class="btn btn-danger">Wyloguj</a>
		</div>
	</div>

	<div class="jumbotron">

		<h1 align="center">		<img src="Foto/logo.png" width="150px" height="150px"> <br>PORTAL<strong style="color:red;">4X</strong>.pl</h1>
		<h3>Panel Admina</h3>
		<?php
			$login = $_SESSION['log'];
			echo "<h4 align=center>Jesteś zalogowany jako <span style='color:red;'>$login</span></h4>"

			?>
	</div>

	<div class="col-md-7 center-block" >
		<h3> Dodaj nowy wpis </h3>

		<form action="dodajwpis.php" method="post" role="form">

			<select name="tabela" class="form-control">
				<option value="e12">Tabela E.12</option>
				<option value="e13">Tabela E.13</option>
				<option value="e14">Tabela E.14</option>
			</select>

			<br>

			<!--<input type="file" value="dodaj grafike" id="grafika"></input>
			<input type="button" value="<img>" class="btn btn-succes" onclick="img()" />-->

			<h4> Treść </h4>
			<textarea type="text" name="wpis" required rows="6" cols="50" class="form-control ckeditor "></textarea>
			<br><br>

			<input type="submit" value="Dodaj wpis" class="btn btn-success" />
			<input type="reset" value="Wyczyść" class="btn btn-danger" />



		</form>

		<!-- <script>
			function img(){

					var img = document.getElementsByTagName('textarea')['0'];
					var grafic_name = document.getElementById('grafika').value;
					grafic_name = grafic_name.substring(12, grafic_name.length);
					img.value = '<img src="Foto/'+grafic_name+'" class="img-thumbnail" />';
			}
		</script> -->
	</div>
	<br>
	<div class="col-md-7 center-block" >
		<h3> <a href="e12.php" class="links_not_important">Technik informatyk - kwalifikacja E12</a> </h3>
	</div>
	<br>
	<div class="col-md-7 center-block" >
		<h3> <a href="e13.php">Technik informatyk - kwalifikacja E13</a> </h3>
	</div>
	<br>
	<div class="col-md-7 center-block" >
		<h3><a href="e14.php">Technik informatyk - kwalifikacja E14</a></h3>

	</div>
	<br><br>

</body>
</html>
