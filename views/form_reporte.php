<?php



?>


<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>
    <link rel="stylesheet" href="../package/dist/sweetalert2.css">

</head>

<body id="page-top">
    <div class="modal fade" id="reporte" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header ">
                    <h3 class="modal-title" id="exampleModalLabel">Agregar un reporte</h3>
                    <button type="button" class="btn btn-black" data-dismiss="modal">
                        <i class="fa fa-times" aria-hidden="true"></i></button>
                </div>
                <div class="modal-body">

                    <form action="../includes/functions.php" method="POST">

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="descripcion" class="form-label">Folio *</label>
                                    <input type="text" id="folio" name="folio" class="form-control">

                                </div>
                            </div>


                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="descripcion" class="form-label">Fecha Solicitud</label>
                                    <input type="date" id="solicitud" name="solicitud" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="descripcion" class="form-label">Fecha Uso</label>
                                    <input type="date" id="uso" name="uso" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="descripcion" class="form-label">Hora *</label>
                                    <input type="time" id="hora" name="hora" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="descripcion" class="form-label">Asignatura</label>
                                    <input type="text" id="asignatura" name="asignatura" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="descripcion" class="form-label">Profesor</label>
                                    <input type="text" id="profesor" name="profesor" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="rol_id" class="form-label">Grupo</label>
                                    <input type="text" id="grupo" name="grupo" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="descripcion" class="form-label">Nombre Practica</label>
                                    <input type="text" id="practica" name="practica" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="rol_id" class="form-label">Cantidad</label>
                                    <input type="text" id="cantidad" name="cantidad" class="form-control">
                                </div>
                            </div>



                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="descripcion" class="form-label">Material</label>
                                    <input type="text" id="material" name="material" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="rol_id" class="form-label">Entregado</label>
                                    <input type="text" id="entregado" name="entregado" class="form-control">
                                </div>
                            </div>



                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="descripcion" class="form-label">Pendiente</label>
                                    <input type="text" id="pendiente" name="pendiente" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="rol_id" class="form-label">Observacion</label>
                                    <input type="text" id="observacion" name="observacion" class="form-control">
                                </div>
                            </div>



                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="descripcion" class="form-label">N° Control</label>
                                    <input type="text" id="control" name="control" class="form-control">
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="nombre" class="form-label">Alumnos</label>
                            <input type="text" id="alumno" name="alumno" class="form-control" required>
                            <input type="hidden" name="accion" value="insertar_reporte">
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