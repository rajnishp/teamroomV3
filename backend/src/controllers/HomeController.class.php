<?php

require_once 'dao/DAOFactory.class.php';
//require_once 'components/xxx.class.php';
//require_once '.class.php';

class HomeController {

	private $userId;
	private $project;


	function __construct (  ){
		
		$DAOFactory = new DAOFactory();
		$this -> projectDAO = $DAOFactory->getProjectsDAO();
		

	}

	function render (){
		// here its shower that user is not in session

		try{
			$topProjects = $this -> projectDAO -> getTopProjects(); // have not found the function find and replace
			require_once 'static/landing/index.php';

		} catch (Exception $e) {

			echo "File missing at server";
		}

	}


}



?>