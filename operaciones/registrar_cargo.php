<?php 
    include "../include/conexion.php";

    $cargo = $_POST['cargo'];

    $sql = "INSERT INTO cargo (descripcion) VALUES ('$cargo')";

    $ejec = mysqli_query($conexion, $sql);

    if ($ejec) {
        echo "<script>
                alert('Registro Exitoso');
                window.location= '../cargo.php'
    			</script>";
	}else{
		echo "<script>
			alert('Error al registrar cargo');
			window.history.back();
			</script>
			";
	}
?>