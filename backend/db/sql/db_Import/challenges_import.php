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

	for ($id = 1 ; $id < 1686; $id++) {
		
		$get_Challenges = mysqli_query($dbHandle_old, "SELECT * FROM challenges WHERE challenge_id = '$id';");
		
				
		//get challenges table details

		$get_Challenge_Array = mysqli_fetch_array($get_Challenges);

		$challenge_id = $get_Challenge_Array ['challenge_id'];
		
		if (isset($challenge_id)) {


			$project_id = $get_Challenge_Array ['project_id'];
			$user_id = $get_Challenge_Array ['user_id'];
			$blob_id = $get_Challenge_Array ['blob_id'];
			$challenge_title = $get_Challenge_Array ['challenge_title'];
			$stmt = $get_Challenge_Array ['stmt'];
			$challenge_open_time = $get_Challenge_Array ['challenge_open_time'];
			$creation_time = $get_Challenge_Array ['creation_time'];
			$challenge_type = $get_Challenge_Array ['challenge_type'];
			$challenge_status = $get_Challenge_Array ['challenge_status'];
			$last_update = $get_Challenge_Array ['last_update'];
			
			//get challenges table details ends
		
			$get_Likes = mysqli_query($dbHandle_old, "SELECT (SELECT COUNT(like_status) FROM likes where challenge_id = $challenge_id AND like_status = 1) as likes,  
															(SELECT COUNT(like_status) FROM likes where challenge_id = $challenge_id AND like_status = 2) as dislikes;");
			
			$get_Likes_count = mysqli_fetch_array($get_Likes);

			$likes = $get_Likes_count ['likes'];
			$dislikes = $get_Likes_count ['dislikes'];

			// get likes and distlikes for particular challenge_id, update likes, dislikes to be an array in challenges table.

			echo $challenge_id . " ". $project_id. " " . $user_id. " ". $challenge_title ."\n ";

			mysqli_query($dbHandle_new, "INSERT INTO `challenges` (`id`, `user_id`, `project_id`, `blob_id`, `org_id`, `title`, `stmt`, `type`, `status`, `likes`, `dislikes`, `creation_time`, `last_update_time`) 
														VALUES ('$challenge_id', '$user_id', '$project_id', '$blob_id', '0', '$challenge_title', '$stmt', '$challenge_type', '$challenge_status', '$likes', '$dislikes', '$creation_time', '$last_update');");
			
			if(mysqli_error($dbHandle_new)) 
				echo "Failed to Update challenges table row at : " . $challenge_id . "\n";
			else 
				echo "Inserted row challenge_id: ". $challenge_id."\n";
		}
	}

?>