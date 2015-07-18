<?php

require_once 'controllers/BaseController.class.php';

class ProfileController extends BaseController {

	private $profileId;

	function __construct ( $profileId = null ){
		parent::__construct();	
		
		$this->profileId = $profileId;

		$DAOFactory = new DAOFactory();
		$this -> userEducationDAO = $DAOFactory->getEducationDAO();
		$this -> userTechStrengthDAO = $DAOFactory->getTechnicalStrengthDAO();
		$this -> userWorkHistoryDAO = $DAOFactory->getWorkingHistoryDAO();
		$this -> userJobPreferenceDAO = $DAOFactory->getJobPreferenceDAO();
		

	}

	function render (){
		$baseUrl = $this->baseUrl;
		$projects = $this->projects;
		//loading other click event on the page should be done by ajax

		try{
			
			if($this->profileId != null){
				$userMProjects = $this->projectsDAO->getUserPublicProjects($this->profileId,0,10);
				$userActivities = $this->challengesDAO->getUserActivities($this->profileId,0,10);
				$userProfile = $this->userInfoDAO->load($this->profileId);
				$userSkills = $this ->userSkillDAO->getUserSkills($this->profileId);

				$userEducation = $this -> userEducationDAO -> queryByUserId($this -> profileId);
				$userTechStrength = $this -> userTechStrengthDAO -> queryByUserId($this -> profileId);
				$userWorkExperience = $this -> userWorkHistoryDAO -> queryByUserId($this -> profileId);
				$userJobPreference = $this -> userJobPreferenceDAO -> getUserJobPreference($this -> profileId);

			}
			else{
				$userMProjects = $this->projectsDAO->getUserPublicProjects($this->userId,0,10);
				
				$userActivities = $this->challengesDAO->getUserActivities($this->userId,0,10);
				$userProfile = $this->userInfoDAO->load($this->userId);
				$userSkills = $this ->userSkillDAO->getUserSkills($this->userId);

				$userEducation = $this -> userEducationDAO -> queryByUserId($this -> userId);
				$userTechStrength = $this -> userTechStrengthDAO -> queryByUserId($this -> userId);
				$userWorkExperience = $this -> userWorkHistoryDAO -> queryByUserId($this -> userId);
				$userJobPreference = $this -> userJobPreferenceDAO -> getUserJobPreference($this -> userId);

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