

	   <?php
	    //Enlace para archivo donde tenemos datos de conexion a la bbdd orientada a objetos.
		require("connection_info.php");
		include("navigation.php");

		$smarty = new Smarty;
		$smarty->caching = false;
		

		$stmt = $gbd->query('SELECT ID, Name FROM City ORDER BY ID');
		
        $lista = array();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $lista[] = array("id" => $row['ID'], "name" => $row['Name']);    		
		}
		
		

		$smarty->assign('lista',$lista);
		$smarty->display('cities.tpl');
		
		

		$gbd = null;
	   ?>
