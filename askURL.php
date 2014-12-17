<html>
<head>
   
   <a name = "top"><h1> Formas de gobierno en WIKIPEDIA </h1></a>
<?php
//Require para enlazar con connection_info.php
require("connection_info.php");
//Variable con conexion a servidor.
$enlace =  mysql_connect($dbhost, $dbuser, $dbpass);
//Comprueba si se ha enlazado correctamente con el servidor.
if (!$enlace) {
    die('No puedo conectarme:'.mysql_error());
}

//Seleccionamos la BBDD
if (mysql_select_db($dbdb, $enlace)){
   echo 'Base de datos seleccionada <br>';
}
else{
   echo 'Error seleccionando la base de datos <br>';
}


// En la query le pasamos la variable

$tipoGobierno = mysql_query("SELECT name, GovernmentForm FROM country order by name asc", $enlace);

if(!$tipoGobierno){
  die('<br> Consulta no válida'.mysql_error());
}


//Recojemos datos de la consulta por array asociativo
// Con $fila["name"] me pinta en pantalla los nombres de los paises
// Con el primer $fila["GovernmentForm"] se crea un enlace con wikipedia de forma dinámcia y con el segundo se pinta en pantalla.
while($fila = mysql_fetch_assoc($tipoGobierno)){
    echo " - <a href='http://en.wikipedia.org/w/index.php?title=",$fila["name"],"'>".$fila["name"]."</a>"." ---- <a href='http://en.wikipedia.org/w/index.php?title=",$fila["GovernmentForm"],"'>",$fila['GovernmentForm'],"</a><br/>\n";
}


//Cerramos la conexion con el servidor
mysql_close($enlace);
?>


</head>
<body>

   
   <a href = "#top"> Ir al principio de la pagina </a>

</body>
</html>