
<html>
	<head>
	    <title>MySQL and PHP</title>
		<h1>Cities of the world</h1>
	</head>
	<body>
	   <?php
	    //Enlace para archivo donde tenemos datos de conexion a la bbdd orientada a objetos.
		require("connection_info.php");
		include("navigation.php");
		require 'libs/Smarty.class.php';

		$smarty = new Smarty;
		$smarty->caching = false;
		$smarty->debugging=true;

		$stmt = $gbd->query('SELECT ID, Name FROM City ORDER BY ID');
		
        $lista = array();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $lista[] = array("id" => $row['ID'], "name" => $row['Name']);			
		}
		
		$smarty->assign('lista',$lista);
		$smarty->display('cities.tpl');
		

		$gbd = null;
	   ?>
	</body>
</html>