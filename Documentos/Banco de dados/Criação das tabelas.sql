CREATE DATABASE DB_Aurora;

USE DB_Aurora;

CREATE TABLE TB_Estado
(
cod_estado int PRIMARY KEY auto_increment,
nome varchar(50),
sigla char(2)
);

CREATE TABLE TB_Cidade 
(
cod_cidade int PRIMARY KEY auto_increment,
nome varchar(100),
estado int,
FOREIGN KEY(estado) REFERENCES TB_Estado (cod_estado)
);

CREATE TABLE TB_Pessoa 
(
cod_pessoa int PRIMARY KEY auto_increment,
Nome varchar(100),
sexo varchar(15),
Data_de_nascimento char(10),
usernick varchar(50),
tipo varchar(32),
foto varchar(300),
cidade int,
FOREIGN KEY(cidade) REFERENCES TB_Cidade (cod_cidade)
);

CREATE TABLE TB_Usuario
(
cod_user int PRIMARY KEY auto_increment,
email varchar(100),
senha varchar(32),
pessoa int,
FOREIGN KEY(pessoa) REFERENCES TB_Pessoa (cod_pessoa)
);

CREATE TABLE TB_Desempenho
(
cod_desempenho int PRIMARY KEY auto_increment,
pontos int,
data_questionario char(10),
usuario int,
FOREIGN KEY(usuario) REFERENCES TB_Usuario (cod_user)
);

CREATE TABLE TB_Materias 
(
cod_materia int PRIMARY KEY auto_increment,
Nome varchar(50)
);

CREATE TABLE TB_Conteudos 
(
cod_conteudo int PRIMARY KEY auto_increment,
pfd varchar(300),
tema varchar(50),
materia int,
FOREIGN KEY(materia) REFERENCES TB_Materias (cod_materia)
);

CREATE TABLE TB_Imagens_Mapa_mental 
(
cod_map_ment int PRIMARY KEY auto_increment,
tema varchar(100),
imagen varchar(300),
usuario int,
materia int,
FOREIGN KEY(materia) REFERENCES TB_Materias (cod_materia),
FOREIGN KEY(usuario) REFERENCES TB_Usuario (cod_user)
);

CREATE TABLE TB_Perguntas_forum 
(
cod_pergunta int PRIMARY KEY auto_increment,
tema varchar(100),
pergunta varchar(1000),
imagem varchar(300),
usuario int,
materia int,
FOREIGN KEY(materia) REFERENCES TB_Materias (cod_materia),
FOREIGN KEY(usuario) REFERENCES TB_Usuario (cod_user)
);

CREATE TABLE TB_Respostas_forum 
(
cod_resposta int PRIMARY KEY auto_increment,
resposta varchar(1000),
usuario int,
pergunta int,
FOREIGN KEY(pergunta) REFERENCES TB_Perguntas_forum (cod_pergunta),
FOREIGN KEY(usuario) REFERENCES TB_Usuario (cod_user)
);

CREATE TABLE TB_Questoes  
(
cod_pergunta int PRIMARY KEY auto_increment,
pergunta varchar(300),
alternatica_1 varchar(100),
alternativa_2 varchar(100),
alternativa_3 varchar(100),
alternativa_4 varchar(100),
alternativa_5 varchar(100),
resposta varchar(100),
disciplina varchar(50),
materia int,
FOREIGN KEY(materia) REFERENCES TB_Materias (cod_materia)
);

CREATE TABLE TB_Respostas  
(
cod_resposta int,
resposta varchar(100),
usuario int,
pergunta int,
PRIMARY KEY(cod_resposta, usuario,pergunta) ,
FOREIGN KEY(usuario) REFERENCES TB_Usuario (cod_user),
FOREIGN KEY(pergunta) REFERENCES TB_Perguntas_forum (cod_pergunta)
);

CREATE TABLE TB_Simulado 
(
cod_quest_sim int PRIMARY KEY auto_increment,
data char(10),
questao int,
FOREIGN KEY(questao) REFERENCES TB_Questoes  (cod_pergunta)
);

CREATE TABLE TB_Exercicio 
(
cod_exercicio int PRIMARY KEY auto_increment,
tema varchar(50),
questao int,
FOREIGN KEY(questao) REFERENCES TB_Questoes  (cod_pergunta)
);