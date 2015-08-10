<?php

require_once 'controllers/BaseController.class.php';

class JobsHomeController  extends BaseController {

	function __construct (  ){
		
		parent::__construct();
		
		$this -> logger -> debug("JobsHomeController started");

	}

	function render (){
		$baseUrl = $this->baseUrl;
		
		// here its shower that user is not in session
		//global $configs;
		//$baseUrl = $configs["JOBS_COLLAP_BASE_URL"];
		try{
			//$topProjects = $this -> projectDAO -> getTopProjects(); // have not found the function find and replace
			require_once 'views/landing/index.job.php';

		} catch (Exception $e) {

			require_once 'views/error/pages-404.php';	
			$this->logger->error( "Error occur :500 ".json_encode($e) );
		}

	}

}

?>