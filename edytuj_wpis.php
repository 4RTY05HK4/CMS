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
  		<a href="admin.php" class="btn btn-primary">Panel admina</a>
			<a href="wyloguj.php" class="btn btn-primary">Wyloguj</a>
		</div>
	</div>

	<div class="jumbotron">
		<h1 align="center"> PORTAL<strong style="color:red;">4X</strong>.pl</h1>
		<h3>Panel Admina</h3>
		<?php
			$login = $_SESSION['log'];
			echo "<h4 align=center>Jesteś zalogowany jako <span style='color:red;'>$login</span></h4>";
			$p = mysqli_connect('localhost', 'root', '');

			mysqli_query($p, "SET CHARSET utf8");
			mysqli_query($p, "SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
			$baza = mysqli_select_db($p, 'portal');
			$tabela = $_POST['tabela'];
			$zapytanie_to_right_table = "SELECT * FROM $tabela";
			$zapytanie_to_all = mysqli_query($p, $zapytanie_to_right_table);
			$updated_wpis = $_POST['updated_wpis'];
			while($r = mysqli_fetch_array($zapytanie_to_all))
			{
				$data = $r['Data'];
				$name_of_all = $r['IDwpis'];

				if(isset($_POST[$name_of_all]) && isset($_POST['zapis'])){
					$sql_to_all = "UPDATE $tabela SET Wpis='$updated_wpis' WHERE IDwpis='$name_of_all';";
					$zapytanie_of_all = mysqli_query($p, $sql_to_all);

					echo "<div class='alert alert-danger'>Pomyślnie zapisano!</div>";
				}
			}
			mysqli_close($p);
			?>
	</div>




</body>
</html>
