<?php 

session_start();
error_reporting(0);
$varsesion = $_SESSION['nombre'];

	if($varsesion== null || $varsesion= ''){

	header("Location:../includes/sesion/login.php");
		die();
	}

include_once "../includes/header.php";
?>


	
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


  
    <title></title>
</head>

<div class="container is-fluid">

	<h2 class="subtitle">¡Welcome Administrator <?php echo $_SESSION['nombre']; ?>!</h2>

<br>
<div class="col-xs-12">
		<h1>Lista de usuarios</h1>
    <br>
		<div>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#user">
				<span class="glyphicon glyphicon-plus"></span> Agregar usuario  <i class="fa fa-user-plus"></i> </a></button>
       
   
    </div>
		<br>
        
        <table class="table table-striped"  id= "table_id">

                   
                         <thead>    
                         <tr >
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Password</th>
                        <th>Fecha_Registro</th>
                        <th>Rol de usuario</th>
                        <th>Acciones</th>
         
                        </tr>
                        </thead>
                        <tbody>

				<?php

require_once ("../includes/db.php");             
$result=mysqli_query($conexion,"SELECT  user.id, user.nombre, user.correo, user.password, 
user.fecha, permisos.rol FROM user 
LEFT JOIN permisos ON user.rol_id= permisos.id  ");
while ($fila = mysqli_fetch_assoc($result)):
    
?>
<tr>
<td><?php echo $fila['nombre']; ?></td>
<td><?php echo $fila['correo']; ?></td>
<td><?php echo $fila['password']; ?></td>

<td><?php echo $fila['fecha']; ?></td>
<td><?php echo $fila['rol']; ?></td>

<td>
<a class="btn btn-warning" href="../includes/editar_user.php?id=<?php echo $fila['id']?> ">
<i  class="fa fa-edit "></i> </a>
<a href="../includes/eliminar_user.php?id=<?php echo $fila['id']?> " class="btn btn-danger btn-del" >
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
  title: 'Estas seguro de eliminar este usuario?',
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
      'El usuario fue eliminado.',
      'success'
    )
  }

        document.location.href= href;
    }   
})

    })


</script>
<?php include_once "../includes/footer.php";?>
  

  <?php include("registro.php"); ?>
</html>
