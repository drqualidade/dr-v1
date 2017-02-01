create table categoria(
	id int(11) primary key auto_increment,
	nomeCategoria varchar(100),
	idEmpresa int(11)	
);

create table subcategoria(
	id int(11) primary key auto_increment,
	nomeSubcategoria varchar(100),
	idCategoria int(11)
);

create table questao(
	id int(11) primary key auto_increment,
	nomeQuestao varchar(250),
	idSubcategoria int(11)
);

