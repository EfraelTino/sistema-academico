<?php 

    include "../include/conexion.php";

    $genero = $_POST ['genero'];

    $sql = "INSERT INTO genero (genero) VALUES ('$genero')";

    $ejec = mysqli_query($conexion, $sql);

    if ($ejec) {
        echo "<script>
                alert('Registro Exitoso');
                window.location= '../genero.php'
    			</script>";
	}else{
		echo "<script>
			alert('Error al registrar usuario');
			window.history.back();
			</script>
			";
	}
?>