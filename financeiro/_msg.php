<?php
if (isset($_GET['ret'])) {
    $ret = $_GET['ret'];
}
if (isset($ret)) {
    switch ($ret) {
        case 0:
            echo '<div class="alert alert-warning">
                                Preencher o(s) campo(s) obrigatório(s)
                            </div>';
            break;
        case 1:
            echo '<div class="alert alert-success">
                                Ação realizada com sucesso
                            </div>';
            break;
        case -1:
            echo '<div class="alert alert-danger">
                                Erro
                            </div>';
            break;
        case -2:
            echo '<div class="alert alert-danger">
                                    A senha devera conter no minimo 6 caracteres!
                                </div>';
            break;
        case -3:
            echo '<div class="alert alert-danger">
                                        A senha e a repetir senha não devem ser divergentes!
                                    </div>';
            break;
        case -4:
            echo '<div class="alert alert-danger">
                                           O registro não pode ser excluido
                                        </div>';
            break;
        case -5:
            echo '<div class="alert alert-danger">
                                               Email ja cadastrado!
                                            </div>';
            break;
        case -6:
            echo '<div class="alert alert-danger">
                                                   Usuario não encontrado!
                                                </div>';
            break;
    }
}
