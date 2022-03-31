<?php


require_once('Db.php');
require_once('entity/Usuario.php');

class UsuarioModel {
    public function login($username, $password) {
        $db = new Db();
        $sql = "SELECT * FROM users where username=:username and password=sha2(:password, 256)";
        $query = $db->prepare($sql);
        $query->bindParam(':username', $username);
        $query->bindParam(':password', $password);
        $query->execute();
        return $query->fetchObject('Usuario');
    }

    public function updateFoto($file, $id) {
        $db = new Db();
        $sql = "UPDATE users SET foto=:foto WHERE id=:id";
        $query = $db->prepare($sql);
        $query->bindParam(':foto', $file);
        $query->bindParam(':id', $id);
        $query->execute();
        echo var_dump($file);
        echo "<br>";
        echo var_dump($id);
        echo "<br>";
        echo var_dump($query);
    }
}


?>