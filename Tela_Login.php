<?php
	require_once 'classes/usuarios.php';
	$u = new Usuario;
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tela de Login</title>
</head>
<body>
	<form method="post">
		<p>Nome do usuário:</p>
		<input type="text" name="nome" value="Insira seu nome de usuário">
		<p>Senha:</p>
		<input type="senha" name="senha">
		<br />
		<input type="submit" name="entrar" value="Entrar">
	</form>
		<div class="registro"><a href="registro.php"><p>Registrar novo usuário</a></p></br></br></br></br></div>
			
		</div><!--form-login-->
		

		</div>
	</section>
	<div class="footer-login"></div>

	<?php
	if (isset($_POST['nome'])){
			
			$nome = addslashes($_POST['nome']);
			$senha = addslashes($_POST['senha']);
			

			if(!empty($nome) && !empty($senha) ){
				$u->conectar("proauto","localhost","root","");
				if($u->msgErro == ""){
			if($u->logar($nome,$senha)){
				header("location:AreaPrivada.php");
			}else{
					?>
				<div class="msg-erro">Nome do usuário e/ou senha inválidos!</div>

				<?php
			}
		}else{
			?>
			<div class="msg-erro"><?php echo "Erro:".$u->msgErro;?></div>
			<?php
		}
		}else {
							?>
				<div class="msg-erro">Preencha todos os campos!</div>

				<?php
		}
	}

?>

</body>
</html>