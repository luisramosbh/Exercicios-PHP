<html>
 <head>
  <title>Apostila PHP Progressivo</title>
 </head>
 <body>
 <form action="" method="get">
  População da cidade A: <input type="number" name="A" /><br />
  População da cidade B: <input type="number" name="B" /><br />
  Taxa de crescimento da cidade A (em %): <input type="text" name="tA" /><br />
  Taxa de crescimento da cidade B (em %): <input type="text" name="tB" /><br />
  <input type="submit" name="submit" value="Inserir" />
 </form> 
 <?php 
  $A=$_GET['A'];
  $B=$_GET['B'];
  $tA=$_GET['tA'];
  $tB=$_GET['tB'];
  $count=1;
  
  $tA /= 100;
  $tB /= 100;
  
  do{
   $A *= (1+$tA);
   $B *= (1+$tB);
   if ($count < 2) {
      echo "Após $count ano:<br />";
   }else{
   echo "Após $count anos:<br />";
    }
   echo "População de A: $A <br />";
   echo "População de B: $B <br />";
   echo "<hr>";
   
   $count++;
  }while($A<$B);
  
  echo "Em $count anos a população de A atinge a de B";
 ?>
 </body>
</html>