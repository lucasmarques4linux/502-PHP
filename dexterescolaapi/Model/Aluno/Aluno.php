<?php 

namespace Model\Aluno;

class Aluno
{
	private $id;
	private $nome;
	private $email;
	private $senha;
	private $cpf;
	private $rg;
	private $dt_nasc;

	public function __construct(){
	}
	public function setId($id){
		$this->id = $id;
	}
	public function getId(){
		return $this->id;
	}
	public function setNome($nome){
		$this->nome = $nome;
	}
	public function getNome(){
		return $this->nome;
	}
	public function setEmail($email){
		$this->email = $email;
	}
	public function getEmail(){
		return $this->email;
	}
	public function setSenha($senha){
		$this->senha = $senha;
	}
	public function getSenha(){
		return $this->senha;
	}
	public function setCpf($cpf){
		$this->cpf = $cpf;
	}
	public function getCpf(){
		return $this->cpf;
	}
	public function setRg($rg){
		$this->rg = $rg;
	}
	public function getRg(){
		return $this->rg;
	}
	public function setDtNasc($dt_nasc){
		$this->dt_nasc = $dt_nasc;
	}
	public function getDtNasc(){
		return $this->dt_nasc;
	}
}