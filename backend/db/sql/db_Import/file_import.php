<?php

	$mysqlImportFilename = 'sql_file/*.sql';
	$mysqlDatabaseName = 'ninjasTeamRoom2';

	
	foreach (glob($mysqlImportFilename) as $filename) {
	
		$command='mysql -h' . 'localhost' .' -u' .'root' .' -p' .'redhat111111' .' ' .$mysqlDatabaseName .' < ' . $filename;
		
		exec($command,$output=array(),$worked);
		
		switch($worked){
	    	case 0:
	        	echo 'Import file ' .$filename .' successfully imported to database: ' .$mysqlDatabaseName ."\n";
		        break;
		    case 1:
		        echo 'There was an error during import with' .$filename . 'Please make sure the import file is saved in the same folder as this script and check your values:';
		        break;
		}
	}
?>