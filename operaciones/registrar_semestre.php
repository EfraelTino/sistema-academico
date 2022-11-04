<?php 
include "../include/conexion.php";

$semestre = $_POST['semestre'];

$sql = "INSERT INTO semestre(descripcion) VALUES ('$semestre')";

$ejec = mysqli_query($conexion, $sql);

if ($ejec) {
    echo "<script>
        alert('Registro Satisfactorio');
        window.location = '../semestre.php';
        </script>";
}else{
    echo "<script>
        alert('Error al registrar');
        window.history.back();
        </script>";
}
