
  
  <?php


/**
 * Parte de registro de usuarios
 */

require_once ("../db.php");
if(isset($_POST)){
  if (strlen($_POST['nombre']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['password']) >= 1 
 && strlen($_POST['rol_id']) >= 1) {
        $nombre = trim($_POST['nombre']);
        $correo = trim($_POST['correo']);
        $password = trim($_POST['password']);
        $rol_id= trim($_POST['rol_id']);


  $consulta = "INSERT INTO user (nombre, correo,  password, rol_id)
        VALUES ('$nombre', '$correo',  '$password', '$rol_id')";
   $resultado=mysqli_query($conexion, $consulta);

      if($resultado){
echo'El registro fue guardado correctamente';
    
      }else{
          echo 'Error al guardar los datos';
      }
}else{
  echo 'No data';
}
}







