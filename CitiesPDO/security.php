<?php
    // Inicio de sesion 
    session_start();
    require("connection_info.php");
    
    if(isset($_POST["access_requested"])){
	    if ($_POST["access_requested"]=="yes") {
		    //Conexión a BBDD.
		    
			//Declaramos variables user y pword que le pasamos por POST uname y pword.
			$user = $_POST["uname"];
            $pword = $_POST["pword"];
			
			
			// En la query le pasamos las variables con email y contraseña.
			//SHA porque es una contraseña codificada.
			
			$stmt = $gbd->query("SELECT customerEmail FROM customers
										WHERE customerEmail='$user' AND
										passwd = SHA('$pword');");
			//Declaramos variable para rescatar el resultado de la query por array asociativo.
		    
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
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
    
?>