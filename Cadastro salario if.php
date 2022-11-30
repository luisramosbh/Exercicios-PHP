<html>
 <head>
  <title>Apostila PHP Progressivo</title>
 </head>
 <body>
 <form action="" method="get">
  Nome: <input type="text" name="name" /><br />
  Idade: <input type="text" name="idade" /><br />
  Salário: <input type="text" name="salario" /><br />
  Sexo: <input type="text" name="sexo" /><br />
  Estado Civil: <input type="text" name="civil" /><br />   
  <input type="submit" name="submit" value="Inserir" />
 </form> 
 <?php 
  $nome=$_GET['name'];
  $idade=$_GET['idade'];
  $salario=$_GET['salario'];
  $sexo=$_GET['sexo'];
  $civil=$_GET['civil'];   
  
  if(strlen($nome) < 3){
     echo "O nome deve possuir mais de três caracteres.<br />";
    }else if ($idade < 0) {
      echo "Idade deve ser entre 0 e 150.";  
    }else if ($idade > 150) {
        echo "Idade deve ser entre 0 e 150.";  
    }else if ($salario < 0) {
        echo "O salário deve ser maior que 0.";
    }else if ($sexo != 'F' && $sexo != 'M') {
        echo "O sexo deve ser M ou F."; 
    }else if ($civil != 'C' && $civil != 'S' && $civil != 'D' && $civil != 'V') {
        echo "O estado civil deve ser C (casado), S (solteiro), D (divorciado) ou V (viúvo).";
    }else{  
   echo "Cadastro realizado com sucesso!";
        }
 ?>
 </body>
</html>