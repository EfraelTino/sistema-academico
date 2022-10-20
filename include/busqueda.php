<?php  

    //BUSQUEDA DE GENERO ->PARA PONER EN UN CHECKBOX
    //La conexion lo recibo como parametro
    function buscarGenero($conexion) {
        //HACEMOS UNA CONSULTA DE GENERO
        $sql = "SELECT * FROM genero";

        //RETORNAR Y EJECUTAR CONSULTA
        return mysqli_query($conexion, $sql);
    }

    function buscarCondicion ($conexion){
        $sql = "SELECT * FROM cargo";

        return  mysqli_query($conexion, $sql);
    }
    
    function buscarTurno ($conexion){
        $sql = "SELECT * FROM turno";
        return mysqli_query($conexion, $sql);
    }

?>