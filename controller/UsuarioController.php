<?php

require_once('model/UsuarioModel.php');
require_once('entity/Usuario.php');

class UsuarioController {
    private $data;

    public function __construct() {
        $this->data = new UsuarioModel();
    }

    public function main() {
        $action = isset($_GET['action']) ? $_GET['action'] : "login";
        if ($action == "login") {
            $this->loginUsuario();
        } else if ($action == "save-foto") {
            $this->saveFoto();
        } 
        else {
            header("Location: index.php");
        }
    }

    public function saveFoto() {
        $file_name = $_GET['file_name'];
        $user = $_SESSION['user'];
        $this->data->updateFoto($file_name, $user->id);
        unlink($user->foto);
        $user->foto = $file_name;
        header("Location: index.php");
    }

    public function loginUsuario() {
        $username = isset($_POST['username']) ? $_POST['username'] : null;
        $password = isset($_POST['password']) ? $_POST['password'] : null;
        if ($username != null && $password != null) {
            $user = $this->data->login($username, $password);
            if ($user) {
                $_SESSION['user'] = $user;
                header("Location: index.php");
            } else {
                echo "<script>alert('Usuario/Contraseña no validos');";
                echo "window.location.href='index.php';</script>";
            }
        } else {
            echo "<script>alert('Usuario/Contraseña son obligatorios');";
            echo "window.location.href='index.php';</script>";
        }
    }

}


?>