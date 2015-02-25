<?php
    require('connection_info.php');
   

    abstract class bdClass{
      protected $gbd;
      
	  abstract public function existe($id);
	  abstract public function cargar($ID);
      abstract public function editar($id, $name, $population, $district);
	  abstract public function eliminar($city_Code);
      
	  public function __construct($gdb) {
         $this->gbd = $gdb; 
      }
    }

?>