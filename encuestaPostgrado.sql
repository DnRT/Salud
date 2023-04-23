USE encuestadocpostgrado_joomla3;
CREATE TABLE carrera
(
	codigo_asig	VARCHAR(512) PRIMARY KEY,
	nombre	VARCHAR(512),
	codigo_programa	INT
);
CREATE TABLE estudiante
(
	nombre	VARCHAR(512),
	apellido	VARCHAR(512),
	email	VARCHAR(512),
	nombre_especialidad	VARCHAR(512),
	rut	INT PRIMARY KEY,
	codigo_programa INT
);
CREATE TABLE estudiante_carrera
(
	codigo_asig	VARCHAR(512),
	rut	INT,
	FOREIGN KEY (codigo_asig) REFERENCES carrera(codigo_asig),
	FOREIGN KEY (rut) REFERENCES estudiante(rut)

);
CREATE TABLE encuesta
(
	token	VARCHAR(512) PRIMARY KEY,
	rut	INT,
	FOREIGN KEY (rut) REFERENCES estudiante(rut)
);
/* INSERT INTO encuesta VALUES 
	('797060720030182EMPD101',7970607),
	('797060720030182EMPD302',7970607),
	('797060720030182EMPD603',7970607),
	('1383272220030190EMAR202',13832722),
	('1587074320030164EMCD203',15870743); */