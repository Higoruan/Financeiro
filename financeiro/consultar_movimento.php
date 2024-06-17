<?php
require_once '../DAO/UtilDAO.php';
UtilDAO::VerificarLogado();
require_once '../DAO/movimentoDAO.php';

$dt_inicial = '';
$dt_final = '';
$tipo = '';



if (isset($_POST['BtnPesquisar'])) {
    $tipo = $_POST['tipo'];
    $dt_inicial = $_POST['data_inicial'];
    $dt_final = $_POST['data_final'];


    $objdao = new MovimentoDAO();

    $movs = $objdao->FiltrarMovimento($tipo, $dt_inicial, $dt_final);
} else if (isset($_POST['btnExcluir'])) {
    echo 'caindo';
    $IdMov = $_POST['IdMov'];
    $Idcont = $_POST['IdCont'];
    $valor = $_POST['valor'];
    $tipo = $_POST['tipo'];

    $dao = new MovimentoDAO();

    $ret = $dao->ExcluirMovimento($IdMov, $Idcont, $valor, $tipo);


}


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
include_once '_head.php'
?>

<body>
    <div id="wrapper">
        <?php
        include_once '_topo.php';
        include_once '_menu.php';
        ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">

                        <?php include_once '_msg.php' ?>

                        <h2>Consultar movimentos</h2>
                        <h5>(Consulte todos os movimentos em determinado periodo)</h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form action="consultar_movimento.php" method="post">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Tipo de movimento</label>
                            <select name="tipo" class="form-control">
                                <option value="0" <?= $tipo == '0' ? 'selected' : '' ?>>TODOS</option>
                                <option value="1" <?= $tipo == '1' ? 'selected' : '' ?>>Entrada</option>
                                <option value="2" <?= $tipo == '2' ? 'selected' : '' ?>>Saida</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Data inicial*</label>
                            <input name="data_inicial" id="data_inicial" type="date" class="form-control" placeholder="Digite a data do movimento..." value="<?= $dt_inicial ?>" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Data final*</label>
                            <input name="data_final" id="data_final" type="date" class="form-control" placeholder="Digite a data do movimento..." value="<?= $dt_final ?>" />
                        </div>
                    </div>
                    <center>
                        <button onclick="return ValidarConsultarMovimento()" class="btn btn-info" type="submit" name="BtnPesquisar">Pesquisar</button>
                    </center>
                </form>
                <hr>
                <?php if (isset($movs)) { ?>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Advanced Tables -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Resultado encontrado!
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                <thead>
                                                    <tr>
                                                        <th>Data</th>
                                                        <th>Tipo</th>
                                                        <th>Categoria</th>
                                                        <th>Empresa</th>
                                                        <th>Conta</th>
                                                        <th>Valor</th>
                                                        <th>Observação</th>
                                                        <th>Ação</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php
                                                    $total = 0;
                                                    for ($i = 0; $i < count($movs); $i++) {
                                                        if ($movs[$i]['tipo_movimento'] == 1) {
                                                            $total = $total + $movs[$i]['valor_movimento'];
                                                        } else {
                                                            $total = $total - $movs[$i]['valor_movimento'];
                                                        }
                                                    ?>
                                                        <tr class="odd gradeX">
                                                            <td><?= $movs[$i]['data_movimento'] ?></td>
                                                            <td><?= $movs[$i]['tipo_movimento'] == 1 ? 'ENTRADA' : 'SAIDA' ?></td>
                                                            <td><?= $movs[$i]['nome_categoria'] ?></td>
                                                            <td><?= $movs[$i]['nome_empresa'] ?></td>
                                                            <td><?= $movs[$i]['banco_conta'] ?> AG: <?= $movs[$i]['agencia_conta'] ?> Núm: <?= $movs[$i]['numero_conta'] ?> </td>
                                                            <td> R$ <?= number_format($total, 2, ',', '.');
                                                                    $movs[$i]['valor_movimento'] ?></td>
                                                            <td><?= $movs[$i]['obs_movimento'] ?></td>
                                                            <td>
                                                                <a href="#"><button class="btn-danger btn-sm" data-toggle="modal" data-target="#modalExcluir<?= $i ?>">Excluír</button></a>
                                                                <form action="consultar_movimento.php" method="post">

                                                                    <input type="hidden" name="IdMov" value="<?= $movs[$i]['id_movimento'] ?>">
                                                                    <input type="hidden" name="IdCont" value="<?= $movs[$i]['id_conta'] ?>">
                                                                    <input type="hidden" name="tipo" value="<?= $movs[$i]['tipo_movimento'] ?>">
                                                                    <input type="hidden" name="valor" value="<?= $movs[$i]['valor_movimento'] ?>">


                                                                    <div class="modal fade" id="modalExcluir<?= $i ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                                    <h4 class="modal-title" id="myModalLabel">Confirmação de exclusão</h4>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <center>
                                                                                        <b>Deseja excluir o movimento:</b> <br><br>
                                                                                    </center>
                                                                                    <b> Data do Movimento: </b><?= $movs[$i]['data_movimento'] ?><br><br>
                                                                                    <b> Tipo do movimento: </b><?= $movs[$i]['tipo_movimento'] == 1 ? 'entrada' : 'saida' ?><br><br>
                                                                                    <b> Categoria:</b> <?= $movs[$i]['nome_categoria'] ?><br><br>
                                                                                    <b> Empresa:</b> <?= $movs[$i]['nome_empresa'] ?><br><br>
                                                                                    <b> Conta:</b> <?= $movs[$i]['banco_conta'] ?> AG: <?= $movs[$i]['agencia_conta'] ?> Núm: <?= $movs[$i]['numero_conta'] ?><br><br>
                                                                                    <b>Valor:</b> R$ <?= number_format($movs[$i]['valor_movimento'], 2, ',', '.') ?>


                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                                                    <button type="submit" class="btn btn-primary" name="btnExcluir">Sim</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </td>

                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>

                                        <center>
                                            <label style="color: <?= $total < 0 ? 'red' : 'green' ?>;">TOTAL: R$ <?= number_format($total, 2, ',', '.');
                                                                                                                    $total ?></label>
                                        </center>
                                    </div>

                                </div>
                            </div>
                            <!--End Advanced Tables -->
                        </div>
                    </div>
                <?php } ?>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

</body>

</html>