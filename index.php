<?php
session_start();
require_once './classes/conexao.class.php';
require_once './classes/login.class.php';
if (isset($_REQUEST['LOGOFF'])):
    if ($_REQUEST['LOGOFF'] == "OK"):
        Login::logoff();
    endif;
endif;
if (!(isset($_SESSION['LOGADO']))):
    header("Location:login.php");
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
        <nav class="navbar navbar-inverse navbar-static-top"> <!-- Barra de navegação principal -->
            <div class="container-fluid">
                <div class="navbar-header">
                    <button aria-expanded="false" class="navbar-toggle collapsed" data-target="#navbar-collapse" data-toggle="collapse" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a aria-haspopup="true" aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">Cadastros</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#" title="Bancos">Bancos</a>
                                </li>
                                <li>
                                    <a href="#" title="Centros de Custos">Centros de Custos</a>
                                </li>
                                <li>
                                    <a href="#" title="Cheques">Cheques</a>
                                </li>
                                <li>
                                    <a href="#" title="Clientes e Fornecedores">Clientes e Fornecedores</a>
                                </li>
                                <li>
                                    <a href="#" title="Códigos de Serviços">Códigos de Serviços</a>
                                </li>
                                <li>
                                    <a href="#" title="Condições de Pagamento">Condições de Pagamento</a>
                                </li>
                                <li>
                                    <a href="#" title="Contabilistas">Contabilistas</a>
                                </li>
                                <li>
                                    <a href="#" title="CST ICMS">CST ICMS</a>
                                </li>
                                <li>
                                    <a href="#" title="CST IPI">CST IPI</a>
                                </li>
                                <li>
                                    <a href="#" title="CST PIS/COFINS">CST PIS/COFINS</a>
                                </li>
                                <li>
                                    <a href="#" title="ECF (Emissor de Cupom Fiscal)">ECF (Emissor de Cupom Fiscal)</a>
                                </li>
                                <li>
                                    <a href="#" title="Estados">Estados</a>
                                </li>
                                <li>
                                    <a href="#" title="Formas de Pagamento">Formas de Pagamento</a>
                                </li>
                                <li>
                                    <a href="#" title="Grupos e Subgrupos">Grupos e Subgrupos</a>
                                </li>
                                <li>
                                    <a href="#" title="Locais de Estoque">Locais de Estoque</a>
                                </li>
                                <li>
                                    <a href="#" title="Microterminais">Microterminais</a>
                                </li>
                                <li>
                                    <a href="#" title="Municípios">Municípios</a>
                                </li>
                                <li>
                                    <a href="#" title="Natureza da Operação (CFOP)">Natureza da Operação (CFOP)</a>
                                </li>
                                <li>
                                    <a href="#" title="NECF (Impressora Não Fiscal)">NECF (Impressora Não Fiscal)</a>
                                </li>
                                <li>
                                    <a href="#" title="Plano de Contas">Plano de Contas</a>
                                </li>
                                <li>
                                    <a href="#" title="Produtos e Serviços">Produtos e Serviços</a>
                                </li>
                                <li>
                                    <a href="#" title="Representantes">Representantes</a>
                                </li>
                                <li>
                                    <a href="#" title="SAT">SAT</a>
                                </li>
                                <li>
                                    <a href="#" title="Tipos de Documentos">Tipos de Documentos</a>
                                </li>
                                <li>
                                    <a href="#" title="Unidades de Medida">Unidades de Medida</a>
                                </li>
                                <li>
                                    <a href="#" title="Usuários">Usuários</a>
                                </li>
                                <li>
                                    <a href="#" title="Veículos">Veículos</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a aria-haspopup="true" aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">Entradas</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#" title="Notas Fiscais de Compra">Notas Fiscais de Compra</a>
                                </li>
                                <li>
                                    <a href="#" title="Notas Fiscais de Aquisição de Serviços">Notas Fiscais de Aquisição de Serviços</a>
                                </li>
                                <li>
                                    <a href="#" title="CTE (Conhecimento de Transporte Eletrônico)">CTE (Conhecimento de Transporte Eletrônico)</a>
                                </li>
                                <li>
                                    <a href="#" title="Pedidos de Compras">Pedidos de Compras</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a aria-haspopup="true" aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">Saídas</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#" title="Emitir NFE (Nota Fiscal Eletrônica - DANFE)">Emitir NFE (Nota Fiscal Eletrônica - DANFE)</a>
                                </li>
                                <li>
                                    <a href="#" title="Emitir NFS-e (Nota Fiscal de Serviço Eletrônica)">Emitir NFS-e (Nota Fiscal de Serviço Eletrônica)</a>
                                </li>
                                <li>
                                    <a href="#" title="Emitir CTE (Conhecimento de Transporte Eletrônico)">Emitir CTE (Conhecimento de Transporte Eletrônico)</a>
                                </li>
                                <li>
                                    <a href="#" title="Pedidos de Vendas (Pré-Venda)">Pedidos de Vendas (Pré-Venda)</a>
                                </li>
                                <li>
                                    <a href="#" title="Cupons Fiscais">Cupons Fiscais</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a aria-haspopup="true" aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">Estoque</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#" title="Entradas e Saídas de Produtos">Entradas e Saídas de Produtos</a>
                                </li>
                                <li>
                                    <a href="#" title="Consultar Estoque">Consultar Estoque</a>
                                </li>
                                <li>
                                    <a href="#" title="Necessidade de Compra">Necessidade de Compra</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a aria-haspopup="true" aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">Financeiro</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#" title="Clientes Bloqueados">Clientes Bloqueados</a>
                                </li>
                                <li>
                                    <a href="#" title="Contas a Pagar">Contas a Pagar</a>
                                </li>
                                <li>
                                    <a href="#" title="Contas a Receber">Contas a Receber</a>
                                </li>
                                <li>
                                    <a href="#" title="Emitir Boletos">Emitir Boletos</a>
                                </li>
                                <li>
                                    <a href="#" title="Emitir Faturas">Emitir Faturas</a>
                                </li>
                                <li>
                                    <a href="#" title="Extrato Bancário">Extrato Bancário</a>
                                </li>
                                <li>
                                    <a href="#" title="Remessa de Boletos">Remessa de Boletos</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a aria-haspopup="true" aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">Relatórios</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#" title=""></a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a aria-haspopup="true" aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">Ferramentas</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#" title="Backup">Backup</a>
                                </li>
                                <li>
                                    <a href="#" title="Importar e Exportar">Importar e Exportar</a>
                                </li>
                                <li>
                                    <a href="" title="Reparo e Restauração">Reparo e Restauração</a>
                                </li>
                                <li>
                                    <a href="" title="Armazenamento XML">Armazenamento XML</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a aria-haspopup="true" aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">Integrações</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#" title="SPED Fiscal">SPED Fiscal</a>
                                </li>
                                <li>
                                    <a href="#" title="SPED Contribuições">SPED Contribuições</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a aria-haspopup="true" aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">Configurações</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#" title="Parâmetros do Sistema">Parâmetros do Sistema</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a aria-haspopup="true" aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">Ajuda</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#" title="Sobre">Sobre</a>
                                </li>
                                <li>
                                    <a href="" title="Manual de Instruções">Manual de Instruções</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="index.php?LOGOFF=OK" title="Sair do Sistema">Sair do Sistema</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </body>
</html>