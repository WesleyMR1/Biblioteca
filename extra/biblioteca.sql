-- mysql -h localhost -u root -p
create database  biblioteca;

use biblioteca

create table  Clientes(
    id_cliente int not null primary key auto_increment,
    nome varchar(140) not null
);

create table  Livros(
    id_livro int not null primary key auto_increment,
    nome varchar(140) not null
);

create table  Locacoes(
    id_locacoes int not null primary key auto_increment,
    cliente int not null,
    livro int not null,
    constraint FKcliente foreign key(cliente) references Clientes(id_cliente),
    constraint FKlivro foreign key(livro) references Livros(id_livro)
);



insert into clientes(nome) values ("cliente1");
insert into livros(nome) values ("livro1");

insert into locacoes(cliente, livro) values (1, 1);