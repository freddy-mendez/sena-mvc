<?php

class Db extends PDO {
    private $db = 'sena-mvc';
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbh;

    function __construct()
    {
        try {
            $this->dbh = parent::__construct('mysql:dbname='.$this->db.
                ';host='.$this->host.';charset=utf8', $this->username, $this->password);
        } catch (PDOException $e) {
            echo 'Error: '.$e->getMessage();
        }
    }

    public function close() {
        $this->dbh = NULL;
    }

}

?>