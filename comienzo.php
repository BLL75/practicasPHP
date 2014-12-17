<?php
  echo "Hola mundo";
  echo "<p> Tengo un parrafo creado con PHP</p>";
  echo "<h1> Y ahora tengo un H1</h1>";
  //Definimos variables
  $una = 4;
  $dos = 3;
  /*echo $una;
  echo $dos;*/
  echo $una + $dos;
  
  //Array
  $Pais[0] = "Francia";
  $Pais[1] = "Italia";
  $Pais[2] = "Portugal";
  $Pais[3] = "Espa&ntilde;a";
  echo "Venga que nos vamos de vacaciones a $Pais[3]! <br>";
  
  //Otra forma de declarar arrays
  $Pais = array("Suiza", "Andorra", "Gibraltar");
  echo "Tengo al menos dos cuentas en $Pais[0]<br>";
  //Identificadores de array
  $Capital["Francia"] = "Paris";
  $Capital["Italia"] = "Roma";
  $Capital["Portugal"] = "Lisboa";
  $Capital["Espa&ntilde;a"] = "Madrid";
  echo"La capital de Portugal es ",$Capital["Portugal"],"";
  // Otra forma de identificadores de array
  $Capital = array("Francia" => "Paris", "Italia" => "Roma", "Portugal" => "Lisboa", "Espa&ntilde;a" => "Madrid");
  echo"La capital de Francia es ",$Capital["Francia"],"";
  //
  //
  // Control de flujo
$birthday = "30-10-2014";
$currentDate = date("d-M-Y");
if($birthday > $currentDate){
   echo "LLegas temprano";
}else if ($birthday < $currentDate){
   echo "Llegas tarde";
}else {
   echo "Felicidades";}
  
//WHILE


	function sumar($n,$m) {
		return $n + $m;
	}

	function restar($n,$m) {
		return $n - $m;
	}

	function multiplicar($n,$m) {
		return $n * $m;
	}

	function dividir($n,$m) {
		return $n / $m;
	}

	function esDivisor($numero,$divisor) {
		return (($numero % $divisor) == 0);
	}

	function esMultiplo($numero,$multiplo) {
		return (($numero % $multiplo) == 0);
	}º


	$i = 1;
	$suma = 0;
	while($i < 1000){
		if((esMultiplo($i,3)) OR (esMultiplo($i,5))) {
			$suma = $suma + $i;
		}
	   $i++;
	}
	echo "<br> $suma";
?>