<?php 
    //aca se realizara toda la busqueda, esto se hace con funciones
    //parametros -> datos que necesita una funcion para ejecutarse
    function prueba ($nombre, $apellido, $edad){
        // lo que se ejecutar aca va a retornar nuestros parametros
        //echo 'hola '.$nombre.$apellido.$edad;

        //esto se mostrara al momento de llamar la funcionm y nos retorna un mensaje
        return 'hola '.$nombre.$apellido.$edad;
        
    }

    //nuestro return lo almacenamos en una variable ya que sin ello no podriamos acceder a este mensaje
$mensaje = prueba(22, 'villanueva ', 'efrael');
//imprimimos este mensaje   
echo $mensaje();
?>