<!DOCTYPE HTML>
<html lang="pl">
<head>
<meta charset="UTF-8"/>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

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


<div class="jumbotron">
<h1 align="center"> DOBRE <strong style="color:red;">AMI</strong>.pl</h1>
</div>
<div class="col-sm-5 center-block">
<h1> Dziękujemy za zamówienie<h1/>
	
<?php
	$hotdog = $_POST['hotdog'];
	$zap = $_POST['zapiekanka'];
	$napoje = $_POST['napoje'];
	
	$suma = 4.99 * $hotdog + 2.99 * $zap + 3.29 * $napoje;
	
	//echo $hotdog."<br/>";
	//echo $zap."<br/>";
	//echo $napoje."<br/>";
	
echo<<<END

	<h2> Podsumowanie zamówienia</h2>
	<table class="table table-hover">
	<tr>
	<td> Hot-dog (4.99PLN/szt) </td> <td> $hotdog</td>
	</tr>
	<tr>
	<td> Zapiekanka (2.99PLN/szt) </td> <td>$zap</td>
	</tr>
	<tr>
	<td>Napoje (3.29PLN/szt) </td> <td> $napoje </td>
	</tr>
	<tr class="success">
	<td> SUMA </td> <td> $suma PLN </td>
	</tr>
	</table>
	<br / > <a href="index.php" class="btn btn-succes"> Powrót do strony głównej </a>
END;
?>

</body>
</html>