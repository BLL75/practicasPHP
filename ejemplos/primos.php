<html>

    <head>
	<script>
	</script>
	</head>
    <body>

		<?php
		
		
			function circumference ($diameter) {
				$c = $diameter * pi();	
				return(printf("%01.2f",$c));
			}
		
			circumference(3);
			circumference(4);
			circumference(5);
			
			/*
			function esPrimo($dividendo) {
				$divisor = 2;
				while ($divisor < $dividendo) 
				{	
					echo "Divisor:$divisor < Dividendo:$dividendo <br>";
					if (($dividendo % $divisor) == 0) 
					{
						echo "$dividendo % $divisor == 0 <br>";
						return false;
					}
					$divisor++;
				}
				echo "Divisor:$divisor == Dividendo:$dividendo <br>";
				return true;
			}
			
			$numero = 1;			
			while ($numero <= 100) {
				if (esPrimo($numero)) {
					echo "$numero es primo<br>";
				} else {
					echo "$numero no es primo <br>";
				}
				$numero++;
			}
			
			*/
?>
	     
 	
    </body>

</html>
