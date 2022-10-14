<?php 
//conexion
 include('../include/conexion.php');

  //recibir los valores o datos de mi formulario
      $usuario = $_POST['usuario'];
      $contrasena=$_POST['contrasena'];

      //pruebita
      //echo $usuario.$contrasena;

      //en login se desencripta la contraseña
      //$password_fuerte= password_hash($contrasena, PASSWORD_DEFAULT);

      //CONSULTAMOS: primero bsucamos el usuario y comparamos si esta como en nuestra DB ya que la contraseña esta encriptado con WHERE comparamos *el usuario debe ser unico y los ordenamos en orden ascendente(ORDER BY) y solo me devuelva un registro (LIMIT 1) *
      $sql = "SELECT * FROM usuario_docentes WHERE usuario = '$usuario' ORDER BY id LIMIT 1";

      //EJECUTAMOS LA CONSULTA
      $ejecutar_consulta= mysqli_query($conexion, $sql);

      //ENLISTAMOS O CONTAMOS LAS FILAS  y almacena la cantidad de consultas que nos devuelve la BD y lo hacemos con una funcion  y tienes los valores 1-0 
      $contar_filas = mysqli_num_rows($ejecutar_consulta);

     //desestructuramos la contraseña ya que arriba estamos recbiendo una lista y capturamosn en na variable
      $contra_usuario= mysqli_fetch_array($ejecutar_consulta);

      //almacenamos el valor con nueva variable
      $password=$contra_usuario['password'];
      //validamos: si contar filas es mayor a 1 pero menor 2
      //con password_verify 'desncripto la contraseña' como (nuestra contrsaña, y la contraseña en la DB)
      if($contar_filas > 0 && password_verify($contrasena,$password)){
        echo"
        <script>
        alert ('Se inició sesión');
        window.location = '../index2.php';
        </script>
        ";

      }else{
        echo"
        <script>
        alert ('Error al iniciar sesión');
        window.history.back();
        </script>
        ";
      };

      //if($ejecutar_consulta){
        //echo"
        //<script>
        //alert ('Se inicio sesionm');
        //window.location = './include/menu.php';
        //</sctipr>
        //";
      //}else{
        //echo"
       // <script>
       // alert ('Error al iniciar sesion');
       // window.history.back();
       // </script>
        //";
      //}


?>