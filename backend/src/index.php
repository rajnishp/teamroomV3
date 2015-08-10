<?php
session_start();

include_once "controllers/HomeController.class.php";
include_once "controllers/ProjectController.class.php";
include_once "controllers/ActivityController.class.php";
include_once "controllers/ProfileController.class.php";
include_once "controllers/DashboardController.class.php";
include_once "controllers/SettingController.class.php";
include_once "controllers/CompleteProfileController.class.php";
include_once "controllers/PushFormsController.class.php";


//include_once "components/base.php";


require_once 'utils/Util.php';
require_once 'utils/Timer.php';
require_once 'utils/ShopbookLogger.php';
require_once 'cache/AppCacheRegistry.class.php';

/*

type
1.		Login/registor (Landing Page)
2.		afterlogin (Single page app)
		2.a 	Dashbord
		2.b 	Project Page
		2.c 	Profile Page
		2.d 	openChall Page

3.		profile page
4.		Project page
5.		OpenChange page

6. 		Search Page *****
..................................
job.collap.com

org.collap.com

*/

/* Setting up the app-configurations globally for use across classes */
global $configs;
$configs = json_decode (file_get_contents('collap-configs.json'), true);

/* Setting up the logger globally for use across classes */
global $logger;
$logger = new ShopbookLogger();
$logger -> enabled = true;
$logger -> debug ("Setting up ...");




$route = explode("/",$_SERVER[REQUEST_URI]);
//router hack for uploads
if(in_array('uploads', $route)){
	$redir = $configs['COLLAP_BASE_URL'];
	$flag = false;

	foreach ($route as $key => $value) {
		if($value == 'uploads')
			$flag = true;
		if($flag)
			$redir .= $value."/";
	}
	//rtrim($redir, "\/");
	header("location:".substr($redir,0,-1));
}

//router uploads hack end
$logger -> debug ("router :: " .json_encode($route));

$logger -> debug ("post :: " .json_encode($_POST));

$logger -> debug ("get :: " .json_encode($_GET));

//for url translantion
if(substr($route[1], 0, 11) == "profile.php"){
	$temp = explode("=", $route[1]);
	$route[2] = $temp[1];
	$route[1] = "profile";

}
if(substr($route[1], 0, 18) == "challengesOpen.php"){
	$temp = explode("=", $route[1]);
	$route[2] = $temp[1];
	$route[1] = "activity";
	
}
if(substr($route[1], 0, 11) == "project.php"){
	$temp = explode("=", $route[1]);
	$route[2] = $temp[1];
	$route[1] = "project";
	
}
//end of url translantion

