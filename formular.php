<?php
	require 'connect.php';
	session_start();
?>

<!DOCTYPE html>

<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<style>
			#container {	
				margin-top: -10px;
				margin-left: -50px;
			}
		</style>
</head>

<body>

<div class="for">
	<h1>Adauga Ingredient</h1>
</div>
<div class="main">
	<form method="POST" action="afisareIngredient.php">
		<div id="den">
			<h2 class="den">Denumire</h2>
		<input class="denumire" type="text" name="denumire1" placeholder="Denumire">

			<h2 class="den">Descriere</h2>
		<input class="denumire"   type="text" name="descriere1" placeholder="Descriere">

		<button type="submit" name="adaugaIngredient" value="Adauga ingredient"><h3 style="color: #FFF8DC">Adauga Ingredient</h3></button>
		<a href="formular2.php">
		<div id="container" class="btn2">
			<button id="btn" type="submit" name="afiseaza" value="Afiseaza" style="background-color: orange;" ><h3 style="color: #FFF8DC" >Pasul urmator - > Adauga preparat</h3></button>
		</div>
	</a>
		<!---	<a href="formular2.php">
				<button class="btn"><h3 style="color: #FFF8DC; font-size: 14px;">Next -></button> </h3></a>-->
				

	</div>
	</form>
</div>



</body>
</html>

