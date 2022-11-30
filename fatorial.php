<html>
 <head>
  <title>Apostila PHP Progressivo</title>
 </head>
 <body>
 <form action="" method="get">
  Fatorial de: <input type="number" name="number" /><br />
  <input type="submit" name="submit" value="Calcular" />
 </form> 
 <?php 
  $n=$_GET['number'];
  $fatorial=1;
  $count=1;
  
  while($count<=$n){
   $fatorial *= $count;
   $count++;
  } 
  echo $fatorial;
 ?>
 </body>
</html>