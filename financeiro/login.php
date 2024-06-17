<?php

require_once '../DAO/UsuarioDAO.php';

if (isset($_POST['btn_validar'])) {
    $senha = $_POST['senha'];
    $email = $_POST['email'];

    $objdao = new UsuarioDAO();

    $ret = $objdao->ValidarDados($senha, $email);
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
include_once "_head.php"
?>

<body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <?php include_once '_msg.php'   ?>
                <br /><br />
                <h2> Aqui você faz seu login</h2>

                <h5>( Faça o login para obter seu acesso )</h5>
                <br />
            </div>
        </div>
        <div class="row ">

            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong> Acesse com os detalhes do seu login </strong>
                    </div>
                    <div class="panel-body">
                        <form action="login.php" method="post">
                            <br />
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                                <input id="email" name="email" type="text" class="form-control" placeholder="Seu e-mail" />
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input id="senha" name="senha" type="password" class="form-control" placeholder="Sua senha" />
                            </div>


                            <button onclick="return ValidarLogin()" name="btn_validar" class="btn btn-primary ">Acessar </button>
                        </form>
                        <hr />
                        Não registrado ? <a href="cadastro.php">CLIQUE AQUI </a>

                    </div>

                </div>
            </div>


        </div>
    </div>


    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

</body>

</html>