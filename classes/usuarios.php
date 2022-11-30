<?php

class Usuario
{
	private $pdo;
	public $msgErro = "";

	public function conectar($nome, $host, $cpf, $placa){
		global $pdo;
		global $msgErro;
		try {
			$pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$cpf,$placa);


		} catch (PDOException $e){
			$msgErro = $e->getMessage();

		}

	}

	public function cadastrar($nome, $placa, $cpf, $endereco, $telefone){
		global $pdo;
		global $msgErro;
		$sql = $pdo->prepare("SELECT id FROM clientes WHERE cpf = :c");
		$sql->bindValue(":c",$cpf);
		$sql->execute();
		if($sql->rowCount() > 0){
			return false;
		}else {
			$sql = $pdo->prepare("INSERT INTO clientes (nome, placa, cpf, endereco, telefone) VALUES (:n, :p, :c, :e, :t)");
			$sql->bindValue(":n",$nome);
			$sql->bindValue(":p",$placa);
			$sql->bindValue(":c",$cpf);
			$sql->bindValue(":e",$endereco);
			$sql->bindValue(":t",$telefone);
			$sql->execute();
			return true;
			
		}


		try {
			$pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$cpf,$placa);


		} catch (PDOException $e){
			$msgErro = $e->getMessage();

		}
		

	}

	public function logar($cpf, $placa){
		global $pdo;
		global $msgErro;
		$sql = $pdo->prepare("SELECT id FROM clientes WHERE cpf = :c AND placa = :p");
		$sql->bindValue(":c",$cpf);
		$sql->bindValue(":p",$placa);
		$sql->execute();
		if ($sql->rowCount() > 0) {
			$dado = $sql->fetch();
			session_start();
			$_SESSION['id'] = $dado['id'];
			return true;
		}else{
			return false;
		}

	}


	public function buscar($nome, $placa, $cpf, $endereco, $telefone){
		global $pdo;
		global $$msgErro;
		$sql = $pdo->prepare("SELECT id FROM clientes WHERE cpf = :c");
		$sql->bindValue(":c",$cpf);
		$sql->execute();
		if($sql->rowCount() > 0){
			return false;
		}else {
			$sql = $pdo->prepare("UPDATE INTO clientes (endereco) VALUES (:e)");
			$sql->bindValue(":e",$endereco);
			$sql->execute();
			return true;
			
		}

		try {
			$pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$endereco);


		} catch (PDOException $e){
			$msgErro = $e->getMessage();

		}
	}


}

?>