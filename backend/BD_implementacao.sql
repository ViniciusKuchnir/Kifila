create database Kifila;
use Kifila;

create table usuario(
	codUser INTEGER primary key auto_increment,
    nome varchar(30),
    sobrenome varchar(30),
    email varchar(100),
    cpf varchar(20),
    sexo enum('M', 'F'),
    senha varchar(70)
);

create table empresa(
	codEmpresa integer primary key auto_increment, 
    nome varchar(30), 
	email varchar(100),
    cnpj varchar(40),
    idsetor int, 
    senha varchar(70)
);

alter table empresa add constraint idsetor 
foreign key (idsetor) references setor(idsetor);

create table setor(
	idsetor int primary key auto_increment,
    nomesetor varchar(55)
);