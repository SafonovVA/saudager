<?php
	$mysqli = false;
	function connectDB () {
		global $mysqli;
		$mysqli = new mysqli("localhost", "root", "", "saudager");
		$mysqli->query("SET NAMES 'utf8'");
	}
	
	function closeDB () {
		global $mysqli;
		$mysqli->close ();
	}

	#Инициализация массива Большой Пятерки
	$great = [2040, 2024, 2039, 2015, 2201];
?>