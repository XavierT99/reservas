

<?php
include_once './config/db.php'; 
include_once './models/model_cliente.php'; 

 $db = conectarDB(); 
 $clienteModel = new ClienteModel($db);
 $clientes = $clienteModel->obtenerClientes();

 
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ID_cliente = $_POST['ID_cliente'];
    $Nombre = $_POST['Nombre'];
    $Email = $_POST['Email'];
    $Telefono = $_POST['Telefono'];
    $Direccion = $_POST['Direccion'];

    $clienteModel->agregarCliente($ID_cliente, $Nombre, $Email, $Telefono, $Direccion);
    $clienteModel->actualizarCliente($ID_cliente, $Nombre, $Email, $Telefono, $Direccion);
}

 include './view/view_clientes.php';   
 