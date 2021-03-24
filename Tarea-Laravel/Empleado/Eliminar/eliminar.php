<?php

	require_once('../../Database/database.php');

	$mysqli->query('DELETE FROM empleado WHERE id ='.$_GET['id']);

	header('location:../index.php');

?>