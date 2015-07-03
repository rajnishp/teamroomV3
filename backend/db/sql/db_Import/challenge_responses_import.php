<?php

	$dbHandle_old = mysqli_connect("localhost", "root", "redhat111111", "ninjasTeamRoomOld");
	$dbHandle_new = mysqli_connect("localhost", "root", "redhat111111", "ninjasTeamRoom2");

	if ($dbHandle_old -> connect_error) {
	    die("Connection failed: " . $dbHandle_old -> connect_error);
	}

	if ($dbHandle_new -> connect_error) {
	    die("Connection failed: " . $dbHandle_new -> connect_error);
	}

	
	$get_Ch_Responses = mysqli_query($dbHandle_old, "SELECT * FROM response_challenge;");
	
	while ($get_Ch_Responses_Array = mysqli_fetch_array($get_Ch_Responses)) {


		$user_id = $get_Ch_Responses_Array ['user_id'];
		$challenge_id = $get_Ch_Responses_Array ['challenge_id'];
		$response_ch_id = $get_Ch_Responses_Array ['response_ch_id'];
		$blob_id = $get_Ch_Responses_Array ['blob_id'];
		$status = $get_Ch_Responses_Array ['status'];
		$stmt = $get_Ch_Responses_Array ['stmt'];
		$response_ch_creation = $get_Ch_Responses_Array ['response_ch_creation'];
		
		//get challenge_ownership table details ends
	
		
		mysqli_query($dbHandle_new, "INSERT INTO `challenge_responses` (`id`, `user_id`, `challenge_id`, `blob_id`, `stmt`, `status`, `creation_time`) 
											VALUES ('$response_ch_id', '$user_id', '$challenge_id', '$blob_id', '$stmt', '$status', '$response_ch_creation');");
		
		if(mysqli_error($dbHandle_new)) {
			echo "Failed to Update challenge_ownership table at: ! " . $user_id ." ". $challenge_id ."\n";
			echo (mysqli_error ($dbHandle_new));
		}
		else 
			echo "Inserted row id: ".$response_ch_id. " user_id: ". $user_id ." on ch_id: ". $challenge_id ."\n";

	}
	
?>
	
