<?php


require_once 'controllers/BaseController.class.php';

class DashboardController extends BaseController {

	

	function __construct (  ){
		parent::__construct();	

	}

	function render (){
	
		$baseUrl = $this->baseUrl;
		
		try{
			//queryAllUserProjects
			
			//$recProject = $this->projectsDAO->queryAllUserProjects($this->userId);
			$top10Activities =  $this->challengesDAO->queryAllChallenges(0,10);
			
			//var_dump($top10Activities);
			require_once 'views/dashboard/dashboard.php';

		} catch (Execption $e){
			echo "Server every on DashboardController <br/>".var_dump($e); 
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
										0,
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

			}
		$this -> render();

		}
	}

?>