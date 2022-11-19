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
$consulta = "SELECT * FROM reactivo WHERE id = $id";
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
                            <label for="nombre" class="form-label">Nombre *</label>
                            <input type="text"  id="nombre" name="nombre" class="form-control" value="<?php echo $usuario ['nombre']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="username">Elaboracion:</label><br>
                                <input type="date" name="elaboracion" id="elaboracion" class="form-control" value="<?php echo $usuario ['elaboracion']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="password">Caducidad:</label><br>
                                <input type="date" name="caducidad" id="caducidad" class="form-control" value="<?php echo $usuario ['caducidad']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="password">Cantidad:</label><br>
                                <input type="text" name="cantidad" id="cantidad" class="form-control" value="<?php echo $usuario ['cantidad']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="password">Porcentaje:</label><br>
                                <input type="number" name="porcentaje" id="porcentaje" class="form-control" value="<?php echo $usuario ['porcentaje']; ?>">
                            </div>
                            <div class="form-group ">
								<label>Ubicacion:</label>
								<select class="form-control" id="ubicacion" name="ubicacion" required >
                                <option <?php echo $usuario ['ubicacion']==='ubicacion' ? "selected='selected' ": "" ?> 
                                value="<?php echo $usuario ['ubicacion']; ?>"><?php echo $usuario ['ubicacion']; ?> </option>
                                <?php

                              
                                //Codigo para mostrar categorias desde otra tabla
                                $sql="SELECT * FROM categorias ";
                                $resultado=mysqli_query($conexion, $sql);
                                while($consulta=mysqli_fetch_array($resultado)){
                                    echo '<option value="'.$consulta['categoria'].'">'.$consulta['categoria'].'</option>';
                                }

                                ?>
								</select>
							</div>
                            <div class="form-group">
                                <label for="password">Marca:</label><br>
                                <input type="text" name="marca" id="marca" class="form-control" value="<?php echo $usuario ['marca']; ?>">
                            </div>
                         
                          <input type="hidden" name="accion" value="editar_reactivo">
                                <input type="hidden" name="id" value="<?php echo $id;?>">
                           
                               <br>
                                <div class="mb-3">
                                    
                                <button type="submit" class="btn btn-success" >Editar</button>
                               <a href="../views/reactivo.php" class="btn btn-danger">Cancelar</a>
                               
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