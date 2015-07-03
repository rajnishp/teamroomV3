<?php 

	$mysqlImportFilename = '*.php';

	
	foreach (glob($mysqlImportFilename) as $filename) {
		if ($filename != 'db_import.php')
			require_once $filename;
	}
?>