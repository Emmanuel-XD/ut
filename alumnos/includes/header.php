<?php

error_reporting(0);
session_start();
$varsesion = $_SESSION['nombre'];

	if($varsesion== null || $varsesion= ''){
    header("Location: ./sesion/login.php");
	

}
	
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>UT | Sistema Web</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="../../DataTables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="../../css/estilo.css">
	<link rel="stylesheet" href="../../css/es.css">
    <link rel="stylesheet" href="../../css/prueba.css">
    <link rel="stylesheet" href="../../package/dist/sweetalert2.css">
    <link rel="shortcut icon" href="../../img/logo.png">
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
</head>

<body id="page-top">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">

                         
<div class="container px-4">
<a class="navbar-brand" href="#">UT | Sistema Web </a>

				 	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

				 <div class="collapse navbar-collapse" id="navbarResponsive">
				 <ul class="navbar-nav ms-auto">

		 <li class="nav-item"><a class="nav-link" href="../views/reactivo.php">Reactivo <i class="fa fa-list" aria-hidden="true"></i></a></li>
         <li class="nav-item"><a class="nav-link"href="../views/materiales.php">Materiales <i class="fa fa-history" aria-hidden="true"></i></a></li>
		 <li class="nav-item"><a class="nav-link" href="../views/equipos.php">Equipos <i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a></li>
         <li class="nav-item"><a class="nav-link"href="../views/reporte.php">Reporte <i class="fa fa-calendar" aria-hidden="true"></i></a></li>
         <li class="nav-item"><a class="nav-link"href="../views/categorias.php">Categorias <i class="fa fa-history" aria-hidden="true"></i></a></li>
		
		
		  <!-- Nav Item - User Information -->
		  <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                <?php echo $_SESSION['nombre']; ?></span>
								<i class="fa fa-user-circle" aria-hidden="true"></i>
                            </a>
                            <?php 
                                //Con esto editamos el perfil de usuario en sesion
                                //include "db.php";              
                                //$result=mysqli_query($conexion,"SELECT  user.id, user.nombre, user.correo, user.password, user.fecha,
                                //roles.rol FROM user 
                               // LEFT JOIN roles ON user.rol= roles.id ");
                                //while ($fila = mysqli_fetch_assoc($result)):
    
                                    ?>

                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
 

                        
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>		
		</ul>

	</nav>
	<?php include "salir.php";?>

	<div class="container">
		<div class="row">

