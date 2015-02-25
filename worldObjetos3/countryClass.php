<?php
    require("connection_info.php");
	
	class paisClass {
	      //Propiedades de la clase
		  public $name, $region, $surfacearea, $population,$gbd;
		  
		  public function __construct($gbd)
		  {
			$this->gbd=$gbd;
		  }
		  
		  public function __destruct(){
		  }
		  
		  public function cargarPais($name){
		    
		    $stmt = $this->gbd->query("SELECT name, region, surfacearea, population 
			FROM country WHERE name = '$name'");
			
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $this->name = $row['name'];								
				$this->region = $row['region'];
				$this->surfacearea =$row['surfacearea'];
				$this->population =$row['population'];	   
			}
			
		  }
		  
		  public function eliminarPais($gbd,$nam){
		   
		    $stmt = $gbd->query("DELETE FROM Country WHERE name='$nam'"); 
		  }
	}	
	
	//$per1=new Pais('','','','');
	//$per1->imprimirPaises('Spain');
	//$per1->imprimirPaises($gbd);
	//$per1->buscarPais($gbd,'Japan');
	//$per1->eliminarPais($gbd,'Japan');

?>