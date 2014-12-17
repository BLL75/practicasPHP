<html>
    <meta charset ="utf-8"></meta>
	<head>
	    <title>Read City Form Submission</title>
	</head>
	<body>
    <?php
       //Enlace para archivo donde tenemos datos de conexion a la bbdd
	require("connection_info.php");
	
	// Creamos variable para la conexion 
	$enlace =  mysql_connect($dbhost, $dbuser, $dbpass);
	
	// Si falla la conexion y nos indica el error
	if (!$enlace) {
        die('No puedo conectarme:'.mysql_error());
    }
	
	// Selección de la bbdd
    if (mysql_select_db($dbdb, $enlace)){
        //echo 'Base de datos seleccionada <br>';
	}
	// Mensaje error si no conectamos a la bbdd
	else{
	    echo 'Error seleccionando la base de datos <br>';
	}  
	
	if ($_POST) {
	   $City_CountryCode = $_POST['City_CountryCode'];
	   $City_Name = $_POST['City_Name'];
	   $City_District = $_POST['City_District'];
	   $City_Pop = $_POST['City_Pop'];
	   $City_ID = $_POST['City_ID'];
	}
	else {
	   echo "Esta página no ha sido llamada correctamente";
	   exit;
	}
	
	if ($_POST['Submit']=='Update'){
	
		$SQLexecute = "UPDATE City SET CountryCode='$City_CountryCode',
					   Name='$City_Name', District='$City_District',
					   Population=$City_Pop WHERE ID=$City_ID";
					   
		$userText = "Actualizado correctamente";
	}
	else if($_POST['Submit']=='Delete'){
	    $SQLexecute = "DELETE FROM City WHERE ID=$City_ID";
		
		if ($City_ID !=1){
		   $City_ID = $City_ID - 1;
		}
		else {
		   $City_ID = $City_ID + 1;
		}
	    $userText = "Borrado correctamente";
	}
	else if($_POST['Submit']=='Insert'){
	    $SQLexecute = "INSERT INTO City
		               (CountryCode, Name, District,Population)
					   VALUES('$City_CountryCode', '$City_Name',
					   '$City_District','$City_Pop')";
	    $userText = "Insertado correctamente";
	}
	
	$query_execute = mysql_query($SQLexecute);
	
	/*Sale con un mensaje de error si hay problema en la ejecución de la query*/
	if (!$SQLexecute){
      die('<br> Consulta no válida'.mysql_error());
	  
   }
   if ($_POST['Submit']=="Insert"){
     $City_ID = mysql_insert_id($enlace);
   }

print <<<Group1
<h2>$userText</h2>
<p><a href="city_form.php?CityCode=$City_ID">Volver al formulario</a></p>
Group1;

mysql_close($enlace);
    ?>	
	
	</body>
</html>