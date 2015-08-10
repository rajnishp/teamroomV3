<?php

	$dbHandle_old = mysqli_connect("localhost", "root", "redhat111111", "ninjasTeamRoomOld");
	$dbHandle_new = mysqli_connect("localhost", "root", "redhat111111", "ninjasTeamRoom2");

	if ($dbHandle_old -> connect_error) {
	    die("Connection failed: " . $dbHandle_old -> connect_error);
	}

	if ($dbHandle_new -> connect_error) {
	    die("Connection failed: " . $dbHandle_new -> connect_error);
	}

	$cid;

	for ($cid = 1 ; $cid < 300; $cid++) {
		

		//get chat table details
		$get_Chat = mysqli_query($dbHandle_old, "SELECT * FROM chat WHERE id = '$cid';");

		$get_Chat_Array = mysqli_fetch_array ($get_Chat);

		
		$id = $get_Chat_Array ['id'];
		
		if (isset($id)) {


			$from = $get_Chat_Array ['from'];
			$to = $get_Chat_Array ['to'];
			$message = $get_Chat_Array ['message'];
			$sent = $get_Chat_Array ['sent'];
			$recd = $get_Chat_Array ['recd'];
	 
	 		//get chat table details ends

			$get_User_From = mysqli_query($dbHandle_old, "SELECT * FROM user_info WHERE username = '$from';");
			
			$get_User_To = mysqli_query($dbHandle_old, "SELECT * FROM user_info WHERE username = '$to';");
			
			
			//get user_info table details

			$get_User_From_Array = mysqli_fetch_array($get_User_From);
			$from_id = $get_User_From_Array ['user_id'];

			$get_User_To_Array = mysqli_fetch_array($get_User_To);
			$to_id = $get_User_To_Array ['user_id'];


			//get user_info table details ends
		
			
			mysqli_query($dbHandle_new, "INSERT INTO `chat` (`id`, `from`, `to`, `message`, `time`, `status`) 
											VALUES ('$id', '$from_id', '$to_id', '$message', '$sent', '$recd');");
			if(mysqli_error($dbHandle_new)) {
				echo "Failed to Add Chat row " . $id ."\n";
				echo (mysqli_error($dbHandle_new));
			}
			else 
				echo "Inserted row id: ". $id ."\n";
		}
	}
?>
	
