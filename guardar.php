<?php

    include("abre.php");

    $name = trim($_POST['name']);
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $fecha = date("d/m/y");
    

    $consulta = "INSERT INTO datos(nombre, contraseña, email, telefono, fecha)
    VALUES ('$name','$password','$email','$phone','$fecha')";
    
    if($conexion->query($consulta) === TRUE){
        header("Location: inscripcion.php");
    }else{
        echo "Error: " . $consulta . "<br>" . $conexion->error;
    }

    $conexion->close();

?>