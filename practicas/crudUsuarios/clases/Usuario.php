<?php

class Usuario {
    private $id_usuario;
    private $username;
    private $nombre;
    private $a_paterno;
    private $a_materno;
    private $correo;
    private $tipo;
    
    public function __construct($id_usuario = null) {
        if ($id_usuario) {
            $this->loadUsuarioById($id_usuario);
        }
    }
    
    private function loadUsuarioById($id_usuario) {
        include '../config/dbcnx.php';
        $query = "SELECT
                    ID_Usuario,
                    Username,
                    Nombre,
                    A_Paterno,
                    A_Materno,
                    Correo,
                    Tipo
                  FROM Usuario
                  WHERE ID_Usuario = :id";
        $stmt = $cnx->prepare($query);
        $stmt->bindParam(':id', $id_usuario);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario) {
            $this->id_usuario = $usuario['ID_Usuario'];
            $this->username = $usuario['Username'];
            $this->nombre = $usuario['Nombre'];
            $this->a_paterno = $usuario['A_Paterno'];
            $this->a_materno = $usuario['A_Materno'];
            $this->correo = $usuario['Correo'];
            $this->tipo = $usuario['Tipo'];
        } else {
            throw new Exception("Usuario con id [$id_usuario] no encontrado.");
        }
    }

    private function addUsuario() {
        include '../config/dbcnx.php'; 

        $query = "INSERT INTO Usuario
                    (Username,
                     Nombre,
                     A_Paterno,
                     A_Materno,
                     Correo,
                     Tipo)
                  VALUES
                    (:username,
                    :nombre,
                    :a_paterno,
                    :a_materno,
                    :correo,
                    :tipo)";

        $stmt = $cnx->prepare($query);

        $stmt->bindParam(':username', $this->username);
        $stmt->bindParam(':nombre', $this->nombre);
        $stmt->bindParam(':a_paterno', $this->a_paterno);
        $stmt->bindParam(':a_materno', $this->a_materno);
        $stmt->bindParam(':correo', $this->correo);
        $stmt->bindParam(':tipo', $this->tipo);
        $stmt->execute();
        
        return $cnx->lastInsertId();
    }
    
    public function updateUsuario() {
        include '../config/dbcnx.php';
        
        $query = "UPDATE Usuario SET
                    Username = :username,
                    Nombre = :nombre,
                    A_Paterno = :a_paterno,
                    A_Materno = :a_materno,
                    Correo = :correo,
                    Tipo = :tipo,
                  WHERE
                    ID_Usuario = :id";

        $stmt = $cnx->prepare($query);

        $stmt->bindParam(':username', $this->username);
        $stmt->bindParam(':nombre', $this->nombre);
        $stmt->bindParam(':a_paterno', $this->a_paterno);
        $stmt->bindParam(':a_materno', $this->a_materno);
        $stmt->bindParam(':correo', $this->correo);
        $stmt->bindParam(':tipo', $this->tipo);
        $stmt->bindParam(':id', $this->id_usuario);
        $stmt->execute();
    }

    public function deleteUsuario() {
        include '../config/dbcnx.php';
        
        $query = "DELETE FROM Usuario
                  WHERE ID_Usuario = :id";

        $stmt = $cnx->prepare($query);
        $stmt->bindParam(':id', $this->id_usuario);
        $stmt->execute();
    }
    
    public static function getAll(): array {
        include '../config/dbcnx.php';
        $query = "SELECT
                    ID_Usuario,
                    Username,
                    Nombre,
                    A_Paterno,
                    A_Materno,
                    Correo,
                    Tipo
                  FROM Usuario";
        $stmt = $cnx->query($query);
        $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $usuarios;
    }
    
    public function getId_Usuario() {
        return $this->id_usuario;
    }

    public function setId_Usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }
    
    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }
    
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    
    public function getA_Paterno() {
        return $this->a_paterno;
    }

    public function setA_Paterno($a_paterno) {
        $this->a_paterno = $a_paterno;
    }
    
    public function getA_Materno() {
        return $this->a_materno;
    }

    public function setA_Materno($a_materno) {
        $this->a_materno = $a_materno;
    }
    
    public function getCorreo() {
        return $this->correo;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }
    
    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }
}

?>