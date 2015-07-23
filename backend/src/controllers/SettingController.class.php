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
		if ( ! isset($this -> userId) || $this -> userId == ""){
						header('Location: '. $baseUrl);
		}
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
		
		if(isset($_POST['tech_strength']) && $_POST['tech_strength'] != "") {
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
			echo "Updated Successfully";
		}
		else{
			header('HTTP/1.1 500 Internal Server Error');
			echo "Technical Strength Can Not Be Empty";
		}
		
	}

	function updateUserInfo() {
		
		var_dump($_POST); die();
		
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
	            $this -> userInfoDAO -> update($userObj);
	        }
			
			echo "Updated Successfully";
		}
		else{
			header('HTTP/1.1 500 Internal Server Error');
			echo "Profiles fileds Can Not Be Empty";
		}
	}

	function updateWorkExp() {
		
		if(isset($_POST['company_name'], $_POST['designation'], $_POST['from'], $_POST['to'])
				 && $_POST['company_name'] != "" 
				 && $_POST['designation'] != "" 
				 && $_POST['from'] != "" 
				 && $_POST['to'] != "") {
	
			$workExpObj = new WorkingHistory(
									$this -> userId,
									$_POST['company_name'],
									$_POST['designation'],
									$_POST['from'],
									$_POST['to'],
									date("Y-m-d H:i:s"),
									date("Y-m-d H:i:s"),
									$_POST['id']
								);

			if(isset($_POST['id']))
				$this -> userWorkHistoryDAO ->update($workExpObj);
			else
				$this -> userWorkHistoryDAO ->insert($workExpObj);
			echo "Updated Successfully";
		}
		else{
			header('HTTP/1.1 500 Internal Server Error');
			echo "Work Experience fields can Not Be Empty";
		}
	}

	function updateEducation() {
		
		if(isset($_POST['institute'], $_POST['degree'], $_POST['branch'], $_POST['from'], $_POST['to'])
				 && $_POST['institute'] != "" 
				 && $_POST['degree'] != "" 
				 && $_POST['branch'] != "" 
				 && $_POST['from'] != "" 
				 && $_POST['to'] != "") {
			
			$educationObj = new Education(
									$this -> userId,
									$_POST['institute'],
									$_POST['degree'],
									$_POST['branch'],
									$_POST['from'],
									$_POST['to'],
									date("Y-m-d H:i:s"),
									date("Y-m-d H:i:s"),
									$_POST['id']
								);

			if(isset($_POST['id']))
				$this -> userEducationDAO ->update($educationObj);
			else
				$this -> userEducationDAO ->insert($educationObj);
			echo "Updated Successfully";
		}
		else{
			header('HTTP/1.1 500 Internal Server Error');
			echo "Education fields can Not Be Empty";
		}
	}


	function updatePassword() {
		
		if(isset($_POST['old_password'], $_POST['new_password_1'], $_POST['new_password_2'])
					&& $_POST['old_password'] != ''
					&& $_POST['new_password_1'] != '' && $_POST['new_password_2'] != '') {

			$oldPassCheck = $this -> userInfoDAO -> load($this -> userId);
			
			$oldPassword = md5($oldPassCheck -> getPassword());

			if ( $oldPassword = $_POST['old_password']){

				if ($_POST['new_password_1'] == $_POST['new_password_2']) {
				
					$newPassword = md5($_POST['new_password_1']);
				
					$oldPassCheck = $this -> userInfoDAO -> update($newPassword);
				
					echo "Updated Successfully";

				}	
				else{
					header('HTTP/1.1 500 Internal Server Error');
					echo "New Password do not match, Try Again";
				}
				
			}

			else{
				header('HTTP/1.1 500 Internal Server Error');
				echo "Old password do not match, Try Again";
			}

		}
		else{
			header('HTTP/1.1 500 Internal Server Error');
			echo "Password fields can Not Be Empty";
		}
		
	}
}

?>