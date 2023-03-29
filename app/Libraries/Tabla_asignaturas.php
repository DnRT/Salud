<?php

	/**
	 * Clase para construir la tabla de asignaturas cursadas del estudiante
	 */
	namespace App\Libraries;
	class Tabla_asignaturas
	{
		private $arr_asignaturas;
		public function __construct($arr)
		{
			$this->arr_asignaturas = $arr;
		}

		public function construirTablaAsignaturas()
		{
			$token = $this->arr_asignaturas[0][0]['rut'].$this->arr_asignaturas[0][0]['codigo_programa'];
			$return_tabla_asignatura = '<table class="table table-bordered"><thead><tr><th>Nombre</th><th>Ingresar</th></tr></thead><tbody>';
			foreach ($this->arr_asignaturas[1] as $asig) {
				$return_tabla_asignatura .= '<tr><td style="white-space:normal;">' .$asig['nombre'] .' </td>';
				$return_tabla_asignatura .=
		          '<td>
		                <a target="_blank" href="https://encuestasdai.uv.cl/index.php/22?token=' .$token.$asig['codigo_asig'] .'&newtest=Y&lang=es" 
		                    class=" btn btn-success btn-sm" role="button">
		                    <span class="glyphicon glyphicon-log-in"></span>
		                </a>
		            </td>
		            </tr>';

		        }
			$return_tabla_asignatura .= '<tbody></table><p class="text-info">*El color celeste identifica aquellas asignaturas que tienen m&aacutes de un docente</p>';

			return $return_tabla_asignatura;
		}
		public function verificador($rut){
			$contador = 0;
			$aux = 2;
			for($x = strlen($rut)-1; $x >= 0; $x--){
				$contador += intval($rut[$x]) * $aux;
				if($aux < 7) $aux++;
				else $aux = 2;
			}
			$verificador = intval($contador / 11);
			$verificador = $contador - ($verificador * 11);
			$verificador = 11 - $verificador;
			if($verificador === 10) $verificador='K';
			else if($verificador === 11) $verificador=0;
			return $verificador;
		}
	}

?>