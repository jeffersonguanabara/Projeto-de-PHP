create database virtualedu;

use virtualedu;


create table turma (
	idturma  char(11) not null,
	nometurma varchar(40) not null,
    qtdalunos int,
    CONSTRAINT pk_turma PRIMARY KEY(idturma)
);

create table aluno(
	mat_aluno int not null,
    cpf_aluno char(11) not null,
    nome varchar(45) not null, 
    nome_Pai varchar(45),
    nome_Mae varchar(45),
    dataNasc char(11)not null,
    idturma char(11) not null,
    CONSTRAINT pk_aluno PRIMARY KEY (mat_aluno, cpf_aluno),
    CONSTRAINT fk_idturma foreign key (idturma) references turma(idturma)
);

create table disciplina(
	iddisciplina varchar(7) not null,
    nome varchar(45) not null,
    ch int not null,
    constraint pk_disciplina primary key (iddisciplina)
);

create table professor(
	mat_professor int not null,
    cpf_professor char(11) not null,
    nome varchar(45),
    dataNasc char(8) not null,
    login char(11) not null,
    senha char(11) not null,
    iddisciplina varchar(7) not null,
    constraint pk_professor primary key (mat_professor, cpf_professor),
    constraint fk_iddisciplina foreign key (iddisciplina) references disciplina(iddisciplina)
);

create table diario(
	iddiario varchar(7) not null,
	iddisciplina varchar(7) not null,
    idturma char(11) not null,
	nome_diario varchar(45) not null,
    mat_professor int not null,
    constraint pk_diario primary key (iddisciplina, idturma, mat_professor),
    constraint fk_id_disciplina foreign key (iddisciplina) references disciplina(iddisciplina),
    constraint fk_id_turma foreign key (idturma) references turma(idturma),
	constraint fk_matprofessor foreign key (mat_professor) references professor (mat_professor)
);

create table nota(
	cod_Nota int not null,
	nota float,
	mat_aluno int not null,
	iddisciplina varchar(7) not null,
	constraint pk_nota primary key (cod_Nota, mat_aluno, iddisciplina),
	constraint fk_mat_aluno foreign key (mat_aluno) references aluno(mat_aluno),
	constraint fk_id_nota_disciplina foreign key (iddisciplina) references disciplina(iddisciplina)
);

create table admin(

 login char(11) not null,
 senha char(11) not null
);

insert into admin(login,senha) values ('admin','admin');
insert into turma (idturma,nometurma) values ('1','TURMA 1');
insert into turma (idturma,nometurma) values ('2','TURMA 2');
insert into turma (idturma,nometurma) values ('3','TURMA 3');

insert into disciplina(iddisciplina,nome,ch) values('1','Português','80');

insert into disciplina(iddisciplina,nome,ch) values('2','Matemática','80');

insert into disciplina(iddisciplina,nome,ch) values('3','História','80');

insert into disciplina(iddisciplina,nome,ch) values('4','Geografia','80');

insert into disciplina(iddisciplina,nome,ch) values('5','Inglês','40');