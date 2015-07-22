<?php

require_once 'controllers/BaseController.class.php';

class CompleteProfileController extends BaseController  {


	function __construct ( ){
		
		parent::__construct();	

	}

	function render (){
		
		$baseUrl = $this->baseUrl;
		
		try{
			
			require_once 'views/profile/completeProfile.php';
			
		} catch (Exception $e){
			echo "Error occur :500 <br>".var_dump($e);
		}

	}

}

?>