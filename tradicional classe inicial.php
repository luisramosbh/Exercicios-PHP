<?php

class OlaMundo {
	function __construct(){	
		return "Olá Mundo do PHPOO!";
	}
}

$ola = new OlaMundo();
print $ola-> __construct();

// Classe Pessoa
class Pessoa {
	private $nome;
	function setNome($nome){
		$this->nome = $nome;
	}

	function getNome(){
		return $this->nome;
	}
}

$joao = new Pessoa();
$joao->setNome("João Brito");
$pedro = new Pessoa();
$pedro->setNome("Pedro Ribeiro");

print '<b><br><br>Classe Pessoa:<br></b>';
print $joao->getNome();
print '<br>';
print $pedro->getNome();

?>