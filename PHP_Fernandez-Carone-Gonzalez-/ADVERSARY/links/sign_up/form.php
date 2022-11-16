<?php
    $name=$_POST["name"];
    $surname=$_POST["surname"];
	$user= $_POST["user"];
    $mail= $_POST["mail"];
	$pass = $_POST["pass"];
    $born_date=$_POST["born_date"];

    $servername = "127.0.0.1";
    $database = "base";
    $username = "alumno";
    $password = "alumnoipm";
    
    $conexion = mysqli_connect($servername, $username, $password, $database); // se crea la conexion

    if (!$conexion) {
        die("Conexion fallida: " . mysqli_connect_error());
    }
    else{
        $resultado = mysqli_query($conexion,"select mail from cliente where mail='$mail'");
        $fila=mysqli_fetch_assoc($resultado);
    }
        if ($fila==NULL) {
         
		$resultado = mysqli_query($conexion,"insert into cliente values(NULL,'$name','$surname','$user','$pass','$mail','$born_date');");
        echo ("Exitoso");
        }
    else{

        echo ("el usuario ya existe");

    }

    mysqli_close($conexion);


?>
