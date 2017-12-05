<?php 

class Alunos
{
	private $user 	= "linux";
	private $pass 	= "123";
	private $dsn  	= "pgsql:host=localhost; dbname=dexterescola;";
	private $con 	= null;

	public function __construct(){
		$this->con = new PDO($this->dsn, $this->user, $this->pass);
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

	public function insert(array $data){
		$sql = "INSERT INTO tb_alunos (nome,email,senha,cpf,rg,dt_nasc) VALUES (:nome,:email,:senha,:cpf,:rg,:dt_nasc)";

		$this->con->beginTransaction();
		$stmt = $this->con->prepare($sql);
		$stmt->bindParam(":nome", $data['nome']);
		$stmt->bindParam(":email", $data['email']);
		$stmt->bindParam(":senha", $data['senha']);
		$stmt->bindParam(":cpf", $data['cpf']);
		$stmt->bindParam(":rg", $data['rg']);
		$stmt->bindParam(":dt_nasc", $data['dt_nasc']);
		$stmt->execute();
		 return $this->con->commit();	
	}

}