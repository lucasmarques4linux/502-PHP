<?php 

use PHPUnit\Framework\TestCase;

class Exemplo1Test extends TestCase
{
	public function testSame(){

		$soma = 2 + 3;

		// Testar se é idêntico ===
		$this->assertSame(5,$soma);

	}

	public function testTrue(){

		$verdadeiro = true;

		$this->assertTrue($verdadeiro);
	}

	public function testFalse(){

		$verdadeiro = false;

		$this->assertFalse($verdadeiro);
	}

	public function testCount(){

		$array = [0,1,2];

		$this->assertCount(3,$array);
	}

	public function testEmpty(){
		$vazio = null;

		$this->assertEmpty($vazio);
	}

	public function testNull(){
		$vazio = null;

		$this->assertNull($vazio);
	}

	public function testIgual(){
		$a = "1";
		$b =  1 ;

		$this->assertEquals($a,$b);
	}

}