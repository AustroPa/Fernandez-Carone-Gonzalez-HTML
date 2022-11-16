<?php
	$user= $_POST["user"];
	$pass = $_POST["pass"];


    $servername = "127.0.0.1";
    $database = "base";
    $username = "alumno";
    $password = "alumnoipm";
    
    $conexion = mysqli_connect($servername, $username, $password, $database); // se crea la conexion

    if (!$conexion) {
        die("Conexion fallida: " . mysqli_connect_error());
    }
    else{
        $resultado = mysqli_query($conexion,"select pass from cliente where user='$user' and pass= '$pass'");
        $fila=mysqli_fetch_assoc($resultado);
    }
        if ($fila==NULL) {
         
        echo ("mail o contraseña incorrectos");
        
        }
    else{

        echo ("Exitoso");
    }

    mysqli_close($conexion);


?>
