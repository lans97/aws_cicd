<?php

require_once PROJECT_ROOT . "classes/Articulo.php";

class ArticuloHandler {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    
    public function getArticulos() {
        $query = "SELECT 
                    `id`,
                    `codigo`,
                    `descripcion`,
                    `precio_unitario`,
                    `inventario`
                 FROM `Articulo`";
        $stmt = $this->pdo->query($query);
        $articulosData = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $articulos = [];
        foreach ($articulosData as $articuloData) {
            $articulo = new Articulo(
                $articuloData['id'],
                $articuloData['codigo'],
                $articuloData['descripcion'],
                $articuloData['precio_unitario'],
                $articuloData['inventario']
            );
            $articulos[] = $articulo->toArray();
        }

        return $articulos;
    }
    
    public function getArticuloByCodigo($codigo_articulo) {
        $query = "SELECT
                    `id`,
                    codigo,
                    descripcion,
                    precio_unitario,
                    inventario
                  FROM Articulo
                  WHERE `codigo` = :codigo";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([':codigo' => $codigo_articulo]);
        $articuloData = $stmt->fetch(PDO::FETCH_ASSOC);

        if($articuloData) {
            $articulo = new Articulo(
                $articuloData['id'],
                $articuloData['codigo'],
                $articuloData['descripcion'],
                $articuloData['precio_unitario'],
                $articuloData['inventario']
            );
            return $articulo->toArray();
        } else {
            return null;
        }
    }
}