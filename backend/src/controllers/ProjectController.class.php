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
		
		if(isset($_SESSION["user_id"]))
			$this -> userId = $_SESSION["user_id"];
		

		$this->projectId = $projectId;

		$DAOFactory = new DAOFactory();
		$this -> challengesDAO = $DAOFactory->getChallengesDAO();
		$this -> projectsDAO = $DAOFactory->getProjectsDAO();
		$this -> userInfoDAO = $DAOFactory->getUserInfoDAO();

	}

	function render (){
		$baseUrl = "http://loc.v2.collap.com/"; 
		//loading other click event on the page should be done by ajax
		
		try{
			
			//$projects = $this->projectsDAO->getByUserIdProjectId($this->userId, $this->projectId);
			
			//$userProjects = $this->projectsDAO->getUserProjects($this->userId);
				
			//$UserLinks = $this->userInfoDAO->getUsersLinks($this->userId);
				

			require_once 'views/project/project.php';
		} catch (Exception $e){
			echo "Error occur :500 <br>".var_dump($e);
		}

	}


}



?>