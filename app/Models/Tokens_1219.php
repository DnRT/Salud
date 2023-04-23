<?php
/**
 * Clase del tokens
 */
namespace App\Models;
use CodeIgniter\Model;
class Tokens_1219 extends Model
{
	public function load_carrera_csv(){
		$file = fopen('C:/Users/DnRT/Desktop/php/carga php piloto V5_anestesiología - carga programas.csv','r');
		$datos = array();
		while(!feof($file)){
			if(($aux = fgetcsv($file,0,';'))!==false){
				$datos[] = $aux;
			}
		}
		$db = db_connect();
		foreach($datos as $row){
			$row[0] = preg_replace('([^A-Za-z0-9])', '', $row[0]);
			if(!$this->getAsig($row[0])){
				$insertar = [
					'codigo_asig' => $row[0],
					'nombre' => $row[1],
					'codigo_programa' => $row[2]
				];
				$db->table('carrera')->insert($insertar);
			}
		}
		$db->close();
	}
	public function load_estudiante_csv(){
		$file = fopen('C:/Users/DnRT/Desktop/php/carga php piloto V5_anestesiología - estudiantes.csv','r');
		$datos = array();
		while(!feof($file)){
			if(($aux = fgetcsv($file,0,';'))!==false){
				$datos[] = $aux;
			}
		}
		$db = db_connect();
		foreach($datos as $row){
			$row[0] = preg_replace('([^A-Za-z0-9])', '', $row[0]);
			if($this->getAsigUser($row[4])==false){
				$insertarEstudiante = [
					'nombre' => $row[0],
					'apellido' => $row[1],
					'email' => $row[2],
					'nombre_especialidad' => $row[3],
					'rut' => $row[4],
					'codigo_programa' => $row[5]
				];
				$db->table('estudiante')->insert($insertarEstudiante);
				foreach(explode(',',$row[6]) as $asig){
					$insertarEstudianteCarrera = [
						'codigo_asig' => $asig,
						'rut' => $row[4]
					];
					$db->table('estudiante_carrera')->insert($insertarEstudianteCarrera);
				}
			}
		}
		$db->close();
	}
	/*Funcion que extrae la informaci�n del estudiante*/
	public function getAsigUser($rut)
	{
		$db = db_connect();
		$resultEstudiantes = $db->table('estudiante')->where('rut',$rut)->get()->getResultArray();
		$resultCursos = $db->table('estudiante_carrera')->where('rut',$rut)->get()->getResultArray();
		$resultToken = $db->table('encuesta')->where('rut',$rut)->get()->getResultArray();
		for($a = 0; $a < count($resultToken); $a++){
			$resultToken[$a]=$resultToken[$a]['token'];
		}
		if (count($resultEstudiantes)>0&&count($resultCursos)>0) {
			$resultCarrera = $db->table('carrera')->where('codigo_programa',$resultEstudiantes[0]['codigo_programa'])->get()->getResultArray();
			$asignaturas = array($resultEstudiantes,$resultCursos,$resultCarrera,$resultToken);
			$db->close();
			return $asignaturas;
		} else {
			$db->close();
			return false;
		}
	}
	public function getAsig($asig)
	{
		$db = db_connect();
		$result= $db->table('carrera')->where('codigo_asig',$asig)->get()->getResultArray();
		if (count($result)>0) {
			$db->close();
			return true;
		} else {
			$db->close();
			return false;
		}
	}
}
?>