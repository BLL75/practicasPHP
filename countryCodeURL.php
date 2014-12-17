<html>
<head>
   
   


</head>
<body>

   <a name = "top"><h1> Ciudades del mundo </h1></a>
<?php
require("connection_info.php");
$enlace =  mysql_connect($dbhost, $dbuser, $dbpass);

if (!$enlace) {
    die('No puedo conectarme:'.mysql_error());
}


if (mysql_select_db($dbdb, $enlace)){
   echo 'Base de datos seleccionada <br>';
}
else{
   echo 'Error seleccionando la base de datos <br>';
}

//Creamos variable para URL
$country_code = $_GET["country_code"];
$id = $_GET["id"];
//echo "<a name =".$fila2["ID"]."></a>";


// En la query le pasamos la variable
$resultado = mysql_query("SELECT name, region, surfacearea, population 
FROM country WHERE code='$country_code'", $enlace);


//Recojemos datos de la consulta por array asociativo
while($fila = mysql_fetch_assoc($resultado)){
    echo "Nombre del pais:  <h3>"." - <a href='http://en.wikipedia.org/w/index.php?title=",
	$fila["name"],"'>".$fila["name"]."</a>"."</h3><br>"." Region:  ".
	$fila["region"]."<br>"."Surface Area: ".$fila["surfacearea"].
	"<br>"."Population".$fila["population"]."<br>";
}

//Creamos el ancla y le pasamos la variable $id.La cual recibe la ID del pais.
echo "<a href=connection.php#",$id,">","Volver a paises</a>";

mysql_close($enlace);
?>


</body>
</html>