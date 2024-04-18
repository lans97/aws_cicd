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
            $this->loadByID($id_articulo);
        } elseif($codigo != ""){
            $this->loadByCodigo($codigo);
        } else {
            $this->codigo = $codigo;
            $this->descripcion = $descripcion;
            $this->precio_unitario = $precio_unitario;
            $this->inventario = $inventario;
        }
    }
    
    private function loadByID($id_articulo) {
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

    private function loadByCodigo($codigo_articulo) {
        global $cnx;
        $query = "SELECT
                    `id`,
                    codigo,
                    descripcion,
                    precio_unitario,
                    inventario
                  FROM Articulo
                  WHERE `codigo` = :codigo";
        $stmt = $cnx->prepare($query);
        $stmt->bindParam(':codigo', $codigo_articulo);
        $stmt->execute();
        $articulo = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($articulo) {
            $this->id_articulo = $articulo['id'];
            $this->codigo = $articulo['codigo'];
            $this->descripcion = $articulo['descripcion'];
            $this->precio_unitario = $articulo['precio_unitario'];
            $this->inventario = $articulo['inventario'];
        } else {
            throw new Exception("Artículo con codigo [$codigo_articulo] no encontrado.");
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
    && isset($_GET['codigoArticulo'])
    && is_numeric($_GET['codigoArticulo'])) {
    $articulo = new Articulo(codigo:$_GET['codigoArticulo']);
    $output = array();
    $output['success'] = "true";
    $output['data'] = array();
    $output['data']['codigo'] = $articulo->getCodigo();
    $output['data']['descripcion'] = $articulo->getDescripcion();
    $output['data']['precio_unitario'] = $articulo->getPrecioUnitario();
    $output['data']['inventario'] = $cliente->getInventario();
    $output['errmsg'] = "";
    echo json_encode($output);
}
?>