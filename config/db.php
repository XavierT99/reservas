<?php


function conectarDB() {
    $host = 'localhost';
    $usuario = 'root';
    $contrasena = '';
    $nombreBD = 'ejercicio10_reservaciones';

    try {
        $conexion = new PDO("mysql:host=$host;dbname=$nombreBD", $usuario, $contrasena);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
        return $conexion;
    } catch (PDOException $e) {
        echo "Error de conexión: " . $e->getMessage();
        return null;
    }
}

?>