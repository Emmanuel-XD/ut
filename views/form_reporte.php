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
    <div class="modal fade" id="reporte" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header ">
                    <h3 class="modal-title" id="exampleModalLabel">Nuevo Reporte</h3>
                       <button type="button" class="btn " data-dismiss="modal">
					<i class="fa fa-times" aria-hidden="true"></i></button>

                </div>
                <div class="modal-body">

                            <form  action="../includes/functions.php" method="POST">
                            <div class="form-group">
                            <label for="nombre" class="form-label">N.Control *</label>
                            <input type="text"  id="control" name="control" class="form-control" required>
                            </div>

                            <div class="form-group">
                            <label for="nombre" class="form-label">Nombre *</label>
                            <input type="text"  id="nombre" name="nombre" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="tamaño">Fecha:</label><br>
                                <input type="date" name="fecha" id="fecha" class="form-control" required>
                            </div>
                           
                            <div class="form-group">
                                <label for="caducidad">Cantidad:</label><br>
                                <input type="number" name="cantidad" id="cantidad" class="form-control" required>
                                <input type="hidden" name="accion" value="insertar_reporte">
                            </div>


                            <div class="form-group">
                                  <label for="rol_id" class="form-label">Equipo/Reactivo/Material</label>
                                  <select name="equipos" id="equipos" class="form-control" required>
                                  <option value="">--Selecciona una opcion--</option>
                                  <option value="Equipo">Equipo</option>
                                  <option value="Reactivo">Reactivo</option>
                                  <option value="Material">Material</option>
                               </select>
                            </div>
						
                      <br>

                                <div class="mb-3">
                                    
                               <input type="submit" value="Guardar" id="register" class="btn btn-success">
                               
                               <a href="reporte.php" class="btn btn-danger">Cancelar</a>
                               
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