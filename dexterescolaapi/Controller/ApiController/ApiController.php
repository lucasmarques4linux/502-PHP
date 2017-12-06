<?php 

namespace Controller\ApiController;

use Controller\AlunoController\AlunoController;

class ApiController
{
	public function run(){

		$method = $_SERVER['REQUEST_METHOD'];
		$route 	= $_GET['route'];

		switch ($route) {
			case 'alunos':
				
				switch ($method) {
					case 'GET':
						$id = isset($_GET['id']) ? $_GET['id'] : null;
						if ($id) {
							AlunoController::find($id);
						} else {
							AlunoController::all();
						}
						break;
					
					default:
						# code...
						break;
				}
				break;			
			default:
				echo "Rota Inválida";
				break;
		}

	}
}