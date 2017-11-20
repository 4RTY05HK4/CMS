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
  		<a href="index.php" class="btn btn-primary">Strona Główna</a>
		</div>
	</div>

	<div class="jumbotron">
		<h1 align="center"> PORTAL<strong style="color:red;">4X</strong>.pl</h1>
		<h3>Panel Admina</h3>
	</div>

	<div class="col-sm-5 center-block" >

		<?php
			require_once "connect.php";
			$polaczenie = mysqli_connect($host, $user, $password);
			mysqli_query($polaczenie, "SET CHARSET utf8");
			mysqli_query($polaczenie, "SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
			mysqli_select_db($polaczenie, $database);


			if(isset($_POST['wpis'])){
				$wpis = $_POST['wpis'];
					if($wpis != NULL){
							$tabela = $_POST['tabela'];
							$sql = "INSERT INTO $tabela VALUES (NULL, '$wpis', NULL)";
							$dodaj = mysqli_query($polaczenie, $sql);
							$zapytanie = mysqli_query($polaczenie, $dodaj);

							if($zapytanie !== true )
							{
								echo '<div class="alert alert-success"> Nowy wpis został dodany</div> ';
							}
							else{
								echo '<div class="alert alert-warning"> Nowy wpis nie został dodany</div> ';
							}
					}else{
						echo '<div class="alert alert-warning">Brak treści! Post nie został dodany! <a href="admin.php">Powrót</a></div>';
					}
			}
		?>

	</div>



</body>
</html>
