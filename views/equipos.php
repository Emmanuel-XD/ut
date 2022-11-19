<?php 
session_start();
error_reporting(0);
$varsesion = $_SESSION['nombre'];

	if($varsesion== null || $varsesion= ''){

	header("Location:../includes/sesion/login.php");
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
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#equipo">
				<span class="glyphicon glyphicon-plus"></span> Agregar equipo  <i class="fa fa-user-plus"></i> </a></button>
    
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
                   <th>Acciones</th>
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

<td>
<a class="btn btn-warning" href="../includes/editar_equipo.php?id=<?php echo $fila['id']?> ">
<i  class="fa fa-edit "></i> </a>
<a href="../includes/eliminar_equipo.php?id=<?php echo $fila['id']?> " class="btn btn-danger btn-del" >
<i  class="fa fa-trash "></i></a></button>
</td>
</tr>


<?php endwhile;?>


	</body>
  <style>


</style>
  </table>
   <script>
  $('.btn-del').on('click', function(e){
e.preventDefault();
const href = $(this).attr('href')

Swal.fire({
  title: 'Estas seguro de eliminar este equipo?',
  text: "¡No podrás revertir esto!!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si, eliminar!', 
  cancelButtonText: 'Cancelar!', 
}).then((result)=>{
    if(result.value){
        if (result.isConfirmed) {
    Swal.fire(
      'Eliminado!',
      'El equipo fue eliminado.',
      'success'
    )
  }

        document.location.href= href;
    }   
})

    })


</script>
				
    </div>
    <?php include_once("../includes/footer.php"); ?>
</div>

<?php include("form_equipo.php"); ?>
</html>