if ( ! isset($_SESSION['user_id']) && count($route) <= 1  ){
	//langing page of collap
	$homeController = new HomeController();
	$homeController -> render ();
}else {

		$page = $route[1];
		
		//single page app
		switch ($page) {

			case "project":
										
					$projectController = new ProjectController($route[2]);
					$where = $route[3];
					
					switch ($where) {
							case 'activities':
								
								$projectController -> getNextActivities();

								break;

							case 'activity':
								$dashboardController -> postActivity ();
								break;

							case 'logout':
								$homeController -> logout ();
								break;

							case 'forgetPassword':
								$homeController -> forgetPassword ();
								break;
							
							default:

								if ($route['2'] == 'createNew'){

									$projectController -> createNewProject();
								}

								elseif($route['2'] == 'createProject') {

									$projectController -> createProject();
								}

								elseif ($route['2'] == 'postProjectComment') {
									$projectController -> postProjectComment();
								}

								elseif ($route['3'] == 'joinProject') {
									$projectController -> joinProject();
								}

								else 
									$projectController -> render ();
	
								break;
					}
				break;

			case "activity":

					$activityController = new ActivityController($route[2]);
					
					$where = $route[2];
								
					switch ($where) {
						case 'postComment':
							
							$activityController -> postComment();

							break;
						default:
							$activityController -> render();
							break;
					}
				break;

			case "fileUpload":
				require_once "controllers/FilesController.class.php";
					
				break;

			case "profile":

					$profileController = new ProfileController($route[2]);

					$where = $route[3];

					switch ($where) {
							case 'activities':
								
								$profileController -> getNextActivities();

								break;

							case 'ideas':
								$profileController -> getNextIdeas();
								break;

							case 'projects':
								$profileController -> getNextProjects();
								break;

							case 'forgetPassword':
								$homeController -> forgetPassword ();
								break;


							case 'sendLinkRequest':
								$profileController -> sendLinkRequest();
								break;					

							case 'confirmLinkRequest':
								$profileController -> confirmLinkRequest();
								break;	

							case 'deleteLinkRequest':
								$profileController -> deleteLinkRequest();
								break;	
							
							default:
								if($route[2] == 'activities')
									$profileController -> getNextActivities();
								else if($route[2] == 'ideas')
									$profileController -> getNextIdeas();
								else if($route[2] == 'projects')
									$profileController -> getNextProjects();
								else
									$profileController -> render ();
								break;
					}
				break;

			case "dashboard":

					$dashboardController = new DashboardController($route[2]);
					$where = $route[2];
					
					switch ($where) {
							case 'activities':
								
								$dashboardController -> getNextActivities();

								break;

							case 'postActivity':
								$dashboardController -> postActivity ();
								break;

							case 'forgetPassword':
								$homeController -> forgetPassword ();
								break;

							case 'pushForm':
								$pushFormController = new PushFormsController($route[2]);
								$pushFormController ->  pushForm();
								break;

							default:
								$dashboardController -> render ();
								break;
					}
				
				break;

			case "setting":

					$settingController = new SettingController();
					$where = $route[2];
					switch ($where) {
							case 'updateTechStrength':
								
								$settingController -> updateTechStrength();

								break;

							case 'updateUserInfo':
								
								$settingController -> updateUserInfo();

								break;

							case 'updateWorkExp':
								
								$settingController -> updateWorkExp();

								break;
							case 'updateEducation':
								
								$settingController -> updateEducation();

								break;
								
							case 'updateSkills':
								
								$settingController -> updateSkills();

								break;
							
							case 'updateLocations':
								
								$settingController -> updateLocations();

								break;

							case 'updateJobPreference':
								
								$settingController -> updateJobPreference();

								break;
								
							case 'updateSocialLinks':
								
								$settingController -> updateSocialLinks();

								break;

							case 'updatePassword':
								
								$settingController -> updatePassword();

								break;								

							case 'signup':
								$homeController -> signup ();
								break;

							case 'logout':
								$homeController -> logout ();
								break;

							case 'forgetPassword':
								$homeController -> forgetPassword ();
								break;
							
							default:
								$settingController -> render();
								break;
						}

				break;

			case "home":

					$homeController = new HomeController();
					if($route[2] == "logout"){
						$homeController -> logout ();
					}
					
					if (!empty($_POST)){
						$form = $_POST['submit'];

						switch ($form) {
							case 'login':
								
								$homeController -> login ();
								break;

							case 'signup':
								$homeController -> signup ();
								break;

							case 'logout':
								$homeController -> logout ();
								break;

							case 'forgetPassword':
								$homeController -> forgetPassword ();
								break;
							
							default:
								$homeController -> render ();
								break;
						}

					}
					else{
						$checkNewRoute = explode("=",$route[2]);
						
						if ($checkNewRoute[0] == 'usernameCheck') {
							$homeController -> usernameCheck (urldecode($checkNewRoute[1]));
						}
						elseif($checkNewRoute[0] == 'emailCheck') {
							$homeController -> emailCheck (urldecode($checkNewRoute[1]));
						}
						else {
							$homeController -> render ();
						}
					}

				break;
			
			case "completeProfile":
					$completeProfileController = new CompleteProfileController();

					if($route[2] == "finish"){
						$completeProfileController -> finishCompleteProfile();
						break;
					}

					if( isset($_SESSION["user_id"] )){
						
						$completeProfileController -> render();
						break;
					}
				

			default:
					if( isset($_SESSION["user_id"] )){
						$dashboardController = new DashboardController();
						
						if($route[2] == 'activities')
							$dashboardController -> getNextActivities();

						elseif ($route[2] == 'postActivity')
								$dashboardController -> postActivity ();

						else
							$dashboardController -> render ();
						break;
					} 

					else {
						//langing page of collap 
						// Can also be routed to 404 page
						$homeController = new HomeController();
						$homeController -> render ();

					}
				
				break;
		}

	
}





?>