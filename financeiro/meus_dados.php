<?php

require_once '../DAO/UtilDAO.php';
UtilDAO::VerificarLogado();
require_once '../DAO/UsuarioDAO.php';

$objdao = new UsuarioDAO();

$nome = '';
$email = '';

if (isset($_POST['btn_salvar'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $ret = $objdao->GravarDados($nome, $email);
}
$dados = $objdao->Carregardados();

//echo '<pre>';
//print_r($dados);
//echo '</pre>';


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
include_once '_head.php'
?>

<body>
    <div id="wrapper">
        <?php
        include_once "_topo.php";
        include_once "_menu.php"
        ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <?php include_once '_msg.php' ?>
                        <h2>Meus dados</h2>
                        <h5>(Nesta paginá você poderá altger seus dados) </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form action="meus_dados.php" method="post">
                    <div class="form-group">
                        <label>Nome</label>
                        <input name="nome" id="nome" class="form-control" placeholder="Digite aqui seu nome" value="<?= $dados[0]['nome_usuario'] ?>" />
                    </div>
                    <label>Seu e-mail</label>
                    <input name="email" id="email" class="form-control" placeholder="Digite seu e-mail" value="<?= $dados[0]['email_usuario'] ?>" />
                    <br>

                    <!-- /. PAGE INNER  -->

                    <button onclick="return ValidarCamposUsuario()" name="btn_salvar" type="submit" class="btn btn-success">Gravar</button>
            </div>
        </div>
        </form>
        <!-- /. PAGE WRAPPER  -->
    </div>
    </div>


</body>

</html>