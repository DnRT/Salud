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
		$result = $db->table('encuesta_actual')->where('rut',$rut)->get()->getResultArray();
		$especialidad = str_replace('Especialidad en ','',$result[0]['nombre_especialidad']);
		$especialidad = strtolower($especialidad);
		$mencion = $db->table($especialidad)->get()->getResultArray();
		if (count($result)>0) {
			$asignaturas = array($result,$mencion);
			return $asignaturas;
		} else {
			return false;
		}
	}
}
?>