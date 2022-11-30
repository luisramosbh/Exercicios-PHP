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
   $val = 0;


   if ($_SERVER["REQUEST_METHOD"] == "POST") {
     if (empty($_POST["numero"])) {
       $valErr = "Insira um número!";
     } else {
       $val = test_input($_POST["numero"]);
      }
       // check if name only contains letters and whitespace
       if (!preg_match("/^[a-zA-Z-' ]*$/",$val)) {
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
      <ul>Insira aqui o número:</ul>
      <input type="number" name="numero" id="numero" value="<?php echo $val;?>">
      <input type="submit" name="enviar" placeholder="Enviar">
   </form>

<?php

  for($i = 0; $i <= 10; $i++){
    echo "{$val} x {$i} = " . ($val * $i) . "<br>";
  }

?>

</body>
</html>