<html>
 <head>
  <title>Curso PHP Progressivo</title>
 </head>
 <body>
 <form  action="index.php" method="GET">
  Quanto ganha por hora? <input type="text" name="valor" value="0"><br>
  Quantas horas trabalha por dia? <input type="text" name="hora" value="0"><br>
  <input type="submit">
 </form>
 
 <?php 
  // Pega o valor do formulário
  $valor = $_GET['valor'];
  $hora = $_GET['hora'];
  
  // Imprimindo o número fornecido
  echo 'Seu salário mensal é de: R$'.(($hora * 5) * 4) * ($valor);
  
 ?>
 </body>
</html>