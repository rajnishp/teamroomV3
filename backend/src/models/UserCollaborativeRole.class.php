<?php
	/**
	 * Object represents table 'user_collaborative_role'
	 *
     	 * @author: http://phpdao.com
     	 * @date: 2015-08-02 16:09	 
	 */
	class UserCollaborativeRole{
		
		private $id;
		private $userId;
		private $type;
		private $addedOn;
		private $lastUpdateOn;
		

		function __construct ($userId, $type,  $addedOn, $lastUpdateOn, $id = null) {
			$this-> id = $id;
			$this-> userId = $userId;
			$this-> type = $type;
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

		function setType($type){
			$this -> type = $type;
		}
		function getType(){
			return $this->type;
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