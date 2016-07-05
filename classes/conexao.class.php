<?php
class conexao {

    private $SERVER = "localhost";
    private $USER = "root";
    private $PASSWORD = "";
    private $BASE = "subrac";
    private $PDO;

    public function conectar() {
        try {
            $this->PDO = new PDO("mysql:host=" . $this->SERVER . ";dbname=" . $this->BASE . "", $this->USER, $this->PASSWORD);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    public function desconectar() {
        $this->PDO = null;
    }

}
?>