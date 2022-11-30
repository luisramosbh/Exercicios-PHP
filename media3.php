<html>
 <head>
  <title>Curso PHP Progressivo</title>
 </head>
 <body>
 <form  action="index.php" method="GET">
  Nota 1: <input type="text" name="nota1" value="0"><br>
  Nota 2: <input type="text" name="nota2" value="0"><br>
  Nota 3: <input type="text" name="nota3" value="0"><br>
  <input type="submit">
 </form>
 
 <?php 
  // Pega o valor do formulário
  $nota1 = $_GET['nota1'];
  $nota2 = $_GET['nota2'];
  $nota3 = $_GET['nota3'];
  
  // Imprimindo o número fornecido
  echo 'A média do aluno foi '.($nota1 + $nota2 + $nota3) / 3;
  
 ?>
 </body>
</html>