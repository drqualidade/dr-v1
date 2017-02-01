create table usuario(
	id int(11) primary key auto_increment,
	nome varchar(250),
	cpf varchar(20),
	telefone varchar(20),
	email varchar(20),
	login varchar(250),
	senha varchar(250),
	endereco varchar(250),
	empresa varchar(100),
	tipoUsuario varchar(10),
	dataHoraCadastro varchar(25));

	INSERT INTO usuario (nome,cpf,email,login,senha,tipoUsuario,dataHoraCadastro,empresa,endereco) 
	VALUES ('MMVA','00000','contato@mmva.com.br','adm','202cb962ac59075b964b07152d234b70','adm','28-11-2016 09:23','MMVA','Rua Nikita Khruschev Nº 28 Quadra B Shangrila IV - Parque 10 Manaus');