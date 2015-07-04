<?php
	/**
	 * Object represents table 'challenge_responses'
	 *
     	 * @author: http://rahullahoria.com
     	 * @date: 2015-03-03 14:48	 
	 */
	class ChallengeResponse{
		
		private $id;
		private $userId;
		private $challengeId;
		private $blobId;
		private $stmt;
		private $status;
		private $creationTime;

		private $firstName;
		private $lastName;
		private $username;


		function __construct( $userId,$challengeId,$blobId,$stmt,$status,$creationTime, $firstName, $lastName, $username, $id = null)	{
			$this -> id = $id;
			$this -> userId= $userId;
			$this -> challengeId= $challengeId;
			$this -> blobId = $blobId;
			$this -> stmt = $stmt;
			$this -> status = $status;
			$this -> creationTime=$creationTime;
			$this -> firstName = $firstName;
			$this -> lastName = $lastName;
			$this -> username = $username;

		}

		function setId($id){
			$this -> id = $id;
		}
		function getId(){
			return $this -> id;
		}

		function setUserID($userId){
			$this -> userId = $userId;
		}
		function getUserId(){
			return $this -> userId;
		}
				
		function setChallengeId($challengeId){
			$this -> challengeId = $challengeId;
		}
		function getChallengeId(){
			return $this -> challengeId;
		}

		function setBlobId($blobId) {
			$this -> blobId = $blobId;
		}
		function getBlobId() {
			return $this -> blobId;
		}

		function setStmt($stmt){
			$this -> stmt= $stmt;
		}
		function getStmt(){
			return $this -> stmt;
		}
				
		function setStatus($status){
			$this -> status = $status;
		}
		function getStatus(){
			return $this -> status;
		}

		function setCreationTime($creationTime){
			$this -> creationTime = $creationTime;
		}
		function getCreationTime(){
			return $this -> creationTime;
		}


		function setFirstName($firstName){
			$this -> firstName = $firstName;
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


		function toString (){
			return $this -> id . ", " . 
					$this -> challengeId.",".
					$this -> blobId.",".
					$this -> stmt.".".
					$this -> creationTime.",".
					$this -> status;
		}
		

		function toArray() {
			return array (
							id => $this -> id,
							challengeId => $this -> challengeId,
							blobId=> $this -> blobId,
							stmt => $this -> stmt,
							creationTime => $this -> creationTime,
							status => $this -> status			
						);
		}
	}
?>
