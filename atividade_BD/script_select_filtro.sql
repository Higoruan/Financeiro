select nome_usuario, nome_categoria
from tb_categoria
inner join tb_usuario
on tb_categoria.id_usuario = tb_usuario.id_usuario
where nome_usuario like '%a%'

-- Resultado 2

