<?php
require_once './classes/conexao.class.php';
require_once './classes/login.class.php';
if (isset($_REQUEST['btnEntrar'])):
    
    $LOGIN = filter_input(INPUT_POST, "ACESSO_LOGIN", FILTER_SANITIZE_MAGIC_QUOTES);
    $SENHA = filter_input(INPUT_POST, "ACESSO_SENHA", FILTER_SANITIZE_MAGIC_QUOTES);

    $L = new Login();
    $L->setLogin($LOGIN);
    $L->setSenha(md5($SENHA));

    if ($L->logar()):
        header("Location:index.php");
    endif;

endif;
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <?php
        include './head_tags.php';
        ?>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <div class="panel panel-default panel-acesso-sistema">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-unlock-alt"></i>&nbsp;Acesso ao Sistema</h3>
                        </div>
                        <div class="panel-body">
                            <form id="form-acesso-sistema" method="POST" name="form-acesso-sistema">
                                <div class="form-group">
                                    <label for="ACESSO_LOGIN">Login</label>
                                    <input autofocus="true" class="form-control" id="ACESSO_LOGIN" maxlength="50" name="ACESSO_LOGIN" placeholder="Digite o login" required="true" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="ACESSO_SENHA">Senha</label>
                                    <input class="form-control" id="ACESSO_SENHA" maxlength="8" name="ACESSO_SENHA" placeholder="Digite a senha" required="true" type="password">
                                </div>
                                <button class="btn btn-default" name="btnEntrar" type="submit">ENTRAR</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>