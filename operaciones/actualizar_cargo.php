<?php 

    include "../include/conexion.php";

    $id = $_POST['id'];
    $cargo = $_POST['cargo'];

    $sql = "UPDATE cargo SET descripcion= '$cargo' where id='$id'";

    $ejec = mysqli_query($conexion, $sql);

    if ($ejec) {
        echo "<script>
        alert('Datos actualizados de manera Correcta');
        window.location= '../cargo.php';
    </script>
";
}else{
echo "<script>
        alert('Error al Actualizar Cargo');
        window.history.back();
    </script>
";
}
mysqli_close($conexion);
?>