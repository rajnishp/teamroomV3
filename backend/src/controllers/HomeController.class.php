<?php

require_once 'controllers/BaseController.class.php';

class HomeController extends BaseController {	

	function __construct (  ){
		
		parent::__construct();

		$this -> logger -> debug("HomeController started");

		//$this -> fromUrl = $_GET['from'];		

	}

	function render (){
		$baseUrl = $this->baseUrl;
		// here its shower that user is not in session
		 
		try{
			//$topProjects = $this -> projectDAO -> getTopProjects(); // have not found the function find and replace
			require_once 'views/landing/index.php';

		} catch (Exception $e) {

			require_once 'views/error/pages-404.php';	
			$this->logger->error( "Error occur :500 ".json_encode($e) );
		}

	}


	function login (){
		if(isset($_POST['username'],$_POST['password'])){

			$this->user = $this->userInfoDAO->getByUsernamePassword( $_POST['username'], md5($_POST['password']));
			
		
			if($this->user){
				
				$_SESSION['user_id'] = $this->user->getId();
				$_SESSION['username'] = $this->user->getUsername() ;
				$_SESSION['first_name'] = $this->user->getFirstName() ;
				$_SESSION['last_name'] = $this->user->getLastName() ;
				$_SESSION['email'] = $this->user->getEmail();
				$_SESSION['last_login'] = $this->user->getLastLoginTime() ;
					//$obj = new rank($newid);
				$_SESSION['rank'] = $this->user->getRank();
				
				if($_GET['from']) {
					$redir = $_GET['from'];
				}
				else {
					$redir = $this-> baseUrl;
				}
				if ($_SERVER['HTTP_REFERER'] == $this-> jobsBaseUrl) {
					$_SESSION['jobsCollap'] =true;
				}
	
				try{
					$timestamp = date('Y-m-d G:i:s');
					$this-> userInfoDAO -> updateLastLoginTime( $_SESSION['user_id'] , $timestamp);
				}
				catch (Exception $e) {
					$this->logger->error( "Failed to updateLastLoginTime, Error occur :500 ".json_encode($e) );
				}

				if($this->user -> getPageAccess() > 0) {
					try{
						$this -> userInfoDAO -> updatePageAccess($_SESSION['user_id']);
					}
					catch (Exception $e) {
						$this->logger->error( "Failed to updatePageAccess, Error occur :500 ".json_encode($e) );
					}
				}

				header('Location: '.$redir);		

			}
			else{

				header('Location: '.$this-> baseUrl);
			}

		}
		else 
			header('Location: '.$this-> baseUrl);

	}
	function signup(){
		if(isset($_POST['username'],$_POST['passwordR'], $_POST['email'])
			&& $_POST['username'] != '' && $_POST['passwordR'] != '' && $_POST['email'] !=''){
			//if($_POST['password'] === $_POST['password2']){
				if ($_SERVER['HTTP_REFERER'] == $this-> jobsBaseUrl) {
					$userType = 'jobSearch';
				} 
				else
					$userType = 'collaborator';
				$this->user = new UserInfo(
										null,
										null,
										$_POST['email'],
										null,
										$_POST['username'],
										md5($_POST['password']),
										"dabbling",
										$userType,
										0,
										null,
										0,
										null,
										null,
										null,
										date("Y-m-d H:i:s"),
										date("Y-m-d H:i:s"),
										null);
				
				try {
					$this->user->setId($this->userInfoDAO->insert($this->user));
				}
				catch (Exception $e) {
					$this->logger->error( "Failed to register, Error occur :500 ".json_encode($e) );

				}
				
				if($this->user) {
					$_SESSION['user_id'] = $this->user->getId();
					$_SESSION['username'] = $this->user->getUsername() ;
					
					$_SESSION['email'] = $this->user->getEmail();
					$_SESSION['last_login'] = $this->user->getLastLoginTime() ;
					//$obj = new rank($newid);
					$_SESSION['rank'] = $this->user->getRank();

					if ($_SERVER['HTTP_REFERER'] == $this-> jobsBaseUrl) {
						$_SESSION['jobsCollap'] =true;
					}

					try {
	
						$getuserPushForm =  $this-> userPushFormsDAO -> queryAll();
						$priority = 1;
						foreach ($getuserPushForm as $form) {
							
							$userForm = new UserForm($_SESSION['user_id'],
														$form-> getId(),
														0,
														$priority,
														date("Y-m-d H:i:s"),
														date("Y-m-d H:i:s")
													);

							$this->userPushFormsInsertDAO->insert($userForm);
							$priority++;
						}

					}
					catch (Exception $e) {
						$this->logger->error( "Failed to insert user push form, Error occur :500 ".json_encode($e) );

					}

					header('Location: ' .$this-> baseUrl ."completeProfile");

				}
				else{
					header('Location: '.$this-> baseUrl);
					//base url redirected for any error occurred
					echo "failed to reg";
				}

			//}
		}
	}

	function logout(){
		
		$requestedPage = $_GET['url'] ;
		
		unset($_SESSION['user_id']);
	    unset($_SESSION['first_name']);
	    unset($_SESSION['username']);
	    unset($_SESSION['email']);
	    unset($_SESSION['last_login']);
	    unset($_SESSION['rank']);
	    
	    session_unset($_SESSION['user_id']);
	    session_unset($_SESSION['first_name']);
	    session_unset($_SESSION['username']);
	    session_unset($_SESSION['email']);
	    session_unset($_SESSION['last_login']);
	    session_unset($_SESSION['rank']);
	    session_unset();
	    
	    session_destroy();
	    
	    header('Location: '.$this-> baseUrl);
	    mysqli_close($db_handle);
	    die();

	}
	function forgetPasswod(){
		if(isset($_POST['email'])){

		}
	}

	function usernameCheck($username) {

		//$username=$_REQUEST['username'];
		if(preg_match("/[^a-z0-9]/",$username)) {
			//print "<span style=\"color:red;\">Username contains illegal charaters.</span>";
			echo "<style type=\"text/css\">
			        #usernameR {border: 3px solid red;}
		        </style>";
			exit;
		}

		$isUserExist = $this->userInfoDAO->queryByUsername($username);

		if($isUserExist) {
			//print "<span style=\"color:red;\">Username already exists</span>";
			echo "<style type=\"text/css\">
			        #usernameR {border: 3px solid red;}
		        </style>";
		}
		else {
			//print "<span style=\"color:green;\"><i class='fa fa-ok'> </i>Ok</span>";
			echo "<style type=\"text/css\">
			        #usernameR {border: 3px solid green;}
		        </style>";
		}
	}

	function emailCheck($email) {
		//$email=$_REQUEST['email'];

		$email = filter_var($email, FILTER_SANITIZE_EMAIL);

		// Validate e-mail
		if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
		
			$isEmailExist = $this->userInfoDAO->queryByEmail($email);

			if($isEmailExist) {
				//print "<span style=\"color:red;\">Email already exists</span>";
				echo "<style type=\"text/css\">
				        #email {border: 3px solid red;}
			        </style>";
			}
			else {
				//print "<span style=\"border:3px solid green;\"></span>";
				echo "<style type=\"text/css\">
				        #email {border: 3px solid green;}
			        </style>";
			}
		}
		else {
			//print "<span style=\"color:red;\">Not a Valid Email</span>";
			echo "<style type=\"text/css\">
			        #email {border: 3px solid red;}
		        </style>";
		}
	}

}

?>