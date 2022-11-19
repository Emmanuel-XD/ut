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
    <h1>Lista de materiales</h1>
    <br>
    <div>
   
    
    </div>
    <br>
    
    <table class="table table-striped"  id= "table_id">

                   <thead>    
                   <tr >
                   <th>Nombre</th>
                   <th>Tamaño</th>
                   <th>Cantidad</th>
                   <th>Marca</th>
                   <th>Ubicacion</th>
                
                     </tr>
                </thead>
            <tbody>
            <?php

require_once ("../includes/db.php");             
$result=mysqli_query($conexion,"SELECT * FROM materiales");
while ($fila = mysqli_fetch_assoc($result)):
    
?>
<tr>
<td><?php echo $fila['nombre']; ?></td>
<td><?php echo $fila['tamaño']; ?></td>
<td><?php echo $fila['cantidad']; ?></td>
<td><?php echo $fila['marca']; ?></td>
<td><?php echo $fila['ubicacion']; ?></td>

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
