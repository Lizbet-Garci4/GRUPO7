<?php

class Usuario {
    // Propiedades (atributos)
    private $id;
    private $nombre;
    private $apellido;
    private $email;
    private $password;

    // Constructor
    public function __construct($nombre, $apellido, $email, $password) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_DEFAULT); // Hashing seguro de la contraseña
    }

    // Métodos (funciones)
    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getEmail() {
        return $this->email;
    }

    // Otros métodos que puedas necesitar, como actualizar información, verificar contraseñas, etc.
    public function actualizarNombre($nuevoNombre) {
        $this->nombre = $nuevoNombre;
    }

    public function verificarPassword($passwordIngresado) {
        return password_verify($passwordIngresado, $this->password);
    }
}

?>