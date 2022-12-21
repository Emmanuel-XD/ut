<?php





if (isset($_POST['accion'])) {
    switch ($_POST['accion']) {
            //casos de registros
        case 'acceso_user';
            acceso_user();
            break;

        case 'insertar_reactivos';
            insertar_reactivos();
            break;

        case 'insertar_material';
            insertar_material();
            break;

        case 'insertar_user';
            insertar_user();
            break;

        case 'insertar_categoria';
            insertar_categoria();
            break;

        case 'insertar_equipo';
            insertar_equipo();
            break;

        case 'insertar_reporte';
            insertar_reporte();
            break;

        case 'editar_registro':
            editar_registro();
            break;

        case 'editar_reactivo':
            editar_reactivo();
            break;

        case 'editar_categoria':
            editar_categoria();
            break;

        case 'editar_materiales':
            editar_materiales();
            break;

        case 'editar_equipo':
            editar_equipo();
            break;

        case 'editar_reporte':
            editar_reporte();
            break;
    }
}

function acceso_user()
{

    extract($_POST);
    require_once("db.php");
    $nombre = $conexion->real_escape_string($_POST['nombre']);
    $password = $conexion->real_escape_string($_POST['password']);
    session_start();
    $_SESSION['nombre'] = $nombre;
    //$_SESSION['rol_id']=$rol_id;


    $consulta = "SELECT*FROM user where nombre='$nombre' and password='$password'";
    $resultado = mysqli_query($conexion, $consulta);
    $filas = mysqli_fetch_array($resultado);


    if (isset($filas['rol_id']) == 1) {

        header('Location: ../views/usuarios.php');


        if ($filas['rol_id'] == 2) { //empleado


            header('Location: ../alumnos/views/reporte.php');
        }
    } else {


        echo "<script language='JavaScript'>
    alert('Usuario o Contraseña Incorrecta');
    location.assign('./sesion/login.php');
    </script>";
        session_destroy();
    }
}


function insertar_reactivos()
{

    global $conexion;
    extract($_POST);
    include "db.php";

    $consulta = "INSERT INTO reactivo (nombre, elaboracion, caducidad, cantidad, porcentaje, ubicacion, marca)
    VALUES ('$nombre', '$elaboracion', '$caducidad', '$cantidad', '$porcentaje' ,'$ubicacion', '$marca');";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo "
        <script language='JavaScript'>
        alert('El registro fue realizado correctamente');
        location.assign('../views/reactivo.php');
        </script>";
    } else {
        echo "<script language='JavaScript'>
         alert('Algo salio mal en el proceso');
         location.assign('../views/reactivo.php');
         </script>";
    }
}

function insertar_material()
{

    global $conexion;
    extract($_POST);
    include "db.php";

    $consulta = "INSERT INTO materiales (nombre, tamaño, cantidad, marca, ubicacion)
    VALUES ('$nombre', '$tamaño', '$cantidad', '$marca', '$ubicacion' );";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo "
        <script language='JavaScript'>
        alert('El registro fue realizado correctamente');
        location.assign('../views/materiales.php');
        </script>";
    } else {
        echo "<script language='JavaScript'>
         alert('Algo salio mal en el proceso');
         location.assign('../views/materiales.php');
         </script>";
    }
}

function insertar_reporte()
{

    global $conexion;
    extract($_POST);
    include "db.php";

    $consulta = "INSERT INTO reporte (folio,solicitud,uso,hora,asignatura,profesor,grupo,practica,
    cantidad,material,entregado,pendiente,observacion,control,alumno)
    VALUES ('$folio', '$solicitud', '$uso', '$hora', '$asignatura', '$profesor', '$grupo', '$practica'
    , '$cantidad', '$material', '$entregado', '$pendiente', '$observacion', '$control', '$alumno');";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo "
        <script language='JavaScript'>
        alert('El registro fue realizado correctamente');
        location.assign('../views/reporte.php');
        </script>";
    } else {
        echo "<script language='JavaScript'>
         alert('Algo salio mal en el proceso');
         location.assign('../views/reporte.php');
         </script>";
    }
}


function insertar_user()
{

    global $conexion;
    extract($_POST);
    include "db.php";

    $consulta = "INSERT INTO user (nombre, correo, password,  rol_id)
    VALUES ('$nombre', '$correo', '$password',  '$rol_id' );";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo "
        <script language='JavaScript'>
        alert('El registro fue realizado correctamente');
        location.assign('../views/usuarios.php');
        </script>";
    } else {
        echo "<script language='JavaScript'>
         alert('Algo salio mal en el proceso');
         location.assign('../views/usuarios.php');
         </script>";
    }
}

