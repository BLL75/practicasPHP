<html>
	<head></head>
	<body>
	    
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="offset1 span1 pull-left" style="bottom:0;">
					<h1>Cities of the world</h1>		
					{section name=outer loop=$lista}
						</br>
						<a href='city_edit.php?ID={$lista[outer]->id}'>--{$lista[outer]->id}--</a>{$lista[outer]->name}				 
					{/section}
				</div>
			</div>
		</div>
	
	<body>
</html>
