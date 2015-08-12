<?php


require_once 'controllers/BaseController.class.php';

class DashboardController extends BaseController {

	private $pageUrl;
	private $teamMembers;
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
			$top10Activities = array_merge($recProject, $top10Activities, $this->getNewsActivitiesForUser());
			shuffle($top10Activities);
			
			require_once 'views/dashboard/dashboard.php';

		} catch (Execption $e){
			require_once 'views/error/pages-404.php';	
			$this->logger->error("Error occur :500 ".json_encode($e) );
		}

	}

	private function getNewsActivitiesForUser(){

		$userSearchStrings = $this->userSearchStrings();

		$newsActivities = array();

		foreach ($userSearchStrings as $key => $value) {
			foreach ($this -> getGoogleNews($value) as $news) {
				if($news->language == "en"){
						
						if($news->image->url)
							$imgStr = "<img class=\"post-img img-responsive\" style=\"max-width: 100%;\" src=\"". $news->image->url ."\">";
						$newsActivities[] = new Challenge(0, null, null,0, $news->titleNoFormatting, 
											$imgStr.$news->content . " <a href='". $news->unescapedUrl ."' > more </a>  ", null, null, 0, 0, 
											date("Y-m-d H:i:s")	, null, $news->publisher, null, null, null);
						$imgStr = "";
				}	
			}
		}
		return $newsActivities;

	}

	private function userSearchStrings(){
		$userSearchStrings = array();
		foreach ($this-> projects as $key => $project) {
			$userSearchStrings[] = $project -> getRefinedTitle();
		} 

		return $userSearchStrings;

	}

	private function getGoogleNews($find){
		$url = "https://ajax.googleapis.com/ajax/services/search/news?" .
		       "v=1.0&q=".urlencode($find)."&userip=INSERT-USER-IP";

		// sendRequest
		// note how referer is set manually
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_REFERER, "loc.dpower4.com");
		$body = curl_exec($ch);
		curl_close($ch);


		// now, process the JSON string
		$json = json_decode($body);
		// now have some fun with the results...
		//var_dump($json->responseData->results);
		return $json->responseData->results;
	}

	private	function isProjectMember($projectId) {
		$this-> teamMembers = $this-> teamsDAO -> queryAllTeamMembers( $projectId);
		foreach ($this->teamMembers as $key => $member) {
			if ( $this->userId == $member->getUserId()) {
				return true;
			}
		}
		return false;
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