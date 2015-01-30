<?php
   require("connection_info.php");
   require('cityClass.php');
   
   class citiesClass{
	   
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
			//var_dump($ciudades);
			
	    }
   }

?>