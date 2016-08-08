create database SRH;
go
use SRH
go
CREATE TABLE users (
  username varchar(9)  NOT NULL,
  pass varchar(128) NOT NULL,
  email varchar(50)  NOT NULL,
  stat int  DEFAULT '1',
  PRIMARY KEY (username)
);

ALTER TABLE users
ADD urlImage varchar(200) NULL;


CREATE TABLE attempts(
  username varchar(9) NOT NULL,
  times int  DEFAULT '0',
  FOREIGN KEY (username) REFERENCES users(username)
);

insert into users values
('212561549','123','luisalberto.gallegos@ge.com',1,''),

('212561548','123','roberto.moya@ge.com',1,'');

insert into attempts values('212561549',0),('212561548',0);

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
	FOREIGN KEY (estado_id) REFERENCES Estados(id_estado) ON DELETE SET NULL ON UPDATE CASCADE,
	FOREIGN KEY (folioV_id) REFERENCES Vacantes(id_folioV) ON DELETE SET NULL ON UPDATE CASCADE
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
	FOREIGN KEY (folioC_id) REFERENCES Candidatos(id_folioC) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE Departamentos
(
 id_departamento int IDENTITY,
 descripcion varchar(80),
 categoria_id int,
 PRIMARY KEY (id_departamento),
 FOREIGN KEY (categoria_id) REFERENCES Categorias(id_categoria) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE Puestos (
id_puesto int IDENTITY,
descripcion text,
departamento_id int,
FOREIGN KEY (departamento_id) REFERENCES Departamentos(id_departamento) ON DELETE CASCADE ON UPDATE CASCADE,
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
 FOREIGN KEY (folioC_id) REFERENCES Candidatos(id_folioC) ON DELETE CASCADE ON UPDATE CASCADE,
 FOREIGN KEY (puesto_id) REFERENCES Puestos(id_puesto) ON DELETE CASCADE ON UPDATE CASCADE,
);


CREATE TABLE Empleados
(
 id_empleado int IDENTITY,
 cuenta varchar(10),
 fechaalta date,
 contrato_id int,
 PRIMARY KEY (id_empleado),
  FOREIGN KEY (contrato_id) REFERENCES Contratos(id_contrato) ON DELETE CASCADE ON UPDATE CASCADE
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
 FOREIGN KEY (empleado_id) REFERENCES Empleados(id_empleado) ON DELETE CASCADE ON UPDATE CASCADE,
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
INSERT INTO Estados VALUES
('DECLINADO');

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
asi como la cantidad de trabajo o depreciacion de la maquinaria, equipos o edificios');
INSERT INTO Vacantes VALUES
('Abogado Laboral','2016/06/13','2016/1/06',8000.00,
'Obligaciones de despidos, reclamaciones de cantidad, mobbing, expedientes de regulacion de empleo,
accidentes de trabajo, invalidez o jubilacion');
INSERT INTO Vacantes VALUES
('Abogado Penal','2016/06/13','2017/06/06',9000.00,
'Defender a personas acusadas de cometer delitos, como delitos economicos,
delitos administrativos y politicos');
INSERT INTO Vacantes VALUES
('Secretaria Ejecutiva','2016/06/13','2016/12/06',5500.00,
'Labores administrativas, de organizacion y difusion al congreso.');
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




--------------  STORE PROCEDURES!----------------------------

-------------  PROCEDIMIENTO PARA CONSULTA VACANTES
CREATE PROCEDURE CVacSRH as
SELECT id_folioV as 'folioVacante',nombre,fecha_inicio as 'fechaInicio',fecha_termino as 'fechaTermino',Salario as 'salario',Descripcion as 'descripcion' FROM Vacantes;
EXEC CVacSRH

----------------- PROCEDIMIENTO PARA INSERTAR VACANTE
CREATE PROCEDURE IVacSRH
@nombre varchar(80),
@fecha_inicio DATE,
@fecha_termino DATE,
@Salario decimal(8,2),
@Descripcion varchar(200)
as
INSERT INTO Vacantes(nombre,fecha_inicio,fecha_termino,Salario,Descripcion) VALUES (@nombre,@fecha_inicio,@fecha_termino,@Salario,@Descripcion);

EXEC IVacSRH 'lololo','2016/06/13','2017/12/06',1800.00,
'Coordinacion del marketing de la empresa para su buena presentacion ante la sociedad
asi mismo como el buen conocimiento ante la misma'

------------- PROCEDIMIENTO PARA ACTUALIZAR VACANTES
CREATE PROCEDURE EVacSRH
@id_folioV int,
@nombre varchar(80),
@fecha_inicio DATE,
@fecha_termino DATE,
@Salario decimal(8,2),
@Descripcion varchar(200)
as
UPDATE Vacantes SET nombre=@nombre,fecha_inicio=@fecha_inicio,fecha_termino=@fecha_termino,Salario=@Salario,Descripcion=@Descripcion
WHERE id_folioV=@id_folioV;

EXEC EVacSRH 1,'Contador Administrativo','2010/06/06','2010/12/06',10000.00,
'Analizar los ingresos y costos de cada actividad, la cantidad de recursos utilizados,
asi como la cantidad de trabajo o depreciacion de la maquinaria, equipos o edificios'


------------------ PROCEDIMIENTO PARA ELIMINAR VACANTE
CREATE PROCEDURE DVacSRH
@id_folioV int
as
DELETE Vacantes WHERE id_folioV=@id_folioV;
EXEC DVacSRH 16

set dateformat 'ymd';

----------------- PROCEDIMIENTO CONSULTA VACANTES, ONY ID AND NAME

CREATE PROCEDURE ComboVacSRH as
SELECT id_folioV as 'folioVacante', nombre FROM Vacantes;

EXEC ComboVacSRH


---------------- PROCEDIMIENTO CONSULTA ESTADOS
CREATE PROCEDURE ComboEsSRH as
SELECT id_estado as 'id_estado', estado FROM Estados;

EXEC ComboEsSRH;
------------------ PROCEDIMIENTO CONSULTA CANDIDATOS

CREATE PROCEDURE CCanSRH as
SELECT c.id_folioC,c.nombre+' '+c.ape_p+' '+c.ape_m as 'Nombre',c.telefono,c.email ,v.nombre as 'Vacante_Solicitada',e.estado as Estado FROM Candidatos as c
join Vacantes as v ON c.folioV_id=v.id_folioV
join Estados as e ON c.estado_id=e.id_estado;

EXEC CCanSRH

------------------ PROCEDIMIENTO INSERTAR CANDIDATO
CREATE PROCEDURE ICanSRH
@nombre varchar(100),
@ape_p varchar(100),
@ape_m varchar(100),
@telefono varchar(10),
@email varchar(100),
@folioV_id int,
@estado_id int
as
INSERT INTO Candidatos(nombre,ape_p,ape_m,telefono,email,folioV_id,estado_id) VALUES (@nombre,@ape_p,@ape_m,@telefono,@email,@folioV_id,@estado_id);

EXEC ICanSRH 'Alejandro','Gonzales','Torres','4421747570','alex.goz@hotmail.com',15,1


------------------ PROCEDIMIENTO CANDIDATO ACTUALIZAR


CREATE PROCEDURE DCanSRH
@id_folioC int,
@nombre varchar(100),
@ape_p varchar(100),
@ape_m varchar(100),
@telefono varchar(10),
@email varchar(100),
@estado_id int
as
UPDATE Candidatos SET nombre=@nombre,ape_p=@ape_p,ape_m=@ape_m,telefono=@telefono,email=@email,estado_id=@estado_id WHERE id_folioC=@id_folioC;

EXEC DCanSRH 5,'Alejandro','Gonzales','Torres','4421747570','alex.goz@hotmail.com',1

------------------ PROCEDIMIENTO CONTRATADO EL CANDIDATO

CREATE PROCEDURE  MCanSRH
@id_folioC int
as
INSERT INTO Contratos(folioC_id,fecha_inicio,fecha_termino,puesto_id) VALUES (@id_folioC,getdate(),'2020/12/31',ROUND(RAND(CHECKSUM(NEWID()))*((SELECT COUNT(*) FROM PUESTOS)-1),0)+1)
DECLARE @contrato INT
DECLARE @apellido VARCHAR(3)
SELECT @apellido= substring(ape_p,1,3) FROM Candidatos WHERE id_folioC=@id_folioC
SELECT @contrato=id_contrato FROM Contratos WHERE folioC_id=@id_folioC
INSERT INTO Empleados(cuenta,fechaalta,contrato_id) VALUES ((@apellido+'1234567'),getdate(),@contrato)
UPDATE Candidatos SET estado_id=4 WHERE id_folioC=@id_folioC;


------------------ PROCEDIMIENTO CONSULTA EMPLEADOS
CREATE PROCEDURE CEmpSRH as
SELECT ca.nombre+' '+ca.ape_p+' '+ca.ape_m as 'Nombre',ca.telefono,ca.email,e.cuenta,e.fechaalta,e.contrato_id FROM Empleados as e
JOIN Contratos as c ON e.contrato_id=c.id_contrato
JOIN Candidatos as ca ON c.folioC_id=ca.folioV_id WHERE e.contrato_id=c.id_contrato

EXEC CEmpSRH

------------------ PROCEDIMIENTO ELIMINAR EMPLEADOS
CREATE PROCEDURE DEnpSRH
@id_empleado INT
as
DELETE Empleados WHERE id_empleado=@id_empleado;

EXEC DEnpSRH 8


----------------- PROCEDIMIENTO ACTUALIZAR EMPLEADOS
CREATE PROCEDURE AEmpSRH
@id_empleado int,
@cuenta varchar(10),
@fechaalta date,
@contrato_id int
as
UPDATE Empleados SET cuenta=@cuenta,fechaalta=@fechaalta,contrato_id=@contrato_id
WHERE id_empleado=@id_empleado;

EXEC AEmpSRH 2,'756774575','2016/06/06',1

------------ PROCEDIMIENTO NOMINAS 1
CREATE PROCEDURE ps_ponertotal1
@id_empleado int
as
UPDATE nomina set total = sueldo from Categorias as cat join Departamentos as dep on cat.id_categoria=dep.categoria_id
join Puestos as pu on dep.id_departamento=pu.departamento_id join Contratos as con on pu.id_puesto=con.puesto_id
join Empleados as em on em.contrato_id=con.id_contrato where id_empleado=@id_empleado and empleado_id=@id_empleado;


-------------------- NOMINAS 2

create procedure p
as
DECLARE @intFlag INT
SET @intFlag = 1
WHILE (@intFlag <=(SELECT MAX(id_empleado)  FROM Empleados) )
BEGIN
EXEC ps_ponertotal1 @intFlag ;
SET @intFlag = @intFlag + 1
END

exec p;

--------------- VIEW NOMINEE


CREATE VIEW SENomSRH as
SELECT nom.id_nomina, (SELECT Convert(varchar(10), nom.fecha,120)) as'Fecha', ca.nombre+' '+ca.ape_p+' '+ca.ape_m as 'Nombre', nom.total FROM Nomina as nom
JOIN Empleados as e ON e.id_empleado=nom.empleado_id
JOIN Contratos as c ON e.contrato_id=c.id_contrato
JOIN Candidatos as ca ON c.folioC_id=ca.folioV_id;

SELECT * FROM SENomSRH;
