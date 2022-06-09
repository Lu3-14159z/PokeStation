<?php
    include("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="build/css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&family=Sofia&display=swap" rel="stylesheet">
    <title>Editar</title>
</head>
<body>
    <?php
        if(isset($_POST['enviar'])){
            $id=$_POST['id'];
            $nombre=$_POST['nombre'];
            $sql="update reserva set nombre='".$nombre."'";
            $resultado=mysqli_query($conexion,$sql);
            if($resultado){
                echo"<script language='JavaScript'>
                alert('Los datos se actualizaron correctamente');
                location.assign(lista.php)";
            }else{
                echo"<script language='JavaScript'>
                alert('Los datos NO se actualizaron correctamente');
                location.assign(lista.php)";
            }
            mysqli_close($conexion);
        }else{
            $id=$_GET['id'];
            $sql="select * from reserva where id='".$id."'";
            $resultado=mysqli_query($conexion,$sql);
            $fila=mysqli_fetch_assoc($resultado);
            $nombre=$fila["nombre"];
            mysqli_close($conexion);
    ?>
    <h1>Editar reservación</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" placeholder="Tu Nombre" 
    autocomplete="name" required name="nombre" value="<?php echo $nombre; ?>">
    <br>
    <!--<input type="hidden" name="id" value="<?php# echo $id; ?>">-->
    <input type="submit" name="enviar" value="ACTUALIZAR">
    <a href="lista.php">Lista de reservaciones</a>
    </form>
    <?php
        }
    ?>
</body>
</html>