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
	nombre_campo_clinico	VARCHAR(512),
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
INSERT INTO carrera VALUES
	('EMPD101','Bioetica Clinica',20030182),
	('EMPD102','Nutricion Clinica',20030182),
	('EMPD103','Metodologia de la Investigacion',20030182),
	('EMPD104','Pediatria General 1 y 2',20030182),
	('EMPD105','Lactancia',20030182),
	('EMPD106','Respiratorio 1',20030182),
	('EMPD107','Residencia 1',20030182),
	('EMPD201','Segunda Infancia',20030182),
	('EMPD202','Nutricion Clinica 2',20030182),
	('EMPD301','Cirugia',20030182),
	('EMPD302','Pediatria Ambulatoria',20030182),
	('EMPD303','Medicina Intensiva',20030182),
	('EMPD304','Respiratorio 2',20030182),
	('EMPD305','HematoOncologia',20030182),
	('EMPD401','Cardiologia',20030182),
	('EMPD402','Gastroenterologia',20030182),
	('EMPD403','Electivo',20030182),
	('EMPD404','Residencia 2',20030182),
	('EMPD501','Infectologia',20030182),
	('EMPD502','Neonatologia',20030182),
	('EMPD503','Residencia 3',20030182),
	('EMPD601','Endocrinologia',20030182),
	('EMPD602','Neuropediatria',20030182),
	('EMPD603','Nefrologia',20030182),
	('EMPD604','Inmunologia',20030182),
	('EMPD605','Tesis',20030182),
	('EMAR101','Pabellon General',20030190),
	('EMAR102','Bases teoricas de la Anestesiologia y Tecnicas Anestesicas',20030190),
	('EMAR103','Taller Via Aerea I',20030190),
	('EMAR104','Residencia: Urgencias I',20030190),
	('EMAR201','Oftalmologia',20030190),
	('EMAR202','Cardiologia',20030190),
	('EMAR203','Taller de Reanimacion Cardiopulmonar',20030190),
	('EMAR204','Urologia',20030190),
	('EMAR205','Algologia',20030190),
	('EMAR206','Recuperacion Postanestesica',20030190),
	('EMAR207','Anestesia Total Endovenosa',20030190),
	('EMAR301','Traumatologia',20030190),
	('EMAR302','Obstetricia',20030190),
	('EMAR303','Otorrinolaringologia',20030190),
	('EMAR304','Taller Via Aerea II',20030190),
	('EMAR401','Torax',20030190),
	('EMAR402','Unidad de Cuidados Intensivos',20030190),
	('EMAR403','Residencia: Urgencias II',20030190),
	('EMAR501','Anestesia Cardiovascular',20030190),
	('EMAR502','Unidad de Cuidados Intensivos: Cardiovascular',20030190),
	('EMAR503','Taller Ecocardiografia y Acceso Vasculares',20030190),
	('EMAR504','Pediatria',20030190),
	('EMAR505','Electivo',20030190),
	('EMAR601','Neurocirugia',20030190),
	('EMAR602','Cirugia Mayor Compleja',20030190),
	('EMAR603','Taller Via Aerea III',20030190),
	('EMAR604','Residencia: Urgencias III',20030190),
	('EMAR506','Tesis',20030190),
	('EMCD101','Clinica Cardiovascular y Rehabilitacion',20030164),
	('EMCD102','Electrocardiograma y Test de Esfuerzo',20030164),
	('EMCD103','Bioetica',20030164),
	('EMCD104','Residencia I',20030164),
	('EMCD105','Imagenes Cardiovascular No Invasivas',20030164),
	('EMCD106','Cirugia Cardivascular',20030164),
	('EMCD107','Metodologia de la Investigacion',20030164),
	('EMCD201','Hemodinamia y Cardiologia Intervencional',20030164),
	('EMCD202','Electrofisiologia',20030164),
	('EMCD203','Residencia II',20030164),
	('EMCD204','Unidad de Paciente Critico Cardiovascular',20030164),
	('EMCD205','Cardiologia Pediatrica',20030164),
	('EMCD206','Electivo',20030164),
	('EMCD207','Trabajo de Investigacion',20030164);
INSERT INTO estudiante VALUES
	('AARON','VILLALOBOS','AARONVILLALOBOS@postgrado.uv.cl','Especialidad en Pediatria','',7970607,20030182),
	('MACARENA PAZ','LEPEZ','MACARENA PAZ LEPEZ @postgrado.uv.cl','Especialidad en Anestesiologia y Reanimacion','',13832722,20030190),
	('MANUEL','VALDES','MANUEL VALDES @postgrado.uv.cl','Especialidad en Cardiologia','',15870743,20030164);
INSERT INTO estudiante_carrera VALUES 
	('EMPD101',7970607),
	('EMAR202',13832722),
	('EMCD203',15870743);
INSERT INTO encuesta VALUES 
	('797060720030182EMPD101',7970607),
	('797060720030182EMPD302',7970607),
	('797060720030182EMPD603',7970607),
	('1383272220030190EMAR202',13832722),
	('1587074320030164EMCD203',15870743);