<?php

	$dbHandle_old = mysqli_connect("localhost", "root", "redhat111111", "ninjasTeamRoomOld");
	$dbHandle_new = mysqli_connect("localhost", "root", "redhat111111", "ninjasTeamRoom2");

	if ($dbHandle_old -> connect_error) {
	    die("Connection failed: " . $dbHandle_old -> connect_error);
	}

	if ($dbHandle_new -> connect_error) {
	    die("Connection failed: " . $dbHandle_new -> connect_error);
	}

	
	$get_Ch_Ownership = mysqli_query($dbHandle_old, "SELECT * FROM challenge_ownership;");
	
	while ($get_Ch_Ownership_Array = mysqli_fetch_array($get_Ch_Ownership)) {


		$user_id = $get_Ch_Ownership_Array ['user_id'];
		$challenge_id = $get_Ch_Ownership_Array ['challenge_id'];
		$ownership_creation = $get_Ch_Ownership_Array ['ownership_creation'];
		$status = $get_Ch_Ownership_Array ['status'];
		$time = $get_Ch_Ownership_Array ['time'];

		//get challenge_ownership table details ends
	
		
		mysqli_query($dbHandle_new, "INSERT INTO `challenge_ownership` (`user_id`, `challenge_id`, `ownership_creation`, `status`, `submission_time`) 
										VALUES ('$user_id', '$challenge_id', '$ownership_creation', '$status', '$time');");
		
		if(mysqli_error($dbHandle_new)) {
			echo "Failed to Update challenge_ownership table at: ! " . $user_id ." ". $challenge_id ."\n";
			echo (mysqli_error ($dbHandle_new));
		}
		else 
			echo "Inserted row ". $user_id ." ". $challenge_id ."\n";

	}
	
?>
	
