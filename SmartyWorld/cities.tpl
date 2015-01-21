<html>
	<head></head>
	<body>
	    
			
	    
			{section name=outer loop=$lista}
				
				</br>
				<a href='city_edit.php?ID={$lista[outer].id}'>--{$lista[outer].id}--</a>{$lista[outer].name}
				 
			{/section}
        
	
	<body>
</html>
