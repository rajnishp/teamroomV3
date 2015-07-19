<?php
session_start();

include_once "controllers/HomeController.class.php";
include_once "controllers/ProjectController.class.php";
include_once "controllers/ActivityController.class.php";
include_once "controllers/ProfileController.class.php";
include_once "controllers/DashboardController.class.php";
include_once "controllers/SettingController.class.php";

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

								else 
									$projectController -> render ();
	
								break;
					}
				break;

			case "activity":

					$activityController = new ActivityController($route[2]);
					$activityController -> render();
				break;

			case "profile":

					$profileController = new ProfileController($route[2]);
					$where = $route[3];
					
					switch ($where) {
							case 'activities':
								
								$profileController -> getNextActivities();

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
								if($route[2] == 'activities')
									$profileController -> getNextActivities();
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
						$homeController -> render ();
					}

				break;
			
			
			default:
					if( isset($_SESSION["user_id"] )){
						$dashboardController = new DashboardController();
						
						if($route[2] == 'activities')
							$dashboardController -> getNextActivities();
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