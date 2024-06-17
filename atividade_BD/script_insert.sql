insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('Baronir', 'baro@gmail.com', 'baro123', '2021-12-11');

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('clebinho', 'cleber@gmail.com', 'xiaman', '2021-12-10');

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('rodrigo', 'rodri@hotmail.com', 'rodrigamer', '2021-12-09');

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('marcelo', 'marcin@gmail.com', 'bicicleta10', '2021-12-12');

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('pedrin', 'pedrindaquebrada@gmail.com', 'quebrada123', '2021-12-13');

insert into tb_categoria
(nome_categoria, id_usuario)
value
('Brinquedo', 1);

insert into tb_categoria
(nome_categoria, id_usuario)
value
('comida', 1);

insert into tb_categoria
(nome_categoria, id_usuario)
value
('lazer', 2);

insert into tb_categoria
(nome_categoria, id_usuario)
value
('viagem', 2);

insert into tb_categoria
(nome_categoria, id_usuario)
value
('trabalho', 4);

insert into tb_categoria
(nome_categoria, id_usuario)
value
('curso', 4);

insert into tb_categoria
(nome_categoria, id_usuario)
value 
('bike', 5);

insert into tb_categoria
(nome_categoria, id_usuario)
value
('moto', 5);

insert into tb_categoria
(nome_categoria, id_usuario)
value
('carro', 6);

insert into tb_categoria
(nome_categoria, id_usuario)
value 
('computadore', 6);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Ri Happy', '984285376', 'Rua Amarambeira', 1);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
value
('Burguer King', '996873838', 'Rua das Catapimbas', 1);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
value
('Casas Bahia', '978583214', 'Caminho para Amaderora', 2);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
value
('Atual Cargas', '932511294', 'Av. inglaterra', 2);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
value
('Farmacia', '84531269', 'Rua cadeira', 4);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
value
('WM BARROS', '32549898', 'Av. Melinda', 4);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
value
('Biciclets', '932517896', 'Rua da amarambeiras', 5);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Motocicletas Do Rodrigo', '32514747', 'Av. califórnia', 5);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Carr Center', '984756932', 'Av inglaterra', 6);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Tec Computer', '84652136', 'Av guarulhos', 6);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Santander', '112233', '013', '2000', 1);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Banco do Brasil', '885566', '012', '43000', 1);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('sicredi', '778899', '011', '5000', 2);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Caixa', '112223', '010', '12000', 2);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Bradesco','555333', '009', '5000', 4);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('itau', '669922', '008', '13000', 4);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Banco Norte', '994477', '007', '8321', 5);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Banco Sul', '586632', '006', '5792', 5);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Banco Leste', '258369', '005', '7269', 6);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Banco Oeste', '123968', '004', '90000', 6 );

--


 insert into tb_movimento
(tipo_movimento , data_movimento ,valor_movimento , obs_movimento , id_usuario,  id_categoria, id_empresa , id_conta)
values 
(1, '2021-12-01', 850, 'contrabando', 1 , 2 , 1, 1 );

insert into tb_movimento
(tipo_movimento , data_movimento ,valor_movimento , obs_movimento , id_usuario,  id_categoria, id_empresa , id_conta)
values 
(2, '2021-12-04', 850, 'contrabando', 1 , 2 , 1, 1 );

insert into tb_movimento
(tipo_movimento , data_movimento ,valor_movimento , obs_movimento , id_usuario,  id_categoria, id_empresa , id_conta)
values 
(1, '2021-12-03', 850, 'contrabando', 2 , 3 , 3, 3 );

insert into tb_movimento
(tipo_movimento , data_movimento ,valor_movimento , obs_movimento , id_usuario,  id_categoria, id_empresa , id_conta)
values 
(2, '2021-12-02', 850, 'contrabando', 2 , 3 , 3, 3 );

--

insert into tb_movimento
(tipo_movimento , data_movimento ,valor_movimento , obs_movimento , id_usuario,  id_categoria, id_empresa , id_conta)
values 
(1, '2021-12-05', 850, 'contrabando', 4 , 5 , 4 , 5 );

insert into tb_movimento
(tipo_movimento , data_movimento ,valor_movimento , obs_movimento , id_usuario,  id_categoria, id_empresa , id_conta)
values 
(2, '2021-12-21', 850, 'contrabando', 4 , 5 , 4 , 5 );

insert into tb_movimento
(tipo_movimento , data_movimento ,valor_movimento , obs_movimento , id_usuario,  id_categoria, id_empresa , id_conta)
values 
(1, '2021-12-01', 850, 'contrabando', 5 , 7, 6, 8 );

insert into tb_movimento
(tipo_movimento , data_movimento ,valor_movimento , obs_movimento , id_usuario,  id_categoria, id_empresa , id_conta)
values 
(2, '2021-12-14', 850, 'contrabando', 5 , 7, 6, 8  );

insert into tb_movimento
(tipo_movimento , data_movimento ,valor_movimento , obs_movimento , id_usuario,  id_categoria, id_empresa , id_conta)
values 
(1, '2021-12-25', 850, 'contrabando', 6, 9 , 8 , 10 );

insert into tb_movimento
(tipo_movimento , data_movimento ,valor_movimento , obs_movimento , id_usuario,  id_categoria, id_empresa , id_conta)
values 
(2, '2021-12-25', 850, 'contrabando', 6, 9 , 8 , 10 );



 
 
 










