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
<h1 align="center"> DOBRE<strong style="color:red;">AMI</strong>.pl</h1>
</div>
<div class="col-sm-5 center-block">
<h1> Witaj w naszej FASTUDOWNI </h1>
<br/>

<h1> Zamówienie online </h1>
	<form action="order.php" method="post" role="form">
	Ile hot-dogów (4.99 PLN/szt):
	<input type="number" min="0" name="hotdog" required class="form-control"/>
	<br/><br/>
	Ile zapiekanek (2.99 PLN/szt)
	<input type="number" min="0" name="zapiekanka" required class="form-control"/>
	<br/><br/>
	Napoje (3.29 PLN//szt)
	<input type="number" min="0" name="napoje" required class="form-control"/>
	<br/><br/>
	<input type="submit" value="Wyślij zamówienie" class="btn btn-info"/>

	</form>
	<br/>
	<br/>
	</div>



</body>
</html>
