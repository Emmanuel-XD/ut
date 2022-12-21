<?php 


session_start();
error_reporting(0);
$varsesion = $_SESSION['nombre'];

	if($varsesion== null || $varsesion= ''){

	header("Location:../../includes/sesion/login.php");
		die();
	}

?>


	<!-- Script para el funcionamiento de de la ventana modal-->
	<!-- <script src="../js/jquery.min.js"></script>
    <script src="../js/resp/bootstrap.min.js"></script> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include_once "../includes/header.php" ?>
</head>


<div class="row">
    <div class="col-sm">
    <h1>Lista de reportes</h1>
    <br>
    <div>
    
    
    </div>
    <br>
    
    <table class="table table-striped"  id= "table_id">

<thead>    
<tr >
<th>Folio</th>
<th>Fecha Solicitud</th>
<th>Fecha Uso</th>
<th>Hora</th>
<th>Asignatura</th>
<th>Profesor</th>
<th>Grupo</th>
<th>Nombre Practica</th>
<th>Cantidad</th>
<th>Material</th>
<th>Entregado</th>
<th>Pendiente</th>
<th>Observacion</th>
<th>N°Control</th>
<th>Alumnos</th>

<th>Acciones..</th>
  </tr>
</thead>
<tbody>
<?php

require_once ("../includes/db.php");             
$result=mysqli_query($conexion,"SELECT * FROM reporte");
while ($fila = mysqli_fetch_assoc($result)):

?>
<tr>
<td><?php echo $fila['folio']; ?></td>
<td><?php echo $fila['solicitud']; ?></td>
<td><?php echo $fila['uso']; ?></td>
<td><?php echo $fila['hora']; ?></td>
<td><?php echo $fila['asignatura']; ?></td>
<td><?php echo $fila['profesor']; ?></td>
<td><?php echo $fila['grupo']; ?></td>
<td><?php echo $fila['practica']; ?></td>
<td><?php echo $fila['cantidad']; ?></td>
<td><?php echo $fila['material']; ?></td>
<td><?php echo $fila['entregado']; ?></td>
<td><?php echo $fila['pendiente']; ?></td>
<td><?php echo $fila['observacion']; ?></td>
<td><?php echo $fila['control']; ?></td>
<td><?php echo $fila['alumno']; ?></td>

</tr>


<?php endwhile;?>


	</body>
  <style>


</style>
  </table>
  
				
    </div>
</div>
<?php include_once("../includes/footer.php"); ?>

</html>
