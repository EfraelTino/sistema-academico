<?php 
    include('../conexion.php');
    $dni =$_POST['dni'];
    $nombre =$_POST['nombre'];
    $fecha=$_POST['fecha'];
    $direccion=$_POST['direccion'];
    $correo=$_POST['correo'];
    $telefono=$_POST['telefono'];
    $genero=$_POST['genero'];
    $condicion=$_POST['condicion'];
    $nivel=$_POST['nivel'];
    $cargo=$_POST['cargo'];

    $sql= "INSERT INTO docente (dni, apellidos_nombres, fecha_nac, direccion, correo, telefono,id_genero , nivel_educacion, cond_laboral, id_cargo ) VALUES ('$dni', '$nombre', '$fecha', '$direccion', '$correo', '$telefono', '$genero', '$condicion', '$nivel', '$cargo')";

    $ejecutar_consulta = mysqli_query($conexion, $sql);
    if($ejecutar_consulta){
        echo "<script>
            alert('Registro Satisfactorio');
            window.history.back();
            </script>";
    }else{
        echo "<script>
            alert('Error al registrar usuario');
        </script>";
    }

?>