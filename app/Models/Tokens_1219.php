<?php
/**
 * Clase del tokens
 */
namespace App\Models;
use CodeIgniter\Model;
class Tokens_1219 extends Model
{
	public function getAll()
	{
		$db = db_connect();
		$result = $db->table('encuesta_actual')->get()->getResultArray();
		return $result;
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
			return $asignaturas;
		} else {
			return false;
		}
	}
}
?>