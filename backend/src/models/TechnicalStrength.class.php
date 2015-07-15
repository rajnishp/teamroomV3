<?php
	/**
	 * Object represents table 'technical_strength'
	 *
     	 * @author: http://phpdao.com
     	 * @date: 2015-07-15 12:50	 
	 */
	class TechnicalStrength{
		
		private $id;
		private $userId;
		private $strength;
		private $addedOn;
		private $lastUpdateOn;

		function __construct ($userId, $strength, $addedOn, $lastUpdateOn, $id = null) {
			$this -> id = $id;
			$this -> userId = $userId;
			$this -> strength = $strength;
			$this -> addedOn = $addedOn;
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

		function setStrength($strength){
			$this -> strength = $strength;
		}
		function getStrength(){
			return $this-> strength;
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