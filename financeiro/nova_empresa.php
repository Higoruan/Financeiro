<?php
require_once '../DAO/UtilDAO.php';
UtilDAO::VerificarLogado();
require_once '../DAO/empresaDAO.php';

$nome = '';
$telefone = '';
$endereco = '';

if (isset($_POST['btn_gravar'])) {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];

    $objempresa = new EmpresaDAO();

    $ret = $objempresa->CadastrarDados($nome, $endereco, $telefone);
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
        z
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <?php include_once '_msg.php'  ?>
                    <div class="col-md-12">
                        <h2>Cadastre sua empresa</h2>
                        <h5>(Aqui você poderá cadastrar todas as suas empresas)</h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form action="nova_empresa.php" method="post">
                    <div class="form-group">
                        <label>Nome da empresa*</label>
                        <input name="nome" id="nome_empresa" value="" class="form-control" placeholder="Digite o nome da empresa..." maxlength="55" />
                    </div>
                    <div class="form-group">
                        <label>Endereço(Opcional)</label>
                        <input name="endereco" value="" class="form-control" placeholder="Digite o endereço da empresa (Opcional)..." maxlength="100"/>
                    </div>
                    <div class="form-group">
                        <label>Telefone(Opcional)</label>
                        <input name="telefone" value="" class="form-control" placeholder="Digite o telefone da empresa (Opcional)..." maxlength="11" />
                    </div>
                    <button name="btn_gravar" onclick="return ValidarCamposEmpresa()" value="" type="submit" class="btn btn-success">Gravar</button>
                </form>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>



</body>

</html>