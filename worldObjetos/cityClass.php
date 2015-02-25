<?php
    require("connection_info.php");
	
	class cityClass {
	      
		  //Propiedades de la clase
		  public $id, $name, $countrycode, $district, $population, $gbd, $ciudades;
		  
		  
		  public function __construct($gbd)
		  {
		    $this->gbd = $gbd;
		  }
		  
		  public function __destruct(){
		  }
		  
		  
		  public function cargarCiudad($city_Code){ // cambiado nombre del metodo
		    $stmt = $this->gbd->query("SELECT ID, Name, CountryCode,
								District, Population FROM City
								WHERE ID =$city_Code");
			
			
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				//$_SESSION['cities'][] = $row['Name'];
                $this->id = $row['ID'];
                $this->name = $row['Name'];				
				$this->countryCode = $row['CountryCode'];
				$this->district =$row['District'];
				$this->population =$row['Population'];
				
                				
			}
			
		  }
		  
		  public function eliminarCiudad($city_Code){
		   
		    $stmt = $this->gbd->query("DELETE FROM City WHERE ID=$city_Code"); 
		  }
		  
		  

          		  
	}	

?>