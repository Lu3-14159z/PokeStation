<?php
    $id=$_GET['id'];
    include("conexion.php");
    $sql="delete from reserva where id='".$id."'";
    $resultado=mysqli_query($conexion,$sql);
    if($resultado){
        echo"<script language='JavaScript'>
        alert('Los datos se eliminaron correctamente');
        location.assign(lista.php)";
    }else{
        echo"<script language='JavaScript'>
        alert('Los datos NO se eliminaron correctamente');
        location.assign(lista.php)";
    }
?>