<?php
session_start();

include_once "controllers/HomeController.class.php";
include_once "controllers/JobsHomeController.class.php";
include_once "controllers/ProfileController.class.php";
include_once "controllers/SettingController.class.php";
include_once "controllers/CompleteProfileController.class.php";

//include_once "components/base.php";


require_once 'utils/Util.php';
require_once 'utils/Timer.php';
require_once 'utils/ShopbookLogger.php';
require_once 'cache/AppCacheRegistry.class.php';

/*

type
1.		Login/registor (Landing Page)
2.		afterlogin (Single page app)
		2.c 	Profile Page

3.		profile page

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


if ( ! isset($_SESSION['user_id']) && count($route) <= 1  ){
	//langing page of collap
	$jobsHomeController = new JobsHomeController();
	$jobHomeController -> render ();
}else {

		$page = $route[1];
		
		//single page app
		switch ($page) {
			
			case "fileUpload":
					require_once "controllers/FilesController.class.php";
					
				break;

			case "profile":

					$profileController = new ProfileController($route[2]);

					$where = $route[3];

					switch ($where) {
							
							case 'forgetPassword':
								$homeController -> forgetPassword ();
								break;

							default:
								$profileController -> render ();
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

					$jobsHomeController = new JobsHomeController();
					$homeController = new HomeController();
					if($route[2] == "logout"){
						$homeController -> logout ();
					}
					elseif($route[2] == 'signup') {
						$homeController -> signup ();
					}
					elseif($route[2] == 'login') {
						$homeController -> login ();
					}
					elseif($route[2] == 'forgetPassword') {
						$homeController -> forgetPassword ();
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

							case 'usernameCheck':
								$homeController -> usernameCheck ();
								break;

							case 'emailCheck':
								$homeController -> emailCheck ();
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
					if( isset($_SESSION["user_id"] )){
						$completeProfileController = new CompleteProfileController();
						$completeProfileController -> render();
						break;
					}


			default:

				$recoverPasswordReq = explode('?', $page);
					
				if ($recoverPasswordReq[0] == "forgetPassword") {
					//var_dump($recoverPasswordReq); die();
					$recoverPasswordController = new RecoverPasswordController();
					
					//$routeHashKeyCheck = explode('?', $recoverPasswordReq[1]);
					
					//var_dump($routeHashKeyCheck); die();

					if($route[2] == "newPassword"){
						
						$previousRoute = explode("/",$_SERVER['HTTP_REFERER']);
						$previousPage = explode('?', $previousRoute[3]);
						$hashKey = explode('=', $previousPage[1]);
						$haskKeyAidId = explode('.', $hashKey[1]);
						
						$recoverPasswordController -> updatePassword($haskKeyAidId[0], $haskKeyAidId[1]);
						break;
					}
					else {
						$hashKey = explode('=', $recoverPasswordReq[1]);
						$haskKeyAidId = explode('.', $hashKey[1]);
						$recoverPasswordController->render($haskKeyAidId[0], $haskKeyAidId[1]);
					}
					break;
				}

				/*if( isset($_SESSION["user_id"] )){
					$profileController = new ProfileController();
					
					$profileController -> render ();

					break;
				}*/ 

				//else {
					//langing page of collap 
					// Can also be routed to 404 page
					$jobsHomeController = new JobsHomeController();
					$jobsHomeController -> render ();
				//}

			break;
		}

	
}


?>