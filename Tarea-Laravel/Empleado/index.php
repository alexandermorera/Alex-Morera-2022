<?php

require_once('../Database/database.php');

$empleado =$mysqli->query('SELECT * FROM empleado');

$camp_empleado = $empleado->fetch_array(MYSQLI_BOTH);


?>
<h1>Empleados</h1>

<p>
	<a href="Crear/formularioCrear.php">Crear empleado</a>
</p>
<table border="1">
	<tr>
		<td>Codigo</td>
		<td>Nombre</td>
		<td>Lugar_de_nacimiento</td>
		<td>Fecha_de_nacimiento</td>
		<td>Telefono</td>
		<td>Cargo</td>
		<td>Estado</td>
		<td>Actualizar</td>
		<td>Eliminar</td>
	</tr>
	<?php

	while($camp_empleado != NULL){
		echo '<tr>';
		echo '<td>'.$camp_empleado['Codigo'].'</td>';
		echo '<td>'.$camp_empleado['Nombre'].'</td>';
		echo '<td>'.$camp_empleado['Lugar_de_nacimiento'].'</td>';
		echo '<td>'.$camp_empleado['Fecha_de_nacimiento'].'</td>';
		echo '<td>'.$camp_empleado['Telefono'].'</td>';
		echo '<td>'.$camp_empleado['Cargo'].'</td>';
		echo '<td>'.$camp_empleado['Estado'].'</td>';
		echo '<td><a href="actualizar/formularioActualizar.php?id='.$camp_empleado['id'].'">Actualizar</a></td>';
		echo '<td><a href="eliminar/eliminarEmpleado.php?id='.$camp_empleado['id'].'">Eliminar</a></td>';
		echo '</tr>';

		$camp_empleado = $empleado->fetch_array(MYSQLI_BOTH);
	}

	?>
</table>

<a href="../">Retornar</a>