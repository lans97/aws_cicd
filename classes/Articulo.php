<?php
require_once PROJECT_ROOT . 'includes/db_connection.php';

class Articulo {
    private $id_articulo;
    private $codigo;
    private $descripcion;
    private $precio_unitario;
    private $inventario;
    
    public function __construct($id_articulo = null, $codigo = "", $descripcion = "", $precio_unitario = 0.0, $inventario = 0) {
        $this->id_articulo = $id_articulo;
        if ($id_articulo != null) {
            $this->load($id_articulo);
        } else {
            $this->codigo = $codigo;
            $this->descripcion = $descripcion;
            $this->precio_unitario = $precio_unitario;
            $this->inventario = $inventario;
        }
    }
    
    private function load($id_articulo) {
        global $cnx;
        $query = "SELECT
                    `id`,
                    codigo,
                    descripcion,
                    precio_unitario,
                    inventario
                  FROM Cliente
                  WHERE `id` = :id";
        $stmt = $cnx->prepare($query);
        $stmt->bindParam(':id', $id_articulo);
        $stmt->execute();
        $articulo = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($articulo) {
            $this->id_articulo = $articulo['id'];
            $this->codigo = $articulo['codigo'];
            $this->descripcion = $articulo['descripcion'];
            $this->precio_unitario = $articulo['precio_unitario'];
            $this->inventario = $articulo['inventario'];
        } else {
            throw new Exception("Artículo con id [$id_articulo] no encontrado.");
        }
    }

    public function save() {
        global $cnx;
        $query = "INSERT INTO Articulo
                    (codigo,
                     descripcion,
                     precio_unitario,
                     inventario)
                  VALUES
                    (:codigo,
                     :descripcion,
                     :precio_unitario,
                     :inventario)";

        $stmt = $cnx->prepare($query);

        $stmt->bindParam(':codigo', $this->codigo);
        $stmt->bindParam(':descripcion', $this->descripcion);
        $stmt->bindParam(':precio_unitario', $this->precio_unitario);
        $stmt->bindParam(':inventario', $this->inventario);
        $stmt->execute();
        
        return $cnx->lastInsertId();
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
}


if (
    isset($_GET['method'])
    && $_GET['method'] == "getArticulo"
    && isset($_GET['idArticulo'])
    && is_numeric($_GET['idArticulo'])) {
    $cliente = new Articulo(id_articulo:$_GET['idArticulo']);
    $output = array();
    $output['success'] = "true";
    $output['data'] = array();
    $output['data']['codigo'] = $cliente->getCodigo();
    $output['data']['descripcion'] = $cliente->getDescripcion();
    $output['data']['precio_unitario'] = $cliente->getPrecioUnitario();
    $output['data']['inventario'] = $cliente->getInventario();
    $output['errmsg'] = "";
    echo json_encode($output);
}
?>