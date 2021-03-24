<?php

require_once('../../Database/database.php');

$empleado = $mysqli->query('SELECT * FROM empleado WHERE id ='.$_GET['id']);

$empleado = $empleado->fetch_array(MYSQLI_BOTH);

?>
<h1>Actualizar Listado </h1>

<form method="POST" action="actualizar.php">
	<p>

		<input type="hidden" name="id" value="<?php echo $empleado['id']; ?>">
		<label>Codigo Empleado:</label>
		<input type="text" name="nombre" value="<?php echo $empleado['Codigo']; ?>" />
	</p>
	<p>
		<label>Nombre Empleado:</label>
		<input type="text" name="precio" value="<?php echo $empleado['Nombre']; ?>" />
	</p>
	<p>
		<label>Ciudad de nacimiento:</label>
		<input type="text" name="Lugar_de_nacimiento" value="<?php echo $empleado['Lugar_de_nacimiento']; ?>" />
	</p>
	<p>
		<label>Fecha Nacimiento Empleado:</label>
		<input type="text" name="Fecha_de_nacimiento" value="<?php echo $empleado['Fecha_de_nacimiento']; ?>" />
	</p>
	<p>
		<label>Telefono Empleado:</label>
		<input type="text" name="Telefono" value="<?php echo $empleado['Telefono']; ?>" />
	</p>
	<p>
		<label>Cargo Actual:</label>
		<input type="text" name="Cargo" value="<?php echo $empleado['Cargo']; ?>" />
	</p>
	<p>
		<label>Estado Actual:</label>
		<input type="text" name="Estado" value="<?php echo $empleado['Estado']; ?>" />
	</p>
	<input type="submit" value="Actualizar" />
</form>