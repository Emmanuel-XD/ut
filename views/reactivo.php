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
    <h1>Lista de reactivos</h1>
    <br>
    <div>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#reactivo">
				<span class="glyphicon glyphicon-plus"></span> Agregar reactivo  <i class="fa fa-user-plus"></i> </a></button>
    
    </div>
    <br>
    
    <table class="table table-striped"  id= "table_id">

                   <thead>    
                   <tr >
                   <th>Nombre</th>
                   <th>Elaboracion</th>
                   <th>Caducidad</th>
                   <th>Cantidad</th>
                   <th>Porcentaje</th>
                   <th>Ubicacion</th>
                   <th>Marca</th>
                   <th>Acciones</th>
                     </tr>
                </thead>
            <tbody>
            <?php

require_once ("../includes/db.php");             
$result=mysqli_query($conexion,"SELECT * FROM reactivo  ");
while ($fila = mysqli_fetch_assoc($result)):
    
?>
<tr>
<td><?php echo $fila['nombre']; ?></td>
<td><?php echo $fila['elaboracion']; ?></td>
<td><?php echo $fila['caducidad']; ?></td>
<td><?php echo $fila['cantidad']; ?></td>
<td><?php echo $fila['porcentaje']; ?>%</td>
<td><?php echo $fila['ubicacion']; ?></td>
<td><?php echo $fila['marca']; ?></td>

<td>
<a class="btn btn-warning" href="../includes/editar_react.php?id=<?php echo $fila['id']?> ">
<i  class="fa fa-edit "></i> </a>
<a href="../includes/eliminar_react.php?id=<?php echo $fila['id']?> " class="btn btn-danger btn-del" >
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
  title: 'Estas seguro de eliminar este reactivo?',
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
      'El reactivo fue eliminado.',
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
<?php include("form_react.php"); ?>
</html>
