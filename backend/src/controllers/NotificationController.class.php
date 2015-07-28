<?php


require_once 'controllers/BaseController.class.php';

class NotificationController extends BaseController  {

	function __construct (  ){
		
		parent::__construct();	
	
	}

	function insertNotification( $type, $id){
		$involveWith = $this->involveInDAO->loadUserId($id, $type);

		foreach ($involveWith as $key => $value) {
			$this->notificationsDAO->insert( getNotificationString(  $type, $id, $value) );
		}
	}


	function getNotificationString( $type, $id, $to, $message =  ""){
		switch ($type) {
			case 'project':
				$notificationStr = "comment on project";
				break;
			
			case 'profile':
				$notificationStr = "Link on profile";
				break;

			case 'activity':
				$notificationStr = "comment on activity";
				break;

			default:
				$notificationStr = $message;
				break;
		}
		
		return new Notification($notificationStr, $to, date("Y-m-d H:i:s") );

	}

}