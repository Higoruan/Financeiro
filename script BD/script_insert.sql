-- COMANDO PARA INSERIR

-- insert into nome_da_tabela (colunas) values (valores)

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values 
('Ana Maria','ana@gmail.com','senha123','2021-02-21');

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values 
('Carlos Junior','carlos@gmail.com','44510','2021-02-25');

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values 
('Alexandre Junior','ale@gmail.com','3323','2021-02-25');

insert into tb_categoria
(nome_categoria, id_usuario)
values
('alimentação', 1);
    
insert into tb_categoria
(nome_categoria, id_usuario)
values
('alimentação', 2);
    
insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Empresa colchção', '4399924455', 'Rua dos Colchões', 1);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Empresa Comer Bem', '5599983456', 'Rua dos Restaurantes');


