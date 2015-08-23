<?php
	/**
	 * Object represents table 'notifications'
	 *
     	 * @author: http://rahullahoria.com
     	 * @date: 2015-03-03 14:48	 
	 */
	class Notification{
		
		private $id;
		private $noticeUrl; //varchar(500)
		private $userId;
		private $time;

		private $firstName;
		private $lastName;
		private $email;

		function __construct($noticeUrl, $userId, $time, $firstName, $lastName, $email, $id = null) {
			$this -> id = $id;
			$this -> noticeUrl = $noticeUrl;
			$this -> userId = $userId;
			$this -> time= $time;
			$this -> firstName = $firstName;
			$this -> lastName = $lastName;
			$this -> email = $email;
		}
		
		function setId($id){
			$this -> id = $id;
		}
		function getId(){
			return $this-> id;
		}

		function setUserID($userId){
			$this -> userId = $userId;
		}
		function getUserId(){
			return $this-> userId;
		}
				
		function setTime($time){
			$this -> time = $time;
		}

		function getTime(){
			return $this-> time;
		}
	
		function setNoticelUrl($noticeUrl){
			$this -> noticelUrl = $noticelUrl;
		}
		function getNoticelUrl(){
			return $this-> noticeUrl;	
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

		function setEmail($email){
			$this -> email = $email;
		}
		function getEmail(){
				return $this-> email;
		}

		function toString (){
			return $this -> id . ", " . 
					$this -> userId.",".
					$this -> time.",".
					$this -> noticeUrl;
		}

		function toArray() {
			return array (
						id => $this-> id,
						userId => $this-> userId,
						time => $this-> time,
						noticeUrl => $this-> noticeUrl
					);
		}
	}
?>
