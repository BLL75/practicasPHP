<?php
   require("connection_info.php");
   require('cityClass.php');
   
   class citiesClass{
	   
	    public $ciudades,$gbd;
	    public $ciudades,$gbd;
	   
	    public function __construct($gbd){
		   
		   $this->gbd = $gbd;
	    }
	   
	    public function __destruct(){
	    }
	   
	    public function cargarCiudades(){
		   		   
		   $stmt = $this->gbd->query('SELECT ID FROM City ORDER BY ID');		   
		   $this->ciudades = [];
		   		   
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
					$ciudad = new cityClass($this->gbd);
					$ciudad->cargarCiudad($row['ID']);
					$this->ciudades[] = $ciudad;
					
			}
			
	    }
		
		public function cargarCiudadesPais($pais){
		   		   
		   $stmt = $this->gbd->query("SELECT id,city.name as name, city.population
										FROM city
										JOIN country
										ON city.countrycode=country.code
										WHERE country.name = '$pais' ORDER BY city.name"
									  );	   
		   $this->ciudades = [];
		   		   
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
					$ciudad = new cityClass($this->gbd);
					$ciudad->cargarCiudad($row['id']);
					$this->ciudades[] = $ciudad;
					
			}
				
	    }
		
		public function maxId($pais){
		   		   
		   $stmt = $this->gbd->query("SELECT max(id) as id,city.name as name, city.population
										FROM city
										JOIN country
										ON city.countrycode=country.code
										WHERE country.name = '$pais' ORDER BY city.name"
									  );	   
		   //$this->ciudades = [];
		   		   
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
					$ciudad = new cityClass($this->gbd);
					$ciudad->cargarCiudad($row['id']);
					$this->ciudades = $ciudad;
					var_dump($this->ciudades);
					
			}
				
	    }
		
		public function existeCiudad($id){
		
		    
			$stmt = $this->gbd->query("SELECT ID FROM City WHERE id =$id");
			$existe = false;
			//var_dump($stmt);
            		
				while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
					//$ciudad = new cityClass($this->gbd);
					//$ciudad->cargarCiudad($row['ID']);
					//$this->ciudades = $ciudad;
					//var_dump($this->ciudades);
					$existe = true;	
			    }
			
			return $existe;
			
		}
		
		
		
		
	
   }

?>