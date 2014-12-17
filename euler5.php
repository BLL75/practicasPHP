<?php


function divisible($i)
{
  for($divisor = 1; $divisor <=20; $divisor++){
     if(($i % $divisor)!=0){
	    return false;
	 }
  }
  return true;
}

/*encontrado = false;
num = 1;
mientras no encontrado {
	// lo busco
	if divisible de 1 a 20 num 
		encontrado = true;		
	num ++;
}*/

$encontrado = false;
$num = 2327925;

while($encontrado == false){
   $num++;
   if(divisible($num)){
     $encontrado = true; 
   }
   
}
echo $num;

?>
