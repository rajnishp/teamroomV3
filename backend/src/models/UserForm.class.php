<?php
	/**
	 * Object represents table 'user_forms'
	 *
     	 * @author: http://phpdao.com
     	 * @date: 2015-08-10 11:13	 
	 */
	class UserForm{
		
		private $id;
		private $userId;
		private $formId;
		private $status;
		private $priority;
		private $addedOn;
		private $lastUpdateOn;

		function __construct ($userId, $formId, $status, $priority, $addedOn, $lastUpdateOn, $id = null) {
			$this -> id = $id;
			$this -> userId = $userId;
			$this -> formId = $formId;
			$this -> status = $status;
			$this -> priority = $priority;
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

		function setFormId($formId){
			$this -> formId = $formId;
		}
		function getFormId(){
			return $this-> formId;
		}

		function setStatus($status){
			$this -> status = $status;
		}
		function getStatus(){
			return $this-> status;
		}

		function setPriority($priority){
			$this -> priority = $priority;
		}
		function getPriority(){
			return $this-> priority;
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