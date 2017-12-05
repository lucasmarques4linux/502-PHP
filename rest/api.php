<?php 

require 'alunos.php';

$alunos = new Alunos();

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
	case 'GET':

		$id = isset($_GET['id']) ? $_GET['id'] : null;

		if ($id) {
			$result = $alunos->find($id);
		} else {
			$result = $alunos->all();
		}

		if ($result){
			header("HTTP/1.1 200");
			header("content-type:application/json; charset=UTF-8");
			echo json_encode([
				"status" 	=> "ok",
				"data"	 	=> $result,
				"message" 	=> ""
				]);
		} else {
			header("HTTP/1.1 204"); // Status 200 para exibir o JSON abaixo;
			header("content-type:application/json; charset=UTF-8");
			echo json_encode([
				"status" 	=> "erro",
				"data"		=> "",
				"message" 	=> "Dados não encontrados"
				]);
		}	
		break;
	case 'POST':
		$data = file_get_contents("php://input");
		$data = json_decode($data,true);

		$result = $alunos->insert($data);

		var_dump($result);

		break;
	case 'PUT':
		echo "PUT";
		break;
	case 'DELETE':
		echo "DELETE";
		break;
	
	default:
		echo "Método Inválido";
		break;
}