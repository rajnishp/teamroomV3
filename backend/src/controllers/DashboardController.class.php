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

		if(isset($_POST['title'],$_POST['description'], $_POST['activity_type'] )) {
			
				$this->user = new challenge(
										$_POST['firstname'],
										$_POST['lastname'],
										$_POST['email'],
										null,
										$_POST['username'],
										md5($_POST['password']),
										"dabbling",
										$_POST['user_type'],
										0,
										null,
										0,
										null,
										null,
										null,
										date("Y-m-d H:i:s"),
										date("Y-m-d H:i:s"),
										null);
				$this->userInfoDAO->insert($this->user);
				var_dump($this->user);
				
			

			}
		}
	}

?>