<?php

require_once 'Conexao.php';
require_once 'UtilDAO.php';

class Conta extends Conexao
{
    public function CadastrarConta($nome, $agencia, $numerodaconta, $saldo)
    {
        if (trim($nome) == '' || trim($agencia) == '' || trim($numerodaconta) == '' || trim($saldo) == '') {
            return 0;
        }
        $conexao = parent::retornarConexao();

        $comando_sql = 'insert into tb_conta(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
                            values (?, ?, ?, ?, ?);';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $nome);
        $sql->bindValue(2, $agencia);
        $sql->bindValue(3, $numerodaconta);
        $sql->bindValue(4, $saldo);
        $sql->bindValue(5, UtilDAO::CodigoLogado());

        try {

            $sql->execute();

            return 1;
        } catch (Exception $ex) {
            //echo $ex->getMessage();
            return  -1;
        }
    }
    public function ConsultarConta()
    {
        $conexao = parent::retornarConexao();

        $comando_sql = 'select id_conta,
                               banco_conta,
                               agencia_conta,
                               numero_conta,
                               saldo_conta
                        from   tb_conta
                        where id_usuario = ? order by banco_conta';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, UtilDAO::CodigoLogado());

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchAll();
    }
    public function alterarConta($idConta, $banco, $numero, $agencia, $saldo)
    {
        if (trim($banco) == '' || $idConta == '' || trim($numero) == '' || trim($agencia) == '' || trim($saldo) == '') {
            return 0;
        }
        $conexao = parent::retornarConexao();
        $comando_sql = 'update tb_conta
                        set banco_conta = ?,
                            agencia_conta = ?,
                            numero_conta = ?,
                            saldo_conta = ?
                            where id_conta = ? and
                            id_usuario = ?';
        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando_sql);

        $sql->bindvalue(1, $banco);
        $sql->bindvalue(2, $agencia);
        $sql->bindvalue(3, $numero);
        $sql->bindvalue(4, $saldo);
        $sql->bindvalue(5, $idConta);
        $sql->bindvalue(6, UtilDAO::CodigoLogado());

        try {

            $sql->execute();
            return 1;
        } catch (Exception $ex) {
            echo $ex->getMessage();
            return -1;
        }
    }

    public function ExcluirConta($idConta)
    {

        if ($idConta == '') {
            return 0;
        }


        $conexao = parent::retornarConexao();
        $comando_sql = 'delete from tb_conta
        where id_conta = ? 
        and id_usuario = ?';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $idConta);
        $sql->bindValue(2, UtilDAO::CodigoLogado());

        try {
            $sql->execute();
            return 1;
        } catch (Exception $ex) {
            echo $ex->getMessage();
            return -4;
        }
    }
    public function DetalharConta($idConta)
    {
        $conexao = parent::retornarConexao();
        $comando_sql = 'select id_conta,
                                banco_conta,
                                agencia_conta,
                                numero_conta,
                                saldo_conta
                          from tb_conta
                        where  id_conta = ?
                        and    id_usuario = ? ';
        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando_sql);
        $sql->bindValue(1, $idConta);
        $sql->bindValue(2, UtilDAO::CodigoLogado());

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchAll();
    }
}
