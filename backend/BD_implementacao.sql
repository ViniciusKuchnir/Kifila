create database kifila;
use kifila;

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

create table fila(
    idfila int primary key auto_increment, 
    nome varchar(20),
    descricao varchar(256),
    numerointegrantes int, 
    toleranciamedia time, 
    tempomedioespero time,
    datafila date,
    criador int
);

alter table fila add constraint criador
foreign key (criador) references empresa(codEmpresa);

create table ingresso(
    codIngresso int primary key auto_increment,
    tempoestimado time, 
    tempotolerancia time, 
    lugarfila int, 
    idfila int, 
    iduser int,
    dataingresso date, 
    horaingresso time, 
    horasaida time
);

alter table ingresso add constraint idfila
foreign key (idfila) references fila(idfila);

alter table ingresso add constraint iduser
foreign key (iduser) references usuario(codUser);


