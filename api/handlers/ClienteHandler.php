<?php

require_once PROJECT_ROOT . "classes/Cliente.php";

class ClienteHanlder {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    
    public function getClientes() {
        $query = "SELECT 
                    `id`,
                    `nombre`,
                    `correo`
                 FROM `Cliente`";
        $stmt = $this->pdo->query($query);
        $clientesData = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $clientes = [];
        foreach ($clientesData as $clienteData) {
            $cliente = new Cliente($clienteData['id'], $clienteData['nombre'], $clienteData['correo']);
            $clientes[] = $cliente;
        }

        return $clientes;
    }
    
    public function getClienteById($clienteId) {
        $query = "SELECT
                    `id`,
                    `nombre`,
                    `correo`
                  FROM Cliente
                  WHERE `id` = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([':id' => $clienteId]);
        $clienteData = $stmt->fetch(PDO::FETCH_ASSOC);

        if($clienteData) {
            $cliente = new Cliente($clienteData['id'], $clienteData['nombre'], $clienteData['correo']);
            return $cliente;
        } else {
            return null;
        }
    }
    
    public function createCliente($cliente) {
        $query = "INSERT INTO Cliente
                    (`nombre`,
                     `correo`)
                  VALUES
                    (:nombre,
                     :correo)";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([':nombre' => $cliente['nombre'], ':correo' => $cliente['correo']]);
        
        $clienteId = $this->pdo->lastInsertId();
        
        $cliente = new Cliente($clienteId, $cliente['nombre'], $cliente['correo']);
        return $cliente;
    }
}