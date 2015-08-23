<?php

class RecoverPasswordController {

	private $userAccessAidDAO;
	private $userInfoDAO;

	function __construct (  ){
		
		global $configs;
		$this->baseUrl = $configs["COLLAP_BASE_URL"];
		$this->jobsBaseUrl = $configs["JOBS_COLLAP_BASE_URL"];

		$this->url = rtrim($this->baseUrl,"/").$_SERVER[REQUEST_URI];

		global $logger;
		$this -> logger = $logger;

		$this -> logger -> debug("RecoverPasswordController started");

		$DAOFactory = new DAOFactory();
		
		$this -> userInfoDAO = $DAOFactory->getUserInfoDAO();
		$this -> userAccessAidDAO = $DAOFactory->getUserAccessAidDAO();

	}

	function render ($hashKey, $accessAidId){

		$verifyCheckAccessAid = $this-> userAccessAidDAO -> queryByHashKeyAidId($hashKey, $accessAidId);
		if ($verifyCheckAccessAid) {
			try{
				require_once 'views/recoverPassword/recoverPassword.php';
			} catch (Exception $e) {
				require_once 'views/error/pages-404.php';	
				$this->logger->error( "Error occur :500 ".json_encode($e) );
			}
		} else {
			require_once 'views/error/pages-404.php';
			$this -> logger -> debug("RecoverPasswordController -> render: no entry with hash key and id");
		}
	}


	function updatePassword($hashKey, $accessAidId) {
		
		if(isset($_POST['new_password_1'], $_POST['new_password_2'])) {
			
			$verifyCheckAccessAid = $this-> userAccessAidDAO -> queryByHashKeyAidId($hashKey, $accessAidId);

			if (($_POST['new_password_1']) == ($_POST['new_password_2'])) {
			
				$newPassword = md5($_POST['new_password_1']);
			
				try {			
					$this -> userInfoDAO -> updateNewPassword($newPassword, $verifyCheckAccessAid[0]-> getUserId() );
					$this-> userAccessAidDAO -> updateStatus($accessAidId);
				}
				catch (Exception $e) {
					$this -> logger -> error("Error occurred: " . var_dump($e));
				}
				echo "<span>
						<p align='center'> Password Updated Successfully, Login with new Password</p><br>
						You will be redirected to login page after some time or <a href = '".$this->baseUrl."'>Click here</a>
					</span>";
				
				die();
			}

			else{
				echo "<span>
						<p align='center'> 
							New Password do not match, Try Again
						</p>
					</span>";
				die();
			}

		}
		else{
			echo "<span>
					<p align='center'>
						Password fields can Not Be Empty
					</p>
				</span>";
			die();
		}	
	}

}