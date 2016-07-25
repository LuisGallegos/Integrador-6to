create database SRH;
go
use SRH;
go
CREATE TABLE users (
  username varchar(9)  NOT NULL,
  pass varchar(128) NOT NULL,
  email varchar(50)  NOT NULL,
  stat int NOT NULL DEFAULT '1',
  PRIMARY KEY (username)
);

insert into users VALUES ('212561549','123','luisalberto.gallegos@ge.com',1);

CREATE TABLE attempts(
  username varchar(9) NOT NULL,
  times int NOT NULL DEFAULT '0',
  FOREIGN KEY (username) REFERENCES users(username)
);

insert into attempts VALUES ('212561549','0');

CREATE TABLE Estados
(
 id_estado int IDENTITY,
 estado text,
 PRIMARY KEY (id_estado)
);

CREATE TABLE Categorias
(
	id_categoria int IDENTITY,
	descripcion VARCHAR(80),
	sueldo DECIMAL(8,2),
	PRIMARY KEY (id_categoria)
);

CREATE TABLE Vacantes
(
	id_folioV int IDENTITY,
	nombre varchar(80),
	fecha_inicio DATE,
	fecha_termino DATE,
	Salario decimal(8,2),
	Descripcion varchar(200),
	PRIMARY KEY (id_folioV)
);

CREATE TABLE Candidatos (
	id_folioC int IDENTITY,
	nombre varchar(100),
	ape_p varchar(100),
	ape_m varchar(100),
	telefono varchar(10),
	email varchar(100),
	folioV_id int,
	estado_id int,
	PRIMARY KEY (id_folioC),
	FOREIGN KEY (estado_id) REFERENCES Estados(id_estado),
	FOREIGN KEY (folioV_id) REFERENCES Vacantes(id_folioV)
);


CREATE TABLE Evaluaciones
(
	id_folioE int IDENTITY,
	folioC_id int,
	entrevista_pre varchar(2),
	prue_conoc varchar(2),
	prue_psico varchar(2),
	entrevista_fin varchar(2),
	PRIMARY KEY (id_folioE),
	FOREIGN KEY (folioC_id) REFERENCES Candidatos(id_folioC)
);

CREATE TABLE Departamentos
(
 id_departamento int IDENTITY,
 descripcion varchar(80),
 categoria_id int,
 PRIMARY KEY (id_departamento),
 FOREIGN KEY (categoria_id) REFERENCES Categorias(id_categoria)
);

CREATE TABLE Puestos (
id_puesto int IDENTITY,
descripcion text,
departamento_id int,
FOREIGN KEY (departamento_id) REFERENCES Departamentos(id_departamento),
PRIMARY KEY(id_puesto)
);


CREATE TABLE Contratos
(
 id_contrato int IDENTITY,
 folioC_id int,
 fecha_inicio DATE,
 fecha_termino DATE,
 puesto_id int,
 PRIMARY KEY (id_contrato),
 FOREIGN KEY (folioC_id) REFERENCES Candidatos(id_folioC),
 FOREIGN KEY (puesto_id) REFERENCES Puestos(id_puesto),
);


CREATE TABLE Empleados
(
 id_empleado int IDENTITY,
 cuenta varchar(10),
 fechaalta date,
 contrato_id int,
 PRIMARY KEY (id_empleado),
  FOREIGN KEY (contrato_id) REFERENCES Contratos(id_contrato)
);

CREATE TABLE Percepciones
(
	id_percepcion int IDENTITY,
	descripcion text,
	aumento DECIMAL(2,2),
	PRIMARY KEY (id_percepcion)

);

CREATE TABLE Deducciones
(
	id_deduccion int IDENTITY,
	descripcion text,
	deduccion DECIMAL(2,2),
	PRIMARY KEY (id_deduccion)

);

