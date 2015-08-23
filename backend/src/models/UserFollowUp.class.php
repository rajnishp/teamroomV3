<?php
	/**
	 * Object represents table 'user_follow_up'
	 *
     	 * @author: http://phpdao.com
     	 * @date: 2015-08-15 14:32	 
	 */
	class UserFollowUp{
		
		private $id;
		private $userId;
		private $email;
		private $state;
		private $status;
		private $addedOn;
		private $lastUpdateOn;
		

		function __construct ($userId, $email, $state, $status, $addedOn, $lastUpdateOn, $id = null) {
			$this -> id = $id;
			$this -> userId = $userId;
			$this -> email = $email;
			$this -> state = $state;
			$this -> status = $status;
			$this -> addedOn = $addedOn;
			$this -> lastUpdateOn = $lastUpdateOn;

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

		function setEmail($email){
			$this -> email = $email;
		}
		function getEmail(){
			return $this-> email;
		}

		function setStatus($status){
			$this -> status = $status;
		}
		function getStatus(){
			return $this-> status;
		}

		function setState($state){
			$this -> state = $state;
		}
		function getState(){
			return $this-> state;
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