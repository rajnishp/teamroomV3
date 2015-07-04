<?php

require_once 'dao/DAOFactory.class.php';
//require_once 'components/xxx.class.php';
//require_once '.class.php';

class ActivityController {

	private $userId;
	private $challengesDAO;
	private $projectsDAO;
	private $userInfoDAO;
	private $challangeId;

	function __construct ( $challangeId ){
		
		if(isset($_SESSION["user_id"]))
			$this -> userId = $_SESSION["user_id"];
		
		$this->challangeId = $challangeId;

		$DAOFactory = new DAOFactory();
		$this -> challengesDAO = $DAOFactory->getChallengesDAO();
		$this -> challengeResponsesDAO = $DAOFactory->getChallengeResponsesDAO();
		$this -> projectsDAO = $DAOFactory->getProjectsDAO();
		$this -> userInfoDAO = $DAOFactory->getUserInfoDAO();

	}

	function render (){
		global $configs; 
		$baseUrl = $configs["COLLAP_BASE_URL"];
		try{
			$activity = $this->challengesDAO->getByChallengeId($this->challangeId);
			$comments = $this ->challengeResponsesDAO->getResponses($this->challangeId);
			
			$popPosts = $this->challengesDAO->getTopActivities();
			$recPosts = $this->challengesDAO->getRecentActivities();
			$popProjects = $this->projectsDAO->getTopProjects();

			//$topUsers = $this->userInfoDAO->getTopUsers();
			//var_dump($activity);
			require_once 'views/activity/activity.php';
		} catch (Exception $e){
			echo "Error occur :500 <br>".var_dump($e);
		}

	}


}



?>