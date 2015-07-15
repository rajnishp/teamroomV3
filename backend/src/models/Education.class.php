<?php
	/**
	 * Object represents table 'education'
	 *
     	 * @author: http://phpdao.com
     	 * @date: 2015-07-15 12:50	 
	 */
	class Education{
		
		private $id;
		private $userId;
		private $institute;
		private $degree;
		private $branch;
		private $from;
		private $to;
		private $addedOn;
		private $lastUpdateOn;

		function __construct ($userId, $institute, $degree, $branch, $from, $to, $addedOn, $lastUpdateOn, $id = null) {
			$this-> id = $id;
			$this-> userId = $userId;
			$this-> institute = $institute;
			$this-> degree = $degree;
			$this-> branch = $branch;
			$this-> from = $from;
			$this-> to = $to;
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

		function setInstitute($institute){
			$this -> institute = $institute;
		}
		function getInstitute(){
			return $this-> institute;
		}

		function setDegree($degree){
			$this -> degree = $degree;
		}
		function getDegree(){
			return $this-> degree;
		}

		function setBranch($branch){
			$this -> branch = $branch;
		}
		function getBranch(){
			return $this-> branch;
		}

		function setFrom($from){
			$this -> from = $from;
		}
		function getFrom(){
			return $this-> from;
		}

		function setTo($to){
			$this -> to = $to;
		}
		function getTo(){
			return $this-> to;
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