<?php

require_once 'dao/DAOFactory.class.php';
//require_once 'components/xxx.class.php';
//require_once '.class.php';

class JobsHomeController {

	private $userId;
	private $userInfoDAO;
	private $user;
	private $fromUrl;


	function __construct (  ){
		
		$DAOFactory = new DAOFactory();
		$this -> userInfoDAO = $DAOFactory->getUserInfoDAO();
		//$this -> fromUrl = $_GET['from'];
		

	}

	function render (){
		// here its shower that user is not in session
		global $configs;
		$baseUrl = $configs["JOBS_COLLAP_BASE_URL"];
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