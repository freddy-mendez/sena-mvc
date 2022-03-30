<?php

class Usuario {
    private $id;
    private $username;
    private $nombre;
    private $apellido;
    private $rol;

    public function __construct() {

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