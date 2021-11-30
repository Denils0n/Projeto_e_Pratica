create database DadosUsuarios;
use DadosUsuarios;

create table USUARIO(
	USU_codigo INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    USU_nome varchar(45),
    USU_email varchar (255) UNIQUE,
    USE_senha varchar (8),
    USE_cpf varchar(11) UNIQUE NOT NULL

);

create table RESTAURANTE(
	RES_codigo INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	RES_nome varchar(45) NOT NULL,
    RES_exp varchar(45) NOT NULL,
    RES_local VARCHAR(255) NOT NULL,
    RES_dias_abre VARCHAR(255) NOT NULL,
    RES_hora_abre TIME,
    RES_hora_feichar TIME,
    RES_telefone INT(9)
);
