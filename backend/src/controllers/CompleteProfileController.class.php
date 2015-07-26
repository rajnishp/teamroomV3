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

			$allSkills = $this -> userSkillDAO->availableUserSkills($this->userId);
			$allLocations = $this -> jobLocationsDAO-> availableJobLocations( $this-> userId );
			$userPreferredJobLocations = $this -> jobLocationsDAO -> getUserJobPreferredJobLocations($this -> userId);

			require_once 'views/profile/completeProfile.php';
			
		} catch (Exception $e){
			echo "Error occur :500 <br>".var_dump($e);
		}

	}

}

?>