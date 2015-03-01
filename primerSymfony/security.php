<?php
    // Inicio de sesion
    include('connection_info.php');
    require('securityClass.php');
    require_once 'vendor/autoload.php';
    require('tplClass');
	
    use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\HttpFoundation\Session\Session;
	
	$request = Request::createFromGlobals();	
 
	//$smarty3 = new Smarty;
	//$smarty3->caching = false;
    $autenticar = new securityClass($gbd);

	
    if($request->getMethod()=='POST'){
	    if ($request->get("access_requested")=="yes") {
			$user = $request->get('uname');
			$pword = $request->get('pword');			
			$autenticar->iniciarSession($user,$pword);   			
		}
	}
    if($autenticar->getSesionAprobado()){
        $smarty = new tplClass();
        $smarty->tplGetSesionAprobado();        
			
    }else{ 
       $req_URL = $_SERVER["REQUEST_URI"];
       $smarty = new tplClass();
	   $smarty->tplSesionNoAprobada();
       exit;
    }
	
    
?>