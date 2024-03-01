<?php
class ReservaModel {

    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function obtenerReservas() {
        $query = "SELECT * FROM reserva";
        $result = $this->db->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    

    public function agregarReserva( $Fecha, $Estado, $Precio, $Habitacion) {

        $query = "INSERT INTO reserva ( Fecha, Estado, Precio, Habitacion) VALUES (:Fecha, :Estado, :Precio, :Habitacion)";
    
        $stmt = $this->db->prepare($query);
       
        $stmt->bindParam(':Fecha', $Fecha);
        $stmt->bindParam(':Estado', $Estado);
        $stmt->bindParam(':Precio', $Precio);
        $stmt->bindParam(':Habitacion', $Habitacion);
        return $stmt->execute();
    }

}


?>