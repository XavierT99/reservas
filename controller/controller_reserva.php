

<?php
include_once './config/db.php'; 
include_once './models/model_reserva.php'; 

 $db = conectarDB(); 
 $ReservaModel = new ReservaModel($db);
 $reservas = $ReservaModel->obtenerReservas();


 if ($_SERVER['REQUEST_METHOD'] === 'POST') {

   $Fecha = $_POST['Fecha'];
    $Estado = $_POST['Estado'];
    $Precio = $_POST['Precio'];
    $Habitacion = $_POST['Habitacion']; 

    $ReservaModel->agregarReserva($Fecha, $Estado, $Precio, $Habitacion);
}

/* 


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fecha = $_POST['fecha'];
    $estado = $_POST['estado'];
    $precio = $_POST['precio'];
    $habitacion = $_POST['habitacion'];

    $reservaModel->agregarReserva($fecha, $estado, $precio, $habitacion);
}

*/

 include './view/view_reservas.php';   
 