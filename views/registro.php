<?php 
session_start();
error_reporting(0);
$varsesion = $_SESSION['nombre'];

	if($varsesion== null || $varsesion= ''){

	header("Location:../includes/sesion/login.php");
		die();
	}
?>


<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>

    
</head>

<body id="page-top">
    <div class="modal fade" id="user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header ">
                    <h3 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h3>
                       <button type="button" class="btn " data-dismiss="modal">
					<i class="fa fa-times" aria-hidden="true"></i></button>

                </div>
                <div class="modal-body">

                        <form  action="../includes/functions.php" method="POST">
                            <div class="form-group">
                            <label for="nombre" class="form-label">Nombre *</label>
                            <input type="text"  id="nombre" name="nombre" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="username">Correo:</label><br>
                                <input type="email" name="correo" id="correo" class="form-control" placeholder="No se puede repetir con alguno de la lista...">
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña:</label><br>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                           
                            <div class="form-group">
                                  <label for="rol_id" class="form-label">Rol de usuario:</label>
                                  <select name="rol_id" id="rol_id" class="form-control" required>
                                  <option value="">--Selecciona una opcion--</option>
                                  <option value="1">Administrador</option>
                                  <option value="2">Alumno</option>
                                  <option value="3">Docente</option>
                               </select>
                            </div>
                            <br>
                            <input type="hidden" name="accion" value="insertar_user">
                                <div class="mb-3">
                                    
                               <input type="submit" value="Guardar" id="register" class="btn btn-success">
                               <a href="usuarios.php" class="btn btn-danger">Cancelar</a>
                               
                            </div>
                            </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    

</body>
</html>