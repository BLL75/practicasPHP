<?php
    
   
	function esPalindromo($i){
	    $j = strrev($i);
		if ($j == $i) {
          return true;		   
		}
		return false;
	}
	
    $arrayPalindromo = array();
    for($x = 100; $x <= 999; $x++){
	    for($y = 100; $y <= 999; $y++) {
			if (esPalindromo($x * $y)) {
			    $arrayPalindromo[] = ($x *$y);	
			}
	    }
	}
	
	
	$total = 0;
	for($x = 100; $x <= 999; $x++){
	    for($y = 100; $y <= 999; $y++) {
			$num = $x*$y;			
			if (esPalindromo($num)) {
			   if($total < $num){
			      $total = ($num);
			   }
			}
	    }
	}
	echo max($arrayPalindromo);
	echo "<br>".$total;
?>