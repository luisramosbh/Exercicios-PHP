<html>
 <head>
  <title>Apostila PHP Progressivo</title>
 </head>
 <body>
 <form action="" method="get">
  Digite 1 para: Celsius para Farenheit<br />
  Digite 2 para: Farenheit para Celsius<br />
  <input type="number" name="opt" /><br />
  Temperatura:<input type="number" name="number" /><br />
  <input type="submit" name="submit" value="Calcular" />
 </form> 
 <?php
  $op = @$_GET['opt'];
  $temp = @$_GET['number'];
  
  if($op==1)
   echo "Temperatura em Farenheit: ".CtoF($temp);
  elseif($op==2)
   echo "Temperatura em Celsius: ".FtoC($temp);
  else
   echo "Opção inválida";
   
  
  function CtoF($temperatura){
   return ($temperatura*9/5) + 32;
  }
  function FtoC($temperatura){
   return ($temperatura-32)*5/9;
  }
 ?>
 </body>
</html>