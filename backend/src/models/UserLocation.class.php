<?php
	/**
	 * Object represents table 'user_locations'
	 *
     	 * @author: http://phpdao.com
     	 * @date: 2015-07-26 12:11	 
	 */
	class UserLocation{
		
		private $id;
		private $userId;
		private $locationId;
		private $priority;
		
		function __construct ($userId, $locationId, $priority, $id = null) {
			$this-> id = $id;
			$this-> userId = $userId;
			$this-> locationId = $locationId;
			$this-> priority = $priority;
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

		function setLocationId($locationId){
			$this -> locationId = $locationId;
		}
		function getLocationId(){
			return $this-> locationId;
		}

		function setPriority($priority){
			$this -> priority = $priority;
		}
		function getPriority(){
			return $this-> priority;
		}
	}
?>