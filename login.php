<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <?php
        include './head_tags.php';
        ?>
        <style type="text/css">
            .panel-acesso-sistema {
                margin-top: 100px;
            }
        </style>
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
                            <form>
                                <div class="form-group">
                                    <label for="acesso-login">Login</label>
                                    <input autofocus="true" class="form-control" id="acesso-login" maxlength="50" placeholder="Digite o login" required="true" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="acesso-senha">Senha</label>
                                    <input class="form-control" id="acesso-senha" maxlength="8" placeholder="Digite a senha" required="true" type="password">
                                </div>
                                <button class="btn btn-default" type="submit">ENTRAR</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>