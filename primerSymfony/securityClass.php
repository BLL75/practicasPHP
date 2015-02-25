<?php
    require('connection_info.php');
	//session_start();
	require_once 'vendor/autoload.php';
	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\HttpFoundation\Session\Session;
	use Symfony\Component\HttpFoundation\Session\Attribute\NamespacedAttributeBag;

    class securityClass{
	    
		public $user,$pword,$gbd;
		
		public $sesion;
		

		public function __construct($gbd){
		    $this->gbd = $gbd;
			$this->sesion = new Session();
			$this->sesion->start();
			//$this->setSesionAprobadoOff();
		}

		public function getSesionAprobado(){
		     return $this->sesion->get('Approved');
		}
		
		public function setSesionAprobadoOn(){
			$this->sesion->set('Approved','Yes');
		}
		
		public function setSesionAprobadoOff(){
			$this->sesion->set('Approved','No');
		}
		
		public function meterDatoHistorial($name){           
           $tokens = $this->sesion->get('historialCiudades');
		   $tokens[] = $name;
		   $this->sesion->set('historialCiudades',$tokens);
		}
		
		public function leerDatoHistorial(){
			return $this->sesion->get('historialCiudades');
		}
		
		public function meterDatoHistorialPais($name){
		   
		   $tokens = $this->sesion->get('historialPaises');
		   $tokens[] = $name;
		   $this->sesion->set('historialPaises',$tokens);
		}
		
		public function leerDatoHistorialPais(){
			return $this->sesion->get('historialPaises');
		}
		
		public function cerrarSesion(){

			$this->sesion->invalidate();
		}
		
		public function iniciarSession($user,$pword){
			
			// En la query le pasamos las variables con email y contraseña.
			//SHA porque es una contraseña codificada.
			$this->user = $user;
			$this->pword = $pword;
			
			
			$stmt = $this->gbd->query("SELECT customerEmail FROM customers
										WHERE customerEmail='".$this->user."'AND
										passwd = '".$this->pword."';");
			//Declaramos variable para rescatar el resultado de la query por array asociativo.
			
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
						
			//Comprobación de que email y password son correctos.
			if ($row["customerEmail"]==$this->user){
				$this->setSesionAprobadoOn();
                var_dump('La sesion ha sido aprobada');				
			} 
			else{
				$this->setSesionAprobadoOff();
                var_dump('La sesion NO ha sido aprobada');				
			}				
		}	
    }
?>