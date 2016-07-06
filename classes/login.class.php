<?php

class Login extends Conexao {

    private $LOGIN;
    private $SENHA;

    public function setLogin($LOGIN) {
        $this->LOGIN = $LOGIN;
    }

    public function setSenha($SENHA) {
        $this->SENHA = $SENHA;
    }

    public function getLogin() {
        return $this->LOGIN;
    }

    public function getSenha() {
        return $this->SENHA;
    }

    public function logar() {
        $PDO = parent::getDB();
        $LOGAR = $PDO->prepare("SELECT * FROM SUUSUARIOS WHERE LOGIN = ? AND SENHA = ?");
        $LOGAR->bindValue(1, $this->getLogin());
        $LOGAR->bindValue(2, $this->getSenha());
        $LOGAR->execute();
        if ($LOGAR->rowCount() == 1):
            $DADOS = $LOGAR->fetch(PDO::FETCH_OBJ);
            session_start();
            $_SESSION['NOME_COMPLETO'] = $DADOS->NOME_COMPLETO;
            $_SESSION['LOGADO'] = true;
            return true;
        else:
            return false;
        endif;
    }
    
    public static function logoff() {
        if (isset($_SESSION['LOGADO'])):
            unset($_SESSION['LOGADO']);
            session_destroy();
            header("Location:login.php");
        endif;
    }

}
