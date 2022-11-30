<html>
 <head>
  <title>Curso PHP Progressivo</title>
 </head>
 <body>
 <form  action="index.php" method="GET">
  Valor em Metros: <input type="text" name="metro" value="0"><br>
  <input type="submit">
 </form>
 
 <?php 
  // Pega o valor do formulário
  $metro = $_GET['metro'];
  
  // Imprimindo o número fornecido
  echo 'Valor em Cm é de: '.($metro * 100).'cm';
  
 ?>
 </body>
</html>