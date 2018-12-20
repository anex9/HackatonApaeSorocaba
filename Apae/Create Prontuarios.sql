create database usuarios;

use usuarios;

create table prontuario(
	ID int(10) NOT NULL AUTO_INCREMENT,
    paciente varchar(40),
    terapeuta varchar(40),
    especialidade varchar(20),
    deficiencia varchar(20),
    descricao varchar(250),
    dataCadastro date,
    dataNascimento date,
    nSus varchar(10),
	PRIMARY KEY (ID)
)

