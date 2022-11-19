<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema | SoftCodEPM</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/tabla.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>
    
<div class="container is-fluid">

<br>
<div class="col-xs-12">
    <h1>Lista </h1>
<br>
    <div>
      
    <label for="cat" class="form-label">Categorias</label>
    <select name="select" id="select" class="form-control" required>
    <option value="0" >--Selecciona una opcion--</option>
 
    <?php

include ("../includes/db.php");
//Codigo para mostrar categorias desde otra tabla
$sql="SELECT * FROM categorias ";
$resultado=mysqli_query($conexion, $sql);
while($consulta=mysqli_fetch_array($resultado)){
    echo '<option value="'.$consulta['categoria'].'">'.$consulta['categoria'].'</option>';
}

?>
    </select>
</div>
    <br>
<div class="container">
<table class="table table-striped"  id= "table_id">

                   
<thead>    
<tr > 
<th>Nombre</th>
                   <th>Elaboracion</th>
                   <th>Caducidad</th>
                   <th>Cantidad</th>
                   <th>Porcentaje</th>
                   <th>Ubicacion</th>
                   <th>Marca</th>


</tr>
</thead>
<tbody>

<?php

require_once ("../includes/db.php"); 
         
$result=mysqli_query($conexion,"SELECT * FROM reactivo  ");
while ($fila = mysqli_fetch_assoc($result)):
    
?>
<tr>
<td><?php echo $fila['nombre']; ?></td>
<td><?php echo $fila['elaboracion']; ?></td>
<td><?php echo $fila['caducidad']; ?></td>
<td><?php echo $fila['cantidad']; ?></td>
<td><?php echo $fila['porcentaje']; ?>%</td>
<td><?php echo $fila['ubicacion']; ?></td>
<td><?php echo $fila['marca']; ?></td>


</tr>


<?php endwhile;?>

</table>
</body>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $("#select").on('change', function(){
            var value = $(this).val();
            //alert(value);
            $.ajax({
                url:'../includes/fecth.php',
                type:'POST',
                data:'request=' + value,
                beforeSend:function(){
                    $(".container").html("<span>Working..</span>");

                },

                success:function(data){
                    $(".container").html(data);
                }
            }); 
        });
    });
</script>
</html>
