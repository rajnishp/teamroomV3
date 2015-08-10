<?php
	/**
	 * Object represents table 'working_history'
	 *
     	 * @author: http://phpdao.com
     	 * @date: 2015-07-15 12:50	 
	 */
	class WorkingHistory{
		
		private $id;
		private $userId;
		private $companyName;
		private $designation;
		private $from;
		private $to;
		private $addedOn;
		private $lastUpdateOn;

		function __construct ($userId, $companyName, $designation, $from, $to, $addedOn, $lastUpdateOn, $id = null) {
			$this-> id = $id;
			$this-> userId = $userId;
			$this-> companyName = $companyName;
			$this-> designation = $designation;
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

		function setCompanyName($companyName){
			$this -> companyName = $companyName;
		}
		function getCompanyName(){
			return $this-> companyName;
		}

		function setDesignation($designation){
			$this -> designation = $designation;
		}
		function getDesignation(){
			return $this-> designation;
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