
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | UT</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/estilo.css">
	<link rel="stylesheet" href="../../css/es.css">
    <link rel="stylesheet" href="../../css/login.css">
    <link rel="stylesheet" href="../../css/all.css">
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>

</head>
<body>

<form  action="../functions.php" method="POST">
<div id="login" >
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <br>
                   <center> <img class="img-thumbnail" src="../../img/logo.png" width="100"></center>
                   <br>
                   <h2 class="text-center">¡BIENVENIDO!</h2>
                                    <h3 class="text-center">Iniciar Sesión</h3>
                       <br>
                            <div class="form-group">
                                <label for="correo"><i class="fa fa-user" aria-hidden="true"></i> Usuario: </label><br>
                                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese su usuario"
                                 required>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="fa fa-key" aria-hidden="true"></i> Contraseña: </label><br>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Ingrese su contraseña" required>
                                <input type="hidden" name="accion" value="acceso_user">
                            </div>
                            <div class="form-group">
                             <br>
                    <center>
                                <button type="submit"class="btn btn-primary btn-block"> Ingresar <i class="fa fa-check-circle" aria-hidden="true"></i></button> 
                                </center>
                                <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</body>
</html>