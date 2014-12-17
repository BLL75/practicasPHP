


<?php
// Esto es probando el Git
function fechaActual(&$d, &$m, &$y){
    $fecha = getdate();
	$d = $fecha['mday'];
	$m = $fecha['mon'];
	$y = $fecha['year'];
};
// Aqui tengo unos cambios zuprimo
fechaActual($dd, $mm, $yy);
echo " Hoy es el dia $dd del mes $mm del $yy<br>";



// Modifico un poco mas.

//Ordenamiento de array con algoritmo de la burbuja.(Más información en interneeeee).
 function burbuja($A,$n)
    {
        for($i=1;$i<$n;$i++)
        {
                for($j=0;$j<$n-$i;$j++)
                {
                        if($A[$j]>$A[$j+1])
                        {$k=$A[$j+1];
						$A[$j+1]=$A[$j];
						$A[$j]=$k;}
                }
        }
      return $A;
    }

	
// Ordenamiento de array con algoritmo de la burbuja por referencia.
    function main()
    {
        $VectorA=array(4,3,6,9,5,43,65,11,23,87,45,33,78,32,12,77);
        $VectorB=burbuja ($VectorA,sizeof($VectorA));
        for($i=0;$i<sizeof($VectorB);$i++)
            echo $VectorB[$i]."\n";
    }
    main();
	
	function burbuja2(&$A,$n)
    {
        for($i=1;$i<$n;$i++)
        {
                for($j=0;$j<$n-$i;$j++)
                {
                        if($A[$j]>$A[$j+1])
                        {$k=$A[$j+1];
						$A[$j+1]=$A[$j];
						$A[$j]=$k;}
                }
        }
    }
	
	
    echo "<br><br><br>";
    function main2()
    {
        $VectorA=array(4,3,6,9,5,43,65,11,23,87,45,33,78,32,12,77);
        $VectorB=burbuja ($VectorA,sizeof($VectorA));
        for($i=0;$i<sizeof($VectorB);$i++)
            echo $VectorB[$i]."\n";
    }
    main2();	

?>


