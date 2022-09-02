<?php
/*
	$servidor = "localhost"; //Servidor MySQL
    $usuario = "u490498477_user";  //Usuario en la base de datos
    $password = "W8U^s8+a0~N";     //Contraseña de la base de datos
    $base = "u490498477_elmanjarcomand";  //Nombre de la base de datos
*/
	$servidor = "localhost"; //Servidor MySQL
    $usuario = "root";  //Usuario en la base de datos
    $password = "";     //Contraseña de la base de datos
    $base = "menu";  //Nombre de la base de datos

// Abrir conexión en el servidor. Parámetros: datos del servidor, user, pass

    $conexion = mysqli_connect($servidor, $usuario, $password);

//Preguntar si se realizó la conexión a la base de datos
    
   /* if(!$conexion){
        die('<strong>No se pudo conectar: </strong>'.mysql_error());
    }
    else{
        echo "Conectado satisfactoriamente <br/>";
    }
*/
    //Seleccionar la base de datos a usar o trabajar
    
    mysqli_select_db($conexion, $base) or die(mysql_error($conexion));

?>