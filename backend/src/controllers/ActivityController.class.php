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
		
		if(isset($_SESSION["user_id"]){
			$this -> userId = $_SESSION["user_id"];
		}

		$this->challangeId = $challangeId;

		$DAOFactory = new DAOFactory();
		$this -> challengesDAO = $DAOFactory->getChallengesDAO();
		$this -> projectsDAO = $DAOFactory->getProductDAO();
		$this -> userInfoDAO = $DAOFactory->getUserInfoDAO();

	}

	function render (){
		try{
			$activity = $this->challengesDAO->load($challangeId);
			$topActivities = $this->challengesDAO->getTopActivities(); 
			$topProjects = $this->projectsDAO->getTopProjects();
			$topUsers = $this->userInfoDAO->getTopUsers();

			require_once 'views/activity/activity.php';
		} catch (Exception $e){
			echo "Error occur :500 <br>".var_dump($e);
		}

	}


}



?>