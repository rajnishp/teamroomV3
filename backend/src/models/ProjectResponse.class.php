<?php
	/**
	 * Object represents table 'project_responses'
	 *
     	 * @author: http://phpdao.com
     	 * @date: 2015-03-03 14:48	 
	 */
	class ProjectResponse{
		
		private $id;
		private $userId;
		private $projectId;
		private $status;
		private $stmt;
		private $creationTime;

		private $firstName;
		private $lastName;
		private $username;

		function __construct ($userId, $projectId, $status, $stmt, $creationTime,  $firstName, $lastName, $username, $id = null ) {
			$this -> id = $id;
			$this -> userId = $userId;
			$this -> projectId =$projectId;
			$this -> status = $status;
			$this -> stmt = $stmt;
			$this -> creationTime = $creationTime;

			$this -> firstName = $firstName;
			$this -> lastName = $lastName;
			$this -> username = $username;
		}

		function setId ($id) {
			$this -> id = $id;
		}
		function getId () {
			return $this -> id;
		}

		function setUserId ($userId) {
			$this -> userId = $userId;
		}
		function getUserId () {
			return $this -> userId;
		}

		function setProjectId ($projectId) {
			$this -> projectId = $projectId;
		}
		function getProjectId () {
			return $this -> projectId;
		}

		function setStatus ($status) {
			$this -> status = $status;
		}
		function getStatus () {
			return $this -> status;
		}

		function setStmt ($stmt) {
			$this -> stmt = $stmt;
		}
		function getStmt () {
			return $this -> stmt;
		}

		function setCreationTime ($creationTime) {
			$this -> creationTime = $creationTime;
		}
		function getCreationTime () {
			return $this -> creationTime;
		}

		
		function getFirstName(){
			return $this-> firstName;
		}
		
		function setLastName($lastName){
			$this -> lastName = $lastName;
		}
		function getLastName(){
				return $this->lastName;
		}

		function setUsername($username){
			$this -> username = $username;
		}
		function getUsername(){
				return $this-> username;
		}
		
		function toString () {
			return $this -> id . ", " . 
					$this -> userId.",".
					$this -> projectId.",".
					$this -> status.",".
					$this -> stmt.",".
					$this -> creationTime;
		}

		function toArray () {
			return array (	
							id => $this-> id,
							userId => $this-> userId,
							projectId => $this-> projectId,
							status => $this-> status,
							stmt => $this-> stmt,
							creationTime => $this-> creationTime
						);
		}
	}
?>