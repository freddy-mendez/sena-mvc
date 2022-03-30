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
}


?>