CREATE TABLE Nomina
(
 id_nomina int IDENTITY,
 empleado_id int ,
 fecha date,
 percepciones1_id int ,
 percepciones2_id int ,
 percepciones3_id int ,
 percepciones4_id int ,
 percepciones5_id int ,
 percepciones6_id int ,
 percepciones7_id int ,
 percepciones8_id int ,
 percepciones9_id int ,
 percepciones10_id int ,
 deduccion1_id int ,
 deduccion2_id int ,
 deduccion3_id int ,
 deduccion4_id int ,
 deduccion5_id int ,
 total decimal(8,2),
 PRIMARY KEY (id_nomina),
 FOREIGN KEY (empleado_id) REFERENCES Empleados(id_empleado),
 FOREIGN KEY (percepciones1_id) REFERENCES Percepciones(id_percepcion),
 FOREIGN KEY (percepciones2_id) REFERENCES Percepciones(id_percepcion),
 FOREIGN KEY (percepciones3_id) REFERENCES Percepciones(id_percepcion),
 FOREIGN KEY (percepciones4_id) REFERENCES Percepciones(id_percepcion),
 FOREIGN KEY (percepciones5_id) REFERENCES Percepciones(id_percepcion),
 FOREIGN KEY (percepciones6_id) REFERENCES Percepciones(id_percepcion),
 FOREIGN KEY (percepciones7_id) REFERENCES Percepciones(id_percepcion),
 FOREIGN KEY (percepciones8_id) REFERENCES Percepciones(id_percepcion),
 FOREIGN KEY (percepciones9_id) REFERENCES Percepciones(id_percepcion),
 FOREIGN KEY (percepciones10_id) REFERENCES Percepciones(id_percepcion),
 FOREIGN KEY (deduccion1_id) REFERENCES Deducciones(id_deduccion),
 FOREIGN KEY (deduccion2_id) REFERENCES Deducciones(id_deduccion),
 FOREIGN KEY (deduccion3_id) REFERENCES Deducciones(id_deduccion),
 FOREIGN KEY (deduccion4_id) REFERENCES Deducciones(id_deduccion),
 FOREIGN KEY (deduccion5_id) REFERENCES Deducciones(id_deduccion)
);


INSERT INTO Estados VALUES
('PROCESO');
INSERT INTO Estados VALUES
('EXAMINADO');
INSERT INTO Estados VALUES
('SELECCIONADO');
INSERT INTO Estados VALUES
('CONTRATADO');

INSERT INTO Categorias VALUES
('EJECUTIVOS',20000.00);
INSERT INTO Categorias VALUES
('CONSULTORES',8000.00);
INSERT INTO Categorias VALUES
('OPERACIONES',6000.00);
INSERT INTO Categorias VALUES
('ADMINISTRATIVOS',8000.00);

