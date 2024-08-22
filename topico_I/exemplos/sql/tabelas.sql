/* CRIANDO TABELA PESSOA */
CREATE TABLE pessoa (
	cpf varchar(12) not null,
    nome varchar(60) not null,
    rg varchar(8) not null,
    dt_nascimento varchar(10) not null,
    
    constraint id_pessoa primary key (cpf)
);