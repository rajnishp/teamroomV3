<?php

require_once 'dao/DAOFactory.class.php';
//require_once 'components/xxx.class.php';
//require_once '.class.php';

// this will be a single page app

abstract class BaseController {

	protected $userId;
	protected $challengesDAO;
	protected $projectsDAO;
	protected $userInfoDAO;
	protected $baseUrl;

	protected $challengeResponsesDAO;
	protected $userSkillDAO;

	protected $teamsDAO;

	

	function __construct (  ){
		
		global $configs; 
		$this->baseUrl = $configs["COLLAP_BASE_URL"];

		if( isset( $_SESSION["user_id"] ) )
			$this -> userId = $_SESSION["user_id"];
		

	
		$DAOFactory = new DAOFactory();
		$this -> challengesDAO = $DAOFactory->getChallengesDAO();
		$this -> projectsDAO = $DAOFactory->getProjectsDAO();
		$this -> userInfoDAO = $DAOFactory->getUserInfoDAO();
		$this -> userSkillDAO = $DAOFactory->getSkillsDAO();

		$this -> challengeResponsesDAO = $DAOFactory->getChallengeResponsesDAO();
		
		$this -> teamsDAO = $DAOFactory-> getTeamsDAO();


		$this->render();

	}

	function render (){
		
		

		try{
			//queryAllUserProjects
			if($this->userId)
				$this->projects = $this->projectsDAO->queryAllUserProjects($this->userId);
			//$recProject = $this->projectsDAO->queryAllUserProjects($this->userId);
			

		} catch (Execption $e){
			echo "Server every on DashboardController <br/>".var_dump($e); 
		}

	}


}



?>