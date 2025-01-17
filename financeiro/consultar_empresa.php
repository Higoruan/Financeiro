<?php
require_once '../DAO/UtilDAO.php';
UtilDAO::VerificarLogado();
require_once '../DAO/empresaDAO.php';

$dao = new EmpresaDAO();

$empresas = $dao->ConsultarEmpresa();


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
                        <h2>Consultar suas empresas</h2>
                        <h5>(Consulte aqui todas as suas empresas)</h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="row">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Empresas cadastradas, caso deseja alterar, clique no botão!
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Nome da empresas</th>
                                                <th>Telefone</th>
                                                <th>Endereço</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($i = 0; $i < count($empresas); $i++) { ?>
                                                <tr class="odd gradeX">
                                                    <td><?= $empresas[$i]['nome_empresa'] ?></td>
                                                    <td><?= $empresas[$i]['telefone_empresa'] ?></td>
                                                    <td><?= $empresas[$i]['endereco_empresa'] ?></td>
                                                    <td>
                                                        <a href="alterar_empresas.php?cod=<?= $empresas[$i]['id_empresa'] ?>"><button type="submit" class="btn btn-warning btn-sm">ALTERAR</button></a>
                                                    </td>

                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <!--End Advanced Tables -->
                    </div>
                </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->

        <!-- /. WRAPPER  -->

</body>

</html>