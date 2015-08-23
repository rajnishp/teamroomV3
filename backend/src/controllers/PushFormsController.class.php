<?php


require_once 'controllers/BaseController.class.php';

class PushFormsController extends BaseController {


	function __construct (  ){
		parent::__construct();	

	}

	function render (){
	
		$baseUrl = $this->baseUrl;

	}

	function pushForm(){
		try{
			$getuserPushForm =  $this-> userPushFormsDAO -> getPushForm($this -> userId);
			echo $getuserPushForm -> getForm();
		} 
		catch (Execption $e){
			$this->logger->error("Error occur :500, Failed to getuserPushForm".json_encode($e) );
		}
	}

}

?>