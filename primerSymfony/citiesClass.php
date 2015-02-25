<?php
   require("connection_info.php");
   require('cityClass.php');
   
   class citiesClass{
	   
	    public $ciudades,$gbd,$opcionHTML;
	    
	   
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
			$this->opcionHTML = 'ciudadesDelMundo';
			
	    }
		
		public function cargarCiudadesPais($id){
		   		   
		    $stmt = $this->gbd->query("SELECT id
										FROM city
										WHERE id = '$id' ORDER BY name"
									  );	   
		    $this->ciudades = [];
		   	$existe = false;	   
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
					$ciudad = new cityClass($this->gbd);
					if($ciudad->existeCiudad($id)){
						$ciudad->cargarCiudad($row['id']);
					    $this->ciudades[] = $ciudad;                       				
					}					
			}
			if($existe==0){
				$ciudad = new cityClass($this->gbd);
				$ciudad->ultimaId($id);				
				$this->existeId = 'noExiste';
			}
			$this->opcionHTML = 'ciudadesPaisHTML';
				
	    }
		
		
		
		
		
		
		
		
	
   }

?>