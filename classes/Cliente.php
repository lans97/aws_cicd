<?php
require_once PROJECT_ROOT . 'includes/db_connection.php';

class Cliente
{
    private $id_cliente;
    private $nombre;
    private $correo;

    public function __construct($id_cliente, $nombre, $correo) {
        $this->id_cliente = $id_cliente;
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    public function getIdCliente() {
        return $this->id_cliente;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }
    
    public function toArray() {
        return [
            'id_cliente' => $this->id_cliente,
            'nombre' => $this->nombre,
            'correo' => $this->correo
        ];
    }
}