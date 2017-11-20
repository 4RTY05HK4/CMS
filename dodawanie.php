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

	<div class="col-md-5 center-block">


		<?php
			if(isset($_POST['imie'])&&isset($_POST['nazwisko'])&&isset($_POST['login'])&&isset($_POST['haslo'])){
				require_once "connect.php";

				$polaczenie = mysqli_connect($host, $user, $password);
				mysqli_query($polaczenie, "SET CHARSET utf8");
				mysqli_query($polaczenie, "SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
				mysqli_select_db($polaczenie, $database);

				$imie = $_POST['imie'];
				$nazwisko = $_POST['nazwisko'];
				$login = $_POST['login'];
				$haslo = $_POST['haslo'];

				$query_check = "SELECT * FROM users WHERE login='$login'";
				$adding_checker = mysqli_fetch_array(mysqli_query($polaczenie, $query_check));
				if($adding_checker !== NULL){
					echo '<div class="alert alert-warning"> Taka nazwa użytkownika już istnieje! </div>';
					echo '<a href="rejestracja.php" class="btn btn-primary"> Powrót </a>';
				}else {


					$query = "INSERT INTO users	VALUES(NULL, '$imie', '$nazwisko', '$login', '$haslo')";
					$dodaj = mysqli_query($polaczenie, $query);

					if($dodaj === true){
						echo '<div class="alert alert-success">Udało się dodać nowego użytkownika</div>';
					}else{
						echo '<div class="alert alert-warning"> Nowy użytkownik nie został dodany </div>';
					}
				}
			}


		?>



	</div>



</body>
</html>
