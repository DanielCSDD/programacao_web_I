/*CRIANDO TABELA - HABITOS*/
create table habito(
    id int auto_increment,
    nome varchar(60) not null,
    status varchar(2) not null,

    constraint id_habito primary key (id)
);

/*EXCLUINDO TABELA*/
drop table habito;