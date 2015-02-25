<?php
    // Inicio de sesion
    include('connection_info.php');
    require('securityClass.php');	
    

	$smarty3 = new Smarty;
	$smarty3->caching = false;
	
    
    if(isset($_POST["access_requested"])){
	    if ($_POST["access_requested"]=="yes") {
		    //Conexión a BBDD.
			//Declaramos variables user y pword que le pasamos por POST uname y pword.
			$user = $_POST["uname"];
            $pword = $_POST["pword"];
			
			//Instancia el objeto
			$autenticar = new securityClass($gbd);
			$autenticar->iniciarSession($user,$pword);
			
		}
	}
	if(!isset($_SESSION["Approved"])){
		$_SESSION["Approved"]="No";
	}
	// Si la sesión se ha iniciado nos sale enlace con destroy.php para destruir session.
    if($_SESSION["Approved"]=="Yes") {        
		$smarty3->assign("mensaje", "");
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