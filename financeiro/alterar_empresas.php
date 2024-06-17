<?php
require_once '../DAO/UtilDAO.php';
UtilDAO::VerificarLogado();
require_once '../DAO/EmpresaDAO.php';

$dao = new EmpresaDAO();

if (isset($_GET['cod']) && is_numeric($_GET['cod'])) {

    $idEmpresa = $_GET['cod'];

    $dados = $dao->DetalharEmpresa($idEmpresa);

    if (count($dados) == 0) {
        header('location: consultar_empresa.php');
        exit;
    }
} else if (isset($_POST['btn_salvar'])) {

    $idEmpresa = $_POST['cod'];
    $nomeempresa = $_POST['nome_empresa'];
    $telefoneempresa = $_POST['telefone_empresa'];
    $enderecoempresa = $_POST['endereco_empresa'];

    $ret = $dao->AlterarEmpresa($idEmpresa, $nomeempresa, $telefoneempresa, $enderecoempresa);

    header('location: consultar_empresa.php?ret=' . $ret);
} else if (isset($_POST['btn_excluir'])) {

    $id_empresa = $_POST['cod'];
    $ret = $dao->ExcluirEmpresa($id_empresa);
    header('location: consultar_empresa.php?ret=' . $ret);
    exit;
} else {
    header('location: consultar_empresa.php');
    exit;
}


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
include_once "_head.php"
?>

<body>
    <div id="wrapper">
        <?php
        include_once "_topo.php";
        include_once "_menu.php";
        ?>

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <?php include_once '_msg.php' ?>
                        <h2>Alterar empresas</h2>
                        <h5>(Aqui você poderá alterar suas empresas)</h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form action="alterar_empresas.php" method="post">
                    <input type="hidden" name="cod" value="<?= $dados[0]['id_empresa'] ?>">
                    <div class="form-group">
                        <label>Nome da empresa*</label>
                        <input class="form-control" placeholder="Digite o nome da empresa..." name="nome_empresa" id="nome_empresa" value="<?= $dados[0]['nome_empresa'] ?>" maxlength="55" />
                    </div>
                    <div class="form-group">
                        <label>Endereço(Opcional)</label>
                        <input class="form-control" placeholder="Digite o endereço da empresa (Opcional)..." name="endereco_empresa" id="endereco_empresa" value="<?= $dados[0]['endereco_empresa'] ?>" maxlength="100" />
                    </div>
                    <div class="form-group">
                        <label>Telefone(Opcional)</label>
                        <input class="form-control" placeholder="Digite o telefone da empresa (Opcional)..." name="telefone_empresa" id="telefone_empresa" value="<?= $dados[0]['telefone_empresa'] ?>" maxlength="11" />
                    </div>
                    <button name="btn_salvar" onclick="return ValidarCamposEmpresa()" type="submit" class="btn btn-success">Salvar</button>
                    <button data-toggle="modal" data-target="#modalExcluir" type="reset" class="btn btn-danger">Excluir</button>
                    <div class="modal fade" id="modalExcluir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Confirmação de exclusão</h4>
                                </div>
                                <div class="modal-body">
                                    Deseja excluir a empresa:<b> <?= $dados[0]['nome_empresa'] ?> ?</b>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary" name="btn_excluir">Sim</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>



</body>

</html>