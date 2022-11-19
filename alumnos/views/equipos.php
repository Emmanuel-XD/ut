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
    <h1>Lista de equipos</h1>
    <br>
    <div>
   
    
    </div>
    <br>
    
    <table class="table table-striped"  id= "table_id">

                   <thead>    
                   <tr >
                   <th>Nombre</th>
                   <th>Marca</th>
                   <th>ClavePAT</th>
                   <th>Modelo</th>
                   <th>Ubicacion</th>
                   <th>No.Serie</th>
                   <th>Fecha Inscripcion</th>
                   <th>Fecha Servicio</th>
                   <th>Condicion</th>
                 
                     </tr>
                </thead>
            <tbody>
            <?php

require_once ("../includes/db.php");             
$result=mysqli_query($conexion,"SELECT * FROM equipos");
while ($fila = mysqli_fetch_assoc($result)):
    
?>
<tr>
<td><?php echo $fila['nombre']; ?></td>
<td><?php echo $fila['marca']; ?></td>
<td><?php echo $fila['clave']; ?></td>
<td><?php echo $fila['modelo']; ?></td>
<td><?php echo $fila['ubicacion']; ?></td>
<td><?php echo $fila['serie']; ?></td>
<td><?php echo $fila['fecha_ins']; ?></td>
<td><?php echo $fila['fecha_serv']; ?></td>
<td><?php echo $fila['condicion']; ?></td>

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
