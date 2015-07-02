<?php

require_once 'dao/DAOFactory.class.php';
//require_once 'components/xxx.class.php';
//require_once '.class.php';

// this will be a single page app

class DashboardController {

	

	function __construct (  ){
		
	

	}

	function render (){

		try{
			
			require_once 'view/dashboard/dashboard.php';

		} catch (Execption $e){
			echo "Server every on DashboardController <br/>".var_dump($e); 
		}

	}


}



?>