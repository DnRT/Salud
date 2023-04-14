<?php

	/**
	 * Controlador
	 */
	namespace App\Controllers;
	use App\Libraries\Tabla_asignaturas;
	class Encuesta extends BaseController
	{
		private $tokensModel;
		function __construct()
		{
			$this->tokensModel = model('App\Models\Tokens_1219');
			helper('form');
		}
		
		function index()
		{
			return view('header.php')
			.view('bienvenido.php')
			.view('footer.php');
		}
		function responder(){
			$rut = $_POST['rut'];
			$crudo = $this->tokensModel->getAsigUser($rut);
			$lib = new Tabla_asignaturas($crudo);
			if($crudo!=false){
				$verificador = $lib->verificador($rut);
				$asig = $lib->construirTablaAsignaturas();
				$data = [
					'rut' => $crudo[0][0]['rut'].'-'.strval($verificador),
					'nombre_estudiante' => $crudo[0][0]['nombre'].' '.$crudo[0][0]['apellido'],
					'carrera' => $crudo[0][0]['nombre_especialidad'],
					'mis_asignaturas' => $asig
				];
				return view('header.php')
				.view('lista_asignaturas.php',$data)
				.view('footer.php');
			}
			else{
				return view('header.php')
				.view('error_asignaturas.php')
				.view('footer.php');
			}
		}
		function load_data(){
			$this->tokensModel->load_carrera_csv();
			$this->tokensModel->load_estudiante_csv();
			return redirect()->to('/');
		}
	}

?>