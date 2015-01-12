<html>
	<head>
  <meta charset='utf-8'>
		<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script>
    
    $( document ).ready(function() {
        a = {1,2,3};    
        b = [[1,2,3],[[],2,3,[4]]];    
        console.log(a);
        console.log(b);
		//Pasamos a JSON
        a = JSON.stringify(a);
        b = JSON.stringify(b);
        console.log(a);
        console.log(b);
		//Asignamos el valor a #a y #b.
        $("#a").val(a);
        $("#b").val(b);
    });
    </script>
    <title>HELLO FROM PHP</title>
	</head>
	<body>
		<h1>Hello from PHP</h1>
		<?php
			// Definimos array inicial
			echo "Array Inicial. PHP" . "<br>";
			$a = [1,2,3];
			$b = [[1,2,3],[2,3,4]];
			//Pasamos por pantalla
			var_dump($a);
			var_dump($b);
			
			//Serializamos el array
			echo "Array serializado" . "<br>";
			$a = serialize($a);
			$b = serialize($b);
			//Pasamos por pantalla
			var_dump($a);
			var_dump($b);
			
			//Desearializamos el array
			echo "Array deserializado. PHP" . "<br>";
			$a = unserialize($a);
			$b = unserialize($b);
			//Pasamos por pantalla
			var_dump($a);
			var_dump($b);
			
			//Con esto recogeriamos los datos pasados por POST(JQuery).
			if ($_POST) {
			  echo "Array recogidos por POST. Definidos en Javascript" . "<br>";
			  //json_decode interpreta JSON.
			  $a=json_decode($_POST['a']);
			  $b=json_decode($_POST['b']);
			  var_dump($a);
			  var_dump($b);
			  
			}
		?>
     
      <form action="envioJSON.php" method="POST">
        Variable A:<br>
        <input id="a" type="text" name="a"><br>
        Variable B:<br>
        <input id="b" type="text" name="b">
        <input type="submit" value="Enviar">
      </form> 
    
	</body>
</html>
