<?php

require_once 'controllers/BaseController.class.php';

class ProjectController extends BaseController {

	private $projectId;
	//private $teamsDAO;

	function __construct ( $projectId ){
		parent::__construct();	

		$this-> projectId = $projectId;
		
		//$this -> teamsDAO = $this -> DAOFactory-> getTeamsDAO();


	}

	function render (){

		$baseUrl = $this->baseUrl;
		if ( ! isset($this -> projectId) || $this -> projectId == "" ){
						header('Location: '. $baseUrl);
		}
		//loading other click event on the page should be done by ajax
		
		try{
			
			//imp: add $this -> projectId in paramenter in place of 3(project_id)

			//$projects = $this->projectsDAO->getByUserIdProjectId($this-> userId, $this-> projectId);
			

			if($this-> projectsDAO -> checkAuth($this->projectId,$this->userId)){
				$project = $this-> projectsDAO -> getByProjectId( $this -> projectId );
				
				$projectActivities = $this-> challengesDAO -> getProjectActivities( $this -> projectId , 0,10 );
				

				//$userProjects = $this->projectsDAO->getUserProjects($this->userId);
					
				//$UserLinks = $this->userInfoDAO->getUsersLinks($this->userId);
				//$projectTeams = $this-> teamsDAO -> queryAllTeamNames( $this -> projectId );
				$teamMembers = $this-> teamsDAO -> queryAllTeamMembers($this -> projectId );
				if($project){
					if (isset($_SESSION['userId'])) 
						require_once 'views/project/project_page.php';
					else 
						require_once 'views/project/project.php';
				}
				else 
					require_once 'views/error/pages-404.php';				
			
			}
			else {
				require_once 'views/error/pages-404.php';				
			}

			


		} catch (Exception $e){
			echo "At Render() Error occur :500 <br>".var_dump($e);
		}

	}

	function getNextActivities(){
		$last = $_POST["last"];
		$top10Activities =  $this-> challengesDAO -> getProjectActivities( $this -> projectId , $last,5);
		
		
			//var_dump($top10Activities);
		require_once 'views/dashboard/activitiesView.php';
	}


	function createNewProject(){
		$baseUrl = $this->baseUrl;
		
		require_once 'views/project/createProject.php';
	}
	
	
	function createProject(){
		if(isset($_POST['title'], $_POST['description'], $_POST['type'], $_POST['tech_skills'], $_POST['my_role'], $_POST['team_size'], $_POST['start'], $_POST['end'])){
			
			$newProject = new Project(
										$this->userId,
										0,
										$_POST['title'],
										$_POST['description'],
										$_POST['type'],
										1,
                            			0,
                            			date("Y-m-d H:i:s"),
                            			0,
										0,
										date("Y-m-d H:i:s"),
										$_POST['tech_skills'],
										$_POST['my_role'],
										$_POST['team_size'],
										$_POST['start'],
										$_POST['end'],
										null,
										null,
										null);
				
				//var_dump( $newProject ); die();
			try {
				$this -> projectId = $this -> projectsDAO -> insert($newProject) ;
				
			}
			catch (Exception $e){
				var_dump($e); die();
			}	
		}
		$this -> render ();

	}

	function joinProject () {
		if(isset($_POST['join_project'])) {
			$newMember = new Team(
								$this-> userId,
								$this-> projectId,
								'defaultteam',
								0,
								date("Y-m-d H:i:s"),
								1,
								0,
								1,
								null
							);
			try {
				$this -> teamsDAO -> insert($newMember) ;
			}
			catch (Exception $e){
				var_dump($e); die();
			}	
		}
		$this -> render ();
	}

}

?>