<?php

require_once 'dao/DAOFactory.class.php';
//require_once 'components/xxx.class.php';
//require_once '.class.php';

class HomeController {

	private $userId;
	private $project;
	private $userInfoDAO;
	private $user;
	private $fromUrl;


	function __construct (  ){
		
		$DAOFactory = new DAOFactory();
		$this -> projectDAO = $DAOFactory->getProjectsDAO();
		$this -> userInfoDAO = $DAOFactory->getUserInfoDAO();
		//$this -> fromUrl = $_GET['from'];
		

	}

	function render (){
		// here its shower that user is not in session
		global $configs; 
		$baseUrl = $configs["COLLAP_BASE_URL"];
		try{
			//$topProjects = $this -> projectDAO -> getTopProjects(); // have not found the function find and replace
			require_once 'views/landing/index.php';

		} catch (Exception $e) {

			require_once 'views/error/pages-404.php';	
			$this->logger->error( "Error occur :500 ".json_encode($e) );
		}

	}


	function login (){
		global $configs; 
		$baseUrl = $configs["COLLAP_BASE_URL"];
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
				
				if($_GET['from'])
					$redir = $_GET['from'];
				else
					$redir = $baseUrl;

				header('Location: '.$redir);		

			}
			else{

				header('Location: '.$baseUrl);
			}

		} 
		else 
			header('Location: '.$baseUrl);

	}
	function signup(){
		global $configs; 
		$baseUrl = $configs["COLLAP_BASE_URL"];
		//var_dump($baseUrl); die();
		if(isset($_POST['username'],$_POST['passwordR'], $_POST['email'])){
			//if($_POST['password'] === $_POST['password2']){
				
				$this->user = new UserInfo(
										null,
										null,
										$_POST['email'],
										null,
										$_POST['username'],
										md5($_POST['password']),
										"dabbling",
										"collaborator",
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
					echo "Failed to register: " . var_dump($e);					
				}
				
				//var_dump($this->user);

				if($this->user) {
					$_SESSION['user_id'] = $this->user->getId();
					$_SESSION['username'] = $this->user->getUsername() ;
					
					$_SESSION['email'] = $this->user->getEmail();
					$_SESSION['last_login'] = $this->user->getLastLoginTime() ;
					//$obj = new rank($newid);
					$_SESSION['rank'] = $this->user->getRank();

					header('Location: ' .$baseUrl ."completeProfile");

				}
				else{
					echo "failed to reg";
				}

			//}
		}
	}

	function logout(){

		global $configs; 
		$baseUrl = $configs["COLLAP_BASE_URL"];
		

		$requestedPage = $_GET['url'] ;
		unset($_SESSION['user_id']);
	    unset($_SESSION['first_name']);
	    unset($_SESSION['username']);
	    unset($_SESSION['email']);
	    unset($_SESSION['last_login']);
	    unset($_SESSION['rank']);
	    session_destroy();
	    header('Location: '.$baseUrl);
	    mysqli_close($db_handle);

	}
	function forgetPasswod(){
		if(isset($_POST['email'])){

		}
	}

}



?>