<?php
//conexion a la db: server-user-password-db
    $conexion =mysqli_connect("localhost","root","root","sis_aca");


    //if($conexion){
      //  echo "conexion exitosa ";
    //}else{
      //  echo "conexion fallida ";
    //}

    //CONSULTA DE TIPO SELECT A LA BASE DE DATOS -guardamos nuestra consulta en una variable
    //$consulta = "SELECT * FROM estudiante";  
    //creamos una variable para el resultaod de esta consulta para que nos devuelva el resultado 
    //$resultado = mysqli_query($conexion, $consulta);
    //$cantidad_registros = mysqli_num_rows($resultado);
    //echo $cantidad_registros;

    //if (mysqli_num_rows($resultado) ===0) {
        //echo ' <br> no hay datos';
   // } else {
     //   echo 'no encontrado';
   // }
    







    //$host = 'localhost';
    //$user = 'root';
    //$password = 'root';//en xamp lo dejamos en vacio
    //$db = 'sis_aca';//aà poner el nombre de la base da datos


    //consulta para conectarnos a la db
    
    //if (mysqli_connect($host, $user, $password, $db)) {
      //  echo "Conexion exitosa";
    //} else {
      // echo 'Conexion fallida';
    //}
    
?>