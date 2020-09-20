<?php
	session_start();
	require 'connect.php';


		$denumire1 = $_POST['denumire1'];
		$descriere1 = $_POST['descriere1'];
		if(isset($_POST['adaugaIngredient'])){
		$sql = "INSERT INTO ingredient (denumire1, descriere1) VALUES ('$denumire1', '$descriere1') ";
		$result1 = mysqli_query($conectare, $sql);
		header('Location: formular.php'); }

		if(isset($_POST['afiseaza'])){
			header('Location: formular2.php'); }

