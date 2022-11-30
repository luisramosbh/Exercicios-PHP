<html>
 <head>
  <title>Curso PHP Progressivo</title>
 </head>
 <body>
 <form  action="index.php" method="GET">
  Salário Bruto: <input type="text" name="valor" value= '0'><br>
  <input type="submit">
 </form>
 
 <?php 
  // Pega o valor do formulário
  $valor = $_GET['valor'];
  $ir = $valor * 0.11;
  $inss = $valor * 0.08;
  $sindicato = $valor * 0.05;

  
  // Imprimindo o número fornecido
  echo 'Seu salário mensal líquido é de: R$'.($valor - $ir - $inss - $sindicato);
  
 ?>
 </body>
</html>