INSERT INTO Vacantes VALUES
('Contador Administrativo','2016/06/06','2016/12/06',6000.00,
'Analizar los ingresos y costos de cada actividad, la cantidad de recursos utilizados,
as� como la cantidad de trabajo o depreciaci�n de la maquinaria, equipos o edificios');
INSERT INTO Vacantes VALUES
('Abogado Laboral','2016/06/13','2016/1/06',8000.00,
'Obligaciones de despidos, reclamaciones de cantidad, mobbing, expedientes de regulaci�n de empleo,
accidentes de trabajo, invalidez o jubilaci�n');
INSERT INTO Vacantes VALUES
('Abogado Penal','2016/06/13','2017/06/06',9000.00,
'Defender a personas acusadas de cometer delitos, como delitos econ�micos,
delitos administrativos y pol�ticos');
INSERT INTO Vacantes VALUES
('Secretaria Ejecutiva','2016/06/13','2016/12/06',5500.00,
'Labores administrativas, de organizaci�n y difusi�n al congreso.');
INSERT INTO Vacantes VALUES
('Gerente de Ventas','2016/06/13','2017/12/06',1500.00,
'Coordinacion del personal del area de ventas');
INSERT INTO Vacantes VALUES
('Gerente de Compras','2016/06/13','2017/12/06',1500.00,
'Coordinacion del personal del area de compras');
INSERT INTO Vacantes VALUES
('Gerente Administrativo','2016/06/13','2017/12/06',1500.00,
'Coordinacion del personal del area administrativo');
INSERT INTO Vacantes VALUES
('Gerente General','2016/06/13','2017/12/06',1500.00,
'Coordinacion del personal en general e intermediario con la alta gerencia');
INSERT INTO Vacantes VALUES
('Lic. Recursos Humanos','2016/06/13','2017/12/06',12500.00,
'Coordinacion y Administrar las acciones del personal y sus puestos');
INSERT INTO Vacantes VALUES
('Seguridad','2016/06/13','2017/12/06',6000.00,
'Coordinacion de la seguridad de la empresa en general');
INSERT INTO Vacantes VALUES
('Seguridad Nocturna','2016/06/13','2017/12/06',6000.00,
'Coordinacion de la seguridad de la empresa por la noche');
INSERT INTO Vacantes VALUES
('Secretaria Personal Presidente','2016/06/13','2017/12/06',10000.00,
'Coordinacion de las actividades del presidente, administracion de citas
y acciones personales y laborales del presidente');
INSERT INTO Vacantes VALUES
('Recepcionista','2016/06/13','2016/12/06',7500.00,
'Coordinacion de las personas con sus respectivas area, atenciones telefonicas y
coordinacion de las mismas al area correspondiente');
INSERT INTO Vacantes VALUES
('Ingeniero en Sistemas','2016/06/13','2017/12/06',2000.00,
'Coordinacion de la red en la empresa para el buen funcionamiento de la empresa,
sus computadoras y dispositivos');
INSERT INTO Vacantes VALUES
('Marketing','2016/06/13','2017/12/06',1800.00,
'Coordinacion del marketing de la empresa para su buena presentacion ante la sociedad
asi mismo como el buen conocimiento ante la misma');


INSERT INTO Candidatos VALUES
('Omar','Perez','Torres','4421747542','omar.pereztorres@hotmail.com',1,4);
INSERT INTO Candidatos VALUES
('Martin','Perez','Morales','4421747544','martin.perezmorales@hotmail.com',2,4);
INSERT INTO Candidatos VALUES
('Roberto ','Moya','Servin','4421747546','robert.moyaservin@hotmail.com',3,4);
INSERT INTO Candidatos VALUES
('Jaqueline','Martinez','Servin','4421747548','jackyservin@hotmail.com',4,4);
INSERT INTO Candidatos VALUES
('Carlos','Rojas','Guerrero','4421747550','carlos.warrior@hotmail.com',5,1);
INSERT INTO Candidatos VALUES
('Luis','Gallegos','Salgado','4421747552','luis.gallegos@hotmail.com',6,1);
INSERT INTO Candidatos VALUES
('Danie','Perez','Torres','4421747554','danny.pereztorres@hotmail.com',7,1);
INSERT INTO Candidatos VALUES
('Juan','Perea','Toledo','4421747558','juanitotoledo@hotmail.com',8,1);
INSERT INTO Candidatos VALUES
('Fernando','Hernandez','Sandoval','4421747556','fersandohrz@hotmail.com',9,1);
INSERT INTO Candidatos VALUES
('Ulises','Rodriguez','Leiva','4421747560','ulileiva@hotmail.com',10,1);
INSERT INTO Candidatos VALUES
('Ricardo','Oropeza','Ruiz','4421747562','richioropeza@hotmail.com',11,1);
INSERT INTO Candidatos VALUES
('Diana','Paz','Soriano','4421747564','Pazdianita@hotmail.com',12,1);
INSERT INTO Candidatos VALUES
('Maria','Ramos','Ramirez','4421747566','mary_ramis@hotmail.com',13,1);
INSERT INTO Candidatos VALUES
('Jesus','Ponce','Maldonado','4421747568','YisusMaldo@hotmail.com',14,1);
INSERT INTO Candidatos VALUES
('Alejandro','Gonzales','Torres','4421747570','alex.goz@hotmail.com',15,1);


INSERT INTO Evaluaciones VALUES
(1,'SI','SI','SI','SI');
INSERT INTO Evaluaciones VALUES
(2,'SI','SI','SI','NO');
INSERT INTO Evaluaciones VALUES
(3,'SI','SI','NO','NO');
INSERT INTO Evaluaciones VALUES
(4,'SI','SI','NO','SI');
INSERT INTO Evaluaciones VALUES
(5,'SI','NO','NO','SI');
INSERT INTO Evaluaciones VALUES
(6,'SI','NO','SI','SI');
INSERT INTO Evaluaciones VALUES
(7,'SI','SI','NO','SI');
INSERT INTO Evaluaciones VALUES
(8,'SI','SI','NO','NO');
INSERT INTO Evaluaciones VALUES
(9,'SI','SI','SI','SI');
INSERT INTO Evaluaciones VALUES
(10,'SI','SI','SI','SI');
INSERT INTO Evaluaciones VALUES
(11,'SI','SI','SI','SI');
INSERT INTO Evaluaciones VALUES
(12,'SI','SI','SI','SI');
INSERT INTO Evaluaciones VALUES
(13,'SI','SI','SI','SI');
INSERT INTO Evaluaciones VALUES
(14,'NO','NO','NO','NO');
INSERT INTO Evaluaciones VALUES
(15,'SI','SI','NO','NO');

INSERT INTO Departamentos VALUES
('CONTADURIA',3);
INSERT INTO Departamentos VALUES
('SISTEMAS',3);
INSERT INTO Departamentos VALUES
('RECURSOS HUMANOS',4);
INSERT INTO Departamentos VALUES
('VENTAS',1);
INSERT INTO Departamentos VALUES
('COMPRAS',1);
INSERT INTO Departamentos VALUES
('PUBLICIDAD',4);
INSERT INTO Departamentos VALUES
('FISCAL',2);
INSERT INTO Departamentos VALUES
('ADMINISTRATIVO',4);
INSERT INTO Departamentos VALUES
('OPERATIVO',3);

INSERT INTO Puestos VALUES
('Contador Administrativo',1);
INSERT INTO Puestos VALUES
('Abogado Laboral',7);
INSERT INTO Puestos VALUES
('Abogado Penal',7);
INSERT INTO Puestos VALUES
('Secretaria Ejecutiva',8);
INSERT INTO Puestos VALUES
('Gerente Ventas',4);
INSERT INTO Puestos VALUES
('Gerente Compras',5);
INSERT INTO Puestos VALUES
('Gerente Administrativo',8);
INSERT INTO Puestos VALUES
('Gerente General',8);
INSERT INTO Puestos VALUES
('Lic. Reccursos Humanos',3);
INSERT INTO Puestos VALUES
('Seguridad',9);
INSERT INTO Puestos VALUES
('Seguridad Nocturna',9);
INSERT INTO Puestos VALUES
('Secretaria Personal Presidencial',8);
INSERT INTO Puestos VALUES
('Recepcionista',8);
INSERT INTO Puestos VALUES
('Ingeniero en Sistemas',2);
INSERT INTO Puestos VALUES
('Marketing',6);

INSERT INTO Contratos VALUES
(1,'2016/06/06','2016/12/06',1);
INSERT INTO Contratos VALUES
(2,'2016/06/13','2016/1/06',2);
INSERT INTO Contratos VALUES
(3,'2016/06/13','2017/06/06',3);
INSERT INTO Contratos VALUES
(4,'2016/06/13','2016/12/06',4);

INSERT INTO Empleados VALUES
(1234567890,'2016/06/06',1);
INSERT INTO Empleados VALUES
(1234567880,'2016/06/13',2);
INSERT INTO Empleados VALUES
(1234567870,'2016/06/13',3);
INSERT INTO Empleados VALUES
(1234567860,'2016/06/13',4);


INSERT INTO Percepciones VALUES
('Prima Vacacional',0.25);
INSERT INTO Percepciones VALUES
('Aguinaldo',0.50);
INSERT INTO Percepciones VALUES
('Prima Dominical',0.25);
INSERT INTO Percepciones VALUES
('Horas extras',0.25);
INSERT INTO Percepciones VALUES
('Prima por Antiguedad',0.25);
INSERT INTO Percepciones VALUES
('Vales de Despensa',0.4);
INSERT INTO Percepciones VALUES
('Aguinaldo',0.50);
INSERT INTO Percepciones VALUES
('Ayuda Transporte',0.15);
INSERT INTO Percepciones VALUES
('Ayuda Renta',0.20);
INSERT INTO Percepciones VALUES
('Prima por Puntualidad',0.05);


INSERT INTO Deducciones VALUES
('Seguro Social',0.062);
INSERT INTO Deducciones VALUES
('Credito INFONAVIT',0.12);
INSERT INTO Deducciones VALUES
('Credito Personal',0.08);
INSERT INTO Deducciones VALUES
('ISR',0.025);
INSERT INTO Deducciones VALUES
('Pension Alimenticia',0.25);
INSERT INTO Deducciones VALUES
('Penalisaciones',0.05);

INSERT INTO Nomina VALUES
(1,'2016/06/2',1,2,3,4,5,6,7,8,9,10,1,2,3,5,NULL,NULL);
INSERT INTO Nomina VALUES
(2,'2016/06/2',1,2,3,NULL,NULL,6,7,8,9,10,1,NULL,3,5,NULL,NULL);
INSERT INTO Nomina VALUES
(3,'2016/06/2',1,2,3,4,NULL,6,7,8,9,10,1,2,NULL,5,NULL,NULL);
INSERT INTO Nomina VALUES
(4,'2016/06/2',1,2,3,4,5,6,7,NULL,9,NULL,1,2,3,5,4,NULL);



CREATE PROCEDURE ps_ponertotal
@id_nomina int,
@total int
as
UPDATE Nomina set total=@total where id_nomina=@id_nomina;


CREATE PROCEDURE ps_obtenersalario
@id_empleado int
as
SELECT sueldo from Categorias as cat join Departamentos as dep on cat.id_categoria=dep.categoria_id
join Puestos as pu on dep.id_departamento=pu.departamento_id join Contratos as con on pu.id_puesto=con.puesto_id
join Empleados as em on em.contrato_id=con.id_contrato where id_empleado=@id_empleado;

/************************************************ ****************************************************/
CREATE FUNCTION ft_ejemplo
begin
	@id_empleado int,
return @salario
as
	@suelo
	@deducion1
	@retencion

	Select @sueldo = sueldo from Categoia as ca join puesto as pu

	select @deducion1 = porcen taje from

	@retencion = @sueldo *  @deducion1
	@salario = @sueldo - @retencion

@return @salario

set total = @salario from Nomina
