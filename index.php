<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="UTF-8"/>
<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="style_MY.css" type="text/css"/>
<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="fontello/css/fontello.css" type="text/css"/>
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
  		<a href="logowanie.php" class="btn btn-success">Logowanie</a>
		</div>
	</div>

	<div class="jumbotron">
		<h1 align="center">		<img src="Foto/logo.png" width="150px" height="150px"> <br>PORTAL<strong style="color:red;">4X</strong>.pl</h1>
	</div>

	<div class="col-md-7 center-block" >
		<h3> Technik informatyk - kwalifikacja E12 </h3>
		<?php
			$p = mysqli_connect('localhost', 'root', '');

			mysqli_query($p, "SET CHARSET utf8");
			mysqli_query($p, "SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");

			$baza = mysqli_select_db($p, 'portal');
			$zapytanie = mysqli_query($p, 'SELECT * FROM e12');

			while($r = mysqli_fetch_array($zapytanie))
			{
				echo '<br><h3>'.$r['Wpis'].'</h3><p>Data:'.$r['Data'].'</p>';
			}

			mysqli_close($p);
		?>

	</div>
	<br><br>
		<div class="col-md-7 center-block" >
		<h3> Technik informatyk - kwalifikacja E13 </h3>
		<?php
			$p = mysqli_connect('localhost', 'root', '');

			mysqli_query($p, "SET CHARSET utf8");
			mysqli_query($p, "SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");

			$baza = mysqli_select_db($p, 'portal');
			$zapytanie = mysqli_query($p, 'SELECT * FROM e13');

			while($r = mysqli_fetch_array($zapytanie))
			{
				echo '<br><h3>'.$r['Wpis'].'</h3><p>Data:'.$r['Data'].'</p>';
			}

			mysqli_close($p);
		?>

	</div>
	<br><br>
	<div class="col-md-7 center-block" >
		<h3> Technik informatyk - kwalifikacja E14 </h3>
		<?php
			$p = mysqli_connect('localhost', 'root', '');

			mysqli_query($p, "SET CHARSET utf8");
			mysqli_query($p, "SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");

			$baza = mysqli_select_db($p, 'portal');
			$zapytanie = mysqli_query($p, 'SELECT * FROM e14');

			while($r = mysqli_fetch_array($zapytanie))
			{
				echo '<br><h3>'.$r['Wpis'].'</h3><p>Data:'.$r['Data'].'</p>';
			}

			mysqli_close($p);
		?>
	</div>

	<div class="well">
		<a href="https://www.youtube.com"><i class="icon-youtube-play" ></i></a>
		<a href="https://www.facebook.com/"<i class="icon-facebook-rect" ></i></a>
		<a href="https://github.com/"><i class="icon-github" ></i></a>
	</div>


</body>
</html>
