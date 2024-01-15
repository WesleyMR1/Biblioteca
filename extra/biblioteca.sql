create database  biblioteca;

use biblioteca

create table  Clientes(
    id_cliente int not null primary key auto_increment,
    nome_cliente varchar(140) not null
);

create table  Livros(
    id_livro int not null primary key auto_increment,
    nome_livro varchar(140) not null
);

create table  Locacoes(
    id_locacao int not null primary key auto_increment,
    cliente int not null,
    livro int not null,
    constraint FKcliente foreign key(cliente) references Clientes(id_cliente) ON DELETE CASCADE
 ON UPDATE CASCADE,
    constraint FKlivro foreign key(livro) references Livros(id_livro) ON DELETE CASCADE
 ON UPDATE CASCADE
);

create table  Contas(
    id int not null primary key auto_increment,
    nome varchar(140) not null,
    usuario varchar(140) not null,
    senha varchar(160) not null
);



insert into clientes(nome_cliente) values ("Wesley");
insert into livros(nome_livro) values ("A ordem vermelha");
insert into contas(nome, usuario, senha) values ("admin", 'admin', '$2y$10$emfuiNnWl0NdDDBhQvNT1OqRh.nX10P6tOVbKxY1cf2nEQXBQ3uza');

insert into locacoes(cliente, livro) values (1, 1);
