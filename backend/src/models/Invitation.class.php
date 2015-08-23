<?php
	/**
	 * Object represents table 'invitations'
	 *
     	 * @author: http://phpdao.com
     	 * @date: 2015-08-15 14:32	 
	 */
	class Invitation{
		
		private $id;
		private $userId;
		private $email;
		private $count;
		private $status;
		private $addedOn;
		private $lastUpdateOn;

		function __construct ($userId, $email, $count, $status, $addedOn, $lastUpdateOn, $id = null) {
			$this -> id = $id;
			$this -> userId = $userId;
			$this -> email = $email;
			$this -> count = $count;
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

		function setCount($count){
			$this -> count = $count;
		}
		function getCount(){
			return $this-> count;
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