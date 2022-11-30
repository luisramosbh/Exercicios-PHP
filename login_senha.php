<html>
 <head>
  <title>Apostila PHP Progressivo</title>
 </head>
 <body>
 <form action="" method="get">
  Nome: <input type="text" name="name" /><br />
  Senha: <input type="password" name="password" /><br />
  <input type="submit" name="submit" value="Inserir" />
 </form> 
 <?php 
  $nome=$_GET['name'];
  $senha=$_GET['password'];
  
  if($nome == $senha)
   echo "Sua senha deve ser diferente do login<br />";
  else  
   echo "Cadastro realizado com sucesso";
 ?>
 </body>
</html>