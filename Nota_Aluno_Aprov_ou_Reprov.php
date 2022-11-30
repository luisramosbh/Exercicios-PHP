<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title></title>
</head>
<body>
   <?php
   $valErr = "";
   $val1 = 0;
   $val2 = 0;


   if ($_SERVER["REQUEST_METHOD"] == "POST") {
     if (empty($_POST["numero1"]) || empty($_POST["numero2"])) {
       $valErr = "Insira um número!";
     } else {
       $val1 = test_input($_POST["numero1"]);
       $val2 = test_input($_POST["numero2"]);
      }
       // check if name only contains letters and whitespace
       if (!preg_match("/^[a-zA-Z-' ]*$/",$val1)) {
         $nameErr = "Only letters and white space allowed";
       }
    }
   function test_input($data) {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
   }
?>


   <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <ul>Insira aqui a nota 1:</ul>
      <input type="number" name="numero1" id="numero1" value="<?php echo $val1;?>">
      <ul>Insira aqui a nota 2:</ul>
      <input type="number" name="numero2" id="numero2" value="<?php echo $val2;?>">
      <input type="submit" name="enviar" placeholder="Enviar"></br></br>
   </form>

<?php
    if (($val1 + $val2) / 2 >= 7 && ($val1 + $val2) / 2 < 10) {
      echo "APROVADO!";
    }elseif (($val1 + $val2) / 2 == 10) {
      echo "APROVADO COM DISTINÇÃO!";
    }else{
    echo "REPROVADO!";
  }

?>

</body>
</html>