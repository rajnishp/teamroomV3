<?php
include_once "controllers/HomeController.class.php";
include_once "controllers/ProjectController.class.php";
include_once "controllers/ActivityController.class.php";
include_once "controllers/ProfileController.class.php";
include_once "controllers/DashboardController.class.php";

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

if (!empty($_POST)){
	$form = $_POST['submit'];
	switch ($form) {
		case 'login':
			//varify
			//and set type
			$_SESSION['type'] = 1;
			break;

		case 'signup':
			//varify
			//and set type
			$_SESSION['type'] = 1;
			break;

		case 'logout':
			//varify
			//and set type
			$_SESSION['type'] = 1;
			break;

		case 'forgetPassword':
			//varify
			//and set type
			$_SESSION['type'] = 1;
			break;
		
		default:
			# code...
			break;
	}
	print_r($_POST);


}


$_SESSION['type'] = "admin";
$route = explode("/",$_SERVER[REQUEST_URI]);

if ( ! isset($_SESSION['user_id']) && count($route) <= 1  ){
	//langing page of collap
	$homeController = new HomeController();
	$homeController -> render ();
}else {

	
		//single page app
		switch ($route[2]) {
		case "project":
										
				$projectController = new ProjectController();
				$projectController -> render($route[3]);
			break;

		case "activity":

				$activityController = new ActivityController($route[3]);
				$activityController -> render();
			break;

		case "profile":

				$profileController = new ProfileController($route[3]);
				$profileController -> render();
			break;
		
		
		default:
				if(isset($_SESSION["user_id"]){
					$dashboardController = new DashboardController();
					$dashboardController -> render();
				} else{

					//langing page of collap 
					// Can also be routed to 404 page
					$homeController = new HomeController();
					$homeController -> render ();

				}
			
			break;
		}
	
}





?>