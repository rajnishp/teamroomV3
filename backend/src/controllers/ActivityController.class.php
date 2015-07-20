<?php

require_once 'controllers/BaseController.class.php';

class ActivityController extends BaseController  {


	function __construct ( $challangeId ){
		
		parent::__construct();	
		$this->challangeId = $challangeId;

	}

	function render (){
		
		$baseUrl = $this->baseUrl;
		
		try{
			
			if($this-> challengesDAO -> checkAuth($this->challangeId,$this->userId)){

				$activity = $this->challengesDAO->getByChallengeId($this->challangeId);
				$comments = $this ->challengeResponsesDAO->getResponses($this->challangeId);
				
				$popPosts = $this->challengesDAO->getTopActivities();
				$recPosts = $this->challengesDAO->getRecentActivities();
				$popProjects = $this->projectsDAO->getTopProjects();

				//$topUsers = $this->userInfoDAO->getTopUsers();
				//var_dump($activity);
				if($activity)
					require_once 'views/activity/activity.php';
				else
					require_once 'views/error/pages-404.php';		
			}
			else 
					require_once 'views/error/pages-404.php';
		} catch (Exception $e){
			echo "Error occur :500 <br>".var_dump($e);
		}

	}


}



?>