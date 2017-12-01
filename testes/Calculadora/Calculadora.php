<?php 

class Calculadora
{
	private $num1;
	private $num2;

	public function __construct($num1,$num2){
		$this->num1 = $num1;
		$this->num2 = $num2;
	}

	public function somar(){
		return $this->num1 + $this->num2;
	}
	public function subtrair(){
		return $this->num1 - $this->num2;
	}
	public function multiplicar(){
		return $this->num1 * $this->num2;
	}
	public function dividir(){
		return $this->num1 / $this->num2;
	}

}