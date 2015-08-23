<?php


require_once 'controllers/BaseController.class.php';

class EmailController extends BaseController  {

	function __construct (  ){
		
		parent::__construct();	
	
	}

	function startEmailCron(){
		$this->pushUserNotifications();
		$this->followUpOldUsers();
		$this->inviteUser();

	}

	function pushUserNotifications(){

		$userNotificationNoLogin24hours = $this-> notificationsDAO -> getNotificationNotLogin24Hours();//by making join with user table

		$emails = array();
		foreach ($userNotificationNoLogin24hours as $key => $value) {
			
				$emails[$value->getUserEmailId()] .= $value->getNoticelUrl();
			
		}

		$notificationEmail = $this-> genericEmailDAO -> getNotificationEmail();
		foreach ($emails as $key => $value) {
			$temp = $notificationEmail;
			$this->sendMail( $key, $temp->getSubject(), str_replace("{{ notification }}", $value, $temp->getBody()));
		}


	}

	function followUpOldUsers(){

		$userNoNotificationNotLoginLast3days = $this -> userInfoDAO -> getUserNoNotificationNotLoginLast3days();

		$emails = $this -> genericEmailDAO -> getFollowUpEmail();
		
		$usersAllReadyUnderFollowUp = $this -> userUnderFollowUpDAO -> getUserUnderFollowUp();


		foreach ($userNoNotificationNotLoginLast3days as $key => $value) {

			$this->sendMail(
						$value->getEmailId(), 
						str_replace("{{ username }}", $value->getUserFullName() , $emails[0]->getSubject()),
						str_replace("{{ username }}", $value->getUserFullName() , $emails[0]->getBody()) 
						);
			$userUnderFollowUp = new UserUnderFollowUp($value->getUserId, $value->getEmailId(), 1, 0);
			$this -> userUnderFollowUpDAO -> insert($userUnderFollowUp);
			
		}

		foreach ($usersAllReadyUnderFollowUp as $key => $value) {
			$this->sendMail(
						$value->getEmailId(), 
						str_replace("{{ username }}", $value->getUserFullName() , $emails[$value->getState()]->getSubject()),
						str_replace("{{ username }}", $value->getUserFullName() , $emails[$value->getState()]->getBody()) 
						);
			$userUnderFollowUp = new UserUnderFollowUp($value->getUserId, $value->getEmailId(), $value->getState() + 1 , 0);
			$this -> userUnderFollowUpDAO -> update($userUnderFollowUp);
		}
		



	}

	function inviteUser(){

		$userToInvite = $this-> invitaionDAO-> getUsersToInvite();

		$emails = $this -> genericEmailDAO -> getInvitationEmails();

		foreach ($userToInvite as $key => $value) {
			$this->sendMail(
						$value->getEmailId(), 
						str_replace("{{ username }}", $value->getUserFullName() , $emails[$key]->getSubject()),
						str_replace("{{ username }}", $value->getUserFullName() , $emails[$key]->getBody()) 
						);
		}

	}


	static function sendMail($to, $subject, $message){

		/*$to = "rahul_lahoria@yahoo.com";
		$subject = "HTML email";

		$message = "
		<html>
		<head>
		<title>HTML email</title>
		</head>
		<body>
		<p>This email contains HTML Tags!</p>
		<table>
		<tr>
		<th>Firstname</th>
		<th>Lastname</th>
		</tr>
		<tr>
		<td>John</td>
		<td>Doe</td>
		</tr>
		</table>
		</body>
		</html>
		";
		*/

		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		// More headers
		$headers .= 'From: <no-reply@collap.com>' . "\r\n";
		//$headers .= 'Cc: myboss@example.com' . "\r\n";

		mail($to,$subject,$message,$headers);
	}

}