<html>
   <head>
        <title>HOLA PHP</title>
   </head>
   <body>
       <h1> Hello from PHP </h1>
	   <?php
	     //http://localhost/tarde/PHP/pasandoDatosURL.php?first_name=Ramoncin&last_name=mamon
		 // Se pasan las variables en el URL.Navegador
		 // Sin pasar las variables solo pintaria Hello from PHP y daría error porque las variables no estan definidas.
	     $f_name = $_GET["first_name"];
		 $l_name = $_GET["last_name"];
		 echo "Hola $f_name $l_name";
	   ?>

   <body>
</html>