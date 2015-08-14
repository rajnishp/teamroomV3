<?php

require_once 'controllers/BaseController.class.php';

class CompleteProfileController extends BaseController  {


	function __construct ( ){
		
		parent::__construct();


	}

	function render (){
		
		$baseUrl = $this->baseUrl;

		if ( ! isset($this -> userId) || $this -> userId == ""){
						header('Location: '. $baseUrl);
		}
		
		try{
			$userProfile = $this -> userInfoDAO-> load($this->userId);

			$this-> recommendedJoinProjects = $this->projectsDAO->getRecommendedJoinProjectsTab($this->userId);			
			
			if ($_SESSION['jobsCollap']) {
			
				$allSkills = $this -> userSkillDAO->availableUserSkills($this->userId);
				
				$userSkills = $this -> userSkillDAO-> getUserSkills( $this-> userId );
	
				$userTechStrength = $this -> userTechStrengthDAO -> queryByUserId($this -> userId);

				$userEducation = $this -> userEducationDAO -> queryByUserId($this -> userId);			
				
				$userWorkExperience = $this -> userWorkHistoryDAO -> queryByUserId($this -> userId);
			
				$allLocations = $this -> jobLocationsDAO-> availableJobLocations( $this-> userId );
				
				$userJobPreference = $this -> userJobPreferenceDAO -> getUserJobPreference($this -> userId);

				$userPreferredJobLocations = $this -> jobLocationsDAO -> getUserJobPreferredJobLocations($this -> userId);
			
				require_once 'views/profile/jobCompleteProfile.php';
			}
			else
				require_once 'views/profile/completeProfile.php';



		} catch (Exception $e){
			require_once 'views/error/pages-404.php';	
			$this->logger->error("Error occur :500 ".json_encode($e) );
		}

	}

	function finishCompleteProfile() {

		if (isset($_POST)) {

			//page_access set to 1 for profile completed
	    	try {
	            $this -> userInfoDAO -> updatePageAccess($this-> userId);
        		header('Location: '. $this-> baseUrl);
	    	}
	    	catch(Exception $e) {
				$this->logger->error("Error occur :500 ".json_encode($e) );
	    	}			
		}
		else{
			header('HTTP/1.1 500 Internal Server Error');
			echo "Profiles Completion Failed, Try Again";
		}
	}

}

?>