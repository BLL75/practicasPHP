<?php
$records = [[6,3,2,7,8,1,9,4,5],
			[4,8,7,5,9,6,2,1,3],
			[5,1,9,2,4,3,8,7,6],
			[8,6,4,3,5,2,7,9,1],
			[7,5,1,9,6,8,3,2,4],
			[2,9,3,1,7,4,6,5,8],
			[9,4,5,6,3,7,1,8,2],
			[1,7,6,8,2,5,4,3,9],
			[3,2,8,4,1,9,5,6,7]];
			
			

			
function verifica($a){
  $inicio = 1;
  for($i = 0; $i <= sizeof($a); $i++){
	for($j = $inicio; $j < sizeof($a); $j++){
		if($a[$j] == $a[$i]){
			return false;
		}
	}
	$inicio++;
  }
  return true;
}



function vCuadro($x,$y, $a) {
	$b = [];
	for ($i = $x; $i < $x+3; $i++) {
		for ($j = $y; $j < $y+3; $j++) {
			$b[] = $a[$i][$j];
		}
	}
	return (verifica($b));
}

function vRegion2($a) {
	for ($i=0; $i < 9;$i = $i+3) {
		for ($j=0; $j < 9; $j = $j+3) {
			if (! vCuadro($i,$j, $a)) {
				return false;
			}
		}
	}
	return true;
}


function vRegion($a){
$inicio = 0;
$fin = 3;
$inicioJ = 0;
$finJ = 3;
    for($i = $inicio; $i < $fin; $i++){
	    if($i == 2){
            $inicio = 3;
            $fin = 6;
        }
		if($i == 5){
		    $inicio = 6;
			$fin = 9;
		}
        for($j = $inicioJ; $j < $finJ; $j++){
			if($i == 8 and $j == 2){
			   $inicio = 0;
			   $fin = 3;
			   $inicioJ = 4;
			   $finJ = 6;  
			}
			if($i == 8 and $j == 5){
			   $inicio = 0;
			   $fin = 3;
			   $inicioJ = 6;
			   $finJ = 9; 
			}
            $region[$j] = $a[$i][$j];
            if(!(verifica($region[$j]))){
			   return false;
		    }
        }
    }
return true;
}

function vFila($a) {
	for ($i = 0; $i < sizeof($a); $i++) {
		if(!(verifica($a[$i]))){
		   
		   return false;
		}
    }
	
	return true;
}



function vColumna($a) {
	for ($i = 0; $i < sizeof($a); $i++)
    {
        $nuevoArray = [];
		for($j = 0; $j < sizeof($a); $j++)
        {
		  $nuevoArray[$j] = $a[$j][$i];
		}
		if((verifica($nuevoArray)) != true){
		    
		    return false;
		}
	}
	return true;
}
	
if (vFila($records)){
    
    if(vColumna($records)){
	  
	}
    if(vRegion2($records)){
	   echo "Sudoku perfecto";
	}	
}
else{
    echo "Sudoku fl";
}	
?>


