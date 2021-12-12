create database DADOS_PROJETO;
use DADOS_PROJETO;

create table USUARIO(
	USU_codigo INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    USU_nome varchar(45),
    USU_email varchar (255) UNIQUE,
    USU_senha varchar (8),
    USU_cpf varchar(11) UNIQUE NOT NULL,
    CONSTRAINT USU_pk PRIMARY KEY (USU_codigo)
);

create table RESTAURANTE(
	RES_codigo INT NOT NULL AUTO_INCREMENT,
	RES_nome varchar(45) NOT NULL,
    RES_exp varchar(45) NOT NULL,
    RES_local VARCHAR(255) NOT NULL,
    RES_dias_abre VARCHAR(255) NOT NULL,
    RES_telefone INT(9),
    CONSTRAINT RES_pk PRIMARY KEY (RES_codigo)
);

create table COMENTARIO(
    COM_codigo INT NOT NULL AUTO_INCREMENT,
    COM_texto VARCHAR(455),
    COM_RES_codigo INT,
    COM_USU_codigo INT,
    CONSTRAINT COM_pk PRIMARY KEY (COM_codigo),
    CONSTRAINT COM_RES_pk FOREIGN KEY (COM_RES_codigo) REFERENCES  RESTAURANTE (RES_codigo),
    CONSTRAINT COM_USU_pk FOREIGN KEY (COM_USU_codigo) REFERENCES USUARIO (USU_codigo)


);
