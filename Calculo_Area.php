<html>
 <head>
  <title>Curso PHP Progressivo</title>
 </head>
 <body>
 <form  action="index.php" method="GET">
  Lado: <input type="text" name="lado" value="0"><br>
  Altura: <input type="text" name="altura" value="0"><br>
  <input type="submit">
 </form>
 
 <?php 
  // Pega o valor do formulário
  $lado = $_GET['lado'];
  $altura = $_GET['altura'];
  
  // Imprimindo o número fornecido
  echo 'Área do terreno dobrada é de: '.(($lado * $altura) * 2).'M2';
  
 ?>
 </body>
</html>