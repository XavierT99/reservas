<?php
class ClienteModel {

    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function obtenerClientes() {
        $query = "SELECT * FROM cliente";
        $result = $this->db->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    

    public function agregarCliente($ID_cliente, $Nombre, $Email, $Telefono, $Direccion) {
        $query = "INSERT INTO cliente (ID_cliente, Nombre, Email, Telefono,Direccion) VALUES (:ID_cliente, :Nombre, :Email, :Telefono, :Direccion)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':ID_cliente', $ID_cliente);
        $stmt->bindParam(':Nombre', $Nombre);
        $stmt->bindParam(':Email', $Email);
        $stmt->bindParam(':Telefono', $Telefono);
        $stmt->bindParam(':Direccion', $Direccion);
        return $stmt->execute();
    }

}


?>