function insertar_categoria()
{

    global $conexion;
    extract($_POST);
    include "db.php";

    $consulta = "INSERT INTO categorias (categoria)
    VALUES ('$categoria' );";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo "
        <script language='JavaScript'>
        alert('El registro fue realizado correctamente');
        location.assign('../views/categorias.php');
        </script>";
    } else {
        echo "<script language='JavaScript'>
         alert('Algo salio mal en el proceso');
         location.assign('../views/categorias.php');
         </script>";
    }
}


function insertar_equipo()
{

    global $conexion;
    extract($_POST);
    include "db.php";

    $consulta = "INSERT INTO equipos (nombre, clave, modelo, marca, ubicacion, serie, fecha_ins,
    fecha_serv, condicion) VALUES ('$nombre', '$clave', '$modelo', '$marca', '$ubicacion', '$serie', 
    '$fecha_ins' ,'$fecha_serv', '$condicion');";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo "
        <script language='JavaScript'>
        alert('El registro fue realizado correctamente');
        location.assign('../views/equipos.php');
        </script>";
    } else {
        echo "<script language='JavaScript'>
         alert('Algo salio mal en el proceso');
         location.assign('../views/equipo.php');
         </script>";
    }
}

function editar_registro()
{
    require_once("db.php");
    extract($_POST);
    $consulta = "UPDATE user SET nombre = '$nombre', correo = '$correo', password = '$password',
    rol_id='$rol_id' WHERE id = '$id' ";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo "
        <script language='JavaScript'>
        alert('El registro fue actualizado correctamente');
        location.assign('../views/usuarios.php');
        </script>";
    } else {
        echo "<script language='JavaScript'>
         alert('Algo salio mal en el proceso');
         location.assign('../views/usuarios.php');
         </script>";
    }
}


function editar_reactivo()
{
    require_once("db.php");
    extract($_POST);
    $consulta = "UPDATE reactivo SET nombre = '$nombre', elaboracion = '$elaboracion', caducidad = '$caducidad',
    cantidad ='$cantidad', porcentaje = '$porcentaje', ubicacion = '$ubicacion', marca = '$marca' WHERE id = '$id' ";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo "
        <script language='JavaScript'>
        alert('El registro fue actualizado correctamente');
        location.assign('../views/reactivo.php');
        </script>";
    } else {
        echo "<script language='JavaScript'>
         alert('Algo salio mal en el proceso');
         location.assign('../views/reactivo.php');
         </script>";
    }
}

function editar_categoria()
{
    require_once("db.php");
    extract($_POST);
    $consulta = "UPDATE categorias SET categoria = '$categoria' WHERE id = '$id' ";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo "
        <script language='JavaScript'>
        alert('El registro fue actualizado correctamente');
        location.assign('../views/categorias.php');
        </script>";
    } else {
        echo "<script language='JavaScript'>
         alert('Algo salio mal en el proceso');
         location.assign('../views/categorias.php');
         </script>";
    }
}

function editar_materiales()
{
    require_once("db.php");
    extract($_POST);
    $consulta = "UPDATE materiales SET nombre = '$nombre', tamaño = '$tamaño', cantidad = '$cantidad',
    marca ='$marca', ubicacion = '$ubicacion' WHERE id = '$id' ";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo "
        <script language='JavaScript'>
        alert('El registro fue actualizado correctamente');
        location.assign('../views/materiales.php');
        </script>";
    } else {
        echo "<script language='JavaScript'>
         alert('Algo salio mal en el proceso');
         location.assign('../views/materiales.php');
         </script>";
    }
}


function editar_equipo()
{
    require_once("db.php");
    extract($_POST);
    $consulta = "UPDATE equipos SET nombre = '$nombre', marca ='$marca', 
    clave = '$clave', modelo = '$modelo', ubicacion = '$ubicacion', serie = '$serie', fecha_ins = '$fecha_ins',
    fecha_serv = '$fecha_serv', condicion = '$condicion' WHERE id = '$id' ";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo "
        <script language='JavaScript'>
        alert('El registro fue actualizado correctamente');
        location.assign('../views/equipos.php');
        </script>";
    } else {
        echo "<script language='JavaScript'>
         alert('Algo salio mal en el proceso');
         location.assign('../views/equipos.php');
         </script>";
    }
}


function editar_reporte()
{
    require_once("db.php");
    extract($_POST);
    $consulta = "UPDATE reporte SET folio = '$folio', solicitud = '$solicitud', uso ='$uso', 
    hora = '$hora', asignatura = '$asignatura', profesor = '$profesor',grupo = '$grupo',practica = '$practica',
    cantidad = '$cantidad',material = '$material',entregado = '$entregado', pendiente = '$pendiente',
    observacion = '$observacion',control = '$control',alumno = '$alumno'  WHERE id = '$id' ";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo "
        <script language='JavaScript'>
        alert('El registro fue actualizado correctamente');
        location.assign('../views/reporte.php');
        </script>";
    } else {
        echo "<script language='JavaScript'>
         alert('Algo salio mal en el proceso');
         location.assign('../views/reporte.php');
         </script>";
    }
}
