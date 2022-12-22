<?php 

session_start();
error_reporting(0);
$varsesion = $_SESSION['nombre'];

	if($varsesion== null || $varsesion= ''){

	header("Location:../includes/sesion/login.php");
		die();
	}
include_once "../includes/header.php"
?>
<div id="first" class="container tittle-area">
<h1 class="tittle">Bienvenido al inventario automatizado de Laboratorios de Química de la U.T.</h1>
<h3 class="user">¡Bienvenido <?php echo $_SESSION['nombre']; ?>!</h3>
<p class="permission">"<?php echo $_SESSION['rol']?> de Química Área Industrial"</p>
<div class="d-flex justify-content-center">
<a href="#seccond"><i class="button go fa fa-chevron-down"></i></a>
</div>
</div>
<div id="seccond" class="container content-main">
<h3 class="disclaimer">Este proyecto es desarrollado por el alumno <strong>Juan Alfonso Rosas Pérez</strong> y la <strong>Dra. Celia Calderón Salas.</strong></h3>
<img class="rounded mx-auto d-block logo" src="../img/main_logo.png" alt="logo UT">
<p class="objetivo"><strong> Objetivo:</strong> Este prototipo buscar ofrecer un mejor control del inventario de los laboratorios asi como poder generar reportes a partir de los vales de laboratorio, y por último poder indicar si un alumno tiene algún adeudo de material, equipo o reactivos. </p>
<p class="period">SEPTIEMBRE-DICIEMBRE 2022 Y ENERO-ABRIL 2023</p>
<div class="d-flex justify-content-center">
<a href="#first"><i class="button go fa fa-chevron-up"></i></a>
</div>
</div>
</body>
<script src="../js/welcome.js"></script>
</html>