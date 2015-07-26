<?php

require_once 'controllers/BaseController.class.php';

class ProfileController extends BaseController {

	private $profileId;

	function __construct ( $profileUN = null ){
		parent::__construct();	
		

		if($profileUN){
			$this->profileUN = $profileUN;
			try{
				$this->userProfile = $this->userInfoDAO->queryByUsername($this->profileUN);
				if(!isset($this->userProfile))
					header("location:". $this ->baseUrl);
				$this->profileId = $this->userProfile->getId();
			} catch (Exception $e){
			header("location:". $this ->baseUrl);
			}
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
			else if($this->userId){
				//$userMProjects = $this->projectsDAO->getUserPublicProjects($this->userId,0,10);
				
				$userActivities = $this->challengesDAO->getUserActivities($this->userId,0,10);
				$userProfile = $this->userInfoDAO->load($this->userId);
				$userSkills = $this ->userSkillDAO->getUserSkills($this->userId);

				$userEducation = $this -> userEducationDAO -> queryByUserId($this -> userId);
				$userTechStrength = $this -> userTechStrengthDAO -> queryByUserId($this -> userId);
				$userWorkExperience = $this -> userWorkHistoryDAO -> queryByUserId($this -> userId);
				$userJobPreference = $this -> userJobPreferenceDAO -> getUserJobPreference($this -> userId);


			}
			else
				header('Location: '. $baseUrl);
			//var_dump($userMProjects);
			$userSProjects = $this->projectsDAO->getUserProjects($this->userId, 0, 10);

			$UserSLinks = $this->userInfoDAO->getUsersLinks($this->userId);

			require_once 'views/profile/profile.php';
		} catch (Exception $e){
			//echo "Error occur :500 <br>".var_dump($e);
		}

	}

	private function isKnown(){
		if(!isset($this->profileId))
			return true;
		foreach ($this->links as $key => $value) {
			if($this->profileId == $value->getId()){
				return true;
			}
		}
		return false;
		
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


	function sendLinkRequest () {
		try {
			$knownObj = new KnownPeople (
								$this -> userId,
								$this -> profileId,
								1,
								0,
								date("Y-m-d H:i:s")
							);
			
			$linkId = $this-> knownPeoplesDAO -> insert($knownObj);			
			
			$noticeUrl ="<a href='#' class='media'>
                          <div class='media-left'>
                        	<img class='img-circle img-user media-object' src='uploads/profilePictures/".$this -> username.".jpg' style='height: 40px; width:40px;' alt='Profile Picture'>	
                          </div>
                          <div class='media-body'>
                            <div class='text-nowrap'>".ucfirst($this -> firstName)." ".ucfirst($this -> lastName)." sent Link Request</div>
                            <button type='submit' class='btn btn-sm btn-primary' onclick='requestAccept(\"".$linkId."\")' value='Accept'>Accept</button>
							<button type='submit' class='btn btn-sm btn-danger' onclick='requestDelete(\"".$linkId."\")' value='Delete'>Cancel</button>
                          </div>
                        </a>";


			$noticeObj = new Notification(
								$noticeUrl,
								$this -> profileId,
								date("Y-m-d H:i:s")
							);

			$this-> notificationDAO -> insert($noticeObj);			
			
			echo "Request Sent";
		}
		catch (Exception $e){
			header('HTTP/1.1 500 Internal Server Error');
			echo "Request can not be Sent, Try Again";
		}
	}

	function confirmLinkRequest () {

		//var_dump($_POST); die();
		
		if(isset($_POST['id'])) {

			if (! isset($_POST))
	            throw new MissingParametersException('No fields specified for updation');

	        $knownObj = $this -> knownPeoplesDAO -> load($_POST['id']);
	        
	        if(! is_object($knownObj)) 
	            return array('code' => '2004');

	        $newStatus= 2;
	        if (isset($newStatus)) {
	            if ($newStatus != $knownObj -> getStatus()) {
	                $update = true;
	                $knownObj -> setStatus($newStatus);
	            }
	        }

	        $newLastActionTime= date("Y-m-d H:i:s");
	        if (isset($newLastActionTime)) {
	            if ($newLastActionTime != $knownObj -> getLastActionTime()) {
	                $update = true;
	                $knownObj -> setLastActionTime($newLastActionTime);
	            }
	        }

	        if ($update) {
	            $this -> knownPeoplesDAO -> update($knownObj);
				echo "Request Confirmed";
			}
			else{
				header('HTTP/1.1 500 Internal Server Error');
				echo "Request can not be Confirmed, Try Again";
			}
		}
		else{
				header('HTTP/1.1 500 Internal Server Error');
				echo "Request can not be Confirmed, Try Again";
		}
	}

	function deleteLinkRequest () {

				
		if(isset($_POST['id'])) {

			if (! isset($_POST))
	            throw new MissingParametersException('No fields specified for updation');

	        $knownObj = $this -> knownPeoplesDAO -> load($_POST['id']);
	        
	        if(! is_object($knownObj)) 
	            return array('code' => '2004');

	        $newStatus= 3;
	        if (isset($newStatus)) {
	            if ($newStatus != $knownObj -> getStatus()) {
	                $update = true;
	                $knownObj -> setStatus($newStatus);
	            }
	        }

	        $newLastActionTime= date("Y-m-d H:i:s");
	        if (isset($newLastActionTime)) {
	            if ($newLastActionTime != $knownObj -> getLastActionTime()) {
	                $update = true;
	                $knownObj -> setLastActionTime($newLastActionTime);
	            }
	        }

	        if ($update) {
	            $this -> knownPeoplesDAO -> update($knownObj);
				echo "Request Confirmed";
			}
			else{
				header('HTTP/1.1 500 Internal Server Error');
				echo "Request can not be Confirmed, Try Again";
			}
		}
		else{
				header('HTTP/1.1 500 Internal Server Error');
				echo "Request can not be Confirmed, Try Again";
		}
	}	
}

?>