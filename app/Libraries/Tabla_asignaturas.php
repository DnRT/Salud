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
			$return_tabla_asignatura = '<table class="table table-bordered"><thead><tr><th>Nombre</th><th>Ingresar</th></tr></thead><tbody>';
			foreach ($this->arr_asignaturas as $asig) {
				$return_tabla_asignatura .= '<tr><td style="white-space:normal;">' .$asig['nombre asignatura'] .' </td>';
				if($asig['coleg'] == 1){
				//$return_tabla_asignatura .= '<td>' .$asig['nombre_asignatura'] .'</td>';
						$return_tabla_asignatura .=
		          '<td>
		                <a target="_blank" href="https://encuestasdai.uv.cl/index.php/22?token=' .$asig['token'] .'&newtest=Y&lang=es" 
		                    class=" btn btn-info btn-sm" role="button">
		                    <span class="glyphicon glyphicon-log-in"></span>
		                </a>
		            </td>
		            </tr>';
		        } else {
		        	$return_tabla_asignatura .=
		          '<td>
		                <a target="_blank" href="https://encuestasdai.uv.cl/index.php/22?token=' .$asig['token'] .'&newtest=Y&lang=es" 
		                    class=" btn btn-success btn-sm" role="button">
		                    <span class="glyphicon glyphicon-log-in"></span>
		                </a>
		            </td>
		            </tr>';

		        }
			}
			$return_tabla_asignatura .= '<tbody></table><p class="text-info">*El color celeste identifica aquellas asignaturas que tienen m&aacutes de un docente</p>';

			return $return_tabla_asignatura;
		}
	}

?>