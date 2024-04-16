<?php
require_once PROJECT_ROOT . 'includes/db_connection.php';

class Equipo {
    private $id_equipo;
    private $id_marca;
    private $procesador;
    private $ram;
    private $disco_duro;
    private $existencia;

    public function __construct($id_equipo = null) {
        if ($id_equipo) {
            $this->loadById($id_equipo);
        }
    }
    
    private function loadById($id_equipo) {
        global $cnx;
        $query = "SELECT
                    ID_Equipo,
                    ID_Marca
                    Procesador,
                    RAM,
                    Disco_Duro,
                    Existencia,
                  FROM Equipo
                  WHERE ID_Equipo = :id";
        $stmt = $cnx->prepare($query);
        $stmt->bindParam(':id', $id_equipo);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario) {
            $this->id_equipo = $usuario['ID_Equipo'];
            $this->id_marca = $usuario['ID_Marca'];
            $this->procesador = $usuario['Procesador'];
            $this->ram = $usuario['RAM'];
            $this->disco_duro = $usuario['Disco_Duro'];
            $this->existencia = $usuario['Existencia'];
        } else {
            throw new Exception("Equipo con id [$id_equipo] no encontrado.");
        }
    }

    public function addEquipo() {
        global $cnx;
        $query = "INSERT INTO Equipo
                    (ID_Marca,
                     Procesador,
                     RAM,
                     Disco_Duro,
                     Existencia)
                  VALUES
                    :id_marca
                    :procesador,
                    :ram,
                    :disco_duro,
                    :existencia)";

        $stmt = $cnx->prepare($query);

        $stmt->bindParam(':id_marca', $this->id_marca);
        $stmt->bindParam(':procesador', $this->procesador);
        $stmt->bindParam(':ram', $this->ram);
        $stmt->bindParam(':disco_duro', $this->disco_duro);
        $stmt->bindParam(':existencia', $this->existencia);
        $stmt->execute();
        
        return $cnx->lastInsertId();
    }

    public function updateEquipo() {
        global $cnx;
        $query = "UPDATE Equipo SET
                    ID_Marca = :id_marca,
                    Procesador = :procesador,
                    RAM = :ram,
                    Disco_Duro = :disco_duro,
                    Existencia = :existencia
                  WHERE
                    ID_Equipo = :id_equipo";

        $stmt = $cnx->prepare($query);

        $stmt->bindParam(':id_marca', $this->id_marca);
        $stmt->bindParam(':procesador', $this->procesador);
        $stmt->bindParam(':ram', $this->ram);
        $stmt->bindParam(':disco_duro', $this->disco_duro);
        $stmt->bindParam(':existencia', $this->existencia);
        $stmt->execute();
    }

    public function deleteEquipo() {
        global $cnx;
        $query = "DELETE FROM Equipo
                  WHERE ID_Equipo = :id";

        $stmt = $cnx->prepare($query);
        $stmt->bindParam(':id', $this->id_equipo);
        $stmt->execute();
    }
    
    public static function getAll(): array {
        global $cnx;
        global $cnx;
        $query = "SELECT
                    ID_Equipo,
                    ID_Marca
                    Procesador,
                    RAM,
                    Disco_Duro,
                    Existencia,
                  FROM Equipo";
        $stmt = $cnx->query($query);
        $equipos = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $equipos;
    }

    public function getIdEquipo() {
        return $this->id_equipo;
    }

    public function setIdEquipo($id_equipo) {
        $this->id_equipo = $id_equipo;
    }
    
    public function getIdMarca() {
        return $this->id_marca;
    }

    public function setIdMarca($id_marca) {
        $this->id_marca = $id_marca;
    }
    
    public function getProcesador() {
        return $this->procesador;
    }

    public function setProcesador($procesador) {
        $this->procesador = $procesador;
    }
    
    public function getRAM() {
        return $this->ram;
    }

    public function setRAM($ram) {
        $this->ram = $ram;
    }
    
    public function getDiscoDuro() {
        return $this->disco_duro;
    }

    public function setDiscoDuro($disco_duro) {
        $this->disco_duro = $disco_duro;
    }
    
    public function getExistencia() {
        return $this->existencia;
    }

    public function setExistencia($existencia) {
        $this->existencia = $existencia;
    }
}
?>