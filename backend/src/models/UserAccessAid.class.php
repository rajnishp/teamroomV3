<?php
	/**
	 * Object represents table 'user_access_aid'
	 *
     	 * @author: http://phpdao.com
     	 * @date: 2015-03-03 14:48	 
	 */
	class UserAccessAid{
		
		private $id;
		private $userId;
		private $hashKey;
		private $status;
		private $time;

		function __construct ($userId, $hashKey, $status, $time, $id=null) {
			$this-> id = $id;
			$this-> userId = $userId;
			$this-> hashKey = $hashKey;
			$this-> status = $status;
			$this-> time = $time;
		}

		function setId($id){
			$this -> id = $id;
		}
		function getId(){
			return $this-> id;
		}

		function setUserId($userId){
			$this -> userId = $userId;
		}
		function getUserId(){
			return $this-> userId;
		}

		function setHashKey($hashKey){
			$this -> hashKey = $hashKey;
		}
		function getHashKey(){
			return $this-> hashKey;
		}

		function setStatus($status){
			$this -> status = $status;
		}
		function getStatus(){
			return $this-> status;
		}

		function setTime($time){
			$this -> time = $time;
		}
		function getTime(){
			return $this-> time;
		}
		
	}
?>