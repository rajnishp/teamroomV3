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
		
		if(isset($_POST['tech_strength'])) {
			$tech_strength = new TechnicalStrength(
					$this->userId,
					$_POST['tech_strength'],
					date("Y-m-d H:i:s"),
					date("Y-m-d H:i:s"),
					$_POST['id']
				);

			if(isset($_POST['id']))
				$this -> userTechStrengthDAO ->update($tech_strength);
			else
				$this -> userTechStrengthDAO ->insert($tech_strength);
		}

		$this->render ();
	}

	function updateUserInfo() {
		
		if(isset($_POST['first_name'], $_POST['last_name'], $_POST['phone'], $_POST['living_place'], $_POST['about_user'])) {
	
	        if (! isset($this -> userId)) {
	            $warnings_payload [] = 'PUT call to /user must be succeeded ' . 
	                                    'by /userId i.e. PUT /user/userId';
	            throw new UnsupportedResourceMethodException();
	        }

	        if (! isset($_POST))
	            throw new MissingParametersException('No fields specified for updation');

	        $userObj = $this -> userInfoDAO -> load($this -> userId);
	        
	        if(! is_object($userObj)) 
	            return array('code' => '2004');

	        $newFirstName= $_POST ['first_name'];
	        if (isset($newFirstName)) {
	            if ($newFirstName != $userObj -> getFirstName()) {
	                $update = true;
	                $userObj -> setFirstName($newFirstName);
	            }
	        }

	        $newLastName= $_POST ['last_name'];
	        if (isset($newLastName)) {
	            if ($newLastName != $userObj -> getLastName()) {
	                $update = true;
	                $userObj -> setLastName($newLastName);
	            }
	        }

	        $newPhone= $_POST ['phone'];
	        if (isset($newPhone)) {
	            if ($newPhone != $userObj -> getPhone()) {
	                $update = true;
	                $userObj -> setPhone($newPhone);
	            }
	        }

	        $newLivingTown= $_POST ['living_town'];
	        if (isset($newLivingTown)) {
	            if ($newLivingTown != $userObj -> getLivingTown()) {
	                $update = true;
	                $userObj -> setLivingTown($newLivingTown);
	            }
	        }

	        $newAboutUser= $_POST ['about_user'];
	        if (isset($newAboutUser)) {
	            if ($newAboutUser != $userObj -> getAboutUser()) {
	                $update = true;
	                $userObj -> setAboutUser($newAboutUser);
	            }
	        }

	        if ($update) {
	            //$logger -> debug('PUT User object: ' . $userObj -> toString());
	            $result = $this -> userInfoDAO -> update($userObj);
	            //$logger -> debug('Updated entry: ' . $result);
	        }

		}

		$this->render ();
	}

	function updateWorkExp() {
		
		if(isset($_POST['company_name'], $_POST['designation'], $_POST['from'], $_POST['to'])) {
	
	        if (! isset($this -> userId)) {
	            $warnings_payload [] = 'PUT call to /user must be succeeded ' . 
	                                    'by /userId i.e. PUT /user/userId';
	            throw new UnsupportedResourceMethodException();
	        }

	        if (! isset($_POST))
	            throw new MissingParametersException('No fields specified for updation');

	        $workExpObj = $this -> userWorkHistoryDAO -> queryByUserId($this -> userId);
	       	
	       	echo "load work exp with userId";
	       	//var_dump($workExpObj); die();
	        
	        if(isset($workExpObj)) {

	        	echo "inside------isset workExpObj";


				$newCompanyName= $_POST ['company_name'];
		        if (isset($newCompanyName)) {
		            if ($newCompanyName != $workExpObj -> getCompanyName()) {
		                $update = true;
		                $workExpObj -> setCompanyName($newCompanyName);
		            }
		        }

		        $newDesignation= $_POST ['designation'];
		        if (isset($newDesignation)) {
		            if ($newDesignation != $workExpObj -> getDesignation()) {
		                $update = true;
		                $workExpObj -> setDesignation($newDesignation);
		            }
		        }

		        $newFrom= $_POST ['from'];
		        if (isset($newFrom)) {
		            if ($newFrom != $workExpObj -> getFrom()) {
		                $update = true;
		                $workExpObj -> setFrom($newFrom);
		            }
		        }

		        $newTo= $_POST ['to'];
		        if (isset($newTo)) {
		            if ($newTo != $workExpObj -> getTo()) {
		                $update = true;
		                $workExpObj -> setTo($newTo);
		            }
		        }

		        var_dump($workExpObj); die();

		        if ($update) {
		            //$logger -> debug('PUT User object: ' . $userObj -> toString());
		            $result = $this -> userWorkHistoryDAO -> update($workExpObj);
		            //$logger -> debug('Updated entry: ' . $result);
		        }
		    }

		    else {
				if(isset($_POST['company_name'], $_POST ['designation'], $_POST ['from'], $_POST ['to'])) {
					$workExpObj = new WorkingHistory(
							$this -> userId,
							$_POST['company_name'],
							$_POST['designation'],
							$_POST['from'],
							$_POST['to'],
							date("Y-m-d H:i:s"),
							date("Y-m-d H:i:s")
						);
					
		            $result = $this -> userWorkHistoryDAO -> update($workExpObj);
				}

		    }
		}

		$this->render ();
	}

}

?>