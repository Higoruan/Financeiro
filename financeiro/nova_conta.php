<?php
require_once '../DAO/UtilDAO.php';
UtilDAO::VerificarLogado();
require_once '../DAO/contaDAO.php';


if (isset($_POST['btn_alterar'])) {
    $nome = $_POST['banco'];
    $agencia = $_POST['agencia'];
    $numerodaconta = $_POST['numerodaconta'];
    $saldo = $_POST['saldo'];

    $objdao = new Conta();

    $ret = $objdao->CadastrarConta($nome, $agencia, $numerodaconta, $saldo);
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
        include_once "_menu.php"
        ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <?php include_once '_msg.php' ?>
                        <h2>Cadastre suas contas</h2>
                        <h5>(Aqui você poderá cadastrar todas as suas contas)</h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form action="nova_conta.php" method="post">
                    <div class="form-group">
                        <label>Nome do banco*</label>
                        <input name="banco" id="banco" class="form-control" placeholder="Digite o nome do banco..." maxlength="20" />
                    </div>
                    <div class="form-group">
                        <label>Agencia*</label>
                        <input name="agencia" id="agencia" class="form-control" placeholder="Digite o endereço da agência..." maxlength="8"/>
                    </div>
                    <div class="form-group">
                        <label>Número da conta*</label>
                        <input name="numerodaconta" id="numerodaconta" class="form-control" placeholder="Digite o número da conta..." maxlength="12"/>
                    </div>
                    <div class="form-group">
                        <label>Saldo*</label>
                        <input name="saldo" id="saldo" class="form-control" placeholder="Digite o saldo da conta" maxlength="10.2" />
                    </div>
                    <button name="btn_alterar" onclick="return ValidarCamposConta()" type="submit" class="btn btn-success">Cadastrar</button>
                </form>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>


</body>

</html>