create database prova2;

-- selecionar banco de dados
use prova2;

-- criação da tabela
drop table if exists fluxo_caixa;
create table fluxo_caixa(
id_fluxocx        int		not null  auto_increment,
data     	date		not null,
tipo     varchar(10)		not null,
valor  	decimal(10,2)		not null,
historico  	varchar(150)		not null,
cheque  	varchar(3)   	not null,
primary key (id_fluxocx)
);