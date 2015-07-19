<?php
	/**
	 * Object represents table 'projects'
	 *
     	 * @author: Rahu Lhaoria
     	 * @date: 2015-03-03 14:48	 
	 */

	require_once 'models/BaseModel.class.php';
	class Project extends BaseModel {
		
		private $id;
		private $userId;
		private $blobId;
		private $projectTitle;
		private $stmt;
		private $type;
		private $orgId;
		private $order;
		private $creationTime;
		private $projectValue;
		private $fundNeeded;
		private $lastUpdateTime;

		private $technicalSkills;
		private $myRole;
		private $teamSize;
		private $durationFrom;
		private $durationTo;

		private $firstName;
		private $lastName;
		private $userName;
		private $responses;

	
		function __construct ($userId, $blobId, $projectTitle, $stmt, $type, $orgId, $order, 
								$creationTime, $projectValue, $fundNeeded, $lastUpdateTime,
								$technicalSkills, $myRole, $teamSize, $durationFrom, $durationTo, 
								$firstName, $lastName, $userName, $id = null) {
			$this -> id = $id;
			$this -> userId = $userId;
			$this -> blobId = $blobId;
			$this -> projectTitle = $projectTitle;
			$this -> stmt = $stmt;
			$this -> type = $type;
			$this -> orgId = $orgId;
			$this -> order = $order;
			$this -> creationTime = $creationTime;
			$this -> projectValue = $projectValue;
			$this -> fundNeeded = $fundNeeded;
			$this -> lastUpdateTime = $lastUpdateTime;
			
			$this -> technicalSkills = $technicalSkills;
			$this -> myRole = $myRole;
			$this -> teamSize = $teamSize;
			$this -> durationFrom = $durationFrom;
			$this -> durationTo = $durationTo;

			$this -> firstName = $firstName;
			$this -> lastName = $lastName;
			$this -> userName = $userName;

		}
		

		function setId ($id) {
			$this -> id = $id;
		}
		function getId () {
			return $this -> id;
		}

		function getRefinedStmt(){
			//repalace space tages
			$stmt = $this->replaceTags($this->stmt);
			
			if ($stmt[0] == "<"){

				$first=explode(' ', $stmt);
				$rest=ltrim($stmt, $first[0]);
				$stmt = $first[0] . " class=\"post-img img-responsive\" " . $rest; 
			}

			return $stmt;


		}

		private function replaceTags($req){

			return str_replace(
							"<s>", "&nbsp;", 
								str_replace("<r>", "'", 
										str_replace("<a>", "&",
											str_replace("<an>", "+", $req))));

		}

		function getKeywords(){
			return $this->extract_keywords($this->getRefinedTitle() ." ". $this->getRefinedStmt());
		}

		function getImage(){
		if ($this->stmt[0] == "<")
			$temp = explode("\"", $this->stmt);
		return $temp[1];
		}

		function getRefinedTitle(){
			//repalace space tages
			$stmt = $this->replaceTags($this->projectTitle);
			
			if ($stmt[0] == "<"){

				$first=explode(' ', $stmt);
				$rest=ltrim($stmt, $first[0]);
				$stmt = $first[0] . " class=\"post-img img-responsive\" " . $rest; 
			}

			return $stmt;


		}


		function setBlobId ($blobId) {
			$this -> blobId = $blobId;
		}
		function getBlobId () {
			return $this -> blobId;
		}

		function setUserId ($userId) {
			$this -> userId = $userId;
		}
		function getUserId () {
			return $this -> userId;
		}

		function setProjectTitle ($projectTitle) {
			$this -> projectTitle = $projectTitle;
		}
		function getProjectTitle () {
			return $this -> projectTitle;
		}

		function setStmt ($stmt) {
			$this -> stmt = $stmt;
		}
		function getStmt () {
			return $this -> stmt;
		}

		function setType ($type) {
			$this -> type = $type;
		}
		function getType () {
			return $this -> type;
		}

		function setOrgId ($orgId) {
			$this -> orgId = $orgId;
		}
		function getOrgId () {
			return $this -> orgId;
		}

		function setOrder ($order) {
			$this -> order = $order;
		}
		function getOrder () {
			return $this -> order;
		}

		function setCreationTime ($creationTime) {
			$this -> creationTime = $creationTime;
		}
		function getCreationTime () {
			return $this -> creationTime;
		}

		function setProjectValue ($projectValue) {
			$this -> projectValue = $projectValue;
		}
		function getProjectValue () {
			return $this -> projectValue;
		}

		function setLastUpdateTime ($lastUpdateTime) {
			$this -> lastUpdateTime = $lastUpdateTime;
		}
		function getLastUpdateTime () {
			return $this -> lastUpdateTime;
		}

		function setFundNeeded ($fundNeeded) {
			$this -> fundNeeded = $fundNeeded;
		}
		function getFundNeeded () {
			return $this -> fundNeeded;
		}


		function setTechnicalSkills ($technicalSkills) {
			$this -> technicalSkills = $technicalSkills;
		}
		function getTechnicalSkills () {
			return $this -> technicalSkills;
		}

		function setMyRole ($myRole) {
			$this -> myRole = $myRole;
		}
		function getMyRole () {
			return $this -> myRole;
		}

		function setTeamSize ($teamSize) {
			$this -> teamSize = $teamSize;
		}
		function getTeamSize () {
			return $this -> teamSize;
		}

		function setDurationFrom ($durationFrom) {
			$this -> durationFrom = $durationFrom;
		}
		function getDurationFrom () {
			return $this -> durationFrom;
		}

		function setDurationTo ($durationTo) {
			$this -> durationTo = $durationTo;
		}
		function getDurationTo () {
			return $this -> durationTo;
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

		function setResponses($responses){
			$this -> responses= $responses;
		}
		function getResponses(){
			return $this-> responses;		
		}

		function toString() {
			return $this -> id . ", " . 
					$this -> userId.",".
					$this -> blobId.",".
					$this -> projectTitle.",".
					$this -> stmt.",".
					$this -> type . ", " . 
					$this -> orgId.",".
					$this -> order.",".
					$this -> creationTime.".".
					$this -> projectValue. ", " . 
					$this -> fundNeeded.",".
					$this -> lastUpdateTime.",".
					$this -> firstName.",".
					$this -> lastName.",".
					$this -> userName;
		}

		function toArray() {
			return array (			
							id => $this-> id,
							userId => $this-> userId,
							blobId => $this-> blobId,
							projectTitle => $this-> projectTitle,
							stmt => $this-> stmt,
							type => $this-> type,
							orgId => $this-> orgId,
							order => $this-> order,
							creationTime => $this-> creationTime,
							projectValue => $this-> projectValue,
							fundNeeded => $this-> fundNeeded,
							lastUpdateTime => $this-> lastUpdateTime,
							firstName => $this-> firstName,
							lastName => $this-> lastName,
							userName => $this-> userName
						);
		}

		function toArrayUserProjects() {
			return array (			
							id => $this-> id,
							projectTitle => $this-> projectTitle,
							stmt => $this-> stmt,
							type => $this-> type,
							creationTime => $this-> creationTime,
							firstName => $this-> firstName,
							lastName => $this-> lastName,
							userName => $this-> userName
						);
		}
	}
?>