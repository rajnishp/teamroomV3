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
	
	$get_Blobs = mysqli_query($dbHandle_old, "SELECT * FROM blobs LIMIT 0, 10;");
	
	while ($get_Blobs_Array = mysqli_fetch_array($get_Blobs)) {


		$blob_id = $get_Blobs_Array ['blob_id'];
		$stmt = $get_Blobs_Array ['stmt'];

		//get blobs table details ends
	
		
		echo $blob_id ."\n ";

		mysqli_query($dbHandle_new, "INSERT INTO blobs (id, stmt) VALUES ('$blob_id', '$stmt');");
		
		if(mysqli_error($dbHandle_new)) {
			echo "Failed to Update blobs table! " . $blob_id . "\n";
			echo (mysqli_error ($dbHandle_new));
		}
		else 
			echo "Inserted blob_id: ". $blob_id."\n";

	}
	
?>
	
