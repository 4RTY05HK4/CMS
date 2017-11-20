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

		</div>
	</div>

	<div class="jumbotron">
		<h1 align="center"> PORTAL<strong style="color:red;">4X</strong>.pl</h1>
		<h3>Panel Admina</h3>
		<?php
			$login = $_SESSION['log'];
			echo "<h4 align=center>Jesteś zalogowany jako <span style='color:red;'>$login</span></h4>"

			?>
	</div>


	<div class="col-md-7 center-block" >
		<h3> <a href="e14.php" class="links_not_important">Technik informatyk - kwalifikacja E14</a> </h3>
		<?php
			$p = mysqli_connect('localhost', 'root', '');

			mysqli_query($p, "SET CHARSET utf8");
			mysqli_query($p, "SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");

			$baza = mysqli_select_db($p, 'portal');
			$zapytanie_e14 = mysqli_query($p, 'SELECT * FROM e14');

			while($r = mysqli_fetch_array($zapytanie_e14))
			{
				echo "<form action='edytuj_wpis.php' method='post'>";
				echo "<br><h3><textarea type='text' name='updated_wpis' required rows='6' cols='50' class='form-control  ckeditor' >".$r['Wpis']."</textarea></h3><p>Data:".$r['Data']."</p>";
				$data = $r['Data'];
				$name_e14 = $r['IDwpis'];
				echo "<input type='text' name='$name_e14' value='$data' style='visibility:hidden' /><br>";
				echo "<input type='text' name='tabela' value='e14' style='visibility:hidden' /><br>";
				echo "<input type='submit' name='zapis' value='Zapisz' class='btn btn-primary' />";
				echo "</form>";

			}

			mysqli_close($p);
		?>
	</div>
	<br><br>



</body>
</html>
