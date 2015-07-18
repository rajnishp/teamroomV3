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
		$projects = $this->projects;
		//loading other click event on the page should be done by ajax
		
		try{
			
			//imp: add $this -> projectId in paramenter in place of 3(project_id)

			//$projects = $this->projectsDAO->getByUserIdProjectId($this-> userId, $this-> projectId);
			$project = $this-> projectsDAO -> getByProjectId( $this -> projectId );
			
			$projectActivities = $this-> challengesDAO -> getProjectActivities( $this -> projectId , 0,10 );
			

			//$userProjects = $this->projectsDAO->getUserProjects($this->userId);
				
			//$UserLinks = $this->userInfoDAO->getUsersLinks($this->userId);
			$projectTeams = $this-> teamsDAO -> queryAllTeamNames( $this -> projectId );
			$teamMembers = $this-> teamsDAO -> queryAllTeamMembers($this -> projectId , 'defaultteam' );


			if (isset($_SESSION['userId'])) {
				require_once 'views/project/project_page.php';
			}
			else 
				require_once 'views/project/project.php';


		} catch (Exception $e){
			echo "Error occur :500 <br>".var_dump($e);
		}

	}

	function createProject(){
		var_dump($_POST);
		if(isset($_POST['title'], $_POST['description'], $_POST['type'])){
			$this->project = new Projects(
										$userId,
										$blob_id,
										$_POST['title'],
										$_POST['description'],
										$_POST['type'],
										1,
                            			0,
                            			date("Y-m-d H:i:s"),
                            			0,
										0,
										date("Y-m-d H:i:s"),
										null);
			try {
				$this->project->setId($this->projectsDAO->insert($this->project));
			}
			catch (Exception $e){
				var_dump($e); die();
			}	
		}
	}


}



?>