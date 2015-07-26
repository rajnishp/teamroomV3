<?php
	/**
	 * Object represents table 'job_preference'
	 *
     	 * @author: http://phpdao.com
     	 * @date: 2015-07-15 12:50	 
	 */
	class JobPreference{
		
		private $id;
		private $userId;
		private $currentCtc;
		private $expectedCtc;
		private $noticePeriod;
		private $addedOn;
		private $lastUpdateOn;

		private $locations;
		

		function __construct ($userId, $currentCtc, $expectedCtc, $noticePeriod, $addedOn, $lastUpdateOn, $id = null) {
			$this-> id = $id;
			$this-> userId = $userId;
			$this-> currentCtc = $currentCtc;
			$this-> expectedCtc = $expectedCtc;
			$this-> noticePeriod = $noticePeriod;
			$this-> addedOn = $addedOn;
			$this-> lastUpdateOn = $lastUpdateOn;
		}

		function setId($id){
			$this -> id = $id;
		}
		function getId(){
			return $this->id;
		}

		function setUserId($userId){
			$this -> userId = $userId;
		}
		function getUserId(){
			return $this-> userId;
		}

		function setCurrentCtc($currentCtc){
			$this -> currentCtc = $currentCtc;
		}
		function getCurrentCtc(){
			return $this-> currentCtc;
		}

		function setExpectedCtc($expectedCtc){
			$this -> expectedCtc = $expectedCtc;
		}
		function getExpectedCtc(){
			return $this-> expectedCtc;
		}

		function setNoticePeriod($noticePeriod){
			$this -> noticePeriod = $noticePeriod;
		}
		function getNoticePeriod(){
			return $this-> noticePeriod;
		}

		function setAddedOn($addedOn){
			$this -> addedOn = $addedOn;
		}
		function getAddedOn(){
			return $this-> addedOn;
		}

		function setLastUpdateOn($lastUpdateOn){
			$this -> lastUpdateOn = $lastUpdateOn;
		}
		function getLastUpdateOn(){
			return $this-> lastUpdateOn;
		}

	}

?>