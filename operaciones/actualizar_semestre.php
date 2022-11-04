<?php 

include "../include/conexion.php";
include "../include/busquedas.php";

$id = $_POST['id'];
$descripcion = $_POST['descripcion'];

$sql = "UPDATE semestre SET descripcion= '$descripcion' WHERE id='$id'";

$eje = mysqli_query($conexion, $sql);

if ($eje) {
    echo "<script>
    alert('Datos actualizados de manera Correcta');
    window.location= '../semestre.php';
</script>
";
} else {
echo "<script>
    alert('Error al Actualizar Registro');
    window.history.back();
</script>
";
}

?>