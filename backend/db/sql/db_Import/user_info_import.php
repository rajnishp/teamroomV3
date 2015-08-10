<?php

	$dbHandle_old = mysqli_connect("localhost", "root", "redhat111111", "ninjasTeamRoomOld");
	$dbHandle_new = mysqli_connect("localhost", "root", "redhat111111", "ninjasTeamRoom2");

	if ($dbHandle_old -> connect_error) {
	    die("Connection failed: " . $dbHandle_old -> connect_error);
	}

	if ($dbHandle_new -> connect_error) {
	    die("Connection failed: " . $dbHandle_new -> connect_error);
	}

	$id;

	for ($id = 7 ; $id < 200; $id++) {
		
		$get_User_Info = mysqli_query($dbHandle_old, "SELECT * FROM user_info WHERE user_id = '$id';");
		
		$get_About_User = mysqli_query($dbHandle_old, "SELECT * FROM about_users WHERE user_id = '$id';");
				
		//get user_info table details

		$get_User_Info_Array = mysqli_fetch_array($get_User_Info);

		$user_id = $get_User_Info_Array ['user_id'];

		if (isset($user_id)) {

			$first_name = $get_User_Info_Array ['first_name'];
			$last_name = $get_User_Info_Array ['last_name'];
			$email = $get_User_Info_Array ['email'];
			$contact_no = $get_User_Info_Array ['contact_no'];
			$username = $get_User_Info_Array ['username'];
			$password = $get_User_Info_Array ['password'];
			$rank = $get_User_Info_Array ['rank'];
			$user_type = $get_User_Info_Array ['user_type'];
			$last_login = $get_User_Info_Array ['last_login'];
			$registeration_time = $get_User_Info_Array ['registeration_time'];
			$amount = $get_User_Info_Array ['amount'];
		
			if ($user_type = 'collaborater')
				$user_type = 'collaborator';
			elseif ($user_type = 'invester')
				$user_type = 'investor';
			elseif ($user_type = 'collaboraterInvester') 
				$user_type = 'collaboratorInvester';
			elseif ($user_type = 'collaboraterFundsearcher')
				$user_type = 'collaboratorFundsearcher';
			elseif ($user_type = 'fundsearcherInvester')
				$user_type = 'fundsearcherInvestor';
			elseif ($user_type = 'collaboraterinvesterfundsearcher')
				$user_type = 'collaboratorInvestorFundsearcher';
			else 
				{ }


			//get user_info table details ends
		
			//get about_user table details

			$get_About_User_Array = mysqli_fetch_array ($get_About_User);

			$org_id = $get_About_User_Array ['id'];
			$organisation_name = $get_About_User_Array ['organisation_name'];
			$living_town = $get_About_User_Array ['living_town'];
			$about_user = $get_About_User_Array ['about_user'];

			//get about_user table details ends

			//echo $organisation_name . "\n ". $living_town. "\n" . $about_user. "\n". $user_type;

			mysqli_query($dbHandle_new, "INSERT INTO `user_info` (`id`, `first_name`, `last_name`, `email`, `phone`, `username`, `password`, `rank`, `user_type`, `org_id`, `capital`, `page_access`, `working_org_name`, `living_town`, `about_user`, `reg_time`, `last_login_time`) 
											VALUES ('$user_id', '$first_name', '$last_name', '$email', '$contact_no', '$username', '$password', '$rank', '$user_type', '$org_id', '$amount', '0', '$organisation_name', '$living_town', '$about_user', '$registeration_time', '$last_login');");
			if(mysqli_error($dbHandle_new)) 
				echo "Failed to Add member!";
			else 
				echo "Inserted ". $user_id . " name: ". $first_name ."\n";

		}
		//mysqli_close($dbHandle);
	}

?>
	
