<?php

	$dbHandle_old = mysqli_connect("localhost", "root", "redhat111111", "ninjasTeamRoomOld");
	$dbHandle_new = mysqli_connect("localhost", "root", "redhat111111", "ninjasTeamRoom2");

	if ($dbHandle_old -> connect_error) {
	    die("Connection failed: " . $dbHandle_old -> connect_error);
	}

	if ($dbHandle_new -> connect_error) {
	    die("Connection failed: " . $dbHandle_new -> connect_error);
	}

	$project_id;

	for ($project_id = 1 ; $project_id < 72; $project_id++) {
		
		$get_Projects = mysqli_query($dbHandle_old, "SELECT * FROM projects WHERE project_id = '$project_id';");
		
		$get_Pr_Funding = mysqli_query($dbHandle_old, "SELECT * FROM project_funding_info WHERE project_id = '$project_id';");
				
		//get projects table details

		$get_Projects_Array = mysqli_fetch_array($get_Projects);

		$user_id = $get_Projects_Array ['user_id'];
		$project_id = $get_Projects_Array ['project_id'];
		$blob_id = $get_Projects_Array ['blob_id'];
		$project_title = $get_Projects_Array ['project_title'];
		$stmt = $get_Projects_Array ['stmt'];
		$project_type = $get_Projects_Array ['project_type'];
		$creation_time = $get_Projects_Array ['creation_time'];
	
		switch ($project_type) {
			case 1:
				$project_type = 'Public';
			break;

			case 2:
				$project_type = 'Classified';
			break;

			case 3:
				$project_type = 'Deleted';
			break;

			case 4:
				$project_type = 'Private';
			break;

			default:
			break;
		}

		//get projects table details ends
	
		//get project_funding_info table details

		$get_Pr_Funding_Array = mysqli_fetch_array ($get_Pr_Funding);

		$project_value = $get_Pr_Funding_Array ['project_value'];
		$fund_neede = $get_Pr_Funding_Array ['fund_neede'];
		
		//get project_funding_info table details ends

		mysqli_query($dbHandle_new, "INSERT INTO `projects` (`id`, `user_id`, `blob_id`, `project_title`, `stmt`, `type`, `org_id`, `order`, `creation_time`, `project_value`, `fund_needed`, `last_update_time`) 
											VALUES ('$project_id', '$user_id', '$blob_id', '$project_title', '$stmt', '$project_type', '0', '0', '$creation_time', '$project_value', '$fund_neede', '0000-00-00 00:00:00');");
		if(mysqli_error($dbHandle_new)) {
			echo "Failed to Add project row at: ". $project_id ."\n";
			echo (mysqli_error($dbHandle_new))."\n";
			exit;
		}
		else 
			echo "Inserted project row with id: ". $project_id ."\n";

	}

?>
	
