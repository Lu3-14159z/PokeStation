<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&family=Sofia&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="build/css/estilos.css">
    <title>Lista reservas</title>
    <script type="text/javascript">
        function confirmar(){
            return confirm('¿Estás seguro?, se eliminarán los datos');
        }
    </script>
</head>
<body>
    <?php
        include("conexion.php");
        $sql="select * from Reserva";//definimos consulta de nuestras reservaciones
        $resultado=mysqli_query($conexion,$sql);//hacemos consulta
    ?>
    <h1>Lista de reservas</h1>
    <a href="reserva.php">Nueva reserva</a> <!--enlazado a agregar-->
    <table>
        <thead>
            <tr>
                <th>
                    Nombre
                </th>
                <th>
                    Email
                </th>
                <th>
                    Número de personas
                </th>
                <th>
                    Hora
                </th>
                <th>
                    Fecha
                </th>
                <th>
                    Acciones
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($filas=mysqli_fetch_assoc($resultado)){
            ?>
            <tr>
                <td><?php echo $filas['nombre'] ?></td><!--verificar nombre de campos en tabla-->
                <td><?php echo $filas['email'] ?></td>
                <td><?php echo $filas['cantidad'] ?></td>
                <td><?php echo $filas['hora'] ?></td>
                <td><?php echo $filas['fecha'] ?></td>
                <td>
                <?php echo "<a href='editar.php?id=".$filas['id']."'>Editar</a>"; ?>
                <?php echo "<a href='eliminar.php?id=".$filas['id']."' onclick='return confirmar()'>Eliminar</a>"; ?>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    <?php
        mysqli_close($conexion);
    ?>
</body>
</html>