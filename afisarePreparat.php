<?php
	session_start();
	require 'connect.php';

		$denumire2 = $_POST['denumire2'];
		$descriere2 = $_POST['descriere2'];
		$gramaj = $_POST['gramaj'];
		if(isset($_POST['adaugaPreparat'])){
			$sql = "INSERT INTO preparat (denumire2, gramaj, descriere2) VALUES ('$denumire2', '$gramaj', '$descriere2') ";
			$result2 = mysqli_query($conectare, $sql);
			header('Location: formular2.php'); }

			
		if(isset($_POST['afiseaza'])){
			header('Location: formular3.php'); }

