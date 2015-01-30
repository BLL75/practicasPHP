<html>
	<head>
		<title>Editando ciudades del mundo</title>    
	<head>
	<body>
	  
	  
	    <div class="col-lg-6 col-lg-offset-3 text-center">
		    <h1 align = "center">Editar la ciudad</h1>
			<form action="city_save.php" method="GET" class='form-horizontal'>
				City Name: <input type="text" class="form-control" name="City_Name" value="{$lista['name']}"><br/>
				<br/>
				City District: <input type="text" class="form-control" name="City_District" value="{$lista['district']}"><br/>
				<br/>
				City_Population: <input type="text" class="form-control" name="City_Pop" value="{$lista['poblacion']}"><br/>
				<br/>
				<input type="hidden" name="ID" value="{$lista['ID']}">
				<input type="submit" class="btn btn-default" name="Submit" value="Insert">
			</form>
		</div>
		
	</body>
</html>