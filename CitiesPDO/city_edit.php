
<html>
	<head>
	    <meta charset ="utf-8"></meta>
	<head>
	<body>
	<?php
	require("connection_info.php");
	include("navigation.php");

	


	
	//Parametro que pasamos por URL
	if($_GET['ID']){
		$city_Code = $_GET['ID'];
	}
	
	/* Query the City table */
	
									
    $stmt = $gbd->query("SELECT ID, Name, CountryCode,
						District, Population FROM City
						WHERE ID =$city_Code");
	
	
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		   $form_ID = $row["ID"];
		   $form_Name = $row["Name"];
		   $form_District = $row["District"];
		   $form_Pop = $row["Population"]; 
	}
	
print <<<Group2
<form action="city_save.php" method="GET">
City Name: <input type="text" name="City_Name" value="$form_Name"><br/>
<br/>
City District: <input type="text" name="City_District" value="$form_District"><br/>
<br/>
City_Population: <input type="text" name="City_Pop" value="$form_Pop"><br/>
<br/>
<input type="hidden" name="ID" value="$form_ID">

<input type="submit" name="Submit" value="Insert">
</form>
Group2;
	//mysql_free_result($query_results);
	$gbd = null;
	?>
	
	
	</body>
</html>