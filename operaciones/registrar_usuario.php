<?php
include ('../include/conexion.php');

//recibo el valor-dato de mi form del archivo de "crear_usuario" y lon guardo en una variable de acuerdo a los campos
$docente = $_POST['docente'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];
//HACEMOS UNA PRUEVA:
//echo $docente.$usuario.$password;

//encripamos nuestra contraseña: password_hash es predefinido, (nombreVariable,el tipo)
$password_fuerte = password_hash($password, PASSWORD_DEFAULT);

//HACEMOS UNA CONSULTA A LA DB
$sql = "INSERT INTO usuario_docentes (id_docente, usuario, password) VALUES ('$docente', '$usuario', '$password_fuerte')";

    //Ejecutamos nuestra consulta  2 parametros (la conexion, nuestra consulta)
    $excute_consulta = mysqli_query($conexion, $sql);

    //Hacemos una  validadición con una condicional para ver si hay errores o no
    if($excute_consulta){
        echo "
        <script>
        alert ('Se registro al usuario');
        window.location = '../login.php';
        </script>
        ";
    }else{
        echo"
        <script>
        alert ('Error al registrar usuario');
        window.history.back();
        </script>
        ";
    }
?>