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
$consulta = "SELECT * FROM equipos WHERE id = $id";
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

    
</head>

<form  action="functions.php" method="POST">

<div class="container">
    <div id="login-row" class="row justify-content-center align-items-center">
        <div id="login-column" class="col-md-6">
            <div id="login-box" class="col-md-12">
             
                    <h3 class="text-center">Editar el registro de <?php echo $usuario ['nombre']; ?></h3>
                    <br>
                            <div class="form-group">
                            <label for="nombre" class="form-label">Nombre *</label>
                            <input type="text"  id="nombre" name="nombre" class="form-control" value="<?php echo $usuario ['nombre']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="caducidad">Marca:</label><br>
                                <input type="text" name="marca" id="marca" class="form-control" value="<?php echo $usuario ['marca']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="username">ClavePAT:</label><br>
                                <input type="text" name="clave" id="clave" class="form-control" value="<?php echo $usuario ['clave']; ?>" >
                            </div>
                            <div class="form-group">
                                <label for="caducidad">Modelo:</label><br>
                                <input type="text" name="modelo" id="modelo" class="form-control" value="<?php echo $usuario ['modelo']; ?>" required>
                            </div>

                            <div class="form-group ">
								<label>Ubicacion:</label>
								<select class="form-control" id="ubicacion" name="ubicacion" required >
                                <option <?php echo $usuario ['ubicacion']==='ubicacion' ? "selected='selected' ": "" ?> 
                                value="<?php echo $usuario ['ubicacion']; ?>"><?php echo $usuario ['ubicacion']; ?> </option>
                                <?php

                                include ("db.php");
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
                                <label for="caducidad">No.Serie:</label><br>
                                <input type="text" name="serie" id="serie" class="form-control" value="<?php echo $usuario ['serie']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="caducidad">Fecha Inscripcion:</label><br>
                                <input type="date" name="fecha_ins" id="fecha_ins" class="form-control" value="<?php echo $usuario ['fecha_ins']; ?>" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="caducidad">Fecha Servicio:</label><br>
                                <input type="date" name="fecha_serv" id="fecha_serv" class="form-control" value="<?php echo $usuario ['fecha_serv']; ?>"required>
                           
                            </div>

                            <div class="form-group">
                                  <label for="condicion" class="form-label">Condicion:</label>
                                  <select name="condicion" id="condicion" class="form-control" required>
                                  <option <?php echo $usuario ['condicion']==='NUEVO' ? "selected='selected' ": "" ?> value="NUEVO">NUEVO</option>
                                  <option <?php echo $usuario ['condicion']==='USADO' ? "selected='selected' ": "" ?> value="USADO">USADO</option>
                                  <option <?php echo $usuario ['condicion']==='DAÑADO' ? "selected='selected' ": "" ?> value="DAÑADO">DAÑADO</option>
                                </select>
                            </div>
                           
                      <br>
                      <input type="hidden" name="accion" value="editar_equipo">
                      <input type="hidden" name="id" value="<?php echo $id;?>">
                                <div class="mb-3">
                                    
                                <button type="submit" class="btn btn-success" >Editar</button>
                               <a href="../views/equipos.php" class="btn btn-danger">Cancelar</a>
                               
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