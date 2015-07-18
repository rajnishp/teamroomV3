<?php

require_once 'dao/DAOFactory.class.php';
//require_once 'components/xxx.class.php';
//require_once '.class.php';

class SettingController {

	private $userId;
	private $userInfoDAO;
	private $userEducationDAO;
	private $userTechStrengthDAO;
	private $userWorkHistoryDAO;
	private $userJobPreferenceDAO;

	function __construct ( ){
		
		if( isset( $_SESSION["user_id"] ) )
			$this -> userId = $_SESSION["user_id"];
			//$this->userId = 7;
		

		$DAOFactory = new DAOFactory();
		$this -> userInfoDAO = $DAOFactory->getUserInfoDAO();
		//$this -> userSkillDAO = $DAOFactory->getSkillsDAO();

		$this -> userEducationDAO = $DAOFactory->getEducationDAO();
		$this -> userTechStrengthDAO = $DAOFactory->getTechnicalStrengthDAO();
		$this -> userWorkHistoryDAO = $DAOFactory->getWorkingHistoryDAO();
		$this -> userJobPreferenceDAO = $DAOFactory->getJobPreferenceDAO();

	}

	function render (){
		global $configs; 
		$baseUrl = $configs["COLLAP_BASE_URL"];
		//loading other click event on the page should be done by ajax

		try{

			//var_dump($this->userId);
			
			$userProfile = $this->userInfoDAO->load($this->userId);
			//$userSkills = $this ->userSkillDAO->getUserSkills($this->userId);

			$userEducation = $this -> userEducationDAO -> queryByUserId($this -> userId);
			
			$userTechStrength = $this -> userTechStrengthDAO -> queryByUserId($this -> userId);
			
			$userWorkExperience = $this -> userWorkHistoryDAO -> queryByUserId($this -> userId);
			$userJobPreference = $this -> userJobPreferenceDAO -> getUserJobPreference($this -> userId);

			require_once 'views/setting/setting.php';
		
		} catch (Exception $e){
			echo "Error occur :500 <br>".var_dump($e);
		}

	}

	function updateTechStrength() {
		var_dump($_POST);die();
		if(isset($_POST['tech_strength'])) {
			$tech_strength = new TechnicalStrength(
					$_SESSION['user_id'],
					$_POST['tech_strength'],
					date("Y-m-d H:i:s"),
					date("Y-m-d H:i:s")
				);
			var_dump($_POST); die();
			$this -> userTechStrengthDAO ->insert($tech_strength);
		}
	}

}

?>