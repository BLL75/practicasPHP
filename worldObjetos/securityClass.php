<?php
    require('connection_info.php');
	session_start();
	
    class securityClass{
	  
		public $user,$pword,$gbd;
		

		public function __construct($gbd){
		    $this->gbd = $gbd;
		}

		public function iniciarSession($user,$pword){
			
			// En la query le pasamos las variables con email y contraseña.
				//SHA porque es una contraseña codificada.
				$this->user = $user;
				$this->pword = $pword;
				var_dump($user);
				
				$stmt = $this->gbd->query("SELECT customerEmail FROM customers
											WHERE customerEmail='".$this->user."'AND
											passwd = '".$this->pword."';");
				//Declaramos variable para rescatar el resultado de la query por array asociativo.
				
				
				$row = $stmt->fetch(PDO::FETCH_ASSOC);
				$this->user = $row['user'];
				$this->pword = $row['pword'];
				
				//Comprobación de que email y password son correctos.
				if ($row["customerEmail"]==$this->user) {
					
					$_SESSION["Approved"]="Yes";
					$_SESSION['cities'] = $this->user;
				} else {
					//$smarty3->assign("mensaje", "Incorrect Username and/or Password, please try again");
					$_SESSION["Approved"]="No";
					//$smarty3->display('security.tpl');
					
				}
				
		}	
	  
	  
    }
?>