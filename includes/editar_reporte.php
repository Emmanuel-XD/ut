<?php

session_start();
error_reporting(0);
$varsesion = $_SESSION['nombre'];

if ($varsesion == null || $varsesion = '') {

    header("Location:./sesion/login.php");
    die();
}
////////////////// CONEXION A LA BASE DE DATOS ////////////////////////////////////
$id = $_GET['id'];
include_once "header.php";
require_once("db.php");
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

    <form action="../includes/functions.php" method="POST">

        <h3>Editar Registro</h3>
        <br>
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Folio *</label>
                    <input type="text" id="folio" name="folio" class="form-control" value="<?php echo $usuario ['folio']; ?>">

                </div>
            </div>


            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Fecha Solicitud</label>
                    <input type="date" id="solicitud" name="solicitud" class="form-control" value="<?php echo $usuario ['solicitud']; ?>">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Fecha Uso</label>
                    <input type="date" id="uso" name="uso" class="form-control" value="<?php echo $usuario ['uso']; ?>">
                </div>
            </div>

            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Hora *</label>
                    <input type="time" id="hora" name="hora" class="form-control" value="<?php echo $usuario ['hora']; ?>">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Asignatura</label>
                    <input type="text" id="asignatura" name="asignatura" class="form-control" value="<?php echo $usuario ['asignatura']; ?>" >
                </div>
            </div>

            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Profesor</label>
                    <input type="text" id="profesor" name="profesor" class="form-control" value="<?php echo $usuario ['profesor']; ?>">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="rol_id" class="form-label">Grupo</label>
                    <input type="text" id="grupo" name="grupo" class="form-control" value="<?php echo $usuario ['grupo']; ?>">
                </div>
            </div>

            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Nombre Practica</label>
                    <input type="text" id="practica" name="practica" class="form-control" value="<?php echo $usuario ['practica']; ?>">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="rol_id" class="form-label">Cantidad</label>
                    <input type="text" id="cantidad" name="cantidad" class="form-control" value="<?php echo $usuario ['cantidad']; ?>">
                </div>
            </div>



            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Material</label>
                    <input type="text" id="material" name="material" class="form-control" value="<?php echo $usuario ['material']; ?>">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="rol_id" class="form-label">Entregado</label>
                    <input type="text" id="entregado" name="entregado" class="form-control" value="<?php echo $usuario ['entregado']; ?>">
                </div>
            </div>



            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Pendiente</label>
                    <input type="text" id="pendiente" name="pendiente" class="form-control" value="<?php echo $usuario ['pendiente']; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="rol_id" class="form-label">Observacion</label>
                    <input type="text" id="observacion" name="observacion" class="form-control" value="<?php echo $usuario ['observacion']; ?>">
                </div>
            </div>



            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="descripcion" class="form-label">N° Control</label>
                    <input type="text" id="control" name="control" class="form-control"value="<?php echo $usuario ['control']; ?>">
                </div>
            </div>
        </div>


        <div class="form-group">
            <label for="nombre" class="form-label">Alumnos</label>
            <input type="text" id="alumno" name="alumno" class="form-control" required value="<?php echo $usuario ['alumno']; ?>">
            <input type="hidden" name="accion" value="editar_reporte">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
        </div>

        <br>

        <div class="mb-3">

            <input type="submit" value="Guardar" id="register" class="btn btn-success">
            <a href="../views/reporte.php" class="btn btn-danger">Cancelar</a>

        </div>

    </form>


</html>