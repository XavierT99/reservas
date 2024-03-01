<?php
include_once './config/db.php'; 
include_once './models/model_reservacion_cliente.php'; 

$db = conectarDB(); 
$reserva_cliente_model = new reserva_cliente_model($db);
$reservas_clientes = $reserva_cliente_model->obtenerReservas_cliente();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar si los campos están presentes en $_POST antes de intentar acceder a ellos
    if (isset( $_POST['ID_reservas'], $_POST['ID_clientes'])) {
        // Asignar los valores a variables
       
        $ID_reservas = $_POST['ID_reservas'];
        $ID_clientes = $_POST['ID_clientes'];

        // Luego, puedes realizar la operación deseada con estos valores
        $reserva_cliente_model->agregarReservas_cliente($ID_reservas, $ID_clientes);
    } else {
        // Manejar la situación en la que algún campo no está presente en $_POST
        echo "Error: Uno o más campos no están presentes en el formulario.";
    }
}

include './view/view_reservacion_clientes.php';   
?>
