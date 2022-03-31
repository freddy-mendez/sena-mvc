<?php

class Usuario {
    private $id;
    private $username;
    private $nombre;
    private $apellido;
    private $rol;
    private $foto;

    public function __construct() {
        //$this->foto = "images/no-foto.jpg";
    }

    public function __set($name, $value) {
        if (property_exists($this, $name)) {
            $this->$name = $value;
        }
    }

    public function __get($name) {
        if (property_exists($this, $name)) {
            return $this->$name;
        }
    }
}