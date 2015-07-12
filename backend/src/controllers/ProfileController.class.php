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
			$this->userId = 7;
		

		$this->profileId = $profileId;

		$DAOFactory = new DAOFactory();
		$this -> challengesDAO = $DAOFactory->getChallengesDAO();
		$this -> projectsDAO = $DAOFactory->getProjectsDAO();
		$this -> userInfoDAO = $DAOFactory->getUserInfoDAO();
		$this -> userSkillDAO = $DAOFactory->getSkillsDAO();

	}

	function render (){
		global $configs; 
		$baseUrl = $configs["COLLAP_BASE_URL"];
		//loading other click event on the page should be done by ajax

		try{
			
			if($this->profileId){
				$userMProjects = $this->projectsDAO->getUserPublicProjects($this->profileId,0,10);
				$userActivities = $this->challengesDAO->getUserActivities($this->profileId,0,10);
				$userProfile = $this->userInfoDAO->load($this->profileId);
				$userSkills = $this ->userSkillDAO->getUserSkills($this->profileId);
			}
			else{
				$userMProjects = $this->projectsDAO->getUserPublicProjects($this->userId,0,10);
				$userActivities = $this->challengesDAO->getUserActivities($this->userId,0,10);
				$userProfile = $this->userInfoDAO->load($this->userId);
				$userSkills = $this ->userSkillDAO->getUserSkills($this->profileId);
			}
			//var_dump($userMProjects);
			$userSProjects = $this->projectsDAO->getUserProjects($this->userId, 0, 10);

			$UserSLinks = $this->userInfoDAO->getUsersLinks($this->userId);

			require_once 'views/profile/profile.php';
		} catch (Exception $e){
			echo "Error occur :500 <br>".var_dump($e);
		}

	}



}



?>