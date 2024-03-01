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

    public function actualizarCliente($ID_cliente, $Nombre, $Email, $Telefono, $Direccion){
        $query = "UPDATE cliente SET Nombre = :Nombre, Email = :Email, Telefono = :Telefono, Direccion = :Direccion WHERE ID_cliente = :ID_cliente";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':ID_cliente', $ID_cliente);
        $stmt->bindParam(':Nombre', $Nombre);
        $stmt->bindParam(':Email', $Email);
        $stmt->bindParam(':Telefono', $Telefono);
        $stmt->bindParam(':Direccion', $Direccion);
        return $stmt->execute();
    }

    public function eliminarCliente($ID_cliente){
        $query="DELETE FROM cliente WHERE ID_cliente=?";
        $stmt= $this->db->prepare($query);
        $stmt -> bindParam(":ID_cliente",$ID_cliente); 
        if ($stmt->execute()) {           
           echo "Se ha borrado correctamente el registro.";            
        } else{                  
           echo "No se pudo borrar el registro.<br>Error: ". $stmt->error();                
        }                              
    }
}
    




?>