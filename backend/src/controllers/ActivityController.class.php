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
			require_once 'views/error/pages-404.php';	
			$this->logger->error("Error occur :500 ".json_encode($e) );
		}

	}

	function postComment() {

		if (isset($_POST['comment'], $_POST['id']) && $_POST['id'] != '' && $_POST['comment'] != '') {
			$commentObj = new ChallengeResponse (
											$this -> userId,
											$_POST['id'],
											0,
											$_POST['comment'],
											1,
											date("Y-m-d H:i:s"),
											null, null, null
										);
			try {
				$this -> challengeResponsesDAO -> insert($commentObj);
					echo "Comment Posted";
			}
			catch (Exception $e) {
				$this -> logger -> error ("Error at : $e");
			}

		}

		else{
			header('HTTP/1.1 500 Internal Server Error');
			echo "Comment Field Can Not Be Empty";
		}
	}


}



?>