<?php
    require("connection_info.php");
	require("bdClass.php");
	
	class cityClass extends bdClass{
	      
		//Propiedades de la clase
		
        public $id, $name, $population, $district,$maxId, $minId; 
		
		public function cargar($city_Code){ // cambiado nombre del metodo
		    
			$stmt = $this->gbd->query("SELECT ID, Name, CountryCode,
								District, Population FROM City
								WHERE ID =$city_Code");			
			
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $this->id = $row['ID'];
                $this->name = $row['Name'];				
				$this->countryCode = $row['CountryCode'];
				$this->district =$row['District'];
				$this->population =$row['Population'];
  				
			}
			
		}
		  
		public function eliminar($city_Code){
		   
		    $stmt = $this->gbd->query("DELETE FROM City WHERE ID=$city_Code"); 
		}
		  
		  
		public function existe($id){

			$stmt = $this->gbd->query("SELECT ID FROM City WHERE id =$id");
			$existe = false;
		
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$existe = true;	
			}
			return $existe;	
		}
		
		public function getMinMaxIdCity($pais=null){
		  if (isset($pais)) {
			$results = $this->gbd->query("Select max(ID) as mayor, min(ID) as menor from City where
					  CountryCode= '$pais' order by ID");
		  }else{
			  $results = $this->gbd->query("Select max(ID) as mayor, min(ID) as menor from City order by ID"); 
		  }
		  while ($fila = $results->fetch(PDO::FETCH_ASSOC)){
			$this->maxId = $fila["mayor"];
			$this->minId = $fila["menor"];
		  }
		}
		
		public function editar($id, $name, $population, $district){
		  $this->id = $id;
		  $this->name = $name;
		  $this->population = $population;
		  $this->district = $district;
		  $results = $this->gbd->query("update City set District='$district',name = '$name', Population='$population' where ID=$id"); 
        }   
      		  
	}	

?>