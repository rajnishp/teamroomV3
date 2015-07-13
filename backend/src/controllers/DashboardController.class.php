<?php

require_once 'dao/DAOFactory.class.php';
//require_once 'components/xxx.class.php';
//require_once '.class.php';

// this will be a single page app

class DashboardController {

	private $userId;
	private $challengesDAO;
	private $projectsDAO;
	private $userInfoDAO;
	

	function __construct (  ){
		
		if( isset( $_SESSION["user_id"] ) )
			$this -> userId = $_SESSION["user_id"];
			$this->userId = 7;
		

	
		$DAOFactory = new DAOFactory();
		$this -> challengesDAO = $DAOFactory->getChallengesDAO();
		$this -> projectsDAO = $DAOFactory->getProjectsDAO();
		$this -> userInfoDAO = $DAOFactory->getUserInfoDAO();
		$this -> userSkillDAO = $DAOFactory->getSkillsDAO();

	}

	function render (){
		global $configs; 
		$baseUrl = $configs["COLLAP_BASE_URL"];

		

		try{
			//queryAllUserProjects
			$projects = $this->projectsDAO->queryAllUserProjects($this->userId);
			//$recProject = $this->projectsDAO->queryAllUserProjects($this->userId);
			$top10Activities =  $this->challengesDAO->queryAllChallenges(0,10);
			//var_dump($top10Activities);
			require_once 'views/dashboard/dashboard.php';

		} catch (Execption $e){
			echo "Server every on DashboardController <br/>".var_dump($e); 
		}

	}


}



?>