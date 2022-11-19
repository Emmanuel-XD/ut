
<?php
include "db.php";

if(isset($_POST['request'])){
    $request = $_POST['request'];

    $sql="SELECT * FROM reactivo WHERE ubicacion= '$request'";
    $resultado=mysqli_query($conexion, $sql);
    $count = mysqli_num_rows($resultado);
}
?>

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


//Codigo para mostrar categorias desde otra tabla
$sql="SELECT * FROM categorias";
$res=mysqli_query($conexion, $sql);
while($consulta=mysqli_fetch_array($res)){
    echo '<option value="'.$consulta['categoria'].'">'.$consulta['categoria'].'</option>';
}

?>
    </select>
</div>
    <br>
<div class="container">
<table class="table table-striped"  id= "table_id">
    <?php
    if($count){
        ?>
                         
<thead>    
<tr >
<th>Nombre</th>
                   <th>Elaboracion</th>
                   <th>Caducidad</th>
                   <th>Cantidad</th>
                   <th>Porcentaje</th>
                   <th>Ubicacion</th>
                   <th>Marca</th>
<?php
} else{
    echo"No hay concidencias";
}
?>
</thead>
<tbody>
    <?php
    while($fila = mysqli_fetch_assoc($resultado)){
        ?>
        <tr>
        <td><?php echo $fila['nombre']; ?></td>
<td><?php echo $fila['elaboracion']; ?></td>
<td><?php echo $fila['caducidad']; ?></td>
<td><?php echo $fila['cantidad']; ?></td>
<td><?php echo $fila['porcentaje']; ?>%</td>
<td><?php echo $fila['ubicacion']; ?></td>
<td><?php echo $fila['marca']; ?></td>


<td>
<a class="btn btn-warning" href="../includes/editar_react.php?id=<?php echo $fila['id']?> ">
<i  class="fa fa-edit "></i> </a>
<a href="../includes/eliminar_react.php?id=<?php echo $fila['id']?> " class="btn btn-danger btn-del" >
<i  class="fa fa-trash "></i></a></button>
</td>

</tr>
<?php

    }
    ?>
</table>

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