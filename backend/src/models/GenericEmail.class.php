<?php
	/**
	 * Object represents table 'generic_bodys'
	 *
     	 * @author: http://phpdao.com
     	 * @date: 2015-08-15 14:32	 
	 */
	class Genericbody{
		
		private $id;
		private $subject;
		private $body;
		private $type;
		private $status;
		private $addedOn;
		private $lastUpdateOn;
		

		function __construct ($subject, $body, $type, $status, $addedOn, $lastUpdateOn, $id = null) {
			$this -> id = $id;
			$this -> subject = $subject;
			$this -> body = $body;
			$this -> type = $type;
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

		function setSubject($subject){
			$this -> subject = $subject;
		}
		function getSubject(){
			return $this-> subject;
		}

		function setBody($body){
			$this -> body = $body;
		}
		function getBody(){
			return $this-> body;
		}

		function setStatus($status){
			$this -> status = $status;
		}
		function getStatus(){
			return $this-> status;
		}

		function setType($type){
			$this -> type = $type;
		}
		function getType(){
			return $this-> type;
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