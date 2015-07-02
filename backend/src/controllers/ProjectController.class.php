<?php

require_once 'dao/DAOFactory.class.php';
//require_once 'components/xxx.class.php';
//require_once '.class.php';

class ProjectController {

	private $userId;
	private $challengesDAO;
	private $projectsDAO;
	private $userInfoDAO;
	private $projectId;

	function __construct ( $projectId ){
		
		if(isset($_SESSION["user_id"]){
			$this -> userId = $_SESSION["user_id"];
		}

		$this->projectId = $projectId;

		$DAOFactory = new DAOFactory();
		$this -> challengesDAO = $DAOFactory->getChallengesDAO();
		$this -> projectsDAO = $DAOFactory->getProductDAO();
		$this -> userInfoDAO = $DAOFactory->getUserInfoDAO();

	}

	function render (){
		//loading other click event on the page should be done by ajax
		
		try{
			
			$projects = $this->projectsDAO->getByUserId($this->userId, $this->projectId);
			
			$userProjects = $this->projectsDAO->getUserProjects();
			$UserLinks = $this->userInfoDAO->getUsersLinks();

			require_once 'views/project/project.php';
		} catch (Exception $e){
			echo "Error occur :500 <br>".var_dump($e);
		}

	}


}



?>