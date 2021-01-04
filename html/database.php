<!-- database.php -->

<?php
	/* Database connection settings */
	$host = 'localhost';
	$user = 'admin';
	$pass = '123qweasd';
	$db = 'test'; //database
	$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

	$temperature = '';
	$hum = '';
	$wheigh = '';

	$hora ='';


	//loop through the returned data
	while ($row = mysqli_fetch_array($result)) {

		$hora = $hora . '"'. $row['horas'] .'",';
        $temperature = $temperature . '"'. $row['temperatura'].'",';
		$hum = $hum . '"'. $row['humidade'].'",';
		$wheigh = $wheigh . '"'. $row['peso'].'",';

	}

    $hora = trim($hora,",");
	$temperature = trim($temperature,",");
	$hum = trim($hum,",");
	$wheigh = trim($wheigh,",");

?>