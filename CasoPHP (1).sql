CREATE DATABASE db_caso;

USE db_caso;

CREATE TABLE rol(
idRol INT NOT NULL,
privilegio VARCHAR(45) NOT NULL,
CONSTRAINT idRol_PK PRIMARY KEY (idRol)
);

CREATE TABLE estado(
estado INT NOT NULL,
significado VARCHAR(30),
CONSTRAINT estado PRIMARY KEY (estado)
);

CREATE TABLE usuario(
idUsuario INT NOT NULL,
idRol INT NOT NULL,
nombresUsuario VARCHAR(30) NOT NULL,
apellidosUsuario VARCHAR(30) NOT NULL,
tipoContrat VARCHAR(20) NOT NULL,
correoUsuario VARCHAR(100) NOT NULL,
clave VARCHAR(10) NOT NULL,
estado INT NOT NULL,
CONSTRAINT idUsuario_PK PRIMARY KEY (idUsuario),
CONSTRAINT idRol_FK FOREIGN KEY (idRol)REFERENCES rol (idRol)
);

CREATE TABLE tecnico(
idTecnico INT NOT NULL,
nombresTecnico VARCHAR(30) NOT NULL,
apellidosTecnico VARCHAR(30) NOT NULL,
tipoContrat VARCHAR(20) NOT NULL,
correoTecnico VARCHAR(100) NOT NULL,
clave VARCHAR(10) NOT NULL,
estado INT NOT NULL,
CONSTRAINT idTecnico_PK PRIMARY KEY (idTecnico)
);

CREATE TABLE tipoEM(
idEM INT NOT NULL,
nombre VARCHAR(45) NOT NULL,
descripcion VARCHAR(25) NOT NULL,
condicion BOOLEAN,
CONSTRAINT idEM_PK PRIMARY KEY (idEM)
);

CREATE TABLE equiMaq(
codigoInterno INT NOT NULL,
idEM INT NOT NULL,
nombre VARCHAR(100) NOT NULL,
fechaRegistro DATE NOT NULL,
referencia VARCHAR(50) NOT NULL,
descripcion VARCHAR(255) NOT NULL,
estado INT NOT NULL,
CONSTRAINT codigoInterno_PK PRIMARY KEY(codigoInterno)
);

CREATE TABLE tipoOT(
idOT INT NOT NULL,
descripcion VARCHAR(25) NOT NULL,
CONSTRAINT idOT_PK PRIMARY KEY (idOT)
);

CREATE TABLE ordenTrabajo(
idOrdenTrabajo INT AUTO_INCREMENT NOT NULL,
idOT INT NOT NULL,
codigoInterno INT NOT NULL,
nombreEquipo VARCHAR(40) NOT NULL,
fechaRegistro DATE,
fechaVencimientoS DATE,
fechaEjecucion DATE,
idTecnico INT NOT NULL,
reparacion INT NOT NULL,
descripcion VARCHAR(255) NOT NULL,
estado INT NOT NULL,
CONSTRAINT idOrdenTrabajo_PK PRIMARY KEY (idOrdenTrabajo),
CONSTRAINT codigoInterno_FK FOREIGN KEY (codigoInterno)REFERENCES equiMaq (codigoInterno),
CONSTRAINT idTecnico_FK FOREIGN KEY (idTecnico)REFERENCES tecnico (idTecnico)
);

CREATE TABLE atencion(
idAtencion INT AUTO_INCREMENT NOT NULL,
idOrdenTrabajo INT NOT NULL,
idOT INT NOT NULL,
codigoInterno VARCHAR(40) NOT NULL,
nombreEquipo VARCHAR(40) NOT NULL,
fechaEjecucion DATE,
idTecnico INT NOT NULL,
reparacion INT NOT NULL,
descripcion VARCHAR(255) NOT NULL,
estado INT NOT NULL,
CONSTRAINT idAtencion_PK PRIMARY KEY (idAtencion),
CONSTRAINT idOrdenTrabajo_FK FOREIGN KEY (idOrdenTrabajo)REFERENCES ordenTrabajo (idOrdenTrabajo),
CONSTRAINT idTecnico1_FK FOREIGN KEY (idTecnico)REFERENCES tecnico (idTecnico)
);


INSERT INTO rol (idRol, Privilegio) VALUES (1,'Administrador');
INSERT INTO rol (idRol, Privilegio) VALUES (2,'Gerente');
INSERT INTO rol (idRol, Privilegio) VALUES (3,'Tecnico');

INSERT INTO usuario (idUsuario, idRol, nombresUsuario, apellidosUsuario, tipoContrat, correoUsuario, clave, estado) 
VALUES 
(1014181420, 1, 'Edison Alejandro',' Parias Moreno','trab planta','alejandroparmo@gmail.com','alejopm', 1);

INSERT INTO estado (estado, significado) VALUES
 (0, 'Inactivo'),    /* USUARIO, TECNICO, */
 (1, 'Inactivo'),  /* USUARIO, TECNICO, */
 (2, 'Asignado'),  /* ORDEN DE TRABAJO*/
 (3, 'Cancelado'),  /* ORDEN DE TRABAJO*/
 (4, 'Ejecucion'),  /* ORDEN DE TRABAJO*/
 (5, 'Ejecutado');  /* ORDEN DE TRABAJO*/