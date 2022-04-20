-- drop banco de dados
-- drop database projeto1;

-- Criação do banco de dados
create database projeto1;

-- selecionar banco de dados
use projeto1;

-- criação da tabela
create table usuario(
id_usuario        int           not null  auto_increment,
nome_usuario      varchar(100)  not null,
email_usuario     varchar(100)  not null,
telefone_usuario  varchar(30)   not null,
primary key (id_usuario)
);