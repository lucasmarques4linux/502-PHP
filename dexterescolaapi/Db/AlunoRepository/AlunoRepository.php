<?php 

namespace Db\AlunoRepository;

use Db\Conexao\Conexao;
use PDO;

class AlunoRepository
{
	private $con 	= null;

	public function __construct(){
		$this->con = Conexao::getInstance();
	}

	public function all(){
		$prepare = $this->con->query("SELECT * FROM tb_alunos ORDER BY id");
		$prepare->execute();
		$result = $prepare->fetchAll(PDO::FETCH_ASSOC);

		return $result;
	}

	public function find($id){
		$sql = "SELECT * FROM tb_alunos WHERE id = :id";
		$stmt = $this->con->prepare($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();
		$result = $stmt->fetch(PDO::FETCH_ASSOC);

		return $result;
	}
}