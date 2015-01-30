<?php
    // Inicio de sesion 
    session_start();

	$smarty3 = new Smarty;
	$smarty3->caching = false;
	
    
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
				//$smarty3->assign("mensaje", "Incorrect Username and/or Password, please try again");
			    $_SESSION["Approved"]="No";
				//$smarty3->display('security.tpl');
				
			}
		}
	}
	if(!isset($_SESSION["Approved"])){
		$_SESSION["Approved"]="No";
	}
	// Si la sesión se ha iniciado nos sale enlace con destroy.php para destruir session.
    if($_SESSION["Approved"]=="Yes") {        
		$smarty3->assign("mensaje", "Logeado correctamente");
		$smarty3->assign("Approved","Yes");
		$smarty3->display('security.tpl');
		
    }else{ 
       $req_URL = $_SERVER["REQUEST_URI"];
	   $smarty3->assign("mensaje", "Introduzca sus correctamente");
	   $smarty3->assign("Approved","No");
       $smarty3->assign('url', $req_URL);
       $smarty3->display('security.tpl');
       exit;
    }
	
    
?>