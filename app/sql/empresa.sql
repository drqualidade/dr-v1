create table empresa(
	id int(11) primary key auto_increment,
	nome varchar(100),
	cnpj varchar(100),
	endereco varchar(250),
	email varchar(80),
	telefone varchar(80),
	responsavel varchar(60),
	dataHoraCadastro varchar(25));