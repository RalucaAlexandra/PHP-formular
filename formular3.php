<?php

	$hostname = "localhost";
	$username = "root";
	$password = "";
	$databaseName = "retete";

	$connect = mysqli_connect($hostname, $username, $password, $databaseName);
	$query = "SELECT * FROM `preparat`";
	$result1 = mysqli_query($connect, $query);

	$query1 = "SELECT * FROM `ingredient`";
	$result2 = mysqli_query($connect, $query1);

	$query2 = "SELECT gramaj FROM `preparat`";
	$result3 = mysqli_query($connect, $query2);


	if(isset($_POST['adauga']))
	{
		$prep = $_POST['prep'];
		$ing = $_POST['ing'];
		$gram = $_POST['gram'];

		$query3 = "INSERT INTO `afisare` (`preparat`, `ingredientsicantitate`, `gramaj`) VALUES ('$prep', '$ing', '$gram') ";
		$query_run = mysqli_query($connect, $query3);
		header('Location: formular3.php'); 
	}
	if(isset($_POST['afiseaza'])){
			header('Location: afisareRetetaFinala.php'); }
	

?>

<!DOCTYPE html>
<html> 
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<style>		
			#container {
				margin-top: -10px;
				margin-left: -28px;
			}
		</style>
	</head>
<body>
		<div class="for">
	<h1>Alege preparatul si ingredientele</h1>
</div>
<div class="main">
		<form action="" method="POST">
	<div id="den">
			<h2 class="den">Alege preparatul</h2>
			<select class="option" name="prep">
				<option>Alege preparatul</option>
				<?php while($row1 = mysqli_fetch_array($result1)):;?>
					<option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>
				<?php endwhile;?>
			</select>
			<h2 class="den">Alege ingredientul</h2>
			<select class="option" name="ing">
				<option disabled="disabled" selected="selected">Alege ingredientul </option>
				<?php while($row2 = mysqli_fetch_array($result2)):;?>
					<option value="<?php echo $row2[1];?> "><?php echo $row2['denumire1']; ?></option>
				<?php endwhile;?>
			</select>
			<h2 class="den">Alege cantitatea</h2>
			<select class="option" name="gram">
				<option disabled="disabled" selected="selected">Alege cantitatea</option>
				<?php while($row3 = mysqli_fetch_array($result3)):;?>
					<option value="<?php echo $row3['gramaj'];?>"><?php echo $row3['gramaj'];?></option>
				<?php endwhile;?>
			</select>

			<button type="submit" name="adauga" value="Adauga"><h3 style="color: #FFF8DC">Adauga</h3></button>
			<a href="afisareRetetaFinala.php">
		<div id="container" class="btn2">
			<button id="btn" type="submit" name="afiseaza" value="Afiseaza" style="background-color: orange;" ><h3 style="color: #FFF8DC">Afiseaza reteta</h3></button>
		</div>
	</a>
			
	</div>
			
		</form>
		
	</div>
	<script>
		$(document).ready(function(){
			$(".option").multiselect({
				placeholder: "cantitate",
				tags: true,
				tokenSeparators:['/',',',','," "]
			}
				);
			

		})
	</script>
	</body>
</html>

