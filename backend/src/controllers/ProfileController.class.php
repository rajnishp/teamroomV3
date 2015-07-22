<?php

require_once 'controllers/BaseController.class.php';

class ProfileController extends BaseController {

	private $profileId;

	function __construct ( $profileUN = null ){
		parent::__construct();	

		$DAOFactory = new DAOFactory();
		$this -> userEducationDAO = $DAOFactory->getEducationDAO();
		$this -> userTechStrengthDAO = $DAOFactory->getTechnicalStrengthDAO();
		$this -> userWorkHistoryDAO = $DAOFactory->getWorkingHistoryDAO();
		$this -> userJobPreferenceDAO = $DAOFactory->getJobPreferenceDAO();
		if($profileUN){
			$this->profileUN = $profileUN;
			$this->userProfile = $this->userInfoDAO->queryByUsername($this->profileUN);
			$this->profileId = $this->userProfile->getId();
		}

	}

	function render (){
		$baseUrl = $this->baseUrl;

		//loading other click event on the page should be done by ajax

		try{
			
			if($this->profileUN != null){
				//$userMProjects = $this->projectsDAO->getUserPublicProjects($this->profileId,0,10);
				$userProfile = $this->userProfile;

				
				$userActivities = $this->challengesDAO->getUserActivities($this->profileId,0,10);
				
				$userSkills = $this ->userSkillDAO->getUserSkills($this->profileId);

				$userEducation = $this -> userEducationDAO -> queryByUserId($this -> profileId);
				$userTechStrength = $this -> userTechStrengthDAO -> queryByUserId($this -> profileId);
				$userWorkExperience = $this -> userWorkHistoryDAO -> queryByUserId($this -> profileId);
				$userJobPreference = $this -> userJobPreferenceDAO -> getUserJobPreference($this -> profileId);

			}
			else{
				//$userMProjects = $this->projectsDAO->getUserPublicProjects($this->userId,0,10);
				
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
			//echo "Error occur :500 <br>".var_dump($e);
		}

	}

	function getNextActivities(){
		$last = $_POST["last"];
		if($this->profileId != "activities")
			$userId = $this->profileId;
		else
			$userId = $this->userId;
		$top10Activities =  $this-> challengesDAO -> getUserActivities( $userId , $last,5);
		
		
			//var_dump($top10Activities);
		require_once 'views/dashboard/activitiesView.php';
	}

	function getNextProjects(){
		$last = $_POST["last"];
		if($this->profileId != "projects")
			$userId = $this->profileId;
		else
			$userId = $this->userId;
		$top10Activities =  $this-> projectsDAO->getUserPublicProjects( $userId , $last,5);
		
		
			//var_dump($top10Activities);
		require_once 'views/dashboard/activitiesView.php';
	}

	function getNextIdeas(){
		$last = $_POST["last"];
		if($this->profileId != "ideas")
			$userId = $this->profileId;
		else
			$userId = $this->userId;
		try{
			$top10Activities =  $this-> challengesDAO->getUserIdeas( $userId , $last,5);
			require_once 'views/dashboard/activitiesView.php';
		}catch(Exception $e){

		}
		
		
			//var_dump($top10Activities);
		
	}

}

?>