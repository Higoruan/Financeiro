<?php

require_once '../DAO/UsuarioDAO.php';

if (isset($_POST['btn_cadastrar'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $resenha = $_POST['resenha'];

    $objdao = new UsuarioDAO();

    $ret = $objdao->CriarCadastro($nome, $email, $senha, $resenha);
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
include_once "_head.php"
?>

<body>
    <div class="container">
        <div class="row text-center  ">
            <div class="col-md-12">
                <?php include_once '_msg.php' ?>
                <br /><br />
                <h2 style="font-family: fantasy class;">Financeiro - Cadastro</h2>

                <h5>(Faça seu cadastro) </h5>
                <br />
            </div>
        </div>
        <div class="row">

            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>Novo usuário? Cadastre-se agora! </strong>
                    </div>
                    <div class="panel-body">
                        <form action="cadastro.php" method="post">
                            <br />
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-circle-o-notch"></i></span>
                                <input name="nome" id="nome" type="text" class="form-control" placeholder="Seu nome" maxlength="50"/>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon">@</span>
                                <input name="email" id="email" type="text" class="form-control" placeholder="Seu e-mail" maxlength="50" />
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input name="senha" id="senha" type="password" class="form-control" placeholder="Senha" maxlength="12"/>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input name="resenha" id="resenha" type="password" class="form-control" placeholder="Repetir Senha" />
                            </div>

                            <button onclick="return ValidarCamposUsuario()" name="btn_cadastrar" href="index.html" class="btn btn-success ">Registre-se</button>
                        </form>
                        <hr />
                        Tem registro ? <a href="login.php">Login aqui</a>

                    </div>

                </div>
            </div>


        </div>
    </div>



</body>

</html>