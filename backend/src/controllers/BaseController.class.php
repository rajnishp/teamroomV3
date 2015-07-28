<?php

require_once 'dao/DAOFactory.class.php';
require_once 'views/source/actionDropdown.php';
require_once 'views/source/postForms.php';
//require_once 'components/xxx.class.php';
//require_once '.class.php';

// this will be a single page app

abstract class BaseController {

	protected $userId;
	protected $challengesDAO;
	protected $projectsDAO;
	protected $userInfoDAO;
	protected $baseUrl;

	protected $challengeResponsesDAO;
	protected $userSkillDAO;
	protected $links;

	protected $teamsDAO;

	protected $userEducationDAO;
	protected $userTechStrengthDAO;
	protected $userWorkHistoryDAO;
	protected $userJobPreferenceDAO;
	protected $userSkillsInsertDAO;

	protected $jobLocationsDAO;
	protected $userPreferredLocationsDAO;

	protected $logger;

	protected $url;

	protected $involveInDAO;

	

	function __construct (  ){
		
		global $configs; 
		$this->baseUrl = $configs["COLLAP_BASE_URL"];

		$this->url = rtrim($this->baseUrl,"/").$_SERVER[REQUEST_URI];

		global $logger;
		$this -> logger = $logger;

		$this -> logger -> debug("BaseController started");
		if( isset( $_SESSION["user_id"] ) ){

			$this -> userId = $_SESSION["user_id"];
			$this -> username = $_SESSION["username"];
			$this -> firstName = $_SESSION['first_name'];
			$this -> lastName = $_SESSION['last_name'];

		}
		

		$DAOFactory = new DAOFactory();
		
		$this -> challengesDAO = $DAOFactory->getChallengesDAO();
		$this -> projectsDAO = $DAOFactory->getProjectsDAO();
		$this -> userInfoDAO = $DAOFactory->getUserInfoDAO();
		$this -> userSkillDAO = $DAOFactory->getSkillsDAO();

		$this -> challengeResponsesDAO = $DAOFactory->getChallengeResponsesDAO();
		
		$this -> teamsDAO = $DAOFactory-> getTeamsDAO();
		$this -> notificationsDAO = $DAOFactory-> getNotificationsDAO();

		$this -> userEducationDAO = $DAOFactory->getEducationDAO();
		$this -> userTechStrengthDAO = $DAOFactory->getTechnicalStrengthDAO();
		$this -> userWorkHistoryDAO = $DAOFactory->getWorkingHistoryDAO();
		$this -> userJobPreferenceDAO = $DAOFactory->getJobPreferenceDAO();
		$this -> userSkillsInsertDAO = $DAOFactory->getUserSkillsDAO();

		$this -> jobLocationsDAO = $DAOFactory->getWorkingLocationsDAO();
		$this -> userPreferredLocationsDAO = $DAOFactory->getUserLocationsDAO();

		$this -> involveInDAO = $DAOFactory->getInvolveInDAO();



		
		
		$this->process();

	}

	function process (){
		
		

		try{
			//queryAllUserProjects
			if($this->userId){
				$this-> projects = $this->projectsDAO->queryAllUserProjects($this->userId);
				
				$this-> recommendedProjects = $this->projectsDAO->getRecommendedProjects($this->userId);

				$this-> links = $this->userInfoDAO->getUsersLinks($this->userId);
				$this-> notifications = $this-> notificationsDAO -> getByUserId($this->userId);
				$this-> toDoList = $this->challengesDAO->getToDoList($this->userId);
				$this-> getDoneList = $this->challengesDAO->getGetDoneList($this->userId);

			}
			//$recProject = $this->projectsDAO->queryAllUserProjects($this->userId);
			

		} catch (Execption $e){
			echo "Server every on DashboardController <br/>".var_dump($e); 
		}

	}


}



?>