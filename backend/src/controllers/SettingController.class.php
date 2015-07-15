<?php

require_once 'dao/DAOFactory.class.php';
//require_once 'components/xxx.class.php';
//require_once '.class.php';

class SettingController {

	private $userId;
	private $userInfoDAO;
	
	function __construct ( ){
		
		if( isset( $_SESSION["user_id"] ) )
			$this -> userId = $_SESSION["user_id"];
			$this->userId = 7;
		

		$DAOFactory = new DAOFactory();
		$this -> userInfoDAO = $DAOFactory->getUserInfoDAO();
		$this -> userSkillDAO = $DAOFactory->getSkillsDAO();

	}

	function render (){
		global $configs; 
		$baseUrl = $configs["COLLAP_BASE_URL"];
		//loading other click event on the page should be done by ajax

		try{
			
			//$userProfile = $this->userInfoDAO->load($this->profileId);
			//$userSkills = $this ->userSkillDAO->getUserSkills($this->profileId);
		
			require_once 'views/setting/setting.php';
		
		} catch (Exception $e){
			echo "Error occur :500 <br>".var_dump($e);
		}

	}

}

?>