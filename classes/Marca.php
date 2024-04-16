<?php
require_once PROJECT_ROOT . 'includes/db_connection.php';

class Marca {
    private $id_marca;
    private $nombre;

    public function __construct($id_marca = null) {
        if ($id_marca) {
            $this->loadById($id_marca);
        }
    }
    
    private function loadById($id_marca) {
        global $cnx;
        $query = "SELECT
                    ID_Marca,
                    Nombre
                  FROM Marca
                  WHERE ID_Marca = :id";
        $stmt = $cnx->prepare($query);
        $stmt->bindParam(':id', $id_marca);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario) {
            $this->id_marca = $usuario['ID_Marca'];
            $this->nombre = $usuario['Nombre'];
        } else {
            throw new Exception("Marca con id [$id_marca] no encontrado.");
        }
    }

    public function addMarca() {
        global $cnx;
        $query = "INSERT INTO Marca
                    (Nombre)
                  VALUES
                    :nombre)";

        $stmt = $cnx->prepare($query);

        $stmt->bindParam(':id_marca', $this->id_marca);
        $stmt->bindParam(':nombre', $this->nombre);
        $stmt->execute();
        
        return $cnx->lastInsertId();
    }

    public function updateMarca() {
        global $cnx;
        $query = "UPDATE Marca SET
                    ID_Marca = :id_marca,
                    Nombre = :nombre
                  WHERE
                    ID_Marca = :id_marca";

        $stmt = $cnx->prepare($query);

        $stmt->bindParam(':id_marca', $this->id_marca);
        $stmt->bindParam(':nombre', $this->nombre);
        $stmt->execute();
    }

    public function deleteMarca() {
        global $cnx;
        $query = "DELETE FROM Marca
                  WHERE ID_Marca = :id";

        $stmt = $cnx->prepare($query);
        $stmt->bindParam(':id', $this->id_marca);
        $stmt->execute();
    }
    
    public static function getAll(): array {
        global $cnx;
        global $cnx;
        $query = "SELECT
                    ID_Marca,
                    Nombre
                  FROM Marca";
        $stmt = $cnx->query($query);
        $equipos = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $equipos;
    }

    public function getIdMarca() {
        return $this->id_marca;
    }

    public function setIdMarca($id_marca) {
        $this->id_marca = $id_marca;
    }
    
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
}
?>