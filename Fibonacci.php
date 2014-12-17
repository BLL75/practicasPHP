
   
<?php
$suma = 0;
$fin=40;
$antiguo=0;
$nuevo=1;
$finobacci=$antiguo+$nuevo;


function esPar($numero,$multiplo){
  return(($numero % $multiplo) == 0);
}


for($i=1;$i<=$fin;$i++)
{
	//echo "<br>".$finobacci;
	$antiguo=$nuevo;
	$nuevo=$finobacci;
	$finobacci=$antiguo+$nuevo;
	
	if ($finobacci < 4000000){
	  if(esPar($finobacci, 2)){
	     $suma = $suma + $finobacci;
	  }
	}
}
echo "<br>".$suma;
?>
  
