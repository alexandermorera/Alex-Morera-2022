<?php

	require_once('../../Database/database.php');

	$mysqli->query('INSERT INTO empleado (Codigo, Nombre, Lugar_de_nacimiento, Fecha_de_nacimiento, Telefono, Cargo, Estado ) VALUES("'.$_POST['Codigo'].'",'.$_POST['Nombre'].'",'.$_POST['Lugar_de_nacimiento'].'",'.$_POST['Fecha_de_nacimiento'].'",'.$_POST['Telefono'].'",'.$_POST['Cargo'].'",'.$_POST['Estado'].')');

	header('location:../index.php');

?>