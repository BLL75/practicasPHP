<?php

  require('connection_info.php');
  require('countryClass.php');
  
  
  class countriesClass{
  
    public $paises,$gbd;
	
	public function __construct($gbd){
	
	  $this->gbd = $gbd;
	}
	
	public function cargarPaises(){
	    $stmt = $this->gbd->query('SELECT name FROM country ORDER BY name');		   
		$this->paises = [];
		   		   
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$pais = new paisClass($this->gbd);
			$pais->cargarPais($row['name']);
			$this->paises[] = $pais;
       			
		}
		
	
	}
	
	 
  }

?>