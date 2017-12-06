<?php 

namespace Controller\AlunoController;

use Db\AlunoRepository\AlunoRepository;

class AlunoController
{
	public static function all(){
		header("HTTP/1.1 200");
		header("content-type:application/json; charset=UTF-8");

		$repository = new AlunoRepository();

		$result = $repository->all();

		echo json_encode([
				"status" 	=> "ok",
				"data"	 	=> $result,
				"message" 	=> ""
				]);
	}

	public static function find($id){
		header("HTTP/1.1 200");
		header("content-type:application/json; charset=UTF-8");

		$repository = new AlunoRepository();

		$result = $repository->find($id);

		echo json_encode([
				"status" 	=> "ok",
				"data"	 	=> $result,
				"message" 	=> ""
				]);
	}

	public static function insert(array $data){
		return "Aluno Inserido";
	}

	public static function update(array $data){
		return "Aluno Atualizado";
	}

	public static function delete(array $data){
		return "Aluno Excluido";
	}
}