<?php 

require_once 'Calculadora.php';

use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase
{
	// Teste para função Soma
	// Teste para função Subtrair
	// Teste para função Dividr
	// Teste para função Multiplicar

	private $calculadora;

	public function setUp(){
		$this->calculadora = new Calculadora(3,3);
	}

	public function testSomar(){
		$this->assertSame(6,$this->calculadora->somar());
		$this->assertEquals(6,$this->calculadora->somar());
	}

	public function testSubtrair(){
		$this->assertSame(0,$this->calculadora->subtrair());
		$this->assertEquals(0,$this->calculadora->subtrair());
	}

	public function testMultiplicar(){
		$this->assertSame(9,$this->calculadora->multiplicar());
		$this->assertEquals(9,$this->calculadora->multiplicar());
	}

	public function testDividir(){
		$this->assertSame(1,$this->calculadora->dividir());
		$this->assertEquals(1,$this->calculadora->dividir());
	}



}