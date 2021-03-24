<?php
	
	require_once('../../Database/database.php');

	$mysqli->query('UPDATE empleado SET Codigo ="'.$_POST['Codigo'].'", Nombre = '.$_POST['Nombre'].'", Lugar_de_nacimiento="'.$_POST['Lugar_de_nacimiento'].'", Fecha_de_nacimiento="'.$_POST['Fecha_de_nacimiento'].'", Telefono="'.$_POST['Telefono'].'", Cargo="'.$_POST['Cargo'].'", Estado="'.$_POST['Cargo']. ' WHERE id ='.$_POST['id']);

	header('location:../index.php');

?>