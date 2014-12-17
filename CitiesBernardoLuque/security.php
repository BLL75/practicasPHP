<?php
   // Inicio de sesion 
    require("connection_info.php");
    session_start();
	$enlace =  mysql_connect($dbhost, $dbuser, $dbpass);
    if(isset($_POST["access_requested"])){
	    if ($_POST["access_requested"]=="yes") {
		    //Conexión a BBDD.
		    

			if (!$enlace) {
				die('No puedo conectarme:'.mysql_error());
			}
			if (mysql_select_db($dbdb, $enlace)){   
			}
			else{
			   echo 'Error seleccionando la base de datos <br>';
			}
			//Declaramos variables user y pword que le pasamos por POST uname y pword.
			$user = $_POST["uname"];
            $pword = $_POST["pword"];
			
			
			// En la query le pasamos las variables con email y contraseña.
			$resultado = mysql_query ("SELECT customerEmail FROM customers
			WHERE customerEmail='$user' AND
			passwd = SHA('$pword');");//SHA porque es una contraseña codificada.
			
			//Declaramos variable para rescatar el resultado de la query por array asociativo.
		    $row = mysql_fetch_assoc($resultado);
			//Comprobación de que email y password son correctos.
			if ($row["customerEmail"]=="$user") {
			$_SESSION["Approved"]="Yes";
			} else {
			echo "<p>Incorrect Username and/or Password, please try again</p>";
			$_SESSION["Approved"]="No";
			}
		}
	}
	if(!isset($_SESSION["Approved"])){
		$_SESSION["Approved"]="No";
	}
	// Si la sesión se ha iniciado nos sale enlace con destroy.php para destruir session.
    if($_SESSION["Approved"]=="Yes") {
        echo "<!-- HTML Comment, Access Approved, not visible in output -->";
		echo '<a href="destroy.php">Cierra sesión</a>';
    }else{
        $req_URL = $_SERVER["REQUEST_URI"];
print <<<GROUP1
<form action="$req_URL" method="POST">
<p>Username: <input type="text" name="uname"></p>
<p>Password: <input type="password" name="pword"></p>
<input type="hidden" name="access_requested" value="yes">
<p><input type="submit" value="Login"></p>
</form>
GROUP1;
       exit;
       }
    mysql_close($enlace);
?>