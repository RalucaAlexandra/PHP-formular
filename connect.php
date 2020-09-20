<?php

$conectare = mysqli_connect('localhost', 'root', '', 'retete');

if(!$conectare) {
	die(mysqli_connect_error());
}