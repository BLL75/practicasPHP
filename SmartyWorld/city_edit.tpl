<html>
	<head>
		  <title>Editando ciudades del mundo</title>
		  <h1 align = "center">Editar la ciudad</h1>
	<head>
	<body>
	  
	  
	 
		<form action="city_save.php" method="GET">
			City Name: <input type="text" name="City_Name" value="{$lista['name']}"><br/>
			<br/>
			City District: <input type="text" name="City_District" value="{$lista['district']}"><br/>
			<br/>
			City_Population: <input type="text" name="City_Pop" value="{$lista['poblacion']}"><br/>
			<br/>
			<input type="hidden" name="ID" value="{$lista['ID']}">
			<input type="submit" name="Submit" value="Insert">
		</form>
		
	</body>
</html>