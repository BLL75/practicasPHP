$a = [9,1,2,3,4,5,6,7,8];
	$b = ["a" => 9,"b" => 1,"c" => 2,"loquesea" => 3];
	
	
	foreach ($a as $valor) {
		echo "$valor <br>";
	}
	echo "$valor <br>";
	
	foreach ($a as $indice => $valor) {
		echo "para posicion $indice el valor es $valor <br>";
	}
	
	echo "<br>";
	echo "<br>";
	
	foreach ($b as $indice => $valor) {
		echo "para posicion $indice el valor es $valor <br>";
	}
	
	
	echo "<br>";
	for ($i = 0; $i < sizeof($a); $i++) {
			echo "para posicion $i el valor es $a[$i] <br>";
	}
	
		for ($i = 0; $i < sizeof($a); $i++) {
			echo " $a[$i] <br>";
	}