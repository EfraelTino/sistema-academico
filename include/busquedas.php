<?php
    //BUSQUEDA DE GENERO ->PARA PONER EN UN CHECKBOX
    //La conexion lo recibo como parametro
    function buscarGenero($conexion) {
        //HACEMOS UNA CONSULTA DE GENERO
        $sql = "SELECT * FROM genero";

        //RETORNAR Y EJECUTAR CONSULTA
        return mysqli_query($conexion, $sql);
    }
    function buscarGeneroById($conexion, $id){
        $sql = "SELECT *FROM genero WHERE id='$id'";
        return mysqli_query($conexion, $sql);
    }
function buscarCargo($conexion){
    $sql = "SELECT * FROM cargo";
    return mysqli_query($conexion, $sql);
}
function buscarCargoById($conexion, $id){
    $sql ="SELECT * FROM cargo WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}

function buscarProgramaEstudio($conexion){
    $sql = "SELECT * FROM programa_estudios";
    return mysqli_query($conexion, $sql);
}

//para hacer el registro buscamos el programa por codigo
function buscarProgramaByCodigo($conexion, $codigo){
    $sql = "SELECT * FROM programa_estudios WHERE codigo='$codigo'";
    return mysqli_query($conexion, $sql);
}

//buscamos programa por id
function buscarProgramaById($conexion, $id){
    $sql = "SELECT * FROM programa_estudios WHERE id='$id'";
    return mysqli_query($conexion, $sql);

}
function buscarSemestre($conexion){
    $sql = "SELECT * FROM semestre";
    return mysqli_query($conexion, $sql);
}
function buscarCondicion($conexion){
    $sql = "SELECT * FROM condicion";
    return mysqli_query($conexion, $sql);
}
function buscarEstudianteByDni($conexion, $dni){
    $sql = "SELECT * FROM estudiante WHERE dni='$dni'";
    return mysqli_query($conexion, $sql);
}
function buscarEstudianteById($conexion, $id){
    $sql = "SELECT * FROM estudiante WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}
function buscarEstudianteByNombre($conexion, $nombre){
    $sql = "SELECT * FROM estudiante WHERE apellidos_nombres='$nombre'";
    return mysqli_query($conexion, $sql);
}
function buscarEstudiantes($conexion){
    $sql = "SELECT * FROM estudiante";
    return mysqli_query($conexion, $sql);
}
function buscarUserEstudiante($conexion){
    $sql = "SELECT * FROM usuarios_estudiante";
    return mysqli_query($conexion, $sql);
}
//BUSCAR DOCENTE
function buscarDocente($conexion){
    $sql = "SELECT * FROM docente";
    return mysqli_query($conexion, $sql);
}
function buscarDocenteById($conexion, $id){
    $sql = "SELECT * FROM docente WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}
function buscarDocenteByDni($conexion, $dni){
    $sql = "SELECT * FROM docente WHERE dni='$dni'";
    return mysqli_query($conexion, $sql);
}

function buscarUserDocente ($conexion){
    $sql = "SELECT*FROM usuarios_docentes";
    return mysqli_query($conexion, $sql);
}

//BUSCAR DATOS INSITUCIONALES
function buscarDatoInstitucional($conexion){
    $sql = "SELECT*FROM datos_institucionales";
    return mysqli_query($conexion, $sql);
}
//buscar datos instit
function buscarDInstitiByCodigo($conexion, $codigo){
    $sql = "SELECT*FROM datos_institucionales WHERE cod_modular = '$codigo'";
    return mysqli_query($conexion, $sql);
}

//BUSCAR MODULOS
function buscarModulo($conexion){
    $sql = "SELECT*FROM modulo_profesional";
    return mysqli_query($conexion, $sql);
}
//buscar UD
function buscarUD($conexion){
    $sql = "SELECT*FROM unidad_didactica";
    return mysqli_query($conexion, $sql);
}

//buscar periodo academico
function buscarPeriodoAcademico( $conexion){
    $sql = "SELECT*FROM periodo_academico";
    return mysqli_query($conexion, $sql);
}
function buscarPeriodoAcademicoById( $conexion, $id){
    $sql = "SELECT * FROM periodo_academico WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}

//buscar semestre
function buscarSemestreById($conexion, $id){
    $sql = "SELECT *FROM semestre WHERE id= '$id'";
    return mysqli_query($conexion, $sql);
}

//busacr modulo
function buscarModuloById ($conexion, $id){
    $sql = "SELECT * FROM modulo_profesional WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}

function buscarUsuarioDocenteById($conexion, $id){
    $sql = "SELECT * FROM usuarios_docentes  WHERE id= '$id'";
    return mysqli_query($conexion, $sql);
}

function buscarPre_p_Acad($conexion){
    $sql = "SELECT * FROM presente_periodo_acad";
    return mysqli_query($conexion, $sql);
}
function buscarPre_p_AcadById($conexion, $id){
    $sql = "SELECT * FROM presente_periodo_acad WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}
function buscarUsuarioDocente ($conexion){
    $sql = "SELECT * FROM usuarios_docentes";
    return mysqli_query($conexion, $sql);
}