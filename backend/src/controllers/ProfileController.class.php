<?php

require_once 'dao/DAOFactory.class.php';
//require_once 'components/xxx.class.php';
//require_once '.class.php';

class ProfileController {

	private $userId;
	private $challengesDAO;
	private $projectsDAO;
	private $userInfoDAO;
	private $profileId;

	function __construct ( $profileId ){
		
		if( isset( $_SESSION["user_id"] ) )
			$this -> userId = $_SESSION["user_id"];
		

		$this->profileId = $profileId;

		$DAOFactory = new DAOFactory();
		$this -> challengesDAO = $DAOFactory->getChallengesDAO();
		$this -> projectsDAO = $DAOFactory->getProjectsDAO();
		$this -> userInfoDAO = $DAOFactory->getUserInfoDAO();

	}

	function render (){
		$baseUrl = "http://loc.v3.collap.com/";
		//loading other click event on the page should be done by ajax

		try{
			
			/*if($this->profileId)
				$userProjects = $this->projectsDAO->getByUserId($this->profileId);
			else
				$userProjects = $this->projectsDAO->getByUserId($this->userId);

			$userProjects = $this->projectsDAO->getUserProjects();
			$UserLinks = $this->userInfoDAO->getUsersLinks();*/

			require_once 'views/profile/profile.php';
		} catch (Exception $e){
			echo "Error occur :500 <br>".var_dump($e);
		}

	}



}



?>