<?php
require_once PROJECT_ROOT . 'includes/db_connection.php';

class Articulo {
    private $id_articulo;
    private $codigo;
    private $descripcion;
    private $precio_unitario;
    private $inventario;
    
    public function __construct($id_articulo, $codigo, $descripcion, $precio_unitario, $inventario) {
        $this->id_articulo = $id_articulo;
        $this->codigo = $codigo;
        $this->descripcion = $descripcion;
        $this->precio_unitario = $precio_unitario;
        $this->inventario = $inventario;
    }
    public function getIdArticulo() {
        return $this->id_articulo;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function getPrecioUnitario() {
        return $this->precio_unitario;
    }

    public function setPrecioUnitario($precio_unitario) {
        $this->precio_unitario = $precio_unitario;
    }

    public function getInventario() {
        return $this->inventario;
    }

    public function setInventario($inventario) {
        $this->inventario = $inventario;
    }
    
    public function toArray() {
        return [
            "id" => $this->getIdArticulo(),
            "codigo" => $this->getCodigo(),
            "descripcion" => $this->getDescripcion(),
            "precio_unitario" => $this->getPrecioUnitario(),
            "inventario" => $this->getInventario(),
        ];
    }
}
