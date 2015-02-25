<?php
    // Inicio de sesion
    include('connection_info.php');
    require('securityClass.php');
    require_once 'vendor/autoload.php';
	
    use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\HttpFoundation\Session\Session;
	
	$request = Request::createFromGlobals();	
 
	$smarty3 = new Smarty;
	$smarty3->caching = false;
    $autenticar = new securityClass($gbd);

	
    if($request->getMethod()=='POST'){
	    if ($request->get("access_requested")=="yes") {
			$user = $request->get('uname');
			$pword = $request->get('pword');
						
			$autenticar->iniciarSession($user,$pword);   			
		}
	}
    if($autenticar->getSesionAprobado()=='Yes'){        
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