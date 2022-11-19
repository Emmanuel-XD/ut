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
    <h1>Lista de reportes</h1>
    <br>
    <div>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#reporte">
				<span class="glyphicon glyphicon-plus"></span> Agregar reporte  <i class="fa fa-user-plus"></i> </a></button>
    
    </div>
    <br>
    
    <table class="table table-striped"  id= "table_id">

                   <thead>    
                   <tr >
                   <th>N.Control</th>
                   <th>Nombre</th>
                   <th>Fecha</th>
                   <th>Cantidad</th>
                   <th>Solicitud</th>
                   <th>Registro</th>
                   <th>Acciones</th>
                     </tr>
                </thead>
            <tbody>
            <?php

require_once ("../includes/db.php");             
$result=mysqli_query($conexion,"SELECT * FROM reporte");
while ($fila = mysqli_fetch_assoc($result)):
    
?>
<tr>
<td><?php echo $fila['control']; ?></td>
<td><?php echo $fila['nombre']; ?></td>
<td><?php echo $fila['fecha']; ?></td>
<td><?php echo $fila['cantidad']; ?></td>
<td><?php echo $fila['equipos']; ?></td>
<td><?php echo $fila['registro']; ?></td>

<td>
<a class="btn btn-warning" href="../includes/editar_reporte.php?id=<?php echo $fila['id']?> ">
<i  class="fa fa-edit "></i> </a>
<a href="../includes/eliminar_reporte.php?id=<?php echo $fila['id']?> " class="btn btn-danger btn-del" >
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
  title: 'Estas seguro de eliminar este reporte?',
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
      'El reporte fue eliminado.',
      'success'
    )
  }

        document.location.href= href;
    }   
})

    })


</script>
				
    </div>
</div>
<?php include_once("../includes/footer.php"); ?>
<?php include("form_reporte.php"); ?>
</html>
