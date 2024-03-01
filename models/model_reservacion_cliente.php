<?php
class reserva_cliente_model {

    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function obtenerReservas_cliente() {
        $query = "SELECT * FROM reserva_clientes";
        $result = $this->db->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    

    public function agregarReservas_cliente( $ID_reservas, $ID_clientes) {

        $query = "INSERT INTO reserva_clientes ( ID_reservas, ID_clientes) VALUES (:ID_reservas, :ID_clientes)";
    
        $stmt = $this->db->prepare($query);
       
        $stmt->bindParam(':ID_reservas', $ID_reservas);
        $stmt->bindParam(':ID_clientes', $ID_clientes);
        return $stmt->execute();
    }

}


?>