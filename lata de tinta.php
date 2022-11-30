<html>
 <head>
  <title>Curso PHP Progressivo</title>
 </head>
 <body>
 <form  action="index.php" method="GET">
  Área a ser pintada m2: <input type="text" name="m2" value= '0'><br>
  Preço da lata de tinta 18L: <input type="text" name="preco" value= '0'><br>
  <input type="submit">
 </form>
 
 <?php 
  // Pega o valor do formulário
  $m2 = $_GET['m2'];
  $qtd = $m2 / 3;
  $lata = $qtd / 18;
  $preco = $_GET['preco'];

  
  // Imprimindo o número fornecido
  echo 'Quantidade de latas necessárias: '.($lata).' latas.';
  echo '<br>';
  echo 'Valor total de tintas: R$'.($preco * $lata).'.';
  
 ?>
 </body>
</html>