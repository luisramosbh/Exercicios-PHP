<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Númneros Primos</title>
</head>
<body>
	<?php

	//$$valErr = "";
	$numero = @$_POST['numero'];
	


	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  if (empty($_POST["numero"])) {
	    $valErr = "Insira um número!";
	  } else {
	    $val = test_input($_POST["numero"]);
		}
	    // check if name only contains letters and whitespace
	    if (!preg_match("/^[a-zA-Z-' ]*$/",$numero)) {
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
		<p>Insira o número desejado:</p>
		<input type="numero" name="numero" value="1">
		<input type="submit" name="Verificar">
	</form>

	<?php

	  //Usando FOR
	  	/*for($count=2; $count<$numero; $count++)
		   	if($numero % $count == 0){
			    echo "Multiplo de $count<br />";
			    $divisores++;
		   	}

		//if($divisores)  echo "Não é número primo, pois tem $divisores divisores além de 1 e ele mesmo";
	  //else    echo "É número primo, pois só divide por 1 e por ele mesmo!";

		   	*/
		   	//Usando SWITCH
		   	$count=2;
		   	$divisores = ($numero % $count);
		   	switch ($numero) {
		   		case ($divisores == 0):
		   			echo "Não é número primo.";
		   			break;
		   		
		   		case ($divisores != 0):
		   			echo "É número primo!";
		   			break;
		   	}
	  

	?>
</body>
</html>