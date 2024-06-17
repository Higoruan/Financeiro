<?php
require_once '../DAO/UtilDAO.php';
UtilDAO::VerificarLogado();
include_once '../DAO/contaDAO.php';

$dao = new Conta();

if (isset($_GET['cod']) && is_numeric($_GET['cod'])) {

    $idConta = $_GET['cod'];
    $dados = $dao->DetalharConta($idConta);

    if (count($dados) == 0) {
        header('location: consultar_contas.php');
        exit;
    }
} else if (isset($_POST['btn_salvar'])) {

    $idConta = $_POST['cod'];
    $banco = $_POST['banco'];
    $numero = $_POST['numero'];
    $agencia = $_POST['agencia'];
    $saldo = $_POST['saldo'];

    $ret = $dao->alterarConta($idConta, $banco, $numero, $agencia, $saldo);

    header('location: consultar_contas.php?ret=' . $ret);
} else if (isset($_POST['btn_excluir'])) {

    $idConta = $_POST['cod'];
    $ret = $dao->ExcluirConta($idConta);
    header('location: consultar_contas.php?ret=' . $ret);
    exit;
} else {
    header('location: consultar_contas.php');
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
        <!-- /. NAV SIDE -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <?php include_once '_msg.php' ?>
                        <h2>Altere suas contas</h2>
                        <h5>(Aqui você poderá Alterar as suas contas)</h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form action="alterar_conta.php" method="post">
                    <div class="form-group">
                        <input type="hidden" name="cod" value="<?= $dados[0]['id_conta'] ?>">
                        <hr>
                        <label>Nome do banco*</label>
                        <input class="form-control" placeholder="Digite o nome do banco..." name="banco" id="banco" value="<?= $dados[0]['banco_conta'] ?>" maxlength="12" />
                    </div>
                    <div class="form-group">
                        <label>Agencia*</label>
                        <input class="form-control" placeholder="Digite o endereço da agência..." name="agencia" id="agencia" value="<?= $dados[0]['agencia_conta'] ?>" maxlength="8" />
                    </div>
                    <div class="form-group">
                        <label>Número da conta*</label>
                        <input class="form-control" placeholder="Digite o número da conta..." name="numero" id="numerodaconta" value="<?= $dados[0]['numero_conta'] ?>" maxlength="12"/>
                    </div>
                    <div class="form-group">
                        <label>Saldo*</label>
                        <input class="form-control" placeholder="Digite o saldo da conta" name="saldo" id="saldo" value="<?= $dados[0]['saldo_conta'] ?>" maxlength="10.2" />
                    </div>
                    <button name="btn_salvar" onclick="return ValidarCamposConta()" type="submit" class="btn btn-success">SALVAR</button>
                    <button type="button" data-toggle="modal" data-target="#modalExcluir" class="btn btn-danger">Excluir</button>

                    <div class="modal fade" id="modalExcluir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Confirmação de exclusão</h4>
                                </div>
                                <div class="modal-body">
                                    Deseja excluir a conta:<b> <?= $dados[0]['banco_conta'] ?> / <?= $dados[0]['agencia_conta'] ?> / <?= $dados[0]['numero_conta'] ?> / <?= $dados[0]['saldo_conta'] ?> </b>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary" name="btn_excluir">Sim</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>
    </div>
    </form>
</body>

</html>