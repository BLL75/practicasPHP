<?php
   //Definición de una clase.
   // Todo lo referente al objeto va dentro de la clase.
   class shopProduct{	
      //Class body
	  public $title = "default product";
	  public $producerMainName = "main name";
	  public $producerFirstName = "first name";
	  public $price = 0;
	  
		//Constructor.
		//Definimos como debe ir construido el objeto.
		function __construct($title, $firstName, $mainName, $price){
		   $this->title = $title;
		   $this->producerFirstName = $firstName;
		   $this->producerMainName = $mainName;
		   $this->price = $price;
		  
		}
	    //Creación de un método.Este por ejemplo con un return con producerFirstName y producerMainName;
		function getProducer(){
			return "{$this->producerFirstName}"."<br>".
				   "{$this->producerMainName}";
		}
		
		function getDescuento($desc){
		   if (is_integer($desc)){
		      return $this->price*(1-$desc/100);
		   }
           else {
		      return 0;
		   }		   
		}
	}
	
	
	$product3 = new shopProduct ("My Antonia", "Willy", "Carther", 5.99);
	
	print $product3->getProducer();
	print $product3->getDescuento(10);
	
    //$product1 = new shopProduct();
	//$product2 = new shopProduct();
	
	//var_dump($product1);
	//var_dump($product2);
	
	
	//$product1->title = "Titulo nuevo";
	
	//print $product1->title;
	//print $product1->price;
	
	
	//print $product1->getProducer();
	
	
	
	
	
?>