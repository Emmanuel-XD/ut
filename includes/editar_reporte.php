<?php 

session_start();
error_reporting(0);
$varsesion = $_SESSION['nombre'];

	if($varsesion== null || $varsesion= ''){

	header("Location:./sesion/login.php");
		die();
	}
////////////////// CONEXION A LA BASE DE DATOS ////////////////////////////////////
$id = $_GET['id'];
include_once "header.php";
require_once ("db.php");
$consulta = "SELECT * FROM reporte WHERE id = $id";
$resultado = mysqli_query($conexion, $consulta);
$usuario = mysqli_fetch_assoc($resultado);

////////////////// VARIABLES DE CONSULTA////////////////////////////////////
?>


<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>

    <link rel="stylesheet" href="../../css/fontawesome-all.min.css">

	<link rel="stylesheet" href="../../css/estilo.css">
</head>

<body>



    <form  action="functions.php" method="POST">

        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                     
                            <h3 class="text-center">Editar el registro de <?php echo $usuario ['nombre']; ?></h3>
                           
                            <div class="form-group">
                            <label for="nombre" class="form-label">N.Control *</label>
                            <input type="text"  id="control" name="control" class="form-control" value="<?php echo $usuario ['control']; ?>">
                            </div>

                            <div class="form-group">
                            <label for="nombre" class="form-label">Nombre *</label>
                            <input type="text"  id="nombre" name="nombre" class="form-control" value="<?php echo $usuario ['nombre']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="username">Fecha:</label><br>
                                <input type="date" name="fecha" id="fecha" class="form-control" value="<?php echo $usuario ['fecha']; ?>">
                            </div>
   
                            <div class="form-group">
                                <label for="password">Cantidad:</label><br>
                                <input type="number" name="cantidad" id="cantidad" class="form-control" value="<?php echo $usuario ['cantidad']; ?>">
                            </div>
                            <div class="form-group">
                                  <label for="rol_id" class="form-label">Solicitud:</label>
                                  <select name="equipos" id="equipos" class="form-control" required >
                                  <option <?php echo $usuario ['equipos']==='Equipo' ? "selected='selected' ": "" ?> value="Equipo">Equipo</option>
                                  <option <?php echo $usuario ['equipos']==='Reactivo' ? "selected='selected' ": "" ?> value="Reactivo">Reactivo</option>
                                  <option <?php echo $usuario ['equipos']==='Material' ? "selected='selected' ": "" ?> value="Material">Material</option>
                                 <input type="hidden" name="accion" value="editar_reporte">
                                <input type="hidden" name="id" value="<?php echo $id;?>">
                               </select>
                            </div>
                           
                               <br>
                                <div class="mb-3">
                                    
                                <button type="submit" class="btn btn-success" >Editar</button>
                               <a href="../views/reporte.php" class="btn btn-danger">Cancelar</a>
                               
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