<?php
include ('../conexion.php');

    $dni =$_POST['dni'];
    $nombre = $_POST['nombre'];
    $genero = $_POST['genero'];
    $fecha= $_POST['fecha'];
    $direccion= $_POST['direccion'];
    $correo= $_POST['correo'];
    $telefono= $_POST['telefono'];
    $anio_ingreso= $_POST['anio_ingreso'];
    $seccion= $_POST['seccion'];
    $turno= $_POST['turno'];
    $discapacidad= $_POST['discapacidad'];
    $programa= $_POST['programa'];
    $semestre= $_POST['semestre'];
    $condicion= $_POST['condicion'];

    print $dni.$nombre.$genero.$fecha.$direccion.$correo.$telefono.$anio_ingreso.$seccion.$turno.$discapacidad.$programa.$semestre.$condicion;
    
    // insercion de datos
    $sql = "INSERT INTO estudiante (dni, apellidos_nombre, id_genero, fecha_nac, direccion, correo, telefono, anio_ingreso, seccion, turno, discapacidad, id_prog_estudios, id_semestre,id_condicion) VALUES ('$dni', '$nombre','$genero','$fecha','$direccion','$correo','$telefono','$anio_ingreso','$seccion','$turno','$discapacidad','$programa','$semestre','$condicion' )";

    $ejecutar_consulta= mysqli_query($conexion, $sql);
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