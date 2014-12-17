function valida($c)
	{
		
		$c_control = array(false,false,false,false,false,false,false,false,false);
		
		foreach ($c as $indice => $valor){
			if(!($c_control[$valor - 1]))
			{
				$c_control[$valor - 1] = true;
			}else{
				return false;
			}
		}
		return true;
	}
	
Centro de Formacion Rafael Salinas

	
	801270-07112014
00000zpa7fYO0OTpEwxKeLVFJv"0QY
BvT1AXHBbErIxe0kLskFIdQuvQclXh
U0e8vgP5X"AmK57!93pscfFIhkvyOz