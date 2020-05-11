
/*Para o banco de dados abaixo, realize as tarefas solicitadas: 
(Se desejar, pode encaminhar link para solução no GitHub, preferimos).
 a) Escreva um SELECT que retorne o nome_estado com valor ‘Paraná’. */
 SELECT * FROM NOME_ESTADO where nome_estado = 'Paraná'

--  b) Escreva um SELECT que retorne todas as tuplas com o “nome_estado” e o “nome_pais”.
 SELECT estado.nome_estado, pais.nome_pais FROM estado, pais WHERE estado.cd_pais = pais.cd_pais

--  c) Altere a tabela “pais” para adicionar um novo campo de nome “sigla” com limite para 2 caracteres. 
 ALTER TABLE pais add sigla varchar(2)
 
 --Escreva abaixo o comando utilizado para realizar esta tarefa. 
 /*d) Crie uma nova tabela chamada “cidade” com as colunas “id”, 
 “nome_cidade” e “id_estado” sendo a coluna “id” uma Primary Key 
 com Auto Increment e “id_estado” uma Foreign Key da coluna “id” 
 da tabela “estado”.*/

 CREATE TABLE CIDADE ( id INT NOT NULL AUTO_INCREMENT,
                       nome_cidade VARCHAR,
                       id_estado INT,
                       PRIMARY_KEY(id),
                       FOREIGN_KEY id_estado references id on (estado) 
                        )
