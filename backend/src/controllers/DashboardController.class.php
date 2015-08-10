<?php


require_once 'controllers/BaseController.class.php';

class DashboardController extends BaseController {

	private $pageUrl;

	function __construct (  ){
		parent::__construct();	
		$this ->pageUrl = $this->baseUrl;
	}

	function render (){
	
		$baseUrl = $this->baseUrl;


// hang on complete profile page untill profile is not completed
		$this -> isProfileCompleted();
// hang on complete profile page untill profile is not completed


		try{
			//queryAllUserProjects
			
			//$recProject = $this->projectsDAO->queryAllUserProjects($this->userId);
			$recProject = $this->projectsDAO->getLastestProjects();
			//var_dump($recProject);die();
			$top10Activities =  $this->challengesDAO->queryAllChallenges(0,10);
			$top10Activities = array_merge($recProject, $top10Activities);
			require_once 'views/dashboard/dashboard.php';

		} catch (Execption $e){
			require_once 'views/error/pages-404.php';	
			$this->logger->error("Error occur :500 ".json_encode($e) );
		}

	}

	function getNextActivities(){
		$last = $_POST["last"];
		$top10Activities =  $this->challengesDAO->queryAllChallenges( $last,5);
		
		
			//var_dump($top10Activities);
		require_once 'views/dashboard/activitiesView.php';
	}

	function postActivity(){
	
		if(isset($_POST['title'],$_POST['description'])) {
			
			$challengeObj = new Challenge(
										$this -> userId,
										$_POST['project_id']? $_POST['project_id']:0,
										0,
										0,
										$_POST['title'],
										$_POST['description'],
										$_POST['activity'],
										1,
										0,
										0,
										date("Y-m-d H:i:s"),
										date("Y-m-d H:i:s"),
										null, null, null);

				
			$this-> challengesDAO -> insert($challengeObj);			
			echo "Posted Successfully";
		}
		else{
			header('HTTP/1.1 500 Internal Server Error');
			echo "Activity fields can not be Empty";
		}
		
	}

}

?>