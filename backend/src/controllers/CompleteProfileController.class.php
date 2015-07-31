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
			$allSkills = $this -> userSkillDAO->availableUserSkills($this->userId);
			$allLocations = $this -> jobLocationsDAO-> availableJobLocations( $this-> userId );
			$userPreferredJobLocations = $this -> jobLocationsDAO -> getUserJobPreferredJobLocations($this -> userId);

			require_once 'views/profile/completeProfile.php';
			
		} catch (Exception $e){
			require_once 'views/error/pages-404.php';	
			$this->logger->error("Error occur :500 ".json_encode($e) );
		}

	}

}

?>