<?php


require_once '../DAO/categoriaDAO.php';


$nome = '';



if (isset($_POST['btn_gravar'])) {
    $nome = $_POST['nome'];

    $objdao = new CategoriaDAO();

    $ret = $objdao->CadastrarCategoria($nome);
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
                    <?php include_once '_msg.php'     ?>
                    <div class="col-md-12">
                        <h2>Nova categoria</h2>
                        <h5>Aqui você cadastra suas categorias. Exemplo: Conta de luz </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form action="nova_categoria.php" method="post">
                    <div class="form-group">
                        <label>Nome da categoria</label>
                        <input class="form-control" placeholder="Digite sua categoria aqui..." name="nome" id="nome" maxlength="35" />
                    </div>
                    <button name="btn_gravar" onclick="return ValidarCamposCategoria()" type="submit" class="btn btn-success">Gravar</button>
                </form>
            </div>
            <!-- /. PAGE INNER -->

            <div>

</body>

</html>