

<?php
include_once './config/db.php'; 
include_once './models/model_reservacion_cliente.php'; 

 $db = conectarDB(); 
 $reserva_cliente_model = new reserva_cliente_model($db);
 $reservas_clientes = $reserva_cliente_model->obtenerReservas_cliente();

 
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ID_reservas_clientes = $_POST['ID_reservas_clientes'];
    $ID_reservas = $_POST['ID_reservas'];
    $ID_clientes = $_POST['ID_clientes'];

    $reserva_cliente_model->agregarReservas_cliente($ID_reservas_clientes, $ID_reservas, $ID_clientes);
}

 include './view/view_reservacion_clientes.php';   
 
 