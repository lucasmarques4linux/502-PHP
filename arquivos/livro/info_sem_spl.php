<?php 

class MeuArquivo
{
	private $path;

	public function __construct ($path){
		$this->path = $path;
	}

	public function pegaConteudo(){
		return file_get_contents($this->path);
	}

	public function pegaExtensao(){
		return pathinfo($this->path);
	}

	public function pegaNomeArquivo(){
		return basename($this->path);
	}

	public function pegaTamanho(){
		return filesize($this->path);
	}
}


$file = new MeuArquivo("teste.txt");
print_r($file->pegaNomeArquivo());
print_r($file->pegaExtensao());
print_r($file->pegaTamanho());
print_r($file->pegaConteudo());