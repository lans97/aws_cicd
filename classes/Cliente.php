<?php
//require_once PROJECT_ROOT . 'includes/db_connection.php';

class Cliente
{
    private $id_cliente;
    private $nombre;
    private $correo;

    public function __construct($id_cliente = null, $nombre = "", $correo = "") {
        $this->id_cliente = $id_cliente;
        if ($id_cliente != null) {
            $this->load();
        } else {
            $this->nombre = $nombre;
            $this->correo = $correo;
        }
    }

    private function load() {
        // mockup
        $this->nombre = "Nombre Prueba";
        $this->correo = "Correo Prueba";
    }

    public function save() {
        // mockup
        echo "Saved";
    }

    public function getIdCliente() {
        return $this->id_cliente;
    }

    // Setter for id_client (assuming it shouldn't be modified)
    // You can remove this setter if id_client shouldn't be changed after creation.
    public function setIdCliente($id_cliente) {
        $this->id_cliente = $id_cliente;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    // Getter for correo
    public function getCorreo() {
        return $this->correo;
    }

    // Setter for correo
    public function setCorreo($correo) {
        $this->correo = $correo;

        // You can add correo validation here
        // if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        //   throw new InvalidArgumentException('Invalid correo format');
        // }
    }
}

if (
    isset($_GET['method'])
    && $_GET['method'] == "getCliente"
    && isset($_GET['idCliente'])
    && is_numeric($_GET['idCliente'])) {
    $cliente = new Cliente(id_cliente:$_GET['idCliente']);
    $output = array();
    $output['success'] = "true";
    $output['data'] = array();
    $output['data']['nombre'] = $cliente->getNombre();
    $output['data']['correo'] = $cliente->getCorreo();
    $output['errmsg'] = "";
    echo json_encode($output